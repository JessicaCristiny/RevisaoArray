<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $vetor30 = array ();
        $maior = 0;
        $pos = 0;
        $soma = 0; 
        for($i=0; $i <=30; $i++){
          $vetor30 [$i]= $i;
          if($vetor30[$i] > $maior){
              $maior = $vetor30 [$i];
              $pos = $i;
          }
          $soma +=$vetor30[$i];
        }
        $media = $soma/30;
        
        echo "O maior elemento do array é o numero ". $maior. "<br>";
        echo "A posição do maior numero é ". $pos. "<br>";
        echo "A soma de todos os valores é ". $soma. "<br>";
        echo "A media de todos os valores é ". $media ."<br>";
        
        print_r($vetor30)."<br>";
        ?>
    </body>
</html>
