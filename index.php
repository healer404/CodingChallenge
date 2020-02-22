<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Custom Registration</title>
    <link href="assets/custom.css" type="text/css" rel="stylesheet">
    <link href="assets/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <script src="assets/bootstrap.js"></script>
    <script src="assets/jquery.min.js" type="text/javascript" rel="script"></script>
    <link rel="stylesheet" href="assets/materialize.css"/>
    <script src="assets/materialize.min.js"></script>
    <script src="assets/jquery-3.4.1.js"></script>
    <script src="assets/jquery.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="assets/ball.png" alt="Logo">
                        <h3>JOIN NOW</h3>
                        <p>Develop your skills in programming and win the fabulous prizes!</p>
                        <button type="button" class="btn btn-primary">About Us</button>
                    </div>
                    <form action="save-participant.php" method="post" id="registration-form" onsubmit="return valid();">
                    <div class="col-md-7 register-right ">
                        <h2>Register Here</h2>
                        <div class="register-form">
                            <div class="txt">
                                <div class="input-field col s8 offset-0" style="border: none; background: none;">
                                    <input id="group_name" class="form-control validate" type="text" autocomplete="off" name="groupname" required style="color:black; font-size: 15px;  text-transform: uppercase;" onblur="checkgroupnameAvailability()"/>
                                    <label for="group_name" style="color: black;">Group Name <b style="color: red; font-weight: bold;"> *</b></label>
                                </div>
                            </div>
                            <div class="txt">
                                <div class="input-field col s4 offset-0" style="border: none; background: none;">
                                    <input id="section" class="form-control validate" type="text" autocomplete="off" name="section" required style="color:black; font-size: 15px; text-transform: uppercase;" />
                                    <label for="section" style="color: black;">Section<b style="color: red; font-weight: bold;"> *</b></label>
                                </div>
                            </div>
                            <div class="txt">
                                <div class="input-field col s8 offset-0" style="border: none; background: none; margin-top: -10px">
                                    <input id="firstmember" class="form-control validate" type="text" autocomplete="off" name="firstmembername" required style="color:black; font-size: 15px;  text-transform: uppercase;" onblur="checknameAvailability()" />
                                    <label for="firstmember" style="color: black;">First Member Name <b style="color: red; font-weight: bold;"> *</b></label>
                                </div>
                            </div>
                            <div class="txt">
                                <div class="input-field col s4 offset-0" style="border: none; background: none; margin-top: -10px">
                                    <input id="firstmemberstudentnumber" class="form-control validate" type="text" autocomplete="off" name="firstmemberstudentnumber" required style="color:black; font-size: 15px;  text-transform: uppercase;" onblur="checknumAvailability()" />
                                    <label for="firstmemberstudentnumber" style="color: black;">Student Number <b style="color: red; font-weight: bold;"> *</b></label>
                                </div>
                            </div>
                            <div class="txt">
                                <div class="input-field col s8 offset-0" style="border: none; background: none; margin-top: -10px">
                                    <input id="secondmember" class="form-control validate" type="text" autocomplete="off" name="secondmembername" required style="color:black; font-size: 15px;  text-transform: uppercase;" onblur="checknameAvailability()" />
                                    <label for="secondmember" style="color: black;">Second Member Name <b style="color: red; font-weight: bold;"> *</b></label>
                                </div>
                            </div>
                            <div class="txt">
                                <div class="input-field col s4 offset-0" style="border: none; background: none; margin-top: -10px">
                                    <input id="secondmemberstudentnumber" class="form-control validate" type="text" autocomplete="off" name="secondmemberstudentnumber" required style="color:black; font-size: 15px; text-transform: uppercase;" onblur="checknumAvailability()" />
                                    <label for="secondmemberstudentnumber" style="color: black;">Student Number <b style="color: red; font-weight: bold;"> *</b></label>
                                </div>
                            </div>
                            <div class="txt">
                                <div class="input-field col s8 offset-0" style="border: none; background: none; margin-top: -10px">
                                    <input id="thirdmember" class="form-control validate" type="text" autocomplete="off" name="thirdmembername" required style="color:black; font-size: 15px;  text-transform: uppercase;" onblur="checknameAvailability() "/>
                                    <label for="thirdmember" style="color: black;">Third Member Name <b style="color: red; font-weight: bold;"> *</b></label>
                                </div>
                            </div>
                            <div class="txt">
                                <div class="input-field col s4 offset-0" style="border: none; background: none; margin-top: -10px">
                                    <input id="thirdmemberstudentnumber" class="form-control validate" type="text" autocomplete="off" name="thirdmemberstudentnumber" required style="color:black; font-size: 15px;" onblur="checknumAvailability()" />
                                    <label for="thirdmemberstudentnumber" style="color: black;">Student Number <b style="color: red; font-weight: bold;"> *</b></label>
                                </div>
                            </div>
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary" name="register_form">Register</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
        if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
            foreach($_SESSION['ERRMSG_ARR'] as $msg)
            {
                ?>
                <div class="alert alert-danger " style="font-weight: bolder;">
                    <strong><?php echo $msg; ?></strong>
                </div>
                <?php
            }
            unset($_SESSION['ERRMSG_ARR']);
        }
        ?>
    </div>
</body>
</html>