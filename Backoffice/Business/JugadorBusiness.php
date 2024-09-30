<?php 

class JugadorBusiness extends Business
{
    private  $dao;

    public function __construct()
    {
        $this->dao = new JugadorDaoMySQL;
    }

    /**
     * @return JugadorEntity[]
     */
    public function all(): array
    {
        $jugadores = $this->dao->all();

        if ($jugadores === false) {
            var_dump('Todo mal'); exit;
        }

        return $jugadores;
    }

    public function find($id): ?JugadorEntity
    {

        $jugador = $this->dao->find($id);

        return $jugador;
    }
}

