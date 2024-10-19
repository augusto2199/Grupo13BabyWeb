<?php 

class TorneoBusiness extends Business
{
    private  $dao;

    public function __construct()
    {
        $this->dao = new TorneoDaoMySQL;
    }

    /**
     * @return TorneoEntity[]
     */
    public function all(): array
    {
        $torneos = $this->dao->all();

        if ($torneos === false) {
            var_dump('Todo mal'); exit;
        }

        return $torneos;
    }

    public function find($id): ?TorneoEntity
    {

        $torneo = $this->dao->find($id);

        return $torneo;
    }
}

?>