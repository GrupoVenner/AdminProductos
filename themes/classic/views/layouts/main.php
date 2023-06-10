<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Productos</title>

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
      
    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" rel="stylesheet">
    
    <!-- For icons -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
    <!-- Navigation -->
    <nav id="topNav" class="navbar navbar-full navbar-static-top navbar-dark bg-inverse m-b-1">
        <button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="collapse" data-target="#navbar">
            &#9776;
        </button>
        <a class="navbar-brand" href="#"><img src="https://www.truper.com/skin/frontend/glam/default/images/logo_header.png" alt="logo"></a>
        <div class="collapse navbar-toggleable-sm" id="navbar">
            <ul class="nav navbar-nav">
                <li class="nav-link">
				<?php $this->widget('zii.widgets.CMenu',array(
        		    'htmlOptions' => array("class" => "nav-item"),
					'items'=>array(
						array('label'=>'Home', 'url'=>array('/site/index')),
						/* array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>'Contact', 'url'=>array('/site/contact')), */
						array('label'=>'Productos', 'url'=>array('/productos/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
                    
                </li>
           
                
            </ul>
        </div>
    </nav>


<div class="container-fluid">

		<div class="col-sm-3">
		</div><!--/Left Column-->
  
		<!-- Center Column -->
		<div class="col-sm-6">
            <?php echo $content; ?>
		</div><!--/Center Column-->

	  <!-- Right Column -->
	  <div class="col-sm-3">

	  </div><!--/Right Column -->

	</div><!--/container-fluid-->
	
	<footer>        
        <div class="small-print">
        	<div class="container">
        		<p><a href="https://www.truper.com/">Truper</a> | <a href="https://www.truper.com/terminos-y-condiciones">Terminos y condiciones</a> | <a href="https://www.truper.com/contacts/">Contacto</a></p>
        		<p>Copyright &copy; Azareel Izaguirre <?php echo date("Y"); ?> </p>
        	</div>
        </div>
	</footer>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

    <!-- Tether -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

    <!-- Bootstrap 4 JavaScript. This is for the alpha 3 release of Bootstrap 4. This should be updated when Bootstrap 4 is officially released. -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>

    <!-- Initialize Bootstrap functionality -->
    <script>
    // Initialize tooltip component
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

    // Initialize popover component
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
    </script> 
    
	<!-- Placeholder Images -->
	<script src="js/holder.min.js"></script>
	
</body>

</html>
