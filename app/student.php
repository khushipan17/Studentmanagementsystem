<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'cne','firstname', 'secondname', 'age', 'speciality'
    ];
}
