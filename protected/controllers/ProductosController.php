<?php
class ProductosController extends Controller{
    public function filters()
	{
		return array(
			'accessControl',
		);
	}

    public function accessRules()
	{
        //Se definen las reglas para el acceso a las rutas
		return array(
			array('allow',
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow',
				'actions'=>array('create','update', 'delete'),
				'users'=>array('@'),
			),
			array('deny',  
				'users'=>array('*'),
			),
		);
	}

    public function actionIndex(){        

        $criteria=new CDbCriteria();
        $count=Productos::model()->count($criteria);
        $pages=new CPagination($count);

        //Se indica el tamaño de la paginación
        $pages->pageSize=3;
        $pages->applyLimit($criteria);

        //Se obtiene la lista de productos
        $productos=Productos::model()->findAll($criteria);

        $this->render('index', array(
            'productos' => $productos,
            'pages' => $pages
        ));
    }

    public function actionCreate(){
        $model = new Productos();

        if (isset($_POST["Productos"])) {
            //Se asignan los atributos y se hace set de los campos de la base de datos
            $model->attributes = $_POST["Productos"];
            if ($model->save()) {
                $this->redirect(array("index"));
            }
        }

        $this->render("create", array("model" => $model));
    }

    public function actionUpdate($id){
        //Se consulta a la base de datos el producto con el id recibido
        $model = Productos::model()->findByPK($id);
        
        //Se compara si se cuenta con un Request POST para decidir si se hace una insersion a la BD o solo se renderiza la vista
        if (isset($_POST["Productos"])) {
            $model->attributes = $_POST["Productos"];
            if ($model->save()) {
                $this->redirect(array("index"));
            }
        }
        $this->render("update", array("model" => $model));
    }

    public function actionDelete($id){
        //Se consulta de la BD el registro con el id recibido y se hace el borrado
        $model = Productos::model()->deleteByPK($id);
        $this->redirect(array("index"));
    }

    public function actionView($id){
        //Se consulta de la BD el producto con el id recibido y se manda a la vista
        $model = Productos::model()->findByPK($id);
        $this->render("view", array("model" => $model));
    }

    
}