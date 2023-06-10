<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Sistema <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<br>

<p>Instrucciones:</p>
<ul>
	<li>La parte del LOGIN no identifique la encriptación que usan en los usuarios registrados en su archivo test.sql. Deje la consulta de la contraseña en texto plano,
		registrar usuario en la BD con un password en texto plano y acceder.
	</li>
</ul>

