<?php

class Productos extends CActiveRecord
{
    public static function model($ClassName=__CLASS__)
    {
        return parent::model($ClassName);
    }

    public function tableName(){
        //Se le indica cual es tabla de la BD le pertenece a este modelo
        return "productos";
    }

    public function rules(){
        //Se definen las reglas para las validaciones del modelo
        return array(
            array('id_marca, stock', 'numerical', 'integerOnly'=>true),
			array('codigo, sku', 'length', 'max'=>10),
			array('nombre, descripcion', 'length', 'max'=>255),
            array('nombre', 'required'),
            array('nombre', 'required'),
            array('codigo', 'required'),
            array('sku', 'required'),
            array('id_marca', 'required'),
            array('descripcion', 'required'),
            array('stock', 'required')
        );
    }

    public function relations()
	{
		return array(
			'idMarca' => array(self::BELONGS_TO, 'Marcas', 'id_marca'),
		);
	}
}