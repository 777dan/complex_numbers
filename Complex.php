<?php
class Complex
{
    protected $num1, $num2, $num3, $num4;

    public function __construct($num1, $num2, $num3, $num4)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->num3 = $num3;
        $this->num4 = $num4;
    }
    function plus($complex)
    {
        echo ($complex->num1 + $complex->num3) . " - " . ($complex->num2 + $complex->num4) . "i";
    }
    function minus($complex)
    {
        echo ($complex->num1 - $complex->num3) . " - " . ($complex->num2 + $complex->num4) . "i";
    }
    function multiplication($complex)
    {
        echo $complex->num1 . " - " . ($complex->num2 * $complex->num3)+$complex->num4 . "i";
    }
    function division($complex)
    {
        echo $complex->num1 . " - " . ($complex->num2 / $complex->num3)+$complex->num4 . "i";
    }
}
