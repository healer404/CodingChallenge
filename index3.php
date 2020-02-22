<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="Roniel Duka">
    <title>REGISTRATION | CODING CHALLENGE</title>
    <link href="assets/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/custom2.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/materialize.css"/>
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <script src="assets/jquery.min.js" rel="script"></script>
    <script src="assets/bootstrap.min.js" rel="script"></script>
    <script src="assets/materialize.min.js"></script>
    <script type="text/javascript" src="assets/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
           $('#groupNameAvailability').load('checker.php').show();
           $('#grpname').keyup(function(){
              $.post('checker.php', {group_name:form.grpname.value},
              function (result) {
                  $('#groupNameAvailability').html(result).show();
              });
           });
        });

        $(document).ready(function(){
            $('#sectionChecker').load('checker.php').show();
            $('#section').keyup(function(){
                $.post('checker.php', {section:form.section.value},
                function (result) {
                $('#sectionChecker').html(result).show();
                });
            });
        });
        $(document).ready(function(){
            $('#num1Checker').load('checker.php').show();
            $('#num1').keyup(function(){
                $.post('checker.php', {number_1:form.num1.value},
                    function (result) {
                        $('#num1Checker').html(result).show();
                    });
            });
        });
    </script>
</head>
<body>
    <nav class="nav navbar col-md-12">
        <header class="navbar-left">
            <h5>CODING CHALLENGE</h5>
        </header>
    </nav>
    <div class="col-md-11 bgsignupcontainer">
        <div class="col-md-12 bgsubcontainer">
            <div class="col-md-5 left-container">
                <img src="assets/ball.png" alt="Logo">
                <h3>JOIN NOW</h3>
                <p>Develop your skills in programming and win the fabulous prizes!</p>
                <button type="button" class="btn btn-primary">About Us</button>
            </div>
            <div class="col-md-7 right-container">
                <div class="row">
                    <form class="form-group" action="save-participant.php" method="post" name="form">
                        <h4 class="col-md-12">Register Here</h4>
                        <h6 class="col-lg-12">Test your programming, logical thinking and creativity skills</h6>
                        <div class="col-md-12">
                            <div class="col-md-12 bginput">
                                <div class="input-field col m8 offset-0">
                                    <input id="grpname" class="form-control validate txt-color" type="text" autocomplete="off" name="groupname" required maxlength="30" autofocus/>
                                    <label for="grpname" style="color: #ffff00">Group Name <b class="required"> *</b></label>
                                    <span id="groupNameAvailability"></span>
                                </div>
                                <div class="input-field col m4 offset-0">
                                    <input id="section" class="form-control validate txt-color" type="text" autocomplete="off" name="section" required maxlength="20"/>
                                    <label for="section" style="color: #ffff00">Course and Section <b class="required"> *</b></label>
                                    <span id="sectionChecker"></span>
                                </div>
                            </div>
                            <div class="col-md-12 bginput">
                                <div class="input-field col m3 offset-0">
                                    <input id="lname1" class="form-control validate txt-color" type="text" autocomplete="off" name="lname1" required maxlength="30" />
                                    <label for="lname1" style="color: #ffff00">Last Name <b class="required"> *</b></label>
                                    <span id="lnameChecker"></span>
                                </div>
                                <div class="input-field col m3 offset-0">
                                    <input id="fname1" class="form-control validate txt-color" type="text" autocomplete="off" name="fname1" required maxlength="30" />
                                    <label for="fname1" style="color: #ffff00">First Name <b class="required"> *</b></label>
                                    <span id="fnameChecker"></span>
                                </div>
                                <div class="input-field col m3 offset-0">
                                    <input id="mname1" class="form-control validate txt-color" type="text" autocomplete="off" name="mname1" required maxlength="30" />
                                    <label for="mname1" style="color: #ffff00">Middle Name <b class="required"> *</b></label>
                                    <span id="mnameChecker"></span>
                                </div>
                                <div class="input-field col m3 offset-0">
                                    <input id="num1" class="form-control validate txt-color" type="text" autocomplete="off" name="num1" required maxlength="15" minlength="15" />
                                    <label for="num1" style="color: #ffff00">Student No. <b class="required"> *</b></label>
                                    <span id="num1Checker"></span>
                                </div>
                            </div>
                            <div class="col-md-12 bginput">
                                <div class="input-field col m3 offset-0">
                                    <input id="lname1" class="form-control validate txt-color" type="text" autocomplete="off" name="lname2" required maxlength="30" />
                                    <label for="lname1" style="color: #ffff00">Last Name <b class="required"> *</b></label>
                                    <span id="lnameChecker"></span>
                                </div>
                                <div class="input-field col m3 offset-0">
                                    <input id="fname1" class="form-control validate txt-color" type="text" autocomplete="off" name="fname2" required maxlength="30" />
                                    <label for="fname1" style="color: #ffff00">First Name <b class="required"> *</b></label>
                                    <span id="fnameChecker"></span>
                                </div>
                                <div class="input-field col m3 offset-0">
                                    <input id="mname1" class="form-control validate txt-color" type="text" autocomplete="off" name="mname2" required maxlength="30" />
                                    <label for="mname1" style="color: #ffff00">Middle Name <b class="required"> *</b></label>
                                    <span id="mnameChecker"></span>
                                </div>
                                <div class="input-field col m3 offset-0">
                                    <input id="num1" class="form-control validate txt-color" type="text" autocomplete="off" name="num2" required maxlength="15" minlength="15" />
                                    <label for="num1" style="color: #ffff00">Student No. <b class="required"> *</b></label>
                                    <span id="num1Checker"></span>
                                </div>
                            </div>
                            <div class="col-md-12 bginput">
                                <div class="input-field col m3 offset-0">
                                    <input id="lname1" class="form-control validate txt-color" type="text" autocomplete="off" name="lname3" required maxlength="30" />
                                    <label for="lname1" style="color: #ffff00">Last Name <b class="required"> *</b></label>
                                    <span id="lnameChecker"></span>
                                </div>
                                <div class="input-field col m3 offset-0">
                                    <input id="fname1" class="form-control validate txt-color" type="text" autocomplete="off" name="fname3" required maxlength="30" />
                                    <label for="fname1" style="color: #ffff00">First Name <b class="required"> *</b></label>
                                    <span id="fnameChecker"></span>
                                </div>
                                <div class="input-field col m3 offset-0">
                                    <input id="mname1" class="form-control validate txt-color" type="text" autocomplete="off" name="mname3" required maxlength="30" />
                                    <label for="mname1" style="color: #ffff00">Middle Name <b class="required"> *</b></label>
                                    <span id="mnameChecker"></span>
                                </div>
                                <div class="input-field col m3 offset-0">
                                    <input id="num1" class="form-control validate txt-color" type="text" autocomplete="off" name="num3" required maxlength="15" minlength="15" />
                                    <label for="num1" style="color: #ffff00">Student No. <b class="required"> *</b></label>
                                    <span id="num1Checker"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-12 margin-span">
                                    <button type="submit" class="btn btn-primary" name="register">REGISTER</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>