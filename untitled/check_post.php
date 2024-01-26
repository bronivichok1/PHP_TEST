<?php
    $name=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];

    if(trim($name)==""){
        echo "No true name";
    }
    else if(strlen(trim($name))<=1){
        echo "No true name";
    }
    else if(trim($email)==""||trim($pass)==""){
        echo "You just clown";
    }
    else {
        $_POST['password']=md5($pass);
        echo "<h1>Profil</h1>";
        foreach ($_POST as $key=>$value){
            echo "$value";
        }
        header('Location: /about.php');


    }
    ?>