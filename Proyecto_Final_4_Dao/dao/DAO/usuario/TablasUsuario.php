<?php 
class Usuario
{
	public $usuarioid;
	public $usuarionombre;
	public $usuarioemail;
	public $usuariopass;
	public $usuariodate;
	public $usuarionivel;

    public function setUsuarioId($usuarioid){
        $this->usuarioid=$usuarioid;
    }

    public function getUsuarioId(){
        return $this->usuarioid;
    }

    public function setUsuarioNombre($usuarionombre){
        $this->usuarionombre=$usuarionombre;
    }

    public function getUsuarioNombre(){
        return $this->usuarionombre;
    }

    public function setUsuarioEmail($usuarioemail){
        $this->usuarioemail=$usuarioemail;
    }

    public function getUsuarioEmail(){
        return $this->usuarioemail;
    }

    public function setUsuarioPass($usuariopass){
        $this->usuariopass=$usuariopass;
    }

    public function getUsuarioPass(){
        return $this->usuariopass;
    }

    public function setUsuarioDate($usuariodate){
        $this->usuariodate=$usuariodate;
    }

    public function getUsuarioDate(){
        return $this->usuariodate;
    }

    public function setUsuarioNivel($usuarionivel){
        $this->usuarionivel=$usuarionivel;
    }

    public function getUsuarioNivel(){
        return $this->usuarionivel;
    }

}

?>