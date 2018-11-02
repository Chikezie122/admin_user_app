<?php $__env->startSection('content'); ?>
	
	<h1>Create Posts</h1>

<!-- 	<form action="<?php echo e(url('/posts')); ?>" method="post"> -->
	<?php echo Form:: open(['method' => 'POST', 'action' => 'PostController@store', 'files' => true]); ?>


		<div class="form-group">
			
			<?php echo Form:: label('title', 'Title:'); ?>

			<?php echo Form:: text('title', null, ['class'=>'form-control']); ?>


		</div>
		
		<br>

		<div class="form-group">
			
			<?php echo Form:: label('content', 'Content:'); ?>

			<?php echo Form:: textarea('content', null, ['class'=>'form-control']); ?>


		</div>

		<div class="form-group">
			
			<?php echo Form:: file('file', null, ['class'=>'form-control']); ?>


		</div>



		

		<?php echo Form:: submit('Create Posts', ['class' => 'btn btn-primary']); ?>

	

	<!-- </form> -->

	<?php echo Form:: close(); ?>


	<?php if(count($errors) > 0): ?>
		
		<div class = 'alert alert-danger'>
			
			<ul>
				
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					
					<li> <?php echo e($error); ?> </li>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</ul>

		</div>

	<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>