<?php

class Marcas extends CActiveRecord
{
    public static function model($ClassName=__CLASS__)
    {
        return parent::model($ClassName);
    }

    public function tableName(){
        //Se le indica cual es tabla de la BD le pertenece a este modelo
        return "marcas";
    }

    public function rules(){
        //Se definen las reglas para las validaciones del modelo
        return array(
            array('id_marca', 'required'),
			array('id_marca', 'numerical', 'integerOnly'=>true),
			array('marca', 'length', 'max'=>50),
        );
    }

    public function relations()
	{
        //Se definen las relaciones entre la tabla marcas y productos
		return array(
			'productos' => array(self::HAS_MANY, 'Productos', 'id_marca'),
		);
	}
}