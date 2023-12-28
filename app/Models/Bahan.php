<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    use HasFactory;

    protected $table = 'bahan';
    protected $guarded=['id'];

    public function scopeSearch($query,array $searchs){
        if($searchs??false){
            $query->when($searchs['search']??false,function($query,$search){
                return $query->where('nama_barang','like','%' . $search.'%')
                             ->orWhere('berat','like','%' . $search.'%')
                             ->orWhere('satuan','like','%' . $search.'%')
                             ->orWhere('harga','like','%' . $search.'%')
                             ->orWhere('stock','like','%' . $search.'%')
                             ->orWhere('deskripsi','like','%' . $search.'%')
                             ->orWhere('status','like','%' . $search.'%')
;
            });
            
        }
    }
}
