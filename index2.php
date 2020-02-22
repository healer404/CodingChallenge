<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="Roniel Duka">
    <title>Registration | CODING CHALLENGE</title>
    <link href="assets/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/custom1.css" rel="stylesheet" type="text/css">
    <script src="assets/jquery.min.js" rel="script"></script>
    <script src="assets/bootstrap.min.js" rel="script"></script>
    <link rel="stylesheet" href="assets/materialize.css"/>
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <script src="assets/materialize.min.js"></script>
</head>
<body>
    <div class="col-md-12">
        <div class="form-container">
            <div class="col-md-12 form-container-margin">
                <div class="col-md-4 left-form">
                    <div class="row">
                        <img src="assets/ball.png" alt="Logo">
                        <h3>JOIN NOW</h3>
                        <p>Develop your skills in programming and win the fabulous prizes!</p>
                        <button type="button" class="btn btn-primary">About Us</button>
                    </div>
                </div>
                <div class="col-md-7 bgform">
                    <div class="row">
                        <form action="save-participant.php" method="post" id="registration-form">
                            <h2>Register Here</h2>
                            <h6>Test your programming, logical thinking and creativity skills</h6>
                            <div class="register-form">
                                <div class="txt">
                                    <div class="input-field col m8 offset-0">
                                        <input id="group_name" class="form-control validate borderinp" type="text" autocomplete="off" name="groupname" required/>
                                        <label for="group_name" style="color: black;">Group Name <b style="color: red; font-weight: bold;"> *</b></label>
                                        <span id="groupNameAvailability"></span>
                                    </div>
                                </div>
                                <div class="txt">
                                    <div class="input-field col m4 offset-0">
                                        <input id="section" class="form-control validate" type="text" autocomplete="off" name="section" required style="color:black; font-size: 15px; text-transform: uppercase;" />
                                        <label for="section" style="color: black;">Year & Section<b style="color: red; font-weight: bold;"> *</b></label>
                                    </div>
                                </div>
                                <div class="txt">
                                    <div class="input-field col m8 offset-0">
                                        <input id="firstmember" class="form-control validate" type="text" autocomplete="off" name="firstmembername" required style="color:black; font-size: 15px;  text-transform: uppercase;" " />
                                        <label for="firstmember" style="color: black;">First Member Name <b style="color: red; font-weight: bold;"> *</b></label>
                                        <span id="nameAvailability"></span>
                                    </div>
                                </div>
                                <div class="txt">
                                    <div class="input-field col m4 offset-0">
                                        <input id="firstmemberstudentnumber" class="form-control validate" type="text" autocomplete="off" name="firstmemberstudentnumber" required style="color:black; font-size: 15px;  text-transform: uppercase;" minlength="15" maxlength="15" />
                                        <label for="firstmemberstudentnumber" style="color: black;">Student Number <b style="color: red; font-weight: bold;"> *</b></label>
                                        <span id="numberAvailability"></span>
                                    </div>
                                </div>
                                <div class="txt">
                                    <div class="input-field col m8 offset-0">
                                        <input id="secondmember" class="form-control validate" type="text" autocomplete="off" name="secondmembername" required style="color:black; font-size: 15px;  text-transform: uppercase;"/>
                                        <label for="secondmember" style="color: black;">Second Member Name <b style="color: red; font-weight: bold;"> *</b></label>
                                        <span id="name1Availability"></span>
                                    </div>
                                </div>
                                <div class="txt">
                                    <div class="input-field col m4 offset-0">
                                        <input id="secondmemberstudentnumber" class="form-control validate" type="text" autocomplete="off" name="secondmemberstudentnumber" required style="color:black; font-size: 15px; text-transform: uppercase;"/>
                                        <label for="secondmemberstudentnumber" style="color: black;">Student Number <b style="color: red; font-weight: bold;"> *</b></label>
                                        <span id="number1Availability"></span>
                                    </div>
                                </div>
                                <div class="txt">
                                    <div class="input-field col m8 offset-0">
                                        <input id="thirdmember" class="form-control validate" type="text" autocomplete="off" name="thirdmembername" required style="color:black; font-size: 15px;  text-transform: uppercase;""/>
                                        <label for="thirdmember" style="color: black;">Third Member Name <b style="color: red; font-weight: bold;"> *</b></label>
                                        <span id="name2Availability"></span>
                                    </div>
                                </div>
                                <div class="txt">
                                    <div class="input-field col m4 offset-0">
                                        <input id="thirdmemberstudentnumber" class="form-control validate" type="text" autocomplete="off" name="thirdmemberstudentnumber" required style="color:black; font-size: 15px; text-transform: uppercase;"/>
                                        <label for="thirdmemberstudentnumber" style="color: black;">Student Number <b style="color: red; font-weight: bold;"> *</b></label>
                                        <span id="number2Availability"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="register_form">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#group_name").blur(function () {
                var groupname = $(this).val();
                $.ajax({
                    url: "checkeravailability.php",
                    method: "POST",
                    data: {group_name:groupname},
                    dataType: "text",
                    success:function(html){
                        $('#groupNameAvailability').html(html);
                    }
                })
            });
        });
        $(document).ready(function () {
            $("#firstmember").blur(function () {
                var firstmember = $(this).val();
                $.ajax({
                    url: "checkeravailability.php",
                    method: "POST",
                    data: {first_member:firstmember},
                    dataType: "text",
                    success:function(html){
                        $('#nameAvailability').html(html);
                    }
                })
            });
        });
        $(document).ready(function () {
            $("#secondmember").blur(function () {
                var secondmember = $(this).val();
                $.ajax({
                    url: "checkeravailability.php",
                    method: "POST",
                    data: {second_member:secondmember},
                    dataType: "text",
                    success:function(html){
                        $('#name1Availability').html(html);
                    }
                })
            });
        });
        $(document).ready(function () {
            $("#thirdmember").blur(function () {
                var thirdmember = $(this).val();
                $.ajax({
                    url: "checkeravailability.php",
                    method: "POST",
                    data: {third_member:thirdmember},
                    dataType: "text",
                    success:function(html){
                        $('#name2Availability').html(html);
                    }
                })
            });
        });
        $(document).ready(function () {
            $("#firstmemberstudentnumber").blur(function () {
                var firstnum = $(this).val();
                $.ajax({
                    url: "checkeravailability.php",
                    method: "POST",
                    data: {first_num:firstnum},
                    dataType: "text",
                    success:function(html){
                        $('#numberAvailability').html(html);
                    }
                })
            });
        });
        $(document).ready(function () {
            $("#secondmemberstudentnumber").blur(function () {
                var secondnum = $(this).val();
                $.ajax({
                    url: "checkeravailability.php",
                    method: "POST",
                    data: {second_num:secondnum},
                    dataType: "text",
                    success:function(html){
                        $('#number1Availability').html(html);
                    }
                })
            });
        });
        $(document).ready(function () {
            $("#thirdmemberstudentnumber").blur(function () {
                var thirdnum = $(this).val();
                $.ajax({
                    url: "checkeravailability.php",
                    method: "POST",
                    data: {third_num:thirdnum},
                    dataType: "text",
                    success:function(html){
                        $('#number2Availability').html(html);
                    }
                })
            });
        });
    </script>
</body>
</html>