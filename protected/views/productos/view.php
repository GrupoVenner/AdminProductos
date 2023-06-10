<?php echo CHtml::link("Regresar a la lista", array("index"), array("class" => "btn btn-info")); ?>
<br><br>
<h1>Detalles del producto</h1>
<br>
<table class="table">
    <tr>
        <td><b>Id Producto</b></td>
        <td><?php echo $model->id_producto; ?></td>
    </tr>
    <tr>
        <td><b>Código</b></td>
        <td><?php echo $model->codigo; ?></td>
    </tr>
    <tr>
        <td><b>SKU</b></td>
        <td><?php echo $model->sku; ?></td>
    </tr>
    <tr>
        <td><b>Nombre</b></td>
        <td><?php echo $model->nombre; ?></td>
    </tr>
    <tr>
        <td><b>MArca</b></td>
        <td><?php echo $model->idMarca->marca;; ?></td>
    </tr>
    <tr>
        <td><b>Descripción</b></td>
        <td><?php echo $model->descripcion; ?></td>
    </tr>
    <tr>
        <td><b>Stock</b></td>
        <td><?php echo $model->stock; ?></td>
    </tr>
</table>