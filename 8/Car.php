<?php
class Car{
    protected $number = 0000;
    protected $gas = 10;
    public function __construct($n, $g)
    {
        $this->number = $n;
        if ($g >= 0) {
            $this->gas = $g;
        } else {
            $this->gas = 0;
        }
    }
    public function getNumber() {
        return $this->number;
    }

    public function getGasorline() {
        return $this->gas;
    }
}
?>