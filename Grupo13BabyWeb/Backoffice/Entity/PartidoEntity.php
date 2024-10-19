<?php

class PartidoEntity
{

private $id;
private $fecha;
private $equipo_local_id;
private $equipo_visitante_id;
private $torneo_id;
private $estadio_id;
private $arbitro_id;

public function getId()
{
    return $this->id;
}

public function setId($value)
{
    $this->id = $value;
}

public function getFecha()
{
    return $this->fecha;
}

public function setFecha($value)
{
    $this->fecha = $value;
}

public function getEquipoLocalId()
{
    return $this->equipo_local_id;
}

public function setEquipoLocalId($value)
{
    $this->equipo_local_id = $value;
}

public function getEquipoVisitanteId()
{
    return $this->equipo_visitante_id;
}

public function setEquipoVisitanteId($value)
{
    $this->equipo_visitante_id = $value;
}

public function getTorneoId()
{
    return $this->torneo_id;
}

public function setTorneoId($value)
{
    $this->torneo_id = $value;
}
public function getEstadioId()
{
    return $this->estadio_id;
}

public function setEstadioId($value)
{
    $this->estadio_id = $value;
}

public function getArbitroId()
{
    return $this->arbitro_id;
}

public function setArbitroId($value)
{
    $this->arbitro_id = $value;
}

}

?>