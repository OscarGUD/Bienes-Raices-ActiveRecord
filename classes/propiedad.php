<?php

namespace App;

class Propiedad extends ActiveRecord {

    protected static $tabla = 'propiedades';
    protected static $columnasDB = ['id', 'titulo', 'precio','imagen', 'descripccion', 'habitaciones', 'wc','estacionamiento','creado','vendedorId'];
    
    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripccion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedorId;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripccion = $args['descripccion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ??'';
        $this->creado = date('Y/m/d');
        $this->vendedorId = $args['vendedorId'] ?? '';

    }

    public function validar(){

        if(!$this->titulo) {
            self::$errores[] = "Debes añadir un titulo";
        };

        if(!$this->precio) {
            self::$errores[] = "Debes añadir un precio";
        };

        if(!$this->descripccion){
            self::$errores[] = "La descripccion es obligatorio ";
        };

        if(!$this->habitaciones) {
            self::$errores[] = "El numero de habitaciones es obligatorio";
        };

        if(!$this->wc) {
            self::$errores[] = "El numero de baños es obligatorio";
        };

        if(!$this->estacionamiento) {
            self::$errores[] = "El numero de lugares de estacionamiento es obligatorio";
        };

        if(!$this->vendedorId) {
            self::$errores[] = "Elige un vendedor";
        };


        if (!$this->imagen) {
            self::$errores[] = "La imagen de la propiedad es obligatoria";
        };

        return self::$errores;
    }
}