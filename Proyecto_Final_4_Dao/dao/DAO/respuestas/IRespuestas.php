<?php 
interface IRespuestas
{
	public function Listar();	
	public function Agregar(Respuestas $respuesta);
	public function Actualizar(Respuestas $respuesta);
	public function Eliminar($res_id);
}
?>