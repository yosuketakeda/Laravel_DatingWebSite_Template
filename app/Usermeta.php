<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usermeta extends Model
{
    //
    protected $table='usermeta';
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'age',
        'address',
        'description',
        'hobbies',
        'reason',
        'job',
        'sport',
        'technique',
        'language',
        'shown_item',
        'contactedID',
        'blockedID',
        'offerID',
        'avarta_path',
        'login_time',
        'logout_time',
    ];


}
