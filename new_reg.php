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

$name = $class = $roll = $address = $mobile = $date = "";
$departments = "0";

if (isset($_POST['submit'])) {
	
	$name 		= $_POST['name'];
	$class 		= $_POST['class'];
	$department = $_POST['department'];
	$roll 		= $_POST['roll'];
	$address 	= $_POST['address'];
	$mobile 	= $_POST['mobile'];
	$date 		= $_POST['date'];
	
	DB::table('students')->insert(
    array(
		'name' => $name,
		'class' => $class,
		'department' => $department,
		'roll' => $roll,
		'address' => $address,
		'mobile' => $mobile,
		'date' => $date
	));

	
}

?>
					<form name="registration" action="" method="post">
					<table class="table">
					
							<tr>
						
								<td>
									Name
								</td>
								<td>
									<input type="text" name="name" value="<?php echo $name ?>">
								</td>
								</tr>
								<tr>
								<td>
									Class
								</td>
								<td>
								
								
								
									<select name="class">
										<option value="">Select</option>
										<?php
								
								$class = DB::table('class')->get();
						

			foreach($class as $item) : 
								
								?>
										<option value="<?php echo $item->id; ?>"><?php echo $item->class; ?></option>
										
										<?php endforeach; ?>
									</select>
								
								</td>
								</tr><tr>
								<td>
									Departments
								</td>
								<td>
									<select name="department">
										<option value="">Select</option>
										
										<?php
								
								$departments = DB::table('departments')->get();
						

			foreach($departments as $items) : 
								
								?>
										
										<option value="<?php echo $items->id; ?>"><?php echo $items->name; ?></option>
										
										<?php endforeach; ?>
									</select>
								</td>
								</tr><tr>
								<td>
									Roll
								</td>
								<td>
									<input type="text" name="roll" value="<?php echo $roll; ?>">
								</td>
								</tr><tr>
								<td>
									Address
								</td>
								<td>
									<textarea name="address" row="4" col="50"><?php echo $address; ?></textarea>
								</td>
								</tr><tr>
								<td>
									Mobile
								</td>
								<td>
									<input type="text" name="mobile" value="<?php echo $mobile; ?>">
								</td>
								</tr><tr>
								<td>
									Date
								</td>
								<td>
									<input type="text" name="date" value="<?php echo $date; ?>">
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
<?php 



?>
<?php require_once ('inc/footer.php'); ?>
    
	
	

