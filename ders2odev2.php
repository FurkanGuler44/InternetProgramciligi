/*
Uygulama - 2
1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. Construct metotunda bir karşılama mesajını ekrayan yazdırınız.
3. Destruct metodunu yazınız ve çalıştığını gösteren bir metni ekrana yazdırınız.
4. Sınıf içerisine public 2 tane metot yazınız.
5. Birinci metotda parametre gönderilen vize ve final notlarını alarak ortalama hesabı yaptırıp 50'nin üzerindeyse geçtiğini ekrana yazdırınız.
6. İkinci metotta parametre olarak gelen sayının faktöryel hesabını yaparak ekrana sonucunu yazdırınız.
*/
<?php

use Sinif as GlobalSinif;

    class Sinif{
        
        public function __construct(){
            $welcome="Hoşgeldiniz!! Karşılama mesajı çalıştı.(Construct Metodu)";
            echo $welcome;
            echo "<br>";
        }

        public function __destruct()
        {
            echo "Yıkıcı metot çalıştı.(Destruct Metot)";
            echo "<br>";
        }

        public function Grade($vize,$final){
            
            $not=$vize*0.3 + $final*0.7;
            if ($not>=50) {
                echo "Geçtiniz,notunuz: " . $not;  
                echo "<br>";  
            }
            else{
                echo "Kaldınız";
                echo "<br>";
            }
        }

        public function factoriel($num){
            $total=1;
           for ($i=1; $i <= $num; $i++) { 
            $total=$i*$total;
           }
           echo "$num'ın faktöryeli ".$total;
           echo "<br>";
        }
    }

    
    $myClass = new Sinif();
    $myClass->Grade(50,80);
    $myClass->factoriel(5);
?>