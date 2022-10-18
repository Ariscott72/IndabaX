<?php

    $host='localhost';
    $port=3306;
    $dbname='inscription';
    $user='root';
    $pwd='';

            try{
                $newdb=new PDO("mysql:host=$host;dbname=$dbname",$user,$pwd);
                echo"";
            }catch(PDOException $e){
                die('Erreur : '.$e->getMessage());


            }

            if (isset($_POST['btn'])){

                if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['tel'])){
                     $insertion=$newdb->prepare('INSERT INTO inscript VALUES(NULL
                    ,:nom,:mail,:tel)');
                    $insertion->bindValue(':nom',$_POST['nom']);
                    $insertion->bindValue(':mail',$_POST['email']);
                    $insertion->bindValue(':tel',$_POST['tel']);
                    $verification=$insertion->execute();
                    if ($verification){

                    }else{
                        echo "Echec d'insertion";
                }

                }else{
                    echo "Une variable n'est pas déclarée et ou est null";
                }
                die ("Inscription réussie. Rendez-vous est pris pour le 15 Novembre prochain à DUEKUE <a href='http://localhost/Atelier_gl/index.html'>retour </a>");
            }

?>