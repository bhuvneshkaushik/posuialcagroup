<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = ['name','address','phone','user_id'];
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
