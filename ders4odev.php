<?php

/* 
Uygulama-1
1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. constract metodunda 3 tane değişken alarak bu değişkenleri sınıf içerisindeki değişkenlere atayınız.
3. sınıf içerisine public 2 tane metot yazınız.
4. Oluşturmuş olduğunuz sınıfı miras alan 2 yeni sınıf yazarak metot overriding işlemini örneklendiriniz.

*/

class Araba
{
    private $yil, $marka, $renk;

    public function __construct(string $marka, string $renk, int $yil)
    {
        $this->yil = $yil;
        $this->marka = $marka;
        $this->renk = $renk;
    }

    public function renkDegistir(string $girilenrenk)
    {
        $this->renk = $girilenrenk;
    }

    public function modelGoster()
    {
        return $this->yil;
    }
}

$nesne = new Araba("bmw", "kırmızı", "2020");
$nesne->renkDegistir("beyaz");
echo $nesne->modelGoster();

/*
Uygulama-2
1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. Construct metodunda bir karşılama mesajını ekrana yazdırınız.
3. sınıf içerisine  1 tane final metot yazınız.
4. Yazmış olduğunuz sınıfı miras alan iki yeni sınıf yazınız. Yazılımış sınıflardan bir tanesini final olarak belirleyiniz. 
5. Miras alan sınıflarda final metodun nasıl kullanıldığını ve override işlemini örnekle açıklayınız.
6. Final sınıfı miras alan yeni bir sınıf oluştunuz. Son durumu açıklayınız.
*/

class Person
{
    public function __construct()
    {
        echo "Yapıcı metot çalıştı.";
    }

    public final function getPersonName(string $name)
    {
        echo $name . " Good Morning!!";
    }
}
$newName = new Person();
$newName->getPersonName("Furkan");
echo "<br>";
class Staff extends Person
{
    public function getStaffName(string $staffName)
    {
        return parent::getPersonName($staffName);
    }
}
$newStaff = new Staff();
$newStaff->getStaffName("Barış");
final class Customer extends Person
{
}

final class Company extends Customer{
    /* Final Class inherit edilemez. */
}

