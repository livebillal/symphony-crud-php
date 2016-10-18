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
					// select data
						$departments = DB::table('departments')->get();
						
					// delete data
					//DB::table('departments')->where('id', '=', $id)->delete();
						
						

			
?>
					<table class="table">
						<thead>
							<tr>
								<th>
									Serial
								</th>
								<th>
									Department Name
								</th>
								<th>
									Action
								</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($departments as $items) : ?>
							<tr>
								<td>
									<?php echo $items->id; ?>
								</td>
								<td>
									<?php echo $items->name; ?>
								</td>
								
								<td>
									<a href="department_u.php?id=<?php echo $items->id; ?>">Update</a> | <a href="department_d.php?id=<?php echo $items->id; ?>">Delete</a>
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
    