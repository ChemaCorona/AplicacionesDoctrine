<?php
/**
* @Entity @Table(name="usuarios")
*/


class Usuario {

	/** @idusuario @Column(type="integer") @GeneratedValue */

	protected $idusuario;

	/** @nombre @Column(type="varchar") */


	protected $nombre;

	/** @apellido @Column(type="varchar") */

	protected $apellido;

	/** @email @Column(type="varchar") */

	protected $email;

	/** @direccion @Column(type="varchar") */

	protected $direccion;

	/** @administrador @Column(type="tinyint") */

	protected $administrador;

	/** @usuario @Column(type="varchar") */

	protected $usuario;

	/** @clave @Column(type="varchar") */

	protected $clave;

	public function getIdUsuario()
	{
		return $this->idusuario;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	} 

	public function getApellido()
	{
		return $this->apellido;
	}

	public function setApellido($apellido)
	{
		$this->apellido = $apellido;
	} 

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	} 

	public function getDireccion()
	{
		return $this->direccion;
	}

	public function setDireccion($direccion)
	{
		$this->direccion = $direccion;
	} 

	public function getAdministrador()
	{
		return $this->administrador;
	}

	public function setAdministrador($administrador)
	{
		$this->administrador = $administrador;
	}

	public function getUsuario()
	{
		return $this->usuario;
	}

	public function setUsuario($usuario)
	{
		$this->usuario = $usuario;
	} 

	public function getClave()
	{
		return $this->clave;
	}

	public function setClave($clave)
	{
		$this->clave = $clave;
	} 
}