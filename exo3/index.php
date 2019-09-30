<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<?php
    $age =18;
    $gender = "homme";






    if ($age < 18 AND  $gender == "homme")
    {
        echo "Vous êtes un homme et vous êtes mineur";
    }
    
    elseif ($age >= 18 AND  $gender == "homme")
    {
        echo "Vous êtes un homme et vous êtes majeur";
    }
    
    elseif ($age < 18 AND  $gender == "femme")
    {
        echo "Vous êtes une femme et vous êtes mineur";
      
    }
    
    else
    {
        echo "Vous êtes une femme et vous êtes majeur";
    }












?>

 
</body>
</html>