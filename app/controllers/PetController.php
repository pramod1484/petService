<?php

class PetController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pets = PetTypes::with('petServices')->get();

        return View::make('pets/index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('pets/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make(
                        Input::all(), array('name' => 'required|min:3|unique:pet_types,name')
        );

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $pet = new PetTypes();
        $pet->name = Input::get('name');

        $pet->save();

        return Redirect::to('pets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $pet = PetTypes::find($id);
        $pet->petServices()->detach();
        if ($pet->delete()) {
            return Response::json('Pet successfully deleted.');
        }

        return false;
    }

}
