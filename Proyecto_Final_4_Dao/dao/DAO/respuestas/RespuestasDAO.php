<?php
include 'IRespuestas.php';
//Esta como comentario por que en el php de publicaciones no se puede llamar 2 veces a la clase datasource
//include '../dao/DAO/DataSource.php';
include '../dao/DAO/respuestas/TablasRespuestas.php';

class RespuestasDAO implements IRespuestas
{
	public function Listar(){
		$data_source = new DataSource();
		$data_table = $data_source->ejecutarConsulta("SELECT res_id,post_id,usuario_id,res_contenido,res_date FROM respuestas;");
		$respuesta = null;
		$respuestas = array();

		foreach ($data_table as $clave=>$valor) {
			$respuesta = new Respuestas();
			$respuesta->setResId( $data_table[$clave]["res_id"] );
			$respuesta->setPostId( $data_table[$clave]["post_id"] );
			$respuesta->setUsuarioId( $data_table[$clave]["usuario_id"] );
			$respuesta->setResContenido( $data_table[$clave]["res_contenido"] );
			$respuesta->setResDate( $data_table[$clave]["res_date"] );		
			array_push($respuestas, $respuesta);
		}
		return $respuestas;
	}
	
	public function Agregar(Respuestas $respuesta){
		$data_source = new DataSource();

		$sql = "INSERT INTO respuestas VALUES (:res_id,:post_id,:usuario_id,:res_contenido,:res_date)";

		$resultado = $data_source->ejecutarActualizacion($sql,array
		(
			':res_id'=>$respuesta->getResId(),			
			':post_id'=>$respuesta->getPostId(),
			':usuario_id'=>$respuesta->getUsuarioId(),
			':res_contenido'=>$respuesta->getResContenido(),
			':res_date'=>$respuesta->getResDate()	
		)
		);
		return $resultado;		
	}

	public function Actualizar(Respuestas $respuesta){
		$data_source = new DataSource();
		$sql = "UPDATE respuestas SET post_id = :post_id, usuario_id = :usuario_id, res_contenido = :res_contenido, res_date = :res_date			
				WHERE res_id = :res_id";
		$resultado = $data_source->ejecutarActualizacion($sql,array(			
			':post_id'=>$respuesta->getPostId(),
			':usuario_id'=> $respuesta->getUsuarioId(),
			':res_contenido'=>$respuesta->getResContenido(),	
			':res_date'=>$respuesta->getResDate(),
            ':res_id'=>$respuesta->getResId()
			)
		);
		return $resultado;
	}

	public function Eliminar($res_id){
		$data_source = new DataSource();
		$resultado = $data_source->ejecutarActualizacion("DELETE FROM respuestas WHERE res_id = :res_id",
			array(':res_id'=>$res_id));
		return $resultado;
	}

	public function Listar_Respuestas(){
		$data_source = new DataSource();
		$data_table = $data_source->ejecutarConsulta("SELECT res_id,usuario_id,res_contenido,res_date FROM respuestas WHERE post_id=?");
		$respuesta = null;
		$respuestas = array();

		foreach ($data_table as $clave=>$valor) {
			$respuesta = new Respuestas();
			$respuesta->setResId( $data_table[$clave]["res_id"] );
			$respuesta->setUsuarioId( $data_table[$clave]["usuario_id"] );
			$respuesta->setResContenido( $data_table[$clave]["res_contenido"] );
			$respuesta->setResDate( $data_table[$clave]["res_date"] );		
			array_push($respuestas, $respuesta);
		}
		return $respuestas;

	}
}
?>