<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>exercicio5</title>
    </head>
    <body>
        <?php
        $vetor= array ();
        
        $vetor[0] = "Capitão América";
        $vetor[1] = "Homem de Ferro";
        $vetor[2] = "Hulk";
        $vetor[3] = "Viúva Negra";
        $vetor[4] = "Thor"; 
        $vetor[5] = "Pantera Negra";
        $vetor[6] = "Capitã Marvel"; 
        $vetor[7] = "Homem Aranha"; 
        $vetor[8] = "Dr Estranho";
        $vetor[9] = "Visão";
           
        ?>
        <select>
            <option> Herois </option>
            <?php for($i=0; $i <10; $i++) {?>
            <option> <?php echo $vetor[$i]?></option>
            <?php } ?>
        </select>
    </body>
</html>
