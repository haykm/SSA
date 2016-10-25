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
    $query = "SELECT *  FROM team";
    $query1 = "SELECT DISTINCT team_name FROM players";
    $capts_query = "SELECT DISTINCT capt_uname FROM players";
    $row = mysqli_query($db, $query);
    $team_list_obj=mysqli_query($db, $query1);
    $capts_obj=mysqli_query($db,$capts_query );
    $i=0;
    $team_array= array();
    $capt_list= array();
    while ($team_list=  mysqli_fetch_assoc($team_list_obj)){
        $team_array[]=$team_list['team_name'];
//        echo $team_list['team_name'];
    }

//    print_r($team_array);
//    echo "user is ".$_SESSION['user'];
    if(isset($_SESSION['user'])){$capt=$_SESSION['user'];} else {$capt='no_user';}
    while ($c=mysqli_fetch_assoc($capts_obj)){
        if($c==$capt){$user=2;break;}  else {$user=1;}
    }
    ?>

    
<!--//print_r($team_array);
//    print_r($team_list);
//    print_r($row);
//    mysqli_query($link, $query)-->
    

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
                            <th title="Captain Name">C</th>
                            <th title="Number Of Players" >N</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php // while ($teams = mysqli_fetch_assoc($row)): ?>
                        <?php foreach( $team_array as $team){
                            $query2="SELECT * FROM players WHERE team_name='$team'";
                            $row1= mysqli_query($db, $query2); 
                            $qq=mysqli_fetch_assoc($row1); // xaxacoxi tox@ "players" table-um
                            ?>
                        <tr>
                            <td><a data-toggle="modal" data-keyboard="true" href="#" 
                                   onclick="teamModal1('<?php echo $team ?>')"><?php echo $team ?>
                                </a>
                                
                                <?php 
                                if($qq['capt_uname']===$capt){
                                    echo '<button class="btn btn-xs btn-success" onclick="teamModal1()">'. 
                                    "EDIT".'</button>';
                                }
                                ?>
                                
                            </td>
                           <td><?php echo $qq['catain_name']  ?></td>
                           <td><?php echo mysqli_num_rows($row1) ?> </td>
                       </tr> 
                        <?php } // end of foreach ; ?> 
                       <?php // endwhile; ?>
                    </tbody>

                </table>
            </div>
        <!--</a>-->

    <div class=" col-lg-1  col-md-1">
    </div>
        
        <div class="registr col-lg-3 col-md-3 col-sx-4 bordered1">
            <?php 
                
                if($capt!='no_user'){
                    if($user==2){
                        echo 'you have already registrated team. Each patain could register only one team for each type of sport';
                    }else{echo 'Now You can register your team. '.$user;}
                }else {echo
                    "<p> Only captains can register a team. <br> If you are a captain, please log in as with your username to enable additional functions.
                    </p>
                    <p>Team should have at least 5 players, each of which is not included in other teams</p>
                    <p>If you don't have account yet, you can SignUp right now.</p>"
                ;}
            ?>

       </div>
        
            <div class=" col-lg-1 col-md-1 ">
        </div>

    </div>
</div>

<?php 
    include '/footer.php';
?>