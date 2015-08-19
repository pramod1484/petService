<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Model for services
 *
 * @author pramodkadam
 */
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Services extends Eloquent {

    use SoftDeletingTrait;

    /**
     * The database table services by the model.
     *
     * @var string
     */
    protected $table = 'services';
    protected $dates = ['deleted_at'];
    protected $visible = array('name');

    /**
     * Services pet relationship
     */
    public function serviciablePets()
    {
        return $this->belongsToMany('PetTypes', 'relations', 'service_id', 'pet_type_id');
    }

}
