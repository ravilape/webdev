<html>
<head>
</head>
    <body>
        <p>Hello from html</p>
        
        <?php
            class circle {
                public $radio;
                function __construct($r){
                	$this->radio = $r;
                }

                function area(){
                	return 3.1416 * $this->radio **2;
                }
            }

            $rad=5;
            $aCircle = new circle($rad);
            echo "el área del circulo de radio $rad es ". $aCircle->area();
        ?>
        
        
    </body>

</html>
