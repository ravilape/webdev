
        <?php
            
            include 'functions.php';
            
             //unit testing:
             
             $array_test1=["0","0","5","0","4"];
             echo convert_array_to_number($array_test1);
             
             
             $array_test2=["0","a","d","4"]; //acá no funciona
             convert_array_to_number($array_test2);
             
             $array_test3=[]; //acá funciona
             convert_array_to_number($array_test3);
             
            
        ?>

