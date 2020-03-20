<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Member extends Model
{
    use AutoNumberTrait;

    protected $table = 'members';
    protected $fillable = ['name','address','phone','user_id'];
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function  getAutoNumberOptions()
    {
        return[
            'memberCode' => [
                'format' => 'MB-?',
                'length' => 5
            ]
        ];
    }
}
