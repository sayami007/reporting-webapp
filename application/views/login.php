<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sign In form</title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/login.css'?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
    <script type="text/javascript" src="<?php echo base_url().'assets/js/login.js'?>">

    </script>
</head>

<body>
    <div id="wrapper">
        <div id="logo_container">
            <div class="pulse_off"><img src="<?php echo base_url().'assets/images/log.png'?>" /> </div>
            <div id="logo"><img src="<?php echo base_url().'assets/images/log.png'?>" /> </div>
        </div>


        <?php
         echo form_open('login/log');
       ?>
            <div class="white_box">
                <?php echo isset($error) ? $error :'';?>

                <div class="username_bgfield">
                    <input type="text" name="username" class="textfield" placeholder="Username" />
                </div>
                <div class="password_bgfield">
                    <input type="password" name="password" class="textfield" placeholder="Password" />
                </div>
                <div style="float:left; color:#878787; padding-top:15px;">
                    <input type="checkbox" /> Remember Me </div>
                <div style="clear:both"> </div>
                <input type="submit" class="login_button_big toggle_btn" id="trigger" name="Login" value="Login" />

            </div>
            <?php
        echo form_close();
       ?>
    </div>

</body>

</html>