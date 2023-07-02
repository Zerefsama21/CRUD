<!DOCTYPE html>
<html>
    <head>
        <title>Create</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
		<form action="php/create.php" 
		      method="post">
            
		   <h3 class="display-4 text-center">Create</h3><hr><br>
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
		           value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">
		   </div>

		   <div class="form-group">
		     <label for="element">Element</label>
		     <input type="element" 
		           class="form-control" 
		           id="element" 
		           name="element" 
		           value="<?php echo isset($_POST["element"]) ? $_POST["element"] : ''; ?>">
		   </div>

		   <div class="form-group">
		     <label for="address">Address</label>
		     <input type="address" 
		           class="form-control" 
		           id="address" 
		           name="address" 
		           value="<?php echo isset($_POST["address"]) ? $_POST["address"] : ''; ?>">
		   </div>

		   <div class="form-group">
		     <label for="number">Number</label>
		     <input type="number" 
		           class="form-control" 
		           id="number" 
		           name="number" 
		           value="<?php echo isset($_POST["number"]) ? $_POST["number"] : ''; ?>">
		   </div>

		   <div class="form-group">
		     <label for="email">Email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
				   value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
		   </div>

		   <div class="form-group">
		     <label for="password">Password</label>
		     <input type="password" 
		           class="form-control" 
		           id="password" 
		           name="password" 
		           value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>">
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Create</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>