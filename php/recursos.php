<?php 
		require_once("conexion.php");
		class recursos extends Conexion{

			public function alta($nombre,$marca,$descripcion,$existencia,$costo,$id_empleado,$area){

				$this->sentencia = "INSERT INTO recursos VALUES (NULL,'$nombre','$marca','$descripcion','$existencia','$costo','$id_empleado','$area')";
				$this->ejecutar_sentencia();

			}
			public function baja($id){
				$this->sentencia = "DELETE FROM recursos WHERE id=$id";
				$this->ejecutar_sentencia();

			}
			public function consulta(){
				$this->sentencia="SELECT * FROM recursos";
				return $this->obtener_sentencia();

				
			}
			public function buscar($id){
				$this->sentencia= "SELECT * FROM recursos WHERE id=$id";
				return $this->obtener_sentencia();

			}
			public function modificaciones($nombre,$rs,$dir,$tel,$correo,$id){
				$this->sentencia = "UPDATE recursos SET nombre='$nombre',marca='$marca',descripcion ='$descripcion',existencia='$existencia',costo ='$costo',id_empleado='$id_empleado',area='$area', where id='$id'";
				$this->ejecutar_sentencia();

			}
			public function datosRecursos(){
              $this->sentencia = "SELECT costo FROM recursos";
              $res = $this->obtener_sentencia(); 
              $datos="";
              while ($fila = $res->fetch_assoc()){
              $datos=$datos.$fila["costo"].",";
            }
              $datos=substr($datos,0,strlen($datos)-1);
              echo $datos; 
              }
               public function etiquetasRecursos(){
              $this->sentencia = "SELECT nombre FROM recursos";
              $res = $this->obtener_sentencia(); 
              $datos="";
              while ($fila = $res->fetch_assoc()){
              $datos.="'".$fila["nombre"]."',";
            }
              $datos=substr($datos,0,strlen($datos)-1);
              echo $datos; 
              }
        

		}


 ?>