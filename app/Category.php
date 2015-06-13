<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $fillable = [

        'name' // e.g.my family, bridal party
    ];

//    public function people(){
//        return$this->morphedByMany('\App\Guest'); // foreign key
//    }
}
