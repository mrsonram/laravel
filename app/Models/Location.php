<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'animals';

    protected $fillable = ['name','location','lat','lng','gender'];
}
