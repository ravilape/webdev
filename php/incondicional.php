<html>
<head>
</head>
    <body>
        <p> Ex vs Actual!</p>
        <?php
            $ex = 1;
            $actual = 2;
            echo "Ex: $ex, Actual: $actual";
            echo "<br>";
            if ($ex==$actual){
            	echo "Todos son iguales";
            }
            else if ($ex!=$actual) {
            	echo "Ambos son diferentes, ";
            	if ($ex<$actual){
            		echo "el actual es mayor!";
         		}
            	else{
            		echo "ya fue :(";
            	}
            }
        ?>
    </body>
</html>