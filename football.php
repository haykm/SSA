<!DOCTYPE html>

<?php
    include '/head.php';
    include '/logo.php';
    include '/navbar.php';
    $db = mysqli_connect('localhost', 'haykm', '', 'ssa_db');
//    if (mysqli_connect_errno()) {
//    echo 'aaa';}
// else {
//    echo 'bbb';    
//}
    $query = "SELECT * FROM team";
    $query1 = "SELECT DISTINCT team_name FROM players";
    $row = mysqli_query($db, $query);
    $team_list_obj=mysqli_query($db, $query1);
    $i=0;
    $team_array= array();
    while ($team_list=  mysqli_fetch_assoc($team_list_obj)){
        $team_array[]=$team_list['team_name'];
//        echo $team_list['team_name'];
    }
    print_r($team_array);
    ?>

    
//print_r($team_array);
//    print_r($team_list);
//    print_r($row);
//    mysqli_query($link, $query)
    
?>
<div class="container football">
    <div class="row">
        <div class=" description  text-center box bordered">
            some content related to football
        </div>
    </div>
    <div class="container">

        <a href="#">
            <div class="shedule col-lg-3 col-md-3 col-sx-4 bordered1">
                table of schedule
            </div>
        </a>
            <div class=" col-lg-1 col-md-1 ">
        </div>

        <!--<a href="#">-->
            <div class="teams col-lg-3 col-md-3 col-sx-4 bordered1">
                <table class="table-bordered table table-condensed ">
                    <thead>
                        <tr>
                            <th>TeamName</th>
                            <th>CaptainName</th>
                            <th title="Number Of Players" >N</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($teams = mysqli_fetch_assoc($row)): ?>
                        <tr>
                            <td><a data-toggle="modal" data-keyboard="true" href="#" 
                                   onclick="teamModal(<?php echo $teams['team_name'] ?>)"><?php echo $teams['team_name'] ?>
                                </a>
                            </td>
                           <td><?= $teams['captain_name'] ?></td>
                           <td><?= $teams['num'] ?> </td>
                       </tr> 
                       <?php endwhile; ?>
                    </tbody>

                </table>
            </div>
        <!--</a>-->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!--End Of Modal -->
    <div class=" col-lg-1  col-md-1">
        </div>
        <a  href="#">
            <div class="registr col-lg-3 col-md-3 col-sx-4 bordered1">
                <table class="table-bordered table table-condensed ">
                    <thead>
                        <tr>
                            <th>TeamName</th>
                            <th>CaptainName</th>
                            <th title="Number Of Players" >N</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach( $team_array as $team){
                                $query2="SELECT * FROM players WHERE team_name='$team'";
                                $row1= mysqli_query($db, $query2);
//                                while($team_player=mysqli_fetch_assoc($row1)){
//                                    echo $team_player['l_name']; echo '<br>';
//                                }
                                 $qq=mysqli_fetch_assoc($row1);
                                echo "<tr> "
                                . "<td><a href='#'>" . $team . "</a></td>"
                                    . "<td>" . $qq['catain_name']
                                    . "</td>"
                                    . "<td>" . mysqli_num_rows($row1) . "</td>"
                                    . "</tr>";
//                                echo mysqli_num_rows($row1);
                            }
                        ?>
                    </tbody>
                </table>
           </div>
        </a>
            <div class=" col-lg-1 col-md-1 ">
        </div>

    </div>
</div>
<?php 
    include '/footer.php';
?>