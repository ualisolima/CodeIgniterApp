<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<h1>Login Area</h1>
    	</div>
    	<?php if($alert != null) { ?>
    	<div class="row">
    		<div class="alert alert-<?php echo $alert["class"] ?>" role="alert">
			  <?php echo $alert["message"]; ?>
			</div>
    	</div>
    	<?php } ?>
    	<div class="row">

    			<div class="col-md-6">
    				<form acction="<?php echo base_url('Account/login'); ?>" method="post">
    				  <input type="hidden" name="captcha">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <button type="submit" name="login" value="login" class="btn btn-primary">Submit</button>
					</form>
    			</div>
    	</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>