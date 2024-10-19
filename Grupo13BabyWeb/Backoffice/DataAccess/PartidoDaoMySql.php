<?php 

class PartidoDaoMySQL extends Dao
{
    public function find($id): ?PartidoEntity
    {
        $stmt = $this->pdo->prepare('SELECT * FROM partido WHERE id = :id');
        $stmt->setFetchMode(PDO::FETCH_CLASS, PartidoEntity::class);

        $stmt->execute([':id' => $id]);

        return $stmt->fetch();
    }

    /**
     * @return PartidoEntity[]
     */
    public function all(): array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM partidos');
        $stmt->setFetchMode(PDO::FETCH_CLASS, PartidoEntity::class);

        $stmt->execute();

        return $stmt->fetchAll();
    }
}
?>