/* 
Uygulama-1
1. Birtane abstract class yazınız.
2. 3 tane interface yazınız.
3. Kendi belirleyeceğiniz isimde  sınıfa abstract class ı extend alınız, interface'leri implemente ediniz.
4. constract metodunda 3 tane değişken alarak bu değişkenleri sınıf içerisindeki değişkenlere atayınız.
5. sınıf içerisine public 2 tane metot yazınız.
*/
<?php
echo "<br>"; 
 abstract class Sınıf2{

 }

 class Sınıf1 extends Sınıf2 implements Arayuz1,Arayuz2,Arayuz3{

    public function __construct($deg1,$deg2,$deg3)
    {
        echo "Karşılama mesajı alındı.";
        echo "<br>";
    }

    public function Met1(string $met1nesne){
        echo "Adım " .$met1nesne;
        echo "<br>";
        
    }

    public function Met2(string $met2nesne){
        echo "Soyadım " .$met2nesne;
    }
}

 $nesne1 = new Sınıf1(1,2,3);
 $nesne2 = new Sınıf1(1,2,3);
 $nesne1->Met1("Furkan");
 $nesne2->Met2("Güler");

 interface Arayuz1{

 }
 interface Arayuz2{

}
interface Arayuz3{
}


 





?>