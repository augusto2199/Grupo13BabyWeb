<?php

class EstadioBusiness extends Business
{
    private  $dao;

    public function __construct()
    {
        $this->dao = new EstadioDaoMySQL;
    }

    /**
     * @return EstadioEntity[]
     */
    public function all(): array
    {
        $estadios = $this->dao->all();

        if ($estadios === false) {
            var_dump('Todo mal'); exit;
        }

        return $estadios;
    }

    public function find($id): ?EstadioEntity
    {

        $estadio = $this->dao->find($id);

        return $estadio;
    }
}

?>