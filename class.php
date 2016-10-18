<?php require_once ('inc/header.php'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
				<h1> Student Management System </h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<?php require_once ('sidebar.php'); ?>
				</div>
				<div class="col-md-9">
				
				
				<?php 
						use Illuminate\Database\Capsule\Manager as DB;

						$class = DB::table('class')->get();
						

			
?>
					<table class="table">
						<thead>
							<tr>
								<th>
									Serial
								</th>
								<th>
									Name
								</th>
								<th>
									Action
								</th>
								
							</tr>
						</thead>
						<tbody>
						<?php foreach($class as $items) : ?>
							<tr>
								<td>
									<?php echo $items->id; ?>
								</td>
								<td>
									<?php echo $items->class; ?>
								</td>
								
								<td>
									<a href="#">Update</a> | <a href="#">Delete</a>
								</td>
							</tr>
							<?php endforeach; ?>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	

<?php require_once ('inc/footer.php'); ?>
    