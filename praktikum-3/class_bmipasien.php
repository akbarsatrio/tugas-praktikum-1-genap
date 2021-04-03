<?php

class BmiPasien {

  public $nama;
  public $umur;
  public $jeniskelamin;
  public $berat;
  public $tinggi;
  
  public function __construct() {
    session_start();
    $_SESSION['result'] ?? $_SESSION['result'] = [];
  }

  public function hasilBMI() {
    $total = $this->statusBMI();
    switch ($total) {
      case $total < 18.5:
        $msg = 'Kekurangan berat badan';
        break;
      case $total >= 18.5 || $total <= 24.9:
        $msg = 'Normal (Ideal)';
        break;
      case $total >= 25 || $total <= 29.9:
        $msg = 'Kelebihan berat badan';
        break;
      case $total >= 30:
        $msg = 'Kegemukan (obesitas)';
        break;
      default:
        break;
    }
    $calc = [$total, $msg];
    return $calc;
  }

  public function statusBMI() {
    $tinggi = $this->tinggi/100;
    $total = substr($this->berat/($tinggi*$tinggi), 0, 5);
    return $total;
  }
}

$bmi = new BmiPasien();