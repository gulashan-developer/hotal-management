<?php 
	include("header.php"); 

	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		mysqli_query($way,"UPDATE sign_up set status=1 WHERE id='$id'");
	}
	
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<br/>
				<div style="text-align: center; font-size: 25px;">
					User List
				</div>
				<br/>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<?php 

					$data=mysqli_query($way,"SELECT * FROM `sign_up` WHERE type='user'");
					// echo "<pre>";
					// print_r($data);

				?>
				<table class="table table-hover">
 					<tr>
 						<th>Id</th>
 						<th>Full Name</th>
 						<th>Email Id</th>
 						<th>Mobile Number</th>
 						<th>Password</th>
 						<th>Pic</th>
 						<th>Status</th>
 					</tr>	
 					<?php
 						while ($row=mysqli_fetch_array($data,MYSQLI_ASSOC)) {
						// code...
						// echo "<pre>";
						// print_r($row);
						$id=$row['id'];
						$f_name=$row['f_name'];
						$email_id=$row['email_id'];
						$mob_no=$row['mob_no'];
						$pass=$row['pass'];
						$type=$row['type'];
						$pic=$row['pic'];
						$status=$row['status'];
						?>
							<tr>
								<td><?php echo $id;?></td>
								<td><?php echo $f_name;?></td>
								<td><?php echo $email_id;?></td>
								<td><?php echo $mob_no;?></td>
								<td><?php echo $pass;?></td>
								<td><?php echo $pic;?></td>
								<td>
									<?php 
										if($status==0)
										{
											?>
											<a href="?id=<?php echo $id ;?>"><img src="../assets/gallery/red.jpg" style="border-style: solid; width:50px;height: 50px; border-radius:50rem">
											</a>
											<?php
										}
										if($status==1)
										{
											?>
											<img src="../assets/gallery/green.jpg" style="border-style: solid; width:50px;height: 50px; border-radius:50rem">
											<?php
										}
									?>
								</td>

							</tr>	
						<?php
					}
 					?>
				</table>

			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
<?php include("footer.php"); ?>