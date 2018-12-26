<html>
<head>
</head>
    <body>
        <p>We are calling functions!</p>
        
        <?php

            function negritas($str){
                echo "<b>$str</b>";
            }
            
            function sumar($a, $b){
                return $a + $b;
            }
            
            function decirHola(){
                echo "<h3>Hola!</h3>";
            }
            
            
            // Llamando a las funciones
            decirHola();
            negritas("Me llamo Ricardo");
            $peso_antes_de_comer= 60;
            $peso_de_comida=0.56;
            $peso_actual = sumar($peso_antes_de_comer,$peso_de_comida);
            echo "<h3>Mi peso actual es $peso_actual Kg</h3>";
            echo "<h3>Mi peso actual es " . sumar($peso_antes_de_comer,$peso_de_comida)."</h3>";
            ;
            
            ?>
        
        
    </body>

</html>
