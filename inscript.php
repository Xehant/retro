<?php
require_once 'config.php';

if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    // On regarde si l'utilisateur est inscrit dans la table utilisateurs
    $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateur WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();
    if($row == 0){ 
        if(strlen($pseudo) <= 100){ // On verifie que la longueur du pseudo <= 100
            if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                    if($password === $password_retype){ // si les deux mdp saisis sont bon

                        // On hash le mot de passe avec Bcrypt, via un coût de 12
                        $cost = ['cost' => 12];
                        $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                        
                        // On stock l'adresse IP
                        $data= array(':pseudo'=>$pseudo,':email'=> $email,':password'=> $password);
                        $insert = $bdd->prepare('INSERT INTO utilisateur(pseudo, email, password) VALUES(:pseudo,:email,:password)');
                        $insert->execute($data);
                        
                        // On redirige avec le message de succès
                        header('Location:inscription.php?reg_err=success');
                        die();
                    }else{ header('Location: inscription.php?reg_err=password'); die();}
                }else{ header('Location: inscription.php?reg_err=email'); die();}
            }else{ header('Location: inscription.php?reg_err=email_length'); die();}
        }else{ header('Location: inscription.php?reg_err=pseudo_length'); die();}
    }else{ header('Location: inscription.php?reg_err=already'); die();}
}