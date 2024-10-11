<?php 

class UsuarioDaoMySQL extends Dao
{
    public function find($id): ?UsuarioEntity
    {
        $stmt = $this->pdo->prepare('SELECT * FROM usuarios WHERE id = :id');
        $stmt->setFetchMode(PDO::FETCH_CLASS, UsuarioEntity::class);

        $stmt->execute([':id' => $id]);

        return $stmt->fetch();
    }

    /**
     * @return UsuarioEntity[]
     */
    public function all(): array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM usuarios');
        $stmt->setFetchMode(PDO::FETCH_CLASS, UsuarioEntity::class);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function findArbitro($id): ?UsuarioArbitroEntity
    {
        $stmt = $this->pdo->prepare('SELECT * FROM arbitros WHERE id = :id');
        $stmt->setFetchMode(PDO::FETCH_CLASS, UsuarioArbitroEntity::class);

        $stmt->execute([':id' => $id]);

        return $stmt->fetch();
    }
}
?>