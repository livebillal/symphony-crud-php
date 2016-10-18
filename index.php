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

						$students = DB::table('students')->get();
						

			
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
									Class
								</th>
								<th>
									Departments
								</th>
								<th>
									Roll
								</th>
								<th>
									Address
								</th>
								<th>
									Mobile
								</th>
								<th>
									Date
								</th>
								<th>
									Action
								</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($students as $items) :  ?>
							<tr>
								<td>
									<?php echo $items->id; ?>
								</td>
								<td>
									<?php echo $items->name; ?>
								</td>
								<td>
									<?php echo $items->class; ?>
								</td>
								<td>
									<?php echo $items->department; ?>
								</td>
								<td>
									<?php echo $items->roll; ?>
								</td>
								<td>
									<?php echo $items->address; ?>
								</td>
								<td>
									<?php echo $items->mobile; ?>
								</td>
								<td>
									<?php echo $items->date; ?>
								</td>
								<td>
									<a href="#">Update</a> | <a href="students_d.php?id=<?php echo $items->id; ?>">Delete</a>
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
    

	
	
