<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deals extends Model
{

    protected $fillable = [
        'id_author', 'title', 'type', 'frequency', 'description', 'partner', 'start_date', 'end_date'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
