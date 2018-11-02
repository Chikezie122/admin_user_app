<?php $__env->startSection('content'); ?>

	<ul>
		
		<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
			<div>
				<img height="50px" width="50px" src="<?php echo e($post->path); ?>" alt="The uploaded image">
			</div>

			<li><a href="<?php echo e(route('posts.show', $post->id)); ?>"><?php echo e($post->title); ?></a></li>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



	</ul>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>