<?php
include '/IPublicaciones.php';
include '../dao/DAO/DataSource.php';
include '../dao/DAO/publicaciones/TablasPublicaciones.php';

class PublicacionesDAO implements IPublicaciones
{
	public function Listar(){
		$data_source = new DataSource();
		$data_table = $data_source->ejecutarConsulta("SELECT post_id,usuario_id,cat_id,post_titulo,post_contenido,post_date FROM publicaciones");
		$publicacion = null;
		$publicaciones = array();

		foreach ($data_table as $clave=>$valor) {
			$publicacion = new Publicaciones();
			$publicacion->setPostId( $data_table[$clave]["post_id"] );
			$publicacion->setUsuarioId( $data_table[$clave]["usuario_id"] );
			$publicacion->setCatId( $data_table[$clave]["cat_id"] );
			$publicacion->setPostTitulo( $data_table[$clave]["post_titulo"] );
			$publicacion->setPostContenido( $data_table[$clave]["post_contenido"] );
			$publicacion->setPostDate( $data_table[$clave]["post_date"] );		
			array_push($publicaciones, $publicacion);
		}
		return $publicaciones;
	}
	
	public function Agregar(Publicaciones $publicacion){
		$data_source = new DataSource();

		$sql = "INSERT INTO publicaciones VALUES (:post_id,:usuario_id,:cat_id,:post_titulo,:post_contenido,:post_date)";

		$resultado = $data_source->ejecutarActualizacion($sql,array
		(
			':post_id'=>$publicacion->getPostId(),			
			':usuario_id'=>$publicacion->getUsuarioId(),
			':cat_id'=>$publicacion->getCatId(),
			':post_titulo'=>$publicacion->getPostTitulo(),
			':post_contenido'=>$publicacion->getPostContenido(),
			':post_date'=>$publicacion->getPostDate()		
		)
		);
		return $resultado;		
	}

	public function Actualizar(Publicaciones $publicacion){
		$data_source = new DataSource();
		$sql = "UPDATE publicaciones SET usuario_id = :usuario_id, cat_id = :cat_id, post_titulo = :post_titulo, post_contenido = :post_contenido, post_date = :post_date			
				WHERE post_id = :post_id";
		$resultado = $data_source->ejecutarActualizacion($sql,array(			
			':usuario_id'=>$publicacion->getUsuarioId(),
			':cat_id'=> $publicacion->getCatId(),
			':post_titulo'=>$publicacion->getPostTitulo(),	
			':post_contenido'=>$publicacion->getPostContenido(),
			':post_date'=>$publicacion->getPostDate(),
            ':post_id'=>$publicacion->getPostId()
			)
		);
		return $resultado;
	}

	public function Eliminar($post_id){
		$data_source = new DataSource();
		$resultado = $data_source->ejecutarActualizacion("DELETE FROM publicaciones WHERE post_id = :post_id",
			array(':post_id'=>$post_id));
		return $resultado;
	}

	public function Listar_Pregunta(){
		$data_source = new DataSource();
		$data_table = $data_source->ejecutarConsulta("SELECT usuario_id,post_titulo,post_contenido,post_date FROM publicaciones WHERE post_id=?");
		$publicacion = null;
		$publicaciones = array();

		foreach ($data_table as $clave=>$valor) {
			$publicacion = new Publicaciones();
			$publicacion->setUsuarioId( $data_table[$clave]["usuario_id"] );
			$publicacion->setPostTitulo( $data_table[$clave]["post_titulo"] );
			$publicacion->setPostContenido( $data_table[$clave]["post_contenido"] );
			$publicacion->setPostDate( $data_table[$clave]["post_date"] );		
			array_push($publicaciones, $publicacion);
		}
		return $publicaciones;

	}
}
?>