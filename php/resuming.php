<html>
<head>
</head>
    <body>

        <?php
            
        // Vamos a recordar todo lo aprendido hasta ahora

            // printear un mensaje:
            
            //echo "texto plano:";
            echo "<br>";
            echo "aquí ponemos el mensaje que queremos";
            
            echo "<br>";
            
            //echo "negritas:";
            echo "<br>";
            echo "<b>aquí ponemos el mensaje que queremos</b>";
            
            echo "<br>";
            
            //echo "h1:";
            echo "<br>";
            echo "<h1>aquí ponemos el mensaje que queremos</h1>";
            
            //echo "h2:";
            echo "<br>";
            echo "<h2>aquí ponemos el mensaje que queremos</h2>";
            
            
            
        // Variables
            
            $edad_ricardo = 26;
            $edad_karla = 27;
            
            echo "la edad de Ricardo es $edad_ricardo y la edad de Karla es $edad_karla";
            echo "<br>";
            // o también:
            echo "la edad de Ricardo es ". $edad_ricardo . " y la edad de Karla es " . $edad_karla ."";
            echo "<br>";
            
        // Condicionales y Operadores

            if ($edad_ricardo>$edad_karla)
            {
                echo "Ricardo es mayor que Karla";
                $diferentes = 1;

            }
            
            else if ($edad_ricardo<$edad_karla)
            {
                echo "Karla es mayor que Ricardo";
                $diferentes = 1;

            }
            
            else
            {
                echo "Karla y Ricardo tienen la misma edad";
                $diferentes = 0;
            }
            
            echo "<br>";
            
       // Funciones
            
            function diferencia_edades ($edad1,$edad2)
            {
                return abs($edad1-$edad2);
            }
            
            if ($diferentes==1)
            {
                echo "Y se llevan ". diferencia_edades($edad_ricardo,$edad_karla) . " años de diferencia";
            }
            echo "<br>";

            
        // Arreglos
            
            $distritos_lima = ["miraflores", "barranco","chorrillos","san isidro"];
            print_r ($distritos_lima);
            echo "<br>";

            
            $distritos_lima = [4=> "san juan"];
            print_r ($distritos_lima);
            echo "<br>";
            
            $distritos_lima[0] = "miraflores";
            $distritos_lima[1] = "barranco";
            $distritos_lima[2] = "chorrillos";
            $distritos_lima[3] = "san isidro";
            
            print_r ($distritos_lima);
            echo "<br>";
            
            echo "Algunos distritos de lima son: ";
            foreach ($distritos_lima as $distrito)
            {
                echo "$distrito, ";
            }
        
        // Clases
            
            class persona
            {
                public $edad;
                public $peso;
                function __construct($e, $p)
                {
                    $this -> edad = $e;
                    $this -> peso = $p;
                }
                
                function ibmc()
                {
                    //fake calculation...
                    return $this->peso * $this->edad;
                }
                
            }
            
            $age=25;
            $weight=50;
            $aPersona = new persona ($age, $weight);
            echo "el índice basal de la persona con edad: $age y peso: $weight es:". $aPersona->ibmc();
            
        ?>
        
        
    </body>

</html>
