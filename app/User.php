<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        echo("<script>console.log('Role: ". $this->role ."');</script>");
        return strcmp($this->role, 'admin');
    }

    /**
     * Check if this user belongs to a role
     *
     * @return bool
     */
    public function hasRole($role)
    {
        return $this->role == $role;
    }
}
