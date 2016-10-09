<?php
$db = mysqli_connect('localhost', 'haykm', '', 'ssa_db');
$post_team = $_POST['team'];
//$team="$post_team";
echo $team;
$team_query="SELECT * FROM players WHERE team_name='$post_team'";
$team_row=  mysqli_query($db,$team_query);
?>


<?php ob_start(); ?>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" type="button" onclick="close_modal();" aria-label="Close" >&times;</button>
          <h2 class="modal-title"> <?php echo strtoupper($post_team); ?></h2>
        </div>
        <div class="modal-body">
            
            <table class="table-bordered table table-condensed table-striped table-auto">
                <thead >
                    <tr>
                        <th>PlayerName</th>
                        <th>SomeBlank</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($team_name=mysqli_fetch_assoc($team_row)):  ?>
                    <tr>
                        <td><?php echo $team_name['f_name'] . ' ' . $team_name['l_name'] ?></td>
                        <td></td>
                    </tr>
                    <?php endwhile ; ?>
                </tbody>
            </table>
            <p> </p><br
            
          
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
