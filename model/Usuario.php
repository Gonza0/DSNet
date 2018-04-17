<?php

class Usuario {
    //atributos de la clase
    private $id;
    private $usuario;
    private $nombre;
    private $apellido;
    private $sexo;
    private $fechaNac;
    private $email;
    private $pass;
    private $fechaReg;

    function __construct($id, $usuario, $nombre, $apellido, $sexo, $fechaNac, $email, $pass, $fechaReg) {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sexo = $sexo;
        $this->fechaNac = $fechaNac;
        $this->email = $email;
        $this->pass = $pass;
        $this->fechaReg = $fechaReg;
    }
    
    //getter and setters
    
    function getId() {
        return $this->id;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getFechaNac() {
        return $this->fechaNac;
    }

    function getEmail() {
        return $this->email;
    }

    function getPass() {
        return $this->pass;
    }

    function getFechaReg() {
        return $this->fechaReg;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setFechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setFechaReg($fechaReg) {
        $this->fechaReg = $fechaReg;
    }



}
