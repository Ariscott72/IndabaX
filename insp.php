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

                if (isset($_POST['nom']) && isset($_POST['prenoms']) && isset($_POST['genre']) && isset($_POST['inst']) && isset($_POST['prof']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['ville'])){
                     $insertion=$newdb->prepare('INSERT INTO inscript VALUES(NULL
                    ,:nom,:mail,:tel)');
                    $insertion->bindValue(':nom',$_POST['nom']);
                    $insertion->bindValue(':prenoms',$_POST['prenoms']);
                    $insertion->bindValue(':genre',$_POST['genre']);
                    $insertion->bindValue(':inst',$_POST['inst']);
                    $insertion->bindValue(':prof',$_POST['prof']);
                    $insertion->bindValue(':mail',$_POST['email']);
                    $insertion->bindValue(':tel',$_POST['tel']);
                    $insertion->bindValue(':ville',$_POST['ville']);
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