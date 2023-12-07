<?php

class maClasse{
    private $attr1;
    private $attr2;

    public function __construct($val1,$val2)
    {
        $this ->attr1 = $val1;
        $this ->attr2 = $val2;
    }
// Très fort 
    public function __toString()
    {
        return "Attribut 1 : {$this -> attr1}, Attibut 2 :{$this -> attr2} ";
    }
}

$ob =new maClasse('valeur 1','valeur 2');

echo $ob;