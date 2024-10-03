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
    
     // JugadorDaoMySQL.php

public function all() {
    $stmt = $this->pdo->prepare("
    SELECT jugador.id, jugador.nombre, jugador.apellido, jugador.edad, jugador.posicion, jugador.numero_camiseta, equipo.nombre AS equipo_nombre
    FROM jugador
    JOIN equipo ON jugador.equipo_id = equipo.id
");

    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_CLASS, 'JugadorEntity');
}

public function getEquipos() {
    $equipoDao = new EquipoDaoMySql(); // Asegúrate de tener la implementación correcta para obtener equipos
    return $equipoDao->all(); // Supongamos que este método devuelve todos los equipos
}


     
     
}


?>