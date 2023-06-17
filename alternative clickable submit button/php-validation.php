<?php
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $num = $_POST['number'];
    $text = $_POST['text'];
    $tel = $_POST['tel'];
    $date = $_POST['date'];
    $preg = "/[^a-zA-Z_$ ]/";
    $dates = date("Y-m-d");
    $dated = date("Y-m-d", strtotime('+ 5 days'));

    if($email == ""){
        echo "email is empty";

    }elseif (preg_match("/[^a-zA-Z_$ ]/",$text)) {
        echo "Only letters are required in this field";
    }

    elseif(($date < $dates) ||($date > $dated)){
        echo 'Date out of Range' ;
    } else{
        // echo "Congratulation ". $text;

        $_SESSION['name']= $text; 
    //    header('location:success.php?name='.$text);
       header('location:success.php');
    }

}