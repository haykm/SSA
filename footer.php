<?php

?>
    <div class='footer'>
        this is footer
    </div>
    <script>    
        function teamModal1(team) {
//            alert (team);
            var data = {"team" : team, };
            jQuery.ajax({
                    url : 'team.php',
                    method : "post",
                    // If you inspect the network for form you'll see there is form data
                    // That contains our team
                    data : data,
                    success: function(data) {
//                        alert (team);
                        jQuery('body').append(data);
                        // We can now toggle the modal because its in the body
                        jQuery('#myModal').modal('toggle');
                    },
                    error: function() {
                            alert("Something went wrong!");
                    }
            });
        }
        function teamModal() {
             alert ("Hello! I am an alert box!!");

        }
        function loginModal() {
//            alert ("team");
//            var data = {"team" : "team", };
            jQuery.ajax({
                    url : 'login.php',
                    method : "post",
                    // If you inspect the network for form you'll see there is form data
                    // That contains our team
//                    data : data,
                    success: function(data) {
//                        alert ("team1");
                        jQuery('body').append(data);
                        // We can now toggle the modal because its in the body
                        jQuery('#loginModal').modal('toggle');
                    },
                    error: function() {
                            alert("Something went wrong!");
                    }
            });
        }

    </script>
                
</body>
</html>