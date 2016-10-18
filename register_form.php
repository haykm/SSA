<?php 
    $db = mysqli_connect('localhost', 'haykm', '', 'ssa_db');
    if (isset($_POST['submit'])){
        $uname=$_POST['username'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $pass=md5($_POST['password']) ;
//        echo $uname;
        $check_user_query="SELECT * FROM capt WHERE uname='$uname'";
        $check_user_row=  mysqli_query($db,$check_user_query);
        if (mysqli_num_rows($check_user_row)>0) {
            echo 'choose another username';
        } else {
//            mysqli_query($CONNECT, "INSERT INTO `chat`  VALUES ('', '$_POST[text]', '$_POST[name]', NOW(),'0')");
            $insert_user_query="INSERT INTO capt Values('','$fname','$lname','$email','$uname','$pass')";
            $ins_u=mysqli_query($db,$insert_user_query );
            if($ins_u){
                header("Location: ./index.php");
                
            } else {
                echo $ins_u;
                echo 'bbb';
            }
            
        }
    }
 else {
        echo 'bbb';
        
}
?>
