<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminRole extends Model
{
    protected $connection = 'mysql';
    protected $table="admin_roles";
    protected $guarded=[];
}
