<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use App\Models\TransaksiPenjualan;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'user';
    protected $fillable = [
        'name',
        'email',
        'password',
        'alamat',
        'status',
        'role',
        'jk',
        'noHp',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function penjualan(){
        return $this->hasMany(TransaksiPenjualan::class);
    }

    public function scopeSearch($query,array $searchs){
        if($searchs??false){
            $query->when($searchs['search']??false,function($query,$search){
                return $query->where('name','like','%' . $search.'%')
                             ->orWhere('email','like','%' . $search.'%')
                             ->orWhere('alamat','like','%' . $search.'%')
                             ->orWhere('noHp','like','%' . $search.'%')
                             ->orWhere('jk','like','%' . $search.'%')
                             ->orWhere('role','like','%' . $search.'%')
                             ->orWhere('status','like','%' . $search.'%')
;
            });
            
        }
    }
}
