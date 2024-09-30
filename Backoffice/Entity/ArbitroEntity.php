<?php 

class ArbitroEntity
{

private $id;
private $nombre;
private $apellido;
private $edad;
private $experiencia;
private $email;
private $password;

public function getId()
{
    return $this->id;
}

public function getNombre()
{
    return $this->nombre;
}

public function getApellido()
{
    return $this->apellido;
}

public function getEdad()
{
    return $this->edad;
}

public function getExperiencia()
{
    return $this->experiencia;
}

public function getEmail()
{
    return $this->email;
}

public function getPassword()
{
    return $this->password;
}


public function setId($value)
{
    $this->id = $value;
}

public function setNombre($value)
{
    $this->nombre = $value;
}

public function setApellido($value)
{
    $this->apellido = $value;
}

public function setEdad($value)
{
    $this->edad = $value;
}

public function setExperiencia($value)
{
    $this->experiencia = $value;
}

public function setEmail($value)
{
    $this->email = $value;
}

public function setPassword($value)
{
    $this->password = $value;
}

}

?>