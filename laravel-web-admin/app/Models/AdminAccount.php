<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;




class AdminAccount extends Authenticatable implements JWTSubject
{

    protected $connection = 'mysql';
    protected $table="admin_accounts";
    protected $guarded=[];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        //dd('test');
        return [
            'admin_id'=>$this->id,
        ];
    }
}
