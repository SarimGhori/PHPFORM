<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favoritepet = htmlspecialchars($_POST["favoritepet"]);
    if(empty($firstname)){
        exit();
    }

    echo "Your data Submitted Successfully 💘";

    // header("Location: ../index.php");
}
// else{
//     header("Location: ../index.php");
// }