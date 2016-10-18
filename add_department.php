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

$name = "";


if (isset($_POST['submit'])) {

	$name 		= $_POST['name'];
	
	
	DB::table('departments')->insert(
    array(
		'name' => $name
	));
	

	
}

?>
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
<?php 



?>
<?php require_once ('inc/footer.php'); ?>
    
	
	

