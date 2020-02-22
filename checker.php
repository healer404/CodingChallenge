<?php
    session_start();
    include 'assets/config/config.php';
    if(!isset($_POST['group_name'])){
        $_POST['group_name'] = " ";
    }
    else{
        $username = mysqli_real_escape_string($myconn, $_POST['group_name']);

        $query = "SELECT groupname FROM participant_registration WHERE groupname='$username'";
        $execute =  mysqli_query($myconn, $query);

        if($username == NULL){
            echo "Enter your Group Name ";
        }
        elseif (strlen($username) < 3){
            echo "Invalid Group Name";
        }
        else{
            if(mysqli_num_rows($execute) == 0){
                echo 'Available';
                $_SESSION['GROUP_NAME'] = $username;
            }
            elseif(mysqli_num_rows($execute) > 0){
                echo 'Already existed';
            }
        }
    }

    if(!isset($_POST['section'])){
        $_POST['section'] = " ";
    }
    else{
        $section = mysqli_real_escape_string($myconn, $_POST['section']);
        if($section == NULL){
            echo "Enter your Course code, year and section.";
        }
        elseif(strlen($section) < 3){
            echo "Too short";
        }
        else{
            $_SESSION['GROUP_SECTION'] = $section;
        }
    }
