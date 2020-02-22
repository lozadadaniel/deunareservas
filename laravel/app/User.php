<?php

namespace App; 

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;


    //Relacion muchos a muchos
    public function roles(){
        return $this->belongsToMany('App\Role');
    }

    //Desencadenar
    public function authorizaRoles($roles){
        if ($this->hasAnyRole($roles)) {
            return true;
        }

        return redirect('destacados');
    }


    //arrelgo de roles
    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach($roles as $role){
                if($this->hasRole($role)){
                return true;
            }
            }
        } else {
            if($this->hasRole($roles)){
                return true;
            }
        }

        return false;
    }

    //validar role
    public function hasRole($role){
        if($this->roles()->where('name',$role)->first()){
            return true;
        }
        return false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role','phone','image','state','name','nick', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company(){
        return $this->hasMany('App\Company');
    }

     public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }

    public function likes(){
        return $this->hasMany('App\Like');
    }

    public function reservas(){
        return $this->hasMany('App\Reserva');
    }
}
