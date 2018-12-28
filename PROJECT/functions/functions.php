
        <?php
            
            
            function review_structure($tipo_actual, $tipo_anterior, $posicion, $long)
            {
                if (($posicion==0 AND $tipo_actual=="operator") OR ($posicion==$long-1 AND $tipo_actual=="operator"))
                    {
                        return "no_ok";
                    }
                else if ( $tipo_actual=="operator" AND $tipo_anterior =="operator")
                {
                        return "no_ok";

                }
            }
            
            function get_type($caract)
            {
                if (ord($caract)>=48 AND ord($caract)<=57)
                {
                    return "number";
                }
                
                else if (ord($caract)==42 OR ord($caract)==43 OR ord($caract)==45 OR ord($caract)==47 OR ord($caract)==61)
                {
                    return "operator";
                }
                
                else if (ord($caract)==32)
                {
                    return "space";
                }
                
                else
                {
                    return "none";
                }
            }
            
            
            
            
            function convert_array_to_number($array)
            {
                $cant = count($array);
                $number = 0;
                
                for ($i=0; $i<$cant; $i++)
                {
                    $number = $number + $array[$i]*10**($cant-$i-1);
                }
                return $number;

            }
            
            function left_values($numeros,$operadores)
            {
                
                $result = $numeros[0];

                for ($i=0;$i<count($operadores);$i++)
                {
                    
                    switch ($operadores[$i])
                    {
                        case "+":
                            $result = $result+$numeros[$i+1];
                            break;
                        case "-":
                            $result = $result-$numeros[$i+1];
                            break;
                        case "*":
                            $result = $result*$numeros[$i+1];
                            break;
                        case "/":
                            $result = $result/$numeros[$i+1];
                            break;
                        case "=":
                            unset ($numeros);
                            return $result;
                            break;
                        default:
                            break;
                    }
                }
                
                unset ($numeros);
                return $result;
            }
            
            
            function right_values($numeros,$operadores)
            {

                for ($i=0;$i<count($operadores);$i++)
                {
                    if ($operadores[$i]=="=")
                    {
                        $j=$i+1;
                        $result = $numeros[$j];
                    }
                }
                
                for ($i=$j; $i<count($operadores); $i++)
                {


                    switch ($operadores[$i])
                    {
                        case "+":
                            $result = $result+$numeros[$i+1];
                            break;
                        case "-":
                            $result = $result-$numeros[$i+1];
                            break;
                        case "*":
                            $result = $result*$numeros[$i+1];
                            break;
                        case "/":
                            $result = $result/$numeros[$i+1];
                            break;
                        default:
                            break;
                    }
                }
                return $result;
            }
            
            
        ?>



