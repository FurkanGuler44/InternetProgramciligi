/* 
Uygulama - 1
1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. Construct metodunda 3 tane değişken alarak bu değişkenleri sınıf içerisindeki değişkenlere atayınız.
3. Sınıf içerisinde public 2 tane metot yazınız.
4. Birince metotta girilen sayının karesi ekrana yazdırılsın.
5. İkinci metotta girilen sayıya kadar tüm sayıların karesi alt alta ekrana yazdırılsın.
*/
<?php
class Calculator {
   private $num1,$num2,$num3;
   public function __construct($number1,$number2,$number3)
   {
    $num1=$number1;
    $num2=$number2;
    $num3=$number3;
   }

   
   public function TakeSquare($inputnum){
    return $inputnum*$inputnum;
   }

    public function Total($inputnum){
    for ($i=0; $i < $inputnum; $i++) { 
        echo $i*$i;
        echo "<br>";
    }
    }
}

$myclass = new Calculator(1,2,3);
$myclass->Total(8);
?>
