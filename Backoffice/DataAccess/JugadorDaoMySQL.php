<?php 


class JugadorDaoMySQL extends Dao
{
    public function find($id): ?JugadorEntity
    {
        $stmt = $this->pdo->prepare('SELECT * FROM jugador WHERE id = :id');
        $stmt->setFetchMode(PDO::FETCH_CLASS, JugadorEntity::class);

        $stmt->execute([':id' => $id]);

        return $stmt->fetch();
    }

    /**
     * @return JugadorEntity[]
     */
    
     public function all(): array
     {
         $stmt = $this->pdo->prepare('SELECT id, nombre, apellido, edad, posicion, numero_camiseta AS numeroCamiseta, equipo_id as equipo FROM jugador');
         $stmt->setFetchMode(PDO::FETCH_CLASS, JugadorEntity::class);

         $stmt->execute();
     
         return $stmt->fetchAll();
     }
     
}


?>