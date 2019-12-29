<?php

namespace Sharmag\Contactus;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $table = 'contactuses';

    protected $fillable = ['name','email','subject','message']; 
}
