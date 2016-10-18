<?php require_once ('inc/header.php'); ?>


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
				
				$name = "";
						use Illuminate\Database\Capsule\Manager as DB;
						
						
					//$departments = DB::table('departments')->where('id', $id)->update(array('name' => $name));
					
					
					
					
					
					$departments = DB::table('departments')->get();

			
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
									<a href="#">Update</a> | <a href="department_d.php?id=<?php echo $items->id; ?>">Delete</a>
								</td>
							</tr>
							<?php endforeach; ?>
							
						</tbody>
					</table>
					
					
					
<form name="registration" action="" method="post">
					<table class="table">
					
							<tr>
						
								<td>
									Department Name
								</td>
								<td>
									<input type="text" name="name" value="<?php echo $name ?>">
								</td>
								</tr>
								
								<tr>
								<td></td>
								<td><input type="submit" name="submit" value="Submit"></td>
								</tr>
								
								
						

					</table>
					</form>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
				</div>
			</div>
		</div>
	</div>
	

<?php require_once ('inc/footer.php'); ?>
    




