<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'contact', 'useridentinty', 'username', 'role_id', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
     {
         return $this->belongsToMany('App\Role', 'role_id');
     }

    public function assignRole($role)
        {
            return $this->roles()->attach($role);
        }
    //get user role by name
        public function isAdmin()
        {
            foreach ($this->roles()->get() as $role)
            {
                if ($role->name == 'Admin')
                {
                    return true;
                }
            }
        }
        public function isManager()
        {
            foreach ($this->roles()->get() as $role)
            {
                if ($role->name == 'Manager')
                {
                    return true;
                }
            }
        }

        public function inputs()
     {
         return $this->hasMany('App\Input');
     }
}
