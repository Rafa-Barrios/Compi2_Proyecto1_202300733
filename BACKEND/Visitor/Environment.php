<?php

namespace Visitor;

class Environment {

    private $values = [];       // variables
    private $constants = [];    // constantes
    private $parent;

    public function __construct($parent = null) {
        $this->parent = $parent;
    }

    /*
    ========================
    DEFINIR VARIABLE
    ========================
    */
    public function define($name, $value) {

        if (array_key_exists($name, $this->values) || array_key_exists($name, $this->constants)) {
            throw new \Exception("El identificador '$name' ya está definido en este scope.");
        }

        $this->values[$name] = $value;
    }

    /*
    ========================
    DEFINIR CONSTANTE
    ========================
    */
    public function defineConst($name, $value) {

        if (array_key_exists($name, $this->values) || array_key_exists($name, $this->constants)) {
            throw new \Exception("El identificador '$name' ya está definido en este scope.");
        }

        $this->constants[$name] = $value;
    }

    /*
    ========================
    OBTENER IDENTIFICADOR
    ========================
    */
    public function get($name) {

        if (array_key_exists($name, $this->values)) {
            return $this->values[$name];
        }

        if (array_key_exists($name, $this->constants)) {
            return $this->constants[$name];
        }

        if ($this->parent !== null) {
            return $this->parent->get($name);
        }

        throw new \Exception("Identificador '$name' no definido.");
    }

    /*
    ========================
    ASIGNAR VARIABLE
    ========================
    */
    public function assign($name, $value) {

        // si es constante en este scope → error
        if (array_key_exists($name, $this->constants)) {
            throw new \Exception("No se puede modificar la constante '$name'.");
        }

        // si es variable en este scope → asignar
        if (array_key_exists($name, $this->values)) {
            $this->values[$name] = $value;
            return;
        }

        // revisar scopes padres
        if ($this->parent !== null) {
            $this->parent->assign($name, $value);
            return;
        }

        throw new \Exception("Variable '$name' no definida.");
    }

    /*
    ========================
    CREAR NUEVO SCOPE
    ========================
    */
    public function createChild() {
        return new Environment($this);
    }
}