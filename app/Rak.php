<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    protected $fillable = ['no_rak','name','description','status'];
    protected $table = 'raks';
    protected $primaryKey ='id';
}
