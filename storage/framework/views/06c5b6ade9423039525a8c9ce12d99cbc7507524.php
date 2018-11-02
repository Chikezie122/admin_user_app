<?php $__env->startSection('content'); ?>


	<h1><a href="<?php echo e(route('posts.edit', $post->id)); ?>"><?php echo e($post->title); ?> </a></h1>
	<p><?php echo e($post->content); ?></p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>