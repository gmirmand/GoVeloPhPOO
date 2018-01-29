<?php
/**
 * Created by PhpStorm.
 * User: Gaetan
 * Date: 20/01/2018
 * Time: 17:55
 */

namespace govelo;

foreach (glob("class/*.php") as $filename) {
    include $filename;
}


class globalFunction
{
//    Variable singleton
    private static $_instance;


//     Instanciation ou de récupéreration de l'instance unique (Singleton)
    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new globalFunction();
        }
        return self::$_instance;
    }

//    Ajouter une annonce
    function setAnnounce(integer $id, string $title, string $img, string $desc, float $price, string $town, string $address, integer $id_style, integer $id_user, integer $locker)
    {
        $annonce = new announce();
        $annonce->setId($id);
        $annonce->setTitle($title);
        $annonce->setImg($img);
        $annonce->setDesc($desc);
        $annonce->setPrice($price);
        $annonce->setTown($town);
        $annonce->setAdress($address);
        $annonce->setId_style($id_style);
        $annonce->setId_user($id_user);
        $annonce->setLocker($locker);
        return $annonce;
    }

    function setUser(integer $id, $subDate, string $mail, string $surname, string $name, string $phone, $birth, string $img, integer $sex, string $psw, integer $id_verified)
    {
        $user = new user();
        $user->setId($id);
        $user->setSubDate($subDate);
        $user->setMail($mail);
        $user->setSurname($surname);
        $user->setName($name);
        $user->setPhone($phone);
        $user->setBirth($birth);
        $user->setImg($img);
        $user->setSex($sex);
        $user->setPsw($psw);
        $user->setId_verified($id_verified);
        return $user;
    }
}

$globalFunction = new globalFunction();
$annonce1 = $globalFunction->setAnnounce(1, 'Titre Annonce1', 'img/annonce1.png', 'Description Annonce1', 3, 'Le Puy-en-Velay', '6 Place du Clauzel', 1, 1, 2485);
$user1 = $globalFunction->setUser(1, '2018-06-05 12:15:30', 'user1@gmail.com', 'Arthur', 'Hobert', '0628469473', '12-08-1991', 'img/user1.png', 1, '00d70c561892a94980befd12a400e26aeb4b8599', 1);
