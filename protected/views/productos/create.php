<?php echo CHtml::link("Regresar a la lista", array("index"), array("class" => "btn btn-info")); ?><br><br>
<div class="card text-white bg-secondary mb-3">
    <div class="card-header">REGISTRAR PRODUCTO</div>
    <div class="card-body">
        <br>
    <?php $form = $this->beginWidget("CActiveForm"); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <label for="codigo">Código</label>
                    <?php echo $form->textField($model, "codigo", array('class'=>'form-control')); ?>
                    <?php echo $form->error($model, "codigo"); ?>
                </div>
                <div class="col-md-4">
                <label for="sku">SKU</label>
                    <?php echo $form->textField($model, "sku", array('class'=>'form-control')); ?>
                    <?php echo $form->error($model, "sku"); ?>
                </div>
                <div class="col-md-4">
                <label for="nombre">Nombre</label>
                <?php echo $form->textField($model, "nombre", array('class'=>'form-control')); ?>
                <?php echo $form->error($model, "nombre"); ?>
                </div>
            </div>   
        </div><br>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <label for="id_marca">Selecciona una marca</label>
                    <?php echo $form->dropDownList($model,'id_marca', CHtml::listData(Marcas::model()->findAll(array('order' => 'id_marca')),'id_marca','marca'), array('class'=>'form-control'),); ?>
                    <?php echo $form->error($model, "id_marca"); ?>
                </div>
                <div class="col-md-4">
                    <label for="descripcion">Descripción</label>
                    <?php echo $form->textField($model, "descripcion", array('class'=>'form-control')); ?>
                    <?php echo $form->error($model, "descripcion"); ?>
                </div>
                <div class="col-md-4">
                    <label for="stock">Stock</label>
                    <?php echo $form->textField($model, "stock", array('class'=>'form-control')); ?>
                    <?php echo $form->error($model, "stock"); ?>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-12">
            <div class="col-md-4">
                <?php echo CHtml::submitButton("Registrar", array('class'=>'btn btn-success')) ?>
            </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endWidget(); ?>