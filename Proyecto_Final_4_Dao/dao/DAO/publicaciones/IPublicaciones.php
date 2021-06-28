<?php 
interface IPublicaciones
{
	public function Listar();	
	public function Agregar(Publicaciones $publicacion);
	public function Actualizar(Publicaciones $publicacion);
	public function Eliminar($post_id);
}
?>