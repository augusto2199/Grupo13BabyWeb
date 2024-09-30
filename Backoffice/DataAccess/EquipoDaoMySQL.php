<?php 


class EquipoDaoMySQL extends Dao
{
    public function find($id): ?EquipoEntity
    {
        $stmt = $this->pdo->prepare('SELECT * FROM equipo WHERE id = :id');
        $stmt->setFetchMode(PDO::FETCH_CLASS, EquipoEntity::class);

        $stmt->execute([':id' => $id]);

        return $stmt->fetch();
    }

    /**
     * @return EquipoEntity[]
     */
    public function all(): array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM equipo');
        $stmt->setFetchMode(PDO::FETCH_CLASS, EquipoEntity::class);

        $stmt->execute();

        return $stmt->fetchAll();
    }
}
?>