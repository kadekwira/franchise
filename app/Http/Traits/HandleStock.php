<?php

namespace App\Http\Traits;

trait HandleStock{
  public function cekStock($data){
    $length = $data->count();
    $stock = array();
    for($i = 0; $i < $length; $i++){
      if($data[$i]->stock == 0 ){
        $stockNew = array("status"=>"danger","barang"=>$data[$i]->nama_barang);
        array_push($stock,$stockNew);
      }else if($data[$i]->stock <=2 ){
        $stockNew = array("status"=>"warning","barang"=>$data[$i]->nama_barang);
        array_push($stock,$stockNew);
      }else{
        $stockNew= array("status"=>"safe","barang"=>$data[$i]->nama_barang);
        array_push($stock,$stockNew);
      } 
    }

    return $stock;
  
  }
}