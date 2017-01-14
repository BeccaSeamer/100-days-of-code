<?php include("send-email.php"); ?>

<?php include("header.php"); ?>

		<div class="container">
		
			<div class="row">
			
				<div class="col-lg-12">
				
					<h1 class="page-header" id="header">Contact</h1>
				
				</div>
			
			</div>
			
			<hr>
			
			<div class="row">
			
				<div class="col-lg-12">
				
					<div id="error"><? echo $error.$successMessage; ?></div>
				
				</div>
			
			</div>
			
			<form method="post">
  
				<div class="form-group">
    
					<label for="email">Email address</label>
    
					<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email address">
    
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  
				</div>
				
				<div class="form-group">
    
					<label for="subject">Subject</label>
    
					<input type="text" class="form-control" id="subject" name="subject">
  
				</div>
				
				<div class="form-group">
    
					<label for="content">What would you like to ask?</label>
    
					<textarea class="form-control" id="content" name="content" rows="3"></textarea>
				
				</div>
				
				<button type="submit" id="submit" class="btn btn-primary">Submit</button>
  
			</form>
		
		</div>

<?php include("footer.php"); ?>
