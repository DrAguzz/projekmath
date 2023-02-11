<?php
    include('config.php');

    $email = $_POST['user-email'];
    $name = $_POST['user-name'];
    $class = $_POST['user-class'];
    $telco = $_POST['telco'];
    $btn = $_POST["btn"];
    $chk = "";
    foreach($telco as $chk1){
        $chk .= $chk1. ",";
    }



    if(isset($btn)){
        $query = mysqli_query($con,"INSERT INTO client VALUE('$email','$name','$class','$chk','')");
        echo'<script type ="text/JavaScript">
        alert("Terima Kasih Kerana Membantu kami :>");  
        window.location.href = "index.php";
        </script>';
    }
?>