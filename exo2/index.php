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
    $isEasy = (bool)true;
    
    if ($isEasy) // 
    {
        echo"C'est facile!! ";
    }
    else // SINON
    {
        echo"C'est difficile !!!";
    }



?>


<?php
    $isEasy2 = (bool)true;

    switch ($isEasy2) 
    { 
        case 0: // dans le cas où $note vaut 0
            echo"C'est facile!! ";
        break;
        
        default:
            echo"C'est difficile !!!";
    }
?>

 
</body>
</html>