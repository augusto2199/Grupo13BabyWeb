<?php

class partidoBusiness extends Business
{
    private  $dao;

    public function __construct()
    {
        $this->dao = new PartidoDaoMySQL;
    }

    /**
     * @return PartidoEntity[]
     */
    public function all(): array
    {
        $partidos = $this->dao->all();

        if ($partidos === false) {
            var_dump('Todo mal'); exit;
        }

        return $partidos;
    }

    public function find($id): ?PartidoEntity
    {

        $partido = $this->dao->find($id);

        return $partido;
    }
}

?>