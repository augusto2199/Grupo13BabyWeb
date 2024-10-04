<?php 


class RolDaoMySQL extends Dao
{
    public function find($id): ?RolEntity
    {
        $stmt = $this->pdo->prepare('SELECT * FROM roles WHERE id = :id');
        $stmt->setFetchMode(PDO::FETCH_CLASS, RolEntity::class);

        $stmt->execute([':id' => $id]);

        return $stmt->fetch();
    }

    /**
     * @return RolEntity[]
     */
    public function all(): array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM roles');
        $stmt->setFetchMode(PDO::FETCH_CLASS, RolEntity::class);

        $stmt->execute();

        return $stmt->fetchAll();
    }
}
?>