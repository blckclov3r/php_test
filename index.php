<?php
    include 'action.php';
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
       
    </head>
    <body>
        
		<div class="jumbotron">
    		<center><h3>Employee List</h3></center>
    	</div>

    	<div class="container">

    		
    		<div class="btnAddNew">
    			<a href="employee-form.php?add" type="button" class="btn btn-info">Add New</a>
    		</div>
    	
    		<div style="display: block; content:''; clear: both;">
    		<br/>
    		<div class="col-md-1"></div>
    		<div class="col-md-10">
    			<form method="POST" action="">
    				<table class="table table-hover table-bordered table-responsive d-table-cell">
    					<tr>
    						<th>#</th>
    						<th>Name</th>
    						<th>Email</th>
    						<th>Phone</th>
    						<th>Sex</th>
    						<th>Employee type</th>
    						<th>Action</th>
    					</tr> 
                        <?php
                            $myrow = $obj->fetch_record("employees");
                            foreach ($myrow as $row) {
                                ?>
                                     <tr>
                                        <td><?php echo $row['id'];?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['email'];?></td>
                                        <td><?php echo $row['phone'];?></td>
                                        <td><?php echo $row['sex'];?></td>
                                        <td><?php echo $row['employeeType'];?></td>
                                        <td >
                                            <a href="employee-form.php?update=1&id=<?php echo $row['id']?>" class="btn btn-info">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                     </tr>
                                <?php
                            }
                        ?>
                       
    				</table>
    			</form>
    		</div>
    		<div class="col-md-1"></div>

    	</div>

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>