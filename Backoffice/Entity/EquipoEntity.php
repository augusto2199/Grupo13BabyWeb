<?php

class EquipoEntity
{

private $id;
private $nombre;
private $categoria;
private $entrenador_id;

public function getId()
{
    return $this->id;
}

public function setId($value)
{
    $this->id = $value;
}

public function getNombre()
{
    return $this->nombre;
}

public function setNombre($value)
{
    $this->nombre = $value;
}

public function getCategoria()
{
    return $this->categoria;
}

public function setCategoria($value)
{
    $this->categoria = $value;
}

public function getEntrenadorId()
{
    return $this->entrenador_id;
}

public function setEntrenadorId($value)
{
    $this->entrenador_id = $value;
}

}

?>