


<?php ob_start(); ?>
  <!-- Modal -->
  <div class="modal fade" id="loginModal" role="dialog">
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
                <form action="login.php" method="post">
                    
                        <h1>Login Form</h1>
                        
                        <div>
                            <input type="text" autofocus placeholder="Username" required="" id="username" name="uname"/>
                        </div>
                        <div>
                            <input type="password" placeholder="Password" required="" id="password" name="password"/>
                        </div>
                        <div>
                            <input type="submit" value="Log in" name="login" />
                                <a href="#">Lost your password?</a>
                                <a href="#">Register</a>
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
			jQuery('#loginModal').modal('hide'); 
			setTimeout(function() {
				
				jQuery('#loginModal').remove();
			},500);
		}
	</script>
<?php echo ob_get_clean(); ?>
