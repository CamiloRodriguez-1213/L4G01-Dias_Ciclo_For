<?php 
        print( 'LENGUAJE DE CUARTA' );
        echo ( "<br>" );    
        $dias = [ "LUNES" , "MARTES" , "MIERCOLES" , "JUEVES" , "VIERNES" , "SABADO" , "DOMINGO" ];
        echo ( "<br>" );   
        
        for($i = 0 ; $i < count( $dias ); $i++) {
        
        echo  "<br>" ;
        echo  "Dia $i:".$dias[ $i];
        echo  "<br>" ;
        }
?>