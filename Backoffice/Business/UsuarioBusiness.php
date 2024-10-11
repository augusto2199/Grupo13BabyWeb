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
        $torneos = $this->dao->all();

        if ($torneos === false) {
            var_dump('Todo mal'); exit;
        }

        return $torneos;
    }

    public function find($id): ?UsuarioEntity
    {

        $torneo = $this->dao->find($id);

        return $torneo;
    }

}

?>