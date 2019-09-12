<?php
	include 'action.php';
?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Add Update</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <body>
    	<div class="jumbotron">
    		<center><h2>Employee Add / Edit</h2></center>
    	</div>

        <div class="container">
        	<div class="col-md-2"></div>
        	<div class="col-md-8">
        		<?php
        			if(isset($_GET['update'])){
        				$id = $_GET['id'];
        				$where = array(
        					"id"=>$id
        				);
        				$row = $obj->select_record("employees",$where);
        				?>
        						<form method="POST" action="action.php">
        							<input type="hidden" name="id" value="<?php echo $row['id'];?>">
					        		<table class="table table-responsive">
						        		<tr>
						        			<td>
						        				<p><center>Name</center></p>
						        			</td>
						        			<td>
						        				<input type="text" class="form-control" placeholder="Fullname" name="fname" type="text" value="<?php echo $row['name'];?>" required />
						        			</td>
						        		</tr>
						        		<tr>
						        			<td>
						        				<p><center>Email</center></p>
						        			</td>
						        			<td>
						        				<input type="email" class="form-control" placeholder="Email" name="email" type="text" value="<?php echo $row['email'];?>"
						        				required />
						        			</td>
						        		</tr>
						        		<tr>
						        			<td
						        				<p><center>Phone</center></p>
						        			</td>
						        			<td>
						        				<input type="number" class="form-control" placeholder="Phone" name="phone" type="text" value="<?php echo $row['phone'];?>"
						        				required />
						        			</td>
						        		</tr>
						        		<tr>
						        			<td
						        				<p><center>Address</center></p>
						        			</td>
						        			<td>
						        				<input type="text" class="form-control" name="address" value="<?php echo $row['address'];?>" required /> 
						        			</td>
						        		</tr>
						        		<tr>
						        			<td
						        				<p><center>Gender</center></p>
						        			</td>
						        			<td>
						        				<input type="radio" name="sex" value="male" 
						        					<?php if($row['sex'] == 'male'){
						        							echo "checked";
						        						} 
						        					?>
						        				>&nbsp;Male&nbsp;&nbsp;
						        				<input type="radio" name="sex" value="female" 
						        					<?php
						        						if($row['sex'] == 'female'){
						        							echo 'checked';
						        						}
						        					?>
						        				>&nbsp;Female
						        			</td>
						        		</tr>
						        		<tr>
						        			<td
						        				<p><center>Employee type</center></p>
						        			</td>
						        			<td>
						        				<select class="form-control" name="employeeType">
						        					<option value="<?php echo $row['employeeType'];?>">
						        						<?php echo $row['employeeType'];?>
						        					</option>
						        					<option  value="full-time">full-time</option>
						        					<option  value="part-time">part-time</option>
						        				</select>
						        			</td>
						        		</tr>
						        		<tr>
						        			<td></td>
						        			<td align="center">
						        				<input class="btn btn-info" type="submit" name="update" value="Update">
						        			</td>
						        		</tr>
					        		</table>
					        	</form>
        		<?php	} else{ ?>

        						<form method="POST" action="action.php">
	        		<table class="table table-responsive">
		        		<tr>
		        			<td>
		        				<p><center>Name</center></p>
		        			</td>
		        			<td>
		        				<input type="name" class="form-control" placeholder="Fullname" name="fname" type="text" required />
		        			</td>
		        		</tr>
		        		<tr>
		        			<td>
		        				<p><center>Email</center></p>
		        			</td>
		        			<td>
		        				<input type="email" class="form-control" placeholder="Email" name="email" type="text" required />
		        			</td>
		        		</tr>
		        		<tr>
		        			<td
		        				<p><center>Phone</center></p>
		        			</td>
		        			<td>
		        				<input type="number" class="form-control" placeholder="Phone" name="phone" type="text" required />
		        			</td>
		        		</tr>
		        		<tr>
		        			<td
		        				<p><center>Address</center></p>
		        			</td>
		        			<td>
		        				<input type="text" class="form-control" name="address" placeholder="Address" required /> 
		        			</td>
		        		</tr>
		        		<tr>
		        			<td
		        				<p><center>Gender</center></p>
		        			</td>
		        			<td>
		        				<input type="radio" name="sex" value="male" checked="checked">&nbsp;Male&nbsp;&nbsp;
		        				<input type="radio" name="sex" value="female">&nbsp;Female
		        			</td>
		        		</tr>
		        		<tr>
		        			<td
		        				<p><center>Employee type</center></p>
		        			</td>
		        			<td>
		        				<select class="form-control" name="employeeType">
		        					<option  value="full-time">full-time</option>
		        					<option  value="part-time">part-time</option>
		        				</select>
		        			</td>
		        		</tr>
		        		<tr>
		        			<td></td>
		        			<td align="center">
		        				<input class="btn btn-primary" type="submit" name="submit" value="Save">
		        			</td>
		        		</tr>
	        		</table>
	        	</form>
        		<?php		}

        		?>
        		
        	</div>
        	<div class="col-md-2"></div>
        </div>
        <div style="display: block; content:''; clear: both;">

       
        
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>