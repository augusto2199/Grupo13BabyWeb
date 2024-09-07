<?php 


class TorneoDaoMySQL extends Dao
{
    public function find($id): ?TorneoEntity
    {
        $stmt = $this->pdo->prepare('SELECT * FROM torneo WHERE id = :id');
        $stmt->setFetchMode(PDO::FETCH_CLASS, TorneoEntity::class);

        $stmt->execute([':id' => $id]);

        return $stmt->fetch();
    }

    /**
     * @return TorneoEntity[]
     */
    public function all(): array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM torneo');
        $stmt->setFetchMode(PDO::FETCH_CLASS, TorneoEntity::class);

        $stmt->execute();

        return $stmt->fetchAll();
    }
}
?>