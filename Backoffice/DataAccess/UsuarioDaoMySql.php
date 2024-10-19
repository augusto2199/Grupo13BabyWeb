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

    public function findJugador($id): ?UsuarioJugadorEntity
    {
        $stmt = $this->pdo->prepare('SELECT * FROM jugadores WHERE id = :id');
        $stmt->setFetchMode(PDO::FETCH_CLASS, UsuarioJugadorEntity::class);

        $stmt->execute([':id' => $id]);

        return $stmt->fetch();
    }

    public function findEntrenador($id): ?UsuarioEntrenadorEntity
    {
        $stmt = $this->pdo->prepare('SELECT * FROM entrenadores WHERE id = :id');
        $stmt->setFetchMode(PDO::FETCH_CLASS, UsuarioEntrenadorEntity::class);

        $stmt->execute([':id' => $id]);

        return $stmt->fetch();
    }

    public function findTipoUsuario(UsuarioEntity $usuario,$id)
    {
        if(!empty($usuario->getJugadorId()))
        {
            $stmt = $this->pdo->prepare('SELECT * FROM jugadores WHERE id = :id');
            $stmt->setFetchMode(PDO::FETCH_CLASS, UsuarioJugadorEntity::class);    
        }
        elseif(!empty($usuario->getEntrenadorId()))
        {
            $stmt = $this->pdo->prepare('SELECT * FROM entrenadores WHERE id = :id');
            $stmt->setFetchMode(PDO::FETCH_CLASS, UsuarioEntrenadorEntity::class);    
        }
        elseif(!empty($usuario->getArbitroId()))
        {
            $stmt = $this->pdo->prepare('SELECT * FROM arbitros WHERE id = :id');
            $stmt->setFetchMode(PDO::FETCH_CLASS, UsuarioArbitroEntity::class);    
        }

        $stmt->execute([':id' => $id]);

        return $stmt->fetch();
    }
}
?>