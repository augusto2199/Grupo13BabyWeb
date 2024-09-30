<?php 

class ArbitroBusiness extends Business
{
    private  $dao;

    public function __construct()
    {
        $this->dao = new ArbitroDaoMySQL;
    }

    /**
     * @return ArbitroEntity[]
     */
    public function all(): array
    {
        $arbitros = $this->dao->all();

        if ($arbitros === false) {
            var_dump('Todo mal'); exit;
        }

        return $arbitros;
    }

    public function find($id): ?ArbitroEntity
    {

        $arbitro = $this->dao->find($id);

        return $arbitro;
    }
}

