 <?php 

 class Facture{
    const TVA=20;
    public static function montantTTC($ht){
        return $ht*(1+self::TVA/100);
    }
 }


 echo " La facture est de " .Facture::montantTTC(1000);