<?php
include 'IUsuario.php';
include '../dao/DAO/DataSource.php';
include '../dao/DAO/usuario/TablasUsuario.php';

class UsuarioDAO implements IUsuario
{
    public function Listar(){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT usuario_id,usuario_nombre,usuario_email,usuario_pass,usuario_date,usuario_nivel FROM usuarios");
        $usuario = null;
        $usuarios= array();

        foreach ($data_table as $clave=>$valor) {
            $usuario = new Usuario();
            $usuario->setUsuarioId( $data_table[$clave]["usuario_id"] );
            $usuario->setUsuarioNombre( $data_table[$clave]["usuario_nombre"] );
            $usuario->setUsuarioEmail( $data_table[$clave]["usuario_email"] );
            $usuario->setUsuarioPass( $data_table[$clave]["usuario_pass"] );
            $usuario->setUsuarioDate( $data_table[$clave]["usuario_date"] );
            $usuario->setUsuarioNivel( $data_table[$clave]["usuario_nivel"] );

            array_push($usuarios, $usuario);
        }
        return $usuarios;
    }

    public function Agregar(Usuario $usuario){
        $data_source = new DataSource();

		$sql = "INSERT INTO usuarios VALUES (:usuario_id,:usuario_nombre,:usuario_email,:usuario_pass,:usuario_date,:usuario_nivel)";

		$resultado = $data_source->ejecutarActualizacion($sql,array
		(
			':usuario_id'=>$usuario->getUsuarioId(),			
			':usuario_nombre'=>$usuario->getUsuarioNombre(),
			':usuario_email'=>$usuario->getUsuarioEmail(),
			':usuario_pass'=>$usuario->getUsuarioPass(),
			':usuario_date'=>$usuario->getUsuarioDate(),
			':usuario_nivel'=>$usuario->getUsuarioNivel(),
		)
		);
		return $resultado;		
    }

    public function Actualizar(Usuario $usuario){
		$data_source = new DataSource();
		$sql = "UPDATE usuarios SET usuario_nombre = :usuario_nombre, usuario_email = :usuario_email, usuario_pass = :usuario_pass, usuario_date = :usuario_date, usuario_nivel = :usuario_nivel
				WHERE usuario_id = 2";
		$resultado = $data_source->ejecutarActualizacion($sql,array(			
			':usuario_nombre'=>$usuario->getUsuarioNombre(),
			':usuario_email'=> $usuario->getUsuarioEmail(),
			':usuario_pass'=>$usuario->getUsuarioPass(),	
			':usuario_date'=>$usuario->getUsuarioDate(),
            ':usuario_nivel'=>$usuario->getUsuarioNivel()
			)
		);
		return $resultado;
    }

    public function Eliminar($usuario_id){
        $data_source = new DataSource();
		$resultado = $data_source->ejecutarActualizacion("DELETE FROM usuarios WHERE usuario_id = :usuario_id",
			array(':usuario_id'=>$usuario_id));
		return $resultado;
	}

	public function Verificar_Login(Usuario $usuario){
        $data_source = new DataSource();
		$resultado = $data_source->ejecutarActualizacion("SELECT * FROM usuarios WHERE usuario_email = :usuario_email and usuario_pass = :usuario_pass",
			array(':usuario_email'=>$usuario->getUsuarioEmail(),
			':usuario_pass'=>$usuario->getUsuarioPass()
			)
		);
		return $resultado;
	}

	public function GetIdLogin(){
		$data_source = new DataSource();
		$data_table = $data_source->ejecutarActualizacion("SELECT usuario_id FROM usuarios WHERE usuario_email = ?");
		$usuario = null;
		$usuarios = array();

		foreach ($data_table as $clave=>$valor) {
			$usuario = new Usuario();
			$usuario->setUsuarioId( $data_table[$clave]["usuario_id"] );	
			array_push($usuarios, $usuario);
		}
		return $usuarios;
	}
}
?>