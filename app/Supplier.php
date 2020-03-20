<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Supplier extends Model
{
    use AutoNumberTrait;
    protected $table = 'suppliers';
    protected $fillable= ['supplierCode','name','address','fax',
                         'phone','contact_person',
                         'status'];
    protected $primariKey = 'id';

    public function  getAutoNumberOptions()
    {
        return[
            'supplierCode' => [
                'format' => 'SP-?',
                'length' => 5
            ]
        ];
    }
}
