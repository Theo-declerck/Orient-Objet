<?php
class Utilitaire
{
    private static $totalOperations = 0;
    private $information;
    public function __construct($info)
    {
        $this->information = $info;
    }
    public function getInformation()
    {
        return $this->information;
    }
    public static function addition($a, $b)
    {
        self::$totalOperations++;
        return "$a + $b = ".$a + $b;
    }
    public static function multiplication($a, $b)
    {
        self::$totalOperations++;
        return "$a x $b = ". $a * $b;
    } 
    public static function getTotalOperations()
    {
        return self::$totalOperations;
    }
}
