<?php
class BMI {
    public $berat;
    public $tinggi;

    public function __construct($berat, $tinggi) {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }



    public function nilaiBMI() {
        if ($this->tinggi == null && $this->berat == null) {
            return '';
        } else {
            $tggi = $this->tinggi / 100;
            $this->bm = $bmi = $this->berat / ($tggi * $tggi);
            return round($bmi, 1);
        }
    }

    public function statusBMI() {
        if ($this->bm < 18.5) {
            return "Kekurangan Berat Badan";
        } else if ($this->bm >= 18.5 && $this->bm <= 24.9) {
            return "Normal (ideal)";
        } else if ($this->bm >= 25.0 && $this->bm <= 29.9) {
            return "Kelebihan Berat Badan";
        } else if ($this->bm > 30.0) {
            return "Kegemukan (Obesitas)";
        }
    }
}