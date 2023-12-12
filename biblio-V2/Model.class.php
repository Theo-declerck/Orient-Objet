<?php

abstract class BDconnexxion
{
    private static $PDO;

    private static function setBDD()
    {
        self::$PDO = new PDO('mysql:host=localhost;dbname=Biblio;charset=utf8', 'root', '');
        self::$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    protected function getBDD()
    {
        if (self::$PDO === null) {
            self::setBDD();
        }
        return self::$PDO;
    }
}
