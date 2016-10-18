<?php 
    $db = mysqli_connect('localhost', 'haykm', '', 'ssa_db');
    if (isset($_POST['login'])){
        $uname=$_POST['uname'];
        $pass=md5($_POST['password']) ;
//        $pass=$_POST['password'];
//        echo $uname;
        $check_user_query="SELECT * FROM capt WHERE uname='$uname' && passw='$pass' ";
        $check_user_row=  mysqli_query($db,$check_user_query);
        if (mysqli_num_rows($check_user_row)>0) {
//            echo 'welcome';
            $_SESSION['user']=$uname;
//            echo '_SESSION_user='.$_SESSION['user']."a";
            header("Location: ./index.php");
        } else {echo "U or P is not correct";}
    } elseif ($_POST['logout']) {
//        unset($_SESSION['user']);
//        session_destroy();
//        header("Location: ./index.php");
    }
        

?>
