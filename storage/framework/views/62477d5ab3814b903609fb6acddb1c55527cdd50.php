<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet"> 
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=BenchNine&family=Monoton&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <title>MyNameIsTravel</title>
</head>
<body class="cuerpo">
    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    
    <div>
        <nav class="navegador"> 
			<a class="hola" href="<?php echo e(route('home')); ?>"> Home </a>
			<a class="hola" href="<?php echo e(route('about')); ?>"> About me </a>
			<a class="hola" href="<?php echo e(route('destination')); ?>"> Destinations </a>
			<a class="hola" href="<?php echo e(route('contact')); ?>"> Contact me </a>
		</nav>	    
    </div>

    <!-- home -->

    <div>
        <?php echo $__env->yieldContent('image'); ?>
    </div>

    <div>
        <?php echo $__env->yieldContent('topics'); ?>
    </div>
    <div>
        <?php echo $__env->yieldContent('imagetopics'); ?>
    </div>

    




    <!-- ABOUT ME -->

    <div>
        <?php echo $__env->yieldContent('about'); ?>
    </div>

    <!-- -DESTINATIONS -->

    <div>
        <?php echo $__env->yieldContent('cuadrado'); ?>
    </div>

    <!-- CONTACT ME -->
    <div>
        <?php echo $__env->yieldContent('formulario'); ?>
    </div>

    <!-- FOOTER -->

    <div>
        <?php echo $__env->yieldContent('footer'); ?>
    </div>
     
    
</body>
</html><?php /**PATH /var/www/html/mynameistravel/resources/views/navegador.blade.php ENDPATH**/ ?>