<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('css/materialize.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
</head>
<body>







<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="<?php echo e(asset('js/materialize.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/home.js')); ?>"></script>


</body>

</html>
<?php echo $__env->make('bodyHome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.sidenav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>