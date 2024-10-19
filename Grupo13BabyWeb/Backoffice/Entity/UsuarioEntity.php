<?php 

class UsuarioEntity
{

private $id;
private $nombre;
private $apellido;
private $email;
private $password;
private $edad;
private $roles_id;
private $jugador_id;
private $entrenador_id;
private $arbitro_id;



      /**
     * @return RolEntity[]
     */
public function buscarNombreRol($rol_id)
{
    $rolBusiness = new RolBusiness;
    $rol = $rolBusiness->find($rol_id);
    return $rol->getNombre();
}

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

public function getApellido()
{
    return $this->apellido;
}

public function setApellido($value)
{
    $this->apellido = $value;
}

public function getEmail()
{
    return $this->email;
}

public function setEmail($value)
{
    $this->email = $value;
}

public function getPassword()
{
    return $this->password;
}

public function setPassword($value)
{
    $this->password = $value;
}

public function getEdad()
{
    return $this->edad;
}

public function setEdad($value)
{
    $this->edad = $value;
}

public function getRol()
{
    return $this->roles_id;
}

public function setRol($value)
{
    $this->roles_id = $value;
}

public function getJugadorId()
{
    return $this->jugador_id;
}

public function getEntrenadorId()
{
    return $this->entrenador_id;
}

public function getArbitroId()
{
    return $this->arbitro_id;
}

}

?>