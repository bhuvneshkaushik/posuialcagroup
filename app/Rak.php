<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    protected $fillable = ['name','description','status'];
    protected $table = 'raks';
    protected $primaryKey ='id';
}
