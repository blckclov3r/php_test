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
        <link rel="stylesheet" type="text/css" href="css/addupdate-style.css">
    </head>
    <body>
    	<div class="jumbotron">
    		<center><h3>Employee Add / Edit</h3></center>
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
					        		<table class="table table-responsive">
						        		<tr>
						        			<td>
						        				<p><center>Name</center></p>
						        			</td>
						        			<td>
						        				<input class="form-control" placeholder="Fullname" name="fname" type="text" value="<?php echo $row['name'];?>">
						        			</td>
						        		</tr>
						        		<tr>
						        			<td>
						        				<p><center>Email</center></p>
						        			</td>
						        			<td>
						        				<input class="form-control" placeholder="Email" name="email" type="text" value="<?php echo $row['email'];?>">
						        			</td>
						        		</tr>
						        		<tr>
						        			<td
						        				<p><center>Phone</center></p>
						        			</td>
						        			<td>
						        				<input class="form-control" placeholder="Phone" name="phone" type="text" value="<?php echo $row['phone'];?>">
						        			</td>
						        		</tr>
						        		<tr>
						        			<td
						        				<p><center>Address</center></p>
						        			</td>
						        			<td>
						        				<textarea class="form-control" name="address" placeholder="Address" type="text">
						        					<?php
						        						echo $row['address'];
						        					?>
						        				</textarea>
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
						        					<option  value="full-time">Fulltime</option>
						        					<option  value="part-time">Parttime</option>
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
        		<?php	} else{ ?>

        						<form method="POST" action="action.php">
	        		<table class="table table-responsive">
		        		<tr>
		        			<td>
		        				<p><center>Name</center></p>
		        			</td>
		        			<td>
		        				<input class="form-control" placeholder="Fullname" name="fname" type="text">
		        			</td>
		        		</tr>
		        		<tr>
		        			<td>
		        				<p><center>Email</center></p>
		        			</td>
		        			<td>
		        				<input class="form-control" placeholder="Email" name="email" type="text">
		        			</td>
		        		</tr>
		        		<tr>
		        			<td
		        				<p><center>Phone</center></p>
		        			</td>
		        			<td>
		        				<input class="form-control" placeholder="Phone" name="phone" type="text">
		        			</td>
		        		</tr>
		        		<tr>
		        			<td
		        				<p><center>Address</center></p>
		        			</td>
		        			<td>
		        				<textarea class="form-control" name="address" placeholder="Address" type="text">
		        				</textarea>
		        			</td>
		        		</tr>
		        		<tr>
		        			<td
		        				<p><center>Gender</center></p>
		        			</td>
		        			<td>
		        				<input type="radio" name="sex" value="male">&nbsp;Male&nbsp;&nbsp;
		        				<input type="radio" name="sex" value="female">&nbsp;Female
		        			</td>
		        		</tr>
		        		<tr>
		        			<td
		        				<p><center>Employee type</center></p>
		        			</td>
		        			<td>
		        				<select class="form-control" name="employeeType">
		        					<option  value="full-time">Fulltime</option>
		        					<option  value="part-time">Parttime</option>
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