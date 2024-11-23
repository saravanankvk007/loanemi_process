<?php $__env->startSection('content'); ?>


<div class="container">
<!-- main app container -->
<div class="readersack">
 
	<div class="row">
	  <div class="col-md-9 offset-md-1">
		<h3>EMI  Details</h3>
		
		<div class="button-container mt-5">
		
			<a href="<?php echo e(url('/loan-details')); ?>" class="btn btn-primary"> Loan Details</a>
		 
		<button type='button' class="btn btn-secondary" onclick="submitForm()">Process Data</button>
	  </div>
		 
		
		 </p>
		 
		<div class="container mt-5"> 
		<form method="POST" id='myForm' action="/process-emi">
			<?php echo csrf_field(); ?>
			
		</form>
		</div>

		<div class="container mt-5">
			<div class="table-responsive">
			  <table class="table table-striped table-hover table-bordered">
				<thead class="table-dark">
				  <tr>
					<th>Client ID</th>
					<?php $__currentLoopData = $emiDetails[0] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($column != 'clientid'): ?>
							<th><?php echo e($column); ?></th>
						<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $emiDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($row->clientid); ?></td>
						<?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($column != 'clientid'): ?>
								<td><?php echo e($value); ?></td>
							<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			  </table>
			</div>
		</div>
	  </div>
	</div>
  
</div>
<!-- credits -->
</div>
    <script>
    function submitForm() {
      document.getElementById('myForm').submit();
    }
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Laravel-MyTesting-Learn\Emi_processing\resources\views/loan/emi.blade.php ENDPATH**/ ?>