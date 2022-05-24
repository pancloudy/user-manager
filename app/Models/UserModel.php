<?php

namespace App\Models;


class UserModel extends User
{
    protected $guarded=[];
    protected $table='user';
    protected $primaryKey='id';
}
