
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
    			<a href="addupdate.php" type="button" class="btn btn-info">Add New</a>
    		</div>
    	
    		<div style="display: block; content:''; clear: both;">
    		<br/>
    		<div class="col-md-1"></div>
    		<div class="col-md-10">
    			<form method="POST" action="">
    				<table class="table table-hover">
    					<tr>
    						<th>#</th>
    						<th>Name</th>
    						<th>Email</th>
    						<th>Phone</th>
    						<th>Sex</th>
    						<th>Employee type</th>
    						<th>Action</th>
    					</tr>
    				</table>
    			</form>
    		</div>
    		<div class="col-md-1"></div>

    	</div>

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>