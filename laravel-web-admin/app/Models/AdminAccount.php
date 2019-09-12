<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminAccount extends Model
{
    protected $connection = 'mysql';
    protected $table="admin_accounts";
    protected $guarded=[];
}
