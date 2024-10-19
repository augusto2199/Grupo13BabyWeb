<?php

class EquipoBusiness extends Business
{
    private  $dao;

    public function __construct()
    {
        $this->dao = new EquipoDaoMySQL;
    }

    /**
     * @return EquipoEntity[]
     */
    public function all(): array
    {
        $equipos = $this->dao->all();

        if ($equipos === false) {
            var_dump('Todo mal'); exit;
        }

        return $equipos;
    }

    public function find($id): ?EquipoEntity
    {

        $equipo = $this->dao->find($id);

        return $equipo;
    }
    
}

?>