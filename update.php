<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h3 class="display-4 text-center">Update</h3><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="name">Name</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="name" 
		           value="<?=$row['name'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="name">Element</label>
		     <input type="name" 
		           class="form-control" 
		           id="element" 
		           name="element" 
				   value="<?=$row['element'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="name">Address</label>
		     <input type="name" 
		           class="form-control" 
		           id="address" 
		           name="address" 
				   value="<?=$row['address'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="number">Number</label>
		     <input type="name" 
		           class="form-control" 
		           id="number" 
		           name="number" 
		           value="<?=$row['number'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="email">Email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?=$row['email'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="password">Password</label>
		     <input type="name" 
		           class="form-control" 
		           id="password" 
		           name="password" 
		           value="<?=$row['password'] ?>" >
		   </div>
		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>