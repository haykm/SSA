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
    $query = "SELECT * FROM `team`";
    $row = mysqli_query($db, $query);
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
                <table class="table-bordered table table-condensed table-responsive">
                    <thead>
                        <tr>
                            <th>TeamName</th>
                            <th>CaptainName</th>
                            <th alt="Number">N</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($team_list = mysqli_fetch_assoc($row)): ?>
                        <tr>
                           <td><?php echo $team_list['team_name'] ?></td>
                           <td><?= $team_list['captain_name'] ?></td>
                           <td><?= $team_list['num'] ?> </td>
                       </tr> 
                       <?php endwhile; ?>
                    </tbody>

                </table>
            </div>
        <!--</a>-->

        <div class=" col-lg-1  col-md-1">
        </div>
        <a  href="#">
            <div class="registr col-lg-3 col-md-3 col-sx-4 bordered1">
                register your team
            </div>
        </a>
            <div class=" col-lg-1 col-md-1 ">
        </div>

    </div>
</div>
<?php 
    include '/footer.php';
?>