<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;  
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransaksiPenjualan extends Model
{
    use HasFactory;
    protected $table = "transaksi_penjualan";
    protected $guarded = ['id'];


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    } 


    public function scopeSearch($query,array $filters){
        if($filters??false){
            $query->when($filters['search']??false,function($query,$search){
                return $query->where('qty','like','%' . $search.'%')
                             ->orWhere('total','like','%' . $search.'%')
                             ->orWhere('paket','like','%' . $search.'%')
                             ->orWhere('status_payment','like','%' . $search.'%')
                             ->orWhere('status_transaksi','like','%' . $search.'%')
                             ->orWhereHas('user',function($query) use ($search){
                                $query->where('name',$search)
                                ->orWhere('email',$search)
                                ;
                             });
            });
            
        }
    }
}
