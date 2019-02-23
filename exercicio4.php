<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>exercicio4</title>
    </head>
    <body>
        <?php
        $vetor= array();
        $par = 2;
        for($i=0; $i <=50; $i++){
             $vetor[$i] = $par;
             echo $vetor [$i]."\n";
             $par+=2;
             
           
        }
        print_r($vetor)."<br>";
        ?>
    </body>
</html>
