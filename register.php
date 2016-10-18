


<?php ob_start(); ?>
  <!-- Modal -->
  <div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <!--<div class="modal-content">-->
<!--        <div class="modal-header">
          <button class="close" type="button" onclick="close_modal();" aria-label="Close" >&times;</button>
          <h2 class="modal-title"> LogIn</h2>
        </div>-->
<!--        <div class="modal-body">-->
        <div class="container">
            <section id="content">
                <button class="close" type="button" onclick="close_modal();" aria-label="Close" >&times;</button>
                <form action="register_form.php" method="post">
                    
                        <h1>Sign Up</h1>
                        
                        <div>
                            <input type="text" placeholder="FirstName"  id="fname" name="fname"/>
                        </div>
                        <div>
                            <input type="text" placeholder="LastName"  id="lname" name="lname"/>
                        </div>
                        <div>
                            <input type="email" placeholder="email"  id="email" name="email" />
                        </div>
                        <div>
                            <input type="text" placeholder="Username"  id="username" name="username"/>
                        </div>
                        <div>
                            <input type="password" placeholder="Password"  id="password" name="password"/>
                        </div>
                        <div>
                            <input type="submit" value="SignUp" name="submit"/>
<!--                                <a href="#">Lost your password?</a>
                                <a href="#">Register</a>-->
                        </div>
                </form><!-- form -->
            </section>
        </div>
        <!--</div>-->
<!--        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="close_modal();">Close</button>
        </div>-->
      <!--</div>-->
      
    </div>
  </div>
  <!--End Of Modal -->
  	<script>
	
		function close_modal() {
			jQuery('#registerModal').modal('hide'); 
			setTimeout(function() {
				
				jQuery('#registerModal').remove();
			},500);
		}
	</script>
<?php echo ob_get_clean(); ?>
