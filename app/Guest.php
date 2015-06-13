<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model {

    protected $fillable = [

        'name',
        'category_id',
        'att_status', // yes/no/maybe
        'address',
        'partner_id'
    ];

    public function category(){
        return $this->belongsTo('App\Category', 'category_id'); // foreign key?
    }

}
