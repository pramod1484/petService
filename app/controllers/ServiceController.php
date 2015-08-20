<?php

class ServiceController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $services = Services::with('serviciablePets')->get();

        return View::make('services/index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $pets = PetTypes::get();
        return View::make('services.create', compact('pets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make(
                        Input::all(), array('name' => 'required|min:3|unique:services,name')
        );

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $pets = Input::get('pets');

        $service = new Services();
        $service->name = Input::get('name');

        $service->save();
        $service->serviciablePets()->attach(array_flatten($pets));


        return Redirect::to('services');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $service = Services::find($id);
        $pets = PetTypes::get();
        return View::make('services.edit', compact('service', 'pets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $validator = Validator::make(
                        Input::all(), array('name' => 'required|min:3|unique:services,name,' . $id)
        );

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $pets = Input::get('pets');

        $service = Services::find($id);
        $service->name = Input::get('name');
        //detach old relations
        $service->serviciablePets()->detach();
        $service->save();
        $service->serviciablePets()->attach(array_flatten($pets));

        return Redirect::to('services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $service = Services::find($id);
        $service->serviciablePets()->detach();
        if ($service->delete()) {
            return Response::json('Service successfully deleted.');
        }

        return false;
    }

}
