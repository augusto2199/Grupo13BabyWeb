<?php 

class UsuarioBusiness extends Business
{
    private  $dao;

    public function __construct()
    {
        $this->dao = new UsuarioDaoMySQL;
    }

    /**
     * @return UsuarioEntity[]
     */
    public function all(): array
    {
        $usuarios = $this->dao->all();

        if ($usuarios === false) {
            var_dump('Todo mal'); exit;
        }

        return $usuarios;
    }

    public function find($id): ?UsuarioEntity
    {

        $usuario = $this->dao->find($id);

        return $usuario;
    }
    
    public function findArbitro($id): ?UsuarioArbitroEntity
    {

        $arbitro = $this->dao->findArbitro($id);

        return $arbitro;
    }

    public function findEntrenador($id): ?UsuarioEntrenadorEntity
    {

        $entrenador = $this->dao->findEntrenador($id);

        return $entrenador;
    }

    public function findJugador($id): ?UsuarioJugadorEntity
    {

        $jugador = $this->dao->findJugador($id);

        return $jugador;
    }

}

?>