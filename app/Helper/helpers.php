<?php

use Illuminate\Support\Facades\Crypt;

function cekStockPaket($data,$text){
  $length = count($data);

  if($length!=0){
      for($i = 0; $i < $length; $i++){
       if($data[$i]['status'] =="danger"){
         return
           '<li class="list-group-item d-flex justify-content-between align-items-center " data-bs-toggle="tooltip" 
          data-bs-title="Ada Stock Barang Yang Habis!!">'. $text.'
          <i class="fa-solid fa-x" style="color:red;"></i>';
       }else if($data[$i]['status']=='warning'){
        return 
        '<li class="list-group-item d-flex justify-content-between align-items-center " data-bs-toggle="tooltip" 
       data-bs-title="Ada Stock Barang Yang Hampir Habis!!">'. $text.'
       <i class="fa-solid fa-triangle-exclamation" style="color:orange;"></i>';
       }else{
          return 1;
       }
      }
  }
}

function printCekStockPaket($data,$text){
  $result = cekStockPaket($data,$text);
  if($result ==1){
    echo
    '<li class="list-group-item d-flex justify-content-between align-items-center " data-bs-toggle="tooltip" 
    data-bs-title="Stock Barang Masih Ada">'. $text.'
    <i class="fa-solid fa-check" style="color:green;"></i>';
  }else{
    echo $result;
  }
}


// function decrypt($pass){
//   return Crypt::encryptString($pass);
// }