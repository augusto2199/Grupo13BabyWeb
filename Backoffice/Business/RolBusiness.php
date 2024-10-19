<?php 

class RolBusiness extends Business
{
    private  $dao;

    public function __construct()
    {
        $this->dao = new RolDaoMySQL;
    }

    /**
     * @return RolEntity[]
     */
    public function all(): array
    {
        $roles = $this->dao->all();

        if ($roles === false) {
            var_dump('Todo mal'); exit;
        }

        return $roles;
    }

    public function find($id): ?RolEntity
    {

        $rol = $this->dao->find($id);

        return $rol;
    }
    
}

?>