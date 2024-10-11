<?php 

class EstadioDaoMySQL extends Dao
{
    public function find($id): ?EstaioEntity
    {
        $stmt = $this->pdo->prepare('SELECT * FROM estadios WHERE id = :id');
        $stmt->setFetchMode(PDO::FETCH_CLASS, EstadioEntity::class);

        $stmt->execute([':id' => $id]);

        return $stmt->fetch();
    }

    /**
     * @return EstadioEntity[]
     */
    public function all(): array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM estadios');
        $stmt->setFetchMode(PDO::FETCH_CLASS, EstadioEntity::class);

        $stmt->execute();

        return $stmt->fetchAll();
    }
}
?>