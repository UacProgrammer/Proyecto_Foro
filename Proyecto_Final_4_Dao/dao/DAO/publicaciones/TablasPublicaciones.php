<?php 
class Publicaciones
{
	public $postid;
	public $usuarioid;
	public $catid;
	public $posttitulo;
	public $postcontenido;
	public $postdate;

    public function setPostId($postid){
        $this->postid=$postid;
    }

    public function getPostId(){
        return $this->postid;
    }

    public function setUsuarioId($usuarioid){
        $this->usuarioid=$usuarioid;
    }

    public function getUsuarioId(){
        return $this->usuarioid;
    }

    public function setCatId($catid){
        $this->catid=$catid;
    }

    public function getCatId(){
        return $this->catid;
    }

    public function setPostTitulo($posttitulo){
        $this->posttitulo=$posttitulo;
    }

    public function getPostTitulo(){
        return $this->posttitulo;
    }

    public function setPostContenido($postcontenido){
        $this->postcontenido=$postcontenido;
    }

    public function getPostContenido(){
        return $this->postcontenido;
    }

    public function setPostDate($postdate){
        $this->postdate=$postdate;
    }

    public function getPostDate(){
        return $this->postdate;
    }
}

?>