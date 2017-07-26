<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo "Números Primos del 1 al 100: ", "<br>";
        echo "1","<br>";
        for ($i = 2; $i<=100;$i++){
             $count = 0;
            for ($j = 1; $j<=100 && $count<=2;$j++){
                if(($i%$j) == 0){
                    $count+=1;
                    $result[$j] = $j;
                }
            }
            if($count==2){
                echo $i,"<br>";
            }
        }
        
        ?>
    </body>
</html>
