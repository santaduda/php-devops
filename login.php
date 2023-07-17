<?php
    // Connect to database and check if user is valid
    if ($_POST['username'] == 'prashanth' && $_POST['password'] == 'password') {
        header('Location: home.php');
    } else {
        print ("Invalid credentials");
    }
?>