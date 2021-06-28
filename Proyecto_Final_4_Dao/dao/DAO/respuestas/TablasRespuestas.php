<?php 
class Respuestas
{
	public $resid;
	public $postid;
	public $usuarioid;
	public $rescontenido;
	public $resdate;

    public function setResId($resid){
        $this->resid=$resid;
    }

    public function getResId(){
        return $this->resid;
    }

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

    public function setResContenido($rescontenido){
        $this->rescontenido=$rescontenido;
    }

    public function getResContenido(){
        return $this->rescontenido;
    }

    public function setResDate($resdate){
        $this->resdate=$resdate;
    }

    public function getResDate(){
        return $this->resdate;
    }
}

?>