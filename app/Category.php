<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Category extends Model
{
    use AutoNumberTrait;

    protected $fillable = ['name', 'status'];
    protected $table = 'categories';
    protected $primaryKey = 'id';

    public function  getAutoNumberOptions()
    {
        return[
            'categoryCode' => [
                'format' => 'CT.?',
                'length' => 5
            ]
        ];
    }
}
