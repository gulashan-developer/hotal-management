<?php include 'header.php'; ?>
<?php
error_reporting(0);
extract($_POST);
if (isset($save))
{
	// echo "<pre>";
	// print_r($_POST);
	# code...
	$name=$_FILES['pic']['name'];
	$temp=$_FILES['pic']['tmp_name'];
	if(move_uploaded_file($temp, "../assets/uploads/$name"))
	{
		if(mysqli_query($way, "INSERT INTO `services`(`ser_title`, `ser_desc`, `pic`) VALUES ('$s_title', '$s_desc', '$name')"))
		{
			echo "Service Added";
		}
		else{
			echo "Service Not Added";
		}
	}
	else{
			echo "Upload Service images Added";
		}
} 
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		<form method="post" enctype="multipart/form-data">
	     <div class="mb-3">
           <label for="formGroupExampleInput" class="form-label">Service Title</label>
           <input type="text" class="form-control" id="formGroupExampleInput" name="s_title">
          </div>           
           <div class="mb-3">
           <label for="formGroupExampleInput2" class="form-label">Service Description</label>
           <input type="text" class="form-control" id="formGroupExampleInput2" name="s_desc">
           </div>
            <div class="mb-3">
           <label for="formGroupExampleInput2" class="form-label">Upload Picture</label>
           <input type="file" class="form-control" value="Add Service" name="pic">
           </div>
           <div class="mb-3">
           <input type="submit" class="form-control btn btn-primary" value="Add Service" name="save">
           </div>
           </form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
<?php include 'footer.php'; ?>