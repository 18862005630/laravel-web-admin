<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $connection = 'mysql';
    protected $table="admin_photos";
    protected $guarded=[];
}
