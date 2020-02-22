<?php

    session_start();

    include('assets/config/config.php');

    if(isset($_POST['register'])){
        $groupname = mysqli_real_escape_string($myconn, stripcslashes($_POST['groupname']));
        $section = mysqli_real_escape_string($myconn, stripcslashes($_POST['section']));
        $lname1 = mysqli_real_escape_string($myconn, stripcslashes($_POST['lname1']));
        $fname1 = mysqli_real_escape_string($myconn, stripcslashes($_POST['fname1']));
        $mname1 = mysqli_real_escape_string($myconn, stripcslashes($_POST['mname1']));
        $num1 = mysqli_real_escape_string($myconn, stripcslashes($_POST['num1']));
        $lname2 = mysqli_real_escape_string($myconn, stripcslashes($_POST['lname2']));
        $fname2 = mysqli_real_escape_string($myconn, stripcslashes($_POST['fname2']));
        $mname2 = mysqli_real_escape_string($myconn, stripcslashes($_POST['mname2']));
        $num2 = mysqli_real_escape_string($myconn, stripcslashes($_POST['num2']));
        $lname3 = mysqli_real_escape_string($myconn, stripcslashes($_POST['lname3']));
        $fname3 = mysqli_real_escape_string($myconn,  stripcslashes($_POST['fname3']));
        $mname3 = mysqli_real_escape_string($myconn, stripcslashes($_POST['mname3']));
        $num3 = mysqli_real_escape_string($myconn, stripcslashes($_POST['num3']));
        if(isset($_SESSION['GROUP_NAME']) && isset($_SESSION['GROUP_SECTION'])){
            $check_num1 = "SELECT studentnumber FROM participant_registration WHERE studentnumber = '$num1'";
            $verify1 = mysqli_query($myconn, $check_num1);
            $check_num2 = "SELECT studentnumber FROM participant_registration WHERE studentnumber = '$num2'";
            $verify2 = mysqli_query($myconn, $check_num2);
            $check_num3 = "SELECT studentnumber FROM participant_registration WHERE studentnumber = '$num3'";
            $verify3 = mysqli_query($myconn, $check_num3);

            if((mysqli_num_rows($verify1) > 0) || (mysqli_num_rows($verify2) > 0) || (mysqli_num_rows($verify3) > 0)){
                echo "<script>alert('Some participants are already registered. Please check the information')</script>";
                //echo "<script>window.open('index3.php','_self')</script>";
            }
            elseif((mysqli_num_rows($verify1) < 0) || (mysqli_num_rows($verify2) < 0) || (mysqli_num_rows($verify3) < 0)){
                $status = "pending";

                $name1 = $lname1 . ", " . $fname1 . " " . $mname1;
                $query1 = $pdoconn->prepare("INSERT INTO participant_registration (groupname, name, studentnumber, status) VALUES (:groupname, :name, :studentnumber, :status)");
                $query1->bindParam(":groupname", $groupname);
                $query1->bindParam(":name", $name1);
                $query1->bindParam(":studentnumber", $num1);
                $query1->bindParam(":status", $status);
                $query1->execute();
                if($query1){
                    echo "nice! saving Player 1";
                }
                else{
                    echo "OOOPS";
                }
                $name2 = $lname2 . ", " . $fname2 . " " . $mname2;
                $query2 = $pdoconn->prepare("INSERT INTO participant_registration (groupname, name, studentnumber, status) VALUES (:groupname, :name, :studentnumber, :status)");
                $query2->bindParam(":groupname", $groupname);
                $query2->bindParam(":name", $name2);
                $query2->bindParam(":studentnumber", $num2);
                $query2->bindParam(":status", $status);
                $query2->execute();
                if($query2){
                    echo "Nice one! player 2!";
                }
                else{
                    echo "OOOPS";
                }
                $name3 = $lname3 . ", " . $fname3 . " " . $mname3;
                $query3 = $pdoconn->prepare("INSERT INTO participant_registration (groupname, name, studentnumber, status) VALUES (:groupname, :name, :studentnumber, :status)");
                $query3->bindParam(":groupname", $groupname);
                $query3->bindParam(":name", $name3);
                $query3->bindParam(":studentnumber", $num3);
                $query3->bindParam(":status", $status);
                $query3->execute();
                if($query3){
                    echo "Nice one! player 3!";
                    echo "<script>alert('df')</script>";
                    header('location: index3.php');
                }
                else{
                    echo "OOOPS";
                }
            }
        }
        else{
            echo "<script>alert('INVALID GROUPNAME OR SECTION')</script>";
            header('location: index3.php');
        }
    }