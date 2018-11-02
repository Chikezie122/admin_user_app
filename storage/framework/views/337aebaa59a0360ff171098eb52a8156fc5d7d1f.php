<?php $__env->startSection('content'); ?>

	<h1>Edit Posts</h1>

	<!-- <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="post"> -->

	<?php echo Form::model($post, ['method'=>'PATCH', 'action'=> ['PostController@update', $post->id]]); ?>



		<?php echo e(csrf_field()); ?>


		<?php echo Form:: label('title', 'Title:'); ?>

		<?php echo Form:: text('title', null, ['class' => 'form-control']); ?>


		<?php echo Form:: label('content', 'Content:'); ?>

		<?php echo Form:: textarea('content', null, ['class' => 'form-control']); ?>

		
		<?php echo Form:: submit('Update Posts', ['class' => 'btn btn-info']); ?>


	<br>

	<!-- </form> -->

	<?php echo Form::close(); ?>

	
	<!-- <form method="post" action="<?php echo e(route('posts.destroy', $post->id)); ?>"> -->

	<?php echo Form::model($post, ['method' => 'DELETE', 'action' => ['PostController@destroy', $post->id]]); ?>

		
		<br>
		 
		 <?php echo e(csrf_field()); ?>


		 <?php echo Form:: submit('Delete Post', ['class' => 'btn btn-primary']); ?>

<!-- 
	</form> -->
	<?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>