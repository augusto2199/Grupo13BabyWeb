<?php 

class EquipoDaoMySQL extends Dao
{
    public function find($id): ?EquipoEntity
    {
        $stmt = $this->pdo->prepare('SELECT * FROM equipos WHERE id = :id');
        $stmt->setFetchMode(PDO::FETCH_CLASS, EquipoEntity::class);

        $stmt->execute([':id' => $id]);

        return $stmt->fetch();
    }

    /**
     * @return EquipoEntity[]
     */
    public function all(): array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM equipos');
        $stmt->setFetchMode(PDO::FETCH_CLASS, EquipoEntity::class);

        $stmt->execute();

        return $stmt->fetchAll();
    }
}
?>