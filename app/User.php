<?php

namespace bodega;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    public function roles(){
        return $this->belongsToMany('bodega\Role');

    }

    public function authorizeRoles($roles){
        if($this->hasAnyRole($roles)){
            return true;
        }
        abort(401,'No estas autorizado');
    }

    public function hasAnyRole($roles){ //recibe arreglo de roles
        if(is_array($roles)){
            foreach ($roles as $role) {
                if($this->hasRole($role)){
                    return true;
                 }                
                   }        
        } else{
            if($this->hasRole($roles)){
                    return true;
                 }           
            
            
        }
        return false;
    }

   public function hasRole($role){
    if ($this->roles()->where('name',$role)->first()){
        return true;
    }
    return false;

   }
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
