<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    protected $fillable= ['name','address','fax',
                         'phone','contact_person',
                         'supplierCPHP','status'];
    protected $primariKey = 'id';
}
