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
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<?php
require("db.php");
$id =$_REQUEST['BookID'];

$result = mysql_query("SELECT * FROM example WHERE BookID  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$Title=$test['Title'] ;
				$Author= $test['Author'] ;					
				$PublisherName=$test['PublisherName'] ;
				$CopyrightYear=$test['CopyrightYear'] ;

if(isset($_POST['save']))
{	
	$title_save = $_POST['title'];
	$author_save = $_POST['author'];
	$name_save = $_POST['name'];
	$copy_save = $_POST['copy'];

	mysql_query("UPDATE example SET Title ='$title_save', Author ='$author_save',
		 PublisherName ='$name_save',CopyrightYear ='$copy_save' WHERE BookID = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: index.php");			
}
mysql_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
<title>phptaab.blogspot.in</title>
</head>

<body>
<form method="post">
<table>
	<tr>
		<td>Title:</td>
		<td><input type="text" name="title" value="<?php echo $Title ?>"/></td>
	</tr>
	<tr>
		<td>Author</td>
		<td><input type="text" name="author" value="<?php echo $Author ?>"/></td>
	</tr>
	<tr>
		<td>Publisher Name</td>
		<td><input type="text" name="name" value="<?php echo $PublisherName ?>"/></td>
	</tr>
	<tr>
		<td>Copyright Year</td>
		<td><input type="text" name="copy" value="<?php echo $CopyrightYear ?>"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>