<?php 


class ArbitroDaoMySQL extends Dao
{
    public function find($id): ?ArbitroEntity
    {
        $stmt = $this->pdo->prepare('SELECT * FROM arbitro WHERE id = :id');
        $stmt->setFetchMode(PDO::FETCH_CLASS, ArbitroEntity::class);

        $stmt->execute([':id' => $id]);

        return $stmt->fetch();
    }

    /**
     * @return ArbitroEntity[]
     */
    
  
     public function all(): array
     {
         $stmt = $this->pdo->prepare('SELECT * FROM arbitro');
         $stmt->setFetchMode(PDO::FETCH_CLASS, ArbitroEntity::class);
 
         $stmt->execute();
 
         return $stmt->fetchAll();
     }
     
}


?>