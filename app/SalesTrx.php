<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class SalesTrx extends Model
{
    use AutoNumberTrait;
    public function getAutoNumberOptions()
    {
        return [
            'saleCode' => [
                'format' => function () {
                    return date('Y.m.d') . '/INV/?';
                },
                'length' => 5
            ]
        ];
    }

   public function member()
   {
       return $this->belongsTo('App\Member');
   }
}
