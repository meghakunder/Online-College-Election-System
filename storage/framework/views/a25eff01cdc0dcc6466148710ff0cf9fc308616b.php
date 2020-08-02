<!DOCTYPE html>
<html>
<head>
	<title>Select</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript">
		function preventBack(){ window.history.forward(); }
		setTimeout("preventBack()",0);
		window.onunload =function () { null };
	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontside/css/bootstrap.css')); ?>">
	<style>
	.container{
		border: 2px solid black;
		width: 35%;
		height: wrap-content;
		text-align: center;
		margin-top: 130px;
		background: rgba(211,211,211,0.5);
		font-size: 10px;
		padding-right: 1;
	}
	</style>
</head>
<body background ="<?php echo e(asset('frontside\images\bg.jpg')); ?>" style="background-repeat: no-repeat; background-size: cover; text-align: center;" >
	<div class="container">
	<form method= "post" action="/selectqry" style="width: wrap-content">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<input type="hidden" name="id" value="<?php echo e(csrf_token()); ?>"><br>
			<label><h4>Name</h4></label>
			<input type="text" name="name" class="form-control" value="<?php echo e($value->name); ?>" readonly style="font-size: 18px;"><br>
			<label><h4>Regno</h4></label>
			<input type="number" name="regno" class="form-control" value="<?php echo e($value->regno); ?>" readonly style="font-size: 18px;"><br>
			<label><h4>Date</h4></label>
			<input type="date" name="date" class="form-control" value="<?php echo e($value->date); ?>" style="font-size: 18px;"><br>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<input type="submit" name ="add" class="btn btn-info" value="Insert"><br><br>
		</form>
	</div>
</body>
</html><?php /**PATH C:\wamp64\www\election\resources\views/select.blade.php ENDPATH**/ ?>