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
    if(isset($_SESSION['user'])){
        $capt=$_SESSION['user'];
//        $capt_name=
    } else {$capt='no_user';}
    
    while ($c=mysqli_fetch_assoc($capts_obj)){
        if($c['capt_uname']==$capt){
            $user=2;break;
        }  
        else {$user=1;}
    }
    
    ?>

    
<!--//print_r($team_array);
//    print_r($team_list);
//    print_r($row);
//    mysqli_query($link, $query)-->
    

<div class="container football">
    <div class="row">
        <div class=" registr_team text-center box bordered">
            team registration forma
            <form>
                <input type="text" placeholder="TeamName"  id="t_name" name="t_name"/>
                <br><br><br>
                <input type="text" placeholder="FirstName"  id="f_name" name="f_name"/>
                <input type="text" placeholder="LastName"  id="l_name" name="l_name"/>
                <input type="text" placeholder="user_name"  id="u_name" name="u_name"/>
                <br>
                <button class="glyphicon glyphicon-plus"></button>
                <button type="submit" class="btn btn-sm btn-info">
                    <span class="glyphicon glyphicon-ok"></span> Save</button><br>
                <button type="" class="btn btn-sm btn-warning ">
                    <span class="glyphicon glyphicon-"></span>Cancel</button>
            </form>
        </div>
    </div>
    
</div>

<?php 
    include '/footer.php';
?>