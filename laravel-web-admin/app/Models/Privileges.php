<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Privileges extends Model
{
    protected $connection = 'mysql';
    protected $table="admin_privileges";
    protected $guarded=[];
}
