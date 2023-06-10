<h1>Productos registrados</h1>
<br>
<?php echo CHtml::link("Registrar Producto", array("create"), array("class" => "btn btn-info")); ?>
<br><br>
<table class="table">
    <thead>
        <tr>
            <th>Id producto</th>
            <th>Código</th>
            <th>SKU</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php foreach ($productos as $producto): ?>
            <td><?php echo $producto->id_producto; ?></td>
            <td><?php echo $producto->codigo; ?></td>
            <td><?php echo $producto->sku; ?></td>
            <td><?php echo $producto->nombre; ?></td>
            <td><?php echo $producto->idMarca->marca; ?></td>
            <td><?php echo $producto->stock; ?></td>
            <td>
            <?php echo CHtml::link("Detalles", array("view", "id" => $producto->id_producto), array("class" => "btn btn-sm btn-primary")); ?>
                <?php echo CHtml::link("Editar", array("update", "id" => $producto->id_producto), array("class" => "btn btn-sm btn-warning"))?>
                <?php echo CHtml::link("Eliminar", array("delete", "id" => $producto->id_producto), array("confirm" => "¿Seguro que desea eliminar el producto?", "class" => "btn btn-sm btn-danger")); ?>
                
            </td>
        </tr>
<?php endforeach; ?>

    </tbody>
</table>
<?php $this->widget('CLinkPager', array(
    'pages' => $pages,
    'prevPageLabel'=>'< Anterior',
    'nextPageLabel'=>'Siguiente >',
)) ?>
<br><br>