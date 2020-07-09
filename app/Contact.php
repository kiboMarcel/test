<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    public $table = 'Contacts';
    public $fillable = ['name','email','message'];
}
