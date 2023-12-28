<?php

namespace App\Http\Traits;

trait HandleRupiah{
  public function getNumeric($rupiah){
    return (int)preg_replace("/[^0-9]/", "", $rupiah);
  }
}