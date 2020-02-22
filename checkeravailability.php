<?php
    session_start();

    include "assets/config/config.php";

    if(isset($_POST['group_name'])){
        if($_POST['group_name']){
            $query = "SELECT groupname FROM participant_registration WHERE groupname = '".$_POST['group_name']."'";
            $result = mysqli_query($myconn, $query);
            if(mysqli_num_rows($result) > 0){
                echo "<span class='invalidcolor'>Group name is already exists</span>";
            }
            else{
                echo "<span class='validcolor'>Group name is Available</span>";
            }
        }
    }
    if(isset($_POST['first_member'])){
        if($_POST['first_member']) {
            $query = "SELECT name FROM participant_registration WHERE name = '" . $_POST['first_member'] . "'";
            $result = mysqli_query($myconn, $query);
            if (mysqli_num_rows($result) > 0) {
                echo "<span class='invalidcolor'>Already registered</span>";
            } else {
                echo "<span class='validcolor'>Name available</span>";
            }
        }
    }
    if(isset($_POST['second_member'])){
        if($_POST['second_member']){
            $query = "SELECT name FROM participant_registration WHERE name = '".$_POST['second_member']."'";
            $result = mysqli_query($myconn, $query);
            if(mysqli_num_rows($result) > 0){
                echo "<span class='invalidcolor'>Already registered</span>";
            }
            else{
                echo "<span class='validcolor'>Name available</span>";
            }
        }
    }
    if(isset($_POST['third_member'])){
        $query = "SELECT name FROM participant_registration WHERE name = '".$_POST['third_member']."'";
        $result = mysqli_query($myconn, $query);
        if(mysqli_num_rows($result) > 0){
            echo "<span class='invalidcolor'>Already registered</span>";
        }
        else{
            echo "<span class='validcolor'>Name available</span>";
        }
    }
    if(isset($_POST['first_num'])){
        $query = "SELECT studentnumber FROM participant_registration WHERE studentnumber = '".$_POST['first_num']."'";
        $result = mysqli_query($myconn, $query);
        if(mysqli_num_rows($result) > 0){
            echo "<span class='invalidcolor'>Already registered</span>";
        }
        else{
            echo "<span class='validcolor'>Name available</span>";
        }
    }
    if(isset($_POST['second_num'])) {
        $query = "SELECT studentnumber FROM participant_registration WHERE studentnumber = '" . $_POST['second_num'] . "'";
        $result = mysqli_query($myconn, $query);
        if (mysqli_num_rows($result) > 0) {
            echo "<span class='invalidcolor'>Already registered</span>";
        } else {
            echo "<span class='validcolor'>Name available</span>";
        }
    }
    if(isset($_POST['third_num'])){
        $query = "SELECT studentnumber FROM participant_registration WHERE studentnumber = '".$_POST['third_num']."'";
        $result = mysqli_query($myconn, $query);
        if(mysqli_num_rows($result) > 0){
            echo "<span class='invalidcolor'>Already registered</span>";
        }
        else{
            echo "<span class='validcolor'>Name available</span>";
        }
    }