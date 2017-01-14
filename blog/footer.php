<hr>
		
			<div class="container">
			
				<footer>
					
					<div class="row">
					
						<div class="m-x-auto">
						
							<p class="text-xs-center">Copyright &copy; Becca Seamer 2017</p>
					
						</div>
				
					</div>
				
				</footer>
			
			</div>
		
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		
		<script type="text/javascript">
		
			$(document).ready(function () {
			
				$('.dropdown-toggle').dropdown();
			
			});
			
			$("form").sumbit(function (e) {
				
				var error = "";
				
				if ($("#email").val() == "") {
					
					error += "The email field is required.<br>";
					
				}
				
				if ($("#subject").val() == "") {
					
					error += "The subject field is required.<br>";
					
				}
				
				if ($("#content").val() == "") {
					
					error += "The content field is required.";
					
				}
				
				if (error != "") {
					
					$("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
					
					return false;
					
				} else {
					
					return true;
					
				}
				
			});
		
		</script>
		
	</body>

</html>
