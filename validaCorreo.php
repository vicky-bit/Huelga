<?php
/*
 * Partiendo del ejemplo “crear agenda electrónica” que hiciste en clase, añade 
 * un par de elementos que tengan cuentas de correo no válidas.
 * Crea una función de usuario que reciba el correo electrónico de cada 
 * contacto de la agenda que devuelva true si el correo termina en “@gmail.com”, 
 * “@educa.madrid.org”, “yahoo.com” o “@hotmail.com” y false en caso contrario.
 * Mostrar en pantalla una lista con los nombres y correo electrónico de los 
 * correos no válidos.
 */
        
    
    $agenda = array(array("Nombre"=>"Jorge",
                                  "Dirección"=>"Madrid",
                                  "Telefono"=>999999999,
                                  "Correo"=>"jorge@correo.com"),
                            array("Nombre"=>"Julia",
                                  "Dirección"=>"Valencia",
                                  "Telefono"=>235456987,
                                  "Correo"=>"julia@gmail.com"),
                            array("Nombre"=>"Lucas",
                                  "Dirección"=>"Orense",
                                  "Telefono"=>222222222,
                                  "Correo"=>"lucas@correo.com"),
                            array("Nombre"=>"Susana",
                                  "Dirección"=>"Ávila",
                                  "Telefono"=>987546321,
                                  "Correo"=>"susana@correo.com"),
                            array("Nombre"=>"Martín",
                                  "Dirección"=>"Valencia",
                                  "Telefono"=>555555555,
                                  "Correo"=>"martin@educa.madrid.org"),
                            array("Nombre"=>"Laura",
                                  "Dirección"=>"Sevilla",
                                  "Telefono"=>444444444,
                                  "Correo"=>"Laura@hotmail.com"),
                );
    
    
    function compruebaCorreo($correo){
        $validos = array("@gmail.com","@educa.madrid.org","@hotmail.com","yahoo.com");
        //obtenemos la posición de la @
        $posicionArroba = strpos($correo,"@");
        //extraemos la cadena desde esa posición hasta el final
        $finCorreo = substr($correo,$posicionArroba);
        //si está en el array validos es una direccion de correo correcta.
        return in_array($finCorreo,$validos);
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            foreach($agenda as $contacto => $datosContacto){
                echo "<ul>";
                if(!compruebaCorreo($datosContacto['Correo'])){
                    echo "<li>Nombre: {$datosContacto['Nombre']} email no válido: {$datosContacto['Correo']}";
                }
                echo "</ul>";
            }
        ?>
    </body>
</html>
