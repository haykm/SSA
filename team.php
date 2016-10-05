<?php
$db = mysqli_connect('localhost', 'haykm', '', 'ssa_db');
$post_team = $_POST['team'];
//$team="$post_team";
echo $team;
//$team_query="SELECT * FROM players WHERE team_name='$team'";

?>


<?php ob_start(); ?>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" type="button" onclick="close_modal();" aria-label="Close" >&times;</button>
          <h4 class="modal-title">Modal Header <?php echo $post_team; ?></h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="close_modal();">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!--End Of Modal -->
  	<script>
	
		function close_modal() {
			jQuery('#myModal').modal('hide'); 
			setTimeout(function() {
				
				jQuery('#myModal').remove();
			},500);
		}
	</script>
<?php echo ob_get_clean(); ?>
