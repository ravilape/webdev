<html>
<head>
</head>
    <body>

    <form action="project_math.php" method="get">
    <p>Inserta una ecuacion: <input type="text" name="ecuacion" /></p>
    <p><input type="submit" value="validar"></p>
    </form>

        <?php
            //echo "<p>Hello from PHP</p>";
            include 'functions/functions.php';
            
            // getting the equation:
            //$equation = "240-100+120=100+30-20";

            
            if (isset($_GET["ecuacion"]))
            {
                $equation = $_GET["ecuacion"];
                
                if ($equation!=null)
                {
                    //Extracting chars:
                    $e_lenght = strlen($equation);
                    $index_nuevo_numero=0;
                    $index_nuevo_op_num=0;

                    for ($i=0;$i<$e_lenght;$i++)
                    {
                        $e_chars[$i]=substr($equation,$i,1);
                        $type_actual = get_type($e_chars[$i]);
                        $type_anterior = "space";

                        if ($i>0)
                        {
                            $type_anterior = get_type($e_chars[$i-1]);
                        }

                            if ($type_actual!="none")
                            {
                                if (review_structure($type_actual,$type_anterior,$i,$e_lenght)!="no_ok")
                                {
                                    //Aprovecho para ir agrupando numeros:
                            
                                    //iniciando nueva trama de numero:
                                    
                                    if ( $type_actual=="number" AND $i<$e_lenght-1)
                                    {
                                        $array_nuevo_numero[$index_nuevo_numero] = $e_chars[$i];
                                        $index_nuevo_numero+=1;
                                        
                                    }
                                    else if ($type_actual=="operator" AND $type_anterior == "number")
                                    {
                                        //capturo el operador en un arreglito:
                                        $arreglo_de_operadores[$index_nuevo_op_num]= $e_chars[$i];
                                        
                                        //paro la grabación de numero y lo capturo completo en otro arreglito:
                                        $numero=convert_array_to_number($array_nuevo_numero);
                                        $arreglo_de_numeros[$index_nuevo_op_num] = $numero;
                                        $index_nuevo_numero=0;
                                        $index_nuevo_op_num+=1;
                                        unset($array_nuevo_numero);
                                        $numero=0;
                                    }
                                    
                                    else if ($type_actual=="number" AND $i == $e_lenght-1)
                                    {
                                        
                                        $array_nuevo_numero[$index_nuevo_numero] = $e_chars[$i];
                                        
                                        //paro la grabación de numero y lo capturo completo en otro arreglito:
                                        $numero=convert_array_to_number($array_nuevo_numero);
                                        $arreglo_de_numeros[$index_nuevo_op_num] = $numero;
                                        $index_nuevo_numero=0;
                                        unset($array_nuevo_numero);
                                        $numero=0;
                                        
                                        //print_r($arreglo_de_numeros);
                                        //echo "<br>";
                                        //print_r($arreglo_de_operadores);
                                    }
                                    
                                }

                                else
                                {
                                    echo "estructura inadmisible";
                                    break;
                                }

                            }

                            else 
                            {
                                echo "caracter inadmisible";
                                break;
                            }
                    }

                    // Resolve equations
                    //separando partes:
                                    
                    $A = left_values($arreglo_de_numeros,$arreglo_de_operadores);
                    $B = right_values($arreglo_de_numeros,$arreglo_de_operadores);
                                    
                    echo "A=$A";
                    echo "<br>";
                    echo "B=$B";
                    echo "<br>";
                                    
                                    
                    if ($A==$B)
                        {
                            echo "La ecuación ingresada es correcta.";
                        }
                                    
                        else
                        {
                            echo "La ecuación ingresada es incorrecta";
                        }

                }

                else
                {
                echo "ingrese una ecuación no nula";
                }


            }
                
            else
            {
                echo "ingrese una ecuación para validarla";

            }
            
        ?>
        

    </body>

</html>

