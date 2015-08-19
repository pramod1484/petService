<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Model for PetTypes
 *
 * @author pramodkadam
 */
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class PetTypes extends Eloquent {

    use SoftDeletingTrait;

    /**
     * The database table pet_types by the model.
     *
     * @var string
     */
    protected $table = 'pet_types';
    protected $dates = ['deleted_at'];

    /**
     * Pet Services relationship
     */
    public function petServices()
    {
        return $this->belongsToMany('Services', 'relations', 'pet_type_id', 'service_id');
    }

}
