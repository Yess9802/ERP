<?php 


    
        require_once("proveedor.php");
        $obj = new proveedor();
        $res=$obj->consulta();
      	while($fila = $res->fetch_assoc()){
        echo $fila["nombre"];
        echo $fila["razonsocial"];
        echo $fila["correo"];
        echo $fila["diireccion"];
        echo $fila["telefono"];
     

   }
    











 ?>