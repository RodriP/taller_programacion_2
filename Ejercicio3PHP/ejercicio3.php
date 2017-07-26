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
        $data = range (1,100);
        $result = array();
        echo "Números Primos del 1 al 100: ", "<br>";
        echo "1","<br>";
        for ($i = 2; $i<=count($data);$i++){
            for ($j = 1; $j<=count($data);$j++){
                if($i%$j == 0){
                    $result($j) = $j;
                }
            }
            if(count($result)==2 && $result(1) == 1 && $result($i)==$i){
                echo $i,"<br>";
            }
        }
        
        ?>
    </body>
</html>
