
<?php


session_start();
include_once "connect.php";
include "security.php";

function verificar_login($user,$password,&$result) {

    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and password = '$password'";

    $rec = mysql_query($sql);

    $count = 0;

 

    while($row = mysql_fetch_object($rec))

    {

        $count++;

        $result = $row;

    }

 

    if($count == 1)

    {

        return 1;

    }

 

    else

    {

        return 0;

    }

}

 

if(!isset($_SESSION['userid']))

{

    if(isset($_POST['login']))

    {

        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)

        {

            $_SESSION['userid'] = $result->idusuario;

            header("location:index.php");

        }

        else

        {

            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';

        }

    }

?>

 

<style type="text/css">

*{

    font-size: 14px;

}

body{

background:#aaa;

}

form.login {

    background: none repeat scroll 0 0 #F1F1F1;

    border: 1px solid #DDDDDD;

    font-family: sans-serif;

    margin: 0 auto;

    padding: 20px;

    width: 278px;

    box-shadow:0px 0px 20px black;

    border-radius:10px;

}

form.login div {

    margin-bottom: 15px;

    overflow: hidden;

}

form.login div label {

    display: block;

    float: left;

    line-height: 25px;

}

form.login div input[type="text"], form.login div input[type="password"] {

    border: 1px solid #DCDCDC;

    float: right;

    padding: 4px;

}

form.login div input[type="submit"] {

    background: none repeat scroll 0 0 #DEDEDE;

    border: 1px solid #C6C6C6;

    float: right;

    font-weight: bold;

    padding: 4px 20px;

}

.error{

    color: red;

    font-weight: bold;

    margin: 10px;

    text-align: center;

}

</style>

 

<form action="" method="post" class="login">

    <div><label>Username</label><input name="user" type="text" ></div>

    <div><label>Password</label><input name="password" type="password"></div>

    <div><input name="login" type="submit" value="login"></div>

</form>

<?php

} else {
?>
<!DOCTYPE html>
<html>
<head>
<title>Webinterface-TS3-Bot</title>
<meta name="description" content="Webinterface-TS3-MusicBot">
<meta name="keywords" content="Webinterface-TS3-MusicBot">
<meta name="author" content="Hendrik Haas">
<meta charset="UTF-8">
          <style type="text/css" media="all">
                        @import "main.css";
						
                </style>
          <style type="text/css" media="screen">
          <!--

                -->
          </style>
          <link href="smart.css" rel="stylesheet" type="text/css" media="only screen and (min-width: 0px) and (max-width: 320px)" >
          <link href="tablet.css" rel="stylesheet" type="text/css" media="only screen and (min-width: 321px) and (max-width: 768px)" >
          <link href="normal.css" rel="stylesheet" type="text/css" media="only screen and (min-width: 769px)" >
          <link rel="icon" type="image/png" href="favicon.png" />  
</head>
	        <div id="behavior" style="margin-left: auto; margin-right: auto;">
              <div id="main" style="margin-left: auto; margin-right: auto;">
                	
                <div id="header" style="margin-left: auto; margin-right: auto;">
                  <div>
                  <p style="margin-left: 155px; font-family:Verdana, Geneva, sans-serif; font-size:11px; font-weight:bold; color:#636060; padding-top:180px;">&nbsp;OpenTS3Bot Controlpanel - <?php echo "Welcome back ",$_SESSION["username"],"!"; ?>&nbsp; - &nbsp;<a href="logout.php" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; font-weight:bold; color:#636060;">Logout</a>&nbsp; - &nbsp;Bot is currently ONLINE - TRACK "Faithless - Insomnia"</p></div>
                </div>
                    </div>        
              </div>
			    <!--is hidden-->
                 

                                <div id="raper" style="margin-left: auto; margin-right: auto;">

                                         <div id="navi">
              <ul>	<li style="background:none;"><div style="background-image:url(img/nav-cp.jpg); height:23px; width:158px; padding-top:2px;"><p style="font-family:Verdana, Geneva, sans-serif; font-size: 11px; font-weight:bold; margin-left:auto; margin-right:auto; color:#454545;">Control Panel</p>
												</div></li>
                                                <li style="width: 158px; margin-top:3px;"><a href="bot.php" style="padding-top:3px; color:#454545;">Usermanagement</a></li>
                                                <li style="background:none; margin-top:19px;"><div style="background-image:url(img/nav-ts.jpg); height:23px; width:158px; padding-top:2px;"><p style="font-family:Verdana, Geneva, sans-serif; font-size: 11px; font-weight:bold; margin-left:auto; margin-right:auto; color:#454545;">TS3 Bot</p>
												</div></li>
                                                <li style="width: 158px; margin-top:3px;"><a href="bot.php" style="padding-top:3px; color:#454545;">Configuration</a></li>
                                                <li style="width: 158px; margin-top:1px;"><a href="bot.php" style="padding-top:3px; color:#454545;">FTP</a></li>
                                                <li style="width: 158px; margin-top:1px;"><a href="bot.php" style="padding-top:3px; color:#454545;">Playlist</a></li>
                                                <li style="background:none; margin-top:19px;"><div style="background-image:url(img/nav-ots.jpg); height:23px; width:158px; padding-top:2px;"><p style="font-family:Verdana, Geneva, sans-serif; font-size: 11px; font-weight:bold; margin-left:auto; margin-right:auto; color:#454545;">OpenTS3Bot</p>
												</div></li>
                                                <li style="width: 158px; margin-top:3px;"><a href="bot.php" style="padding-top:3px; color:#454545;">Imprint</a></li>
                                                <li style="width: 158px; margin-top:1px;"><a href="bot.php" style="padding-top:3px; color:#454545;">License</a></li>
                                                <li style="width: 158px; margin-top:1px;"><a href="bot.php" style="padding-top:3px; color:#454545;">Developers</a></li>
                                                <li style="width: 158px; margin-top:1px;"><a href="bot.php" style="padding-top:3px; color:#454545;">Forum</a></li>
                                                
                                          </ul> <!--
                                                        <div id="copyright" >
                                         					&copy; by Hendrik Haas - DJ MacHack and OpenTS3MusicBot
                                                        </div> -->
                                         </div>
                                </div>
                                <div id="content">
                                <div style="width:100%; height:100%">
                                    <iframe src="http://92.222.65.233:8080/" noresize="noresize" id="myFrame" frameborder="0" allowTransparency="true" scrolling="auto" width="770px" height="500px">Your browser doenst support iFrame.</iframe>
                                </div>
                               </div> 
 
       <div id="footer" style="margin-left:auto; margin-right:auto; margin-top: 532px;">
       							<p style="font-family:Verdana, Geneva, sans-serif; font-size: 11px; font-weight:bold; padding-top:11px; color:#999999; margin-left: 870px;">designed by</p>
                               
                               </div>
                         
                     </html>
<?php
}

?>