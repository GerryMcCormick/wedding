<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model {

    protected $fillable = [

        'name',
        'description',
        'telno',
        'cost',
        'paid',
        'date_due'
    ];

}
