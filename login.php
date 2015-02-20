
<?php

session_start();

include_once "connect.php";

 

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
			$_SESSION['user'] = $result->usuario;
			$_SESSION['username'] = $result->nombre;

            header("location:index.php");

        }

        else

        {

            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';

        }

    }

?>
          <style type="text/css" media="all">
                        @import "main.css";
						
                </style>
                	<div id="content" style="height:300px; width:340px; background-image:url(img/login-back-full.png); background-repeat:no-repeat; margin:auto; left: 35%; position: absolute; margin-top:10px;">
                    	<div style="width:83px; height:23px; float:right; padding-top:40px; padding-right:40px;">
                            <a href="register.php"><img src="img/login-reg.jpg" width="83" height="23"></a>
                            <img src="img/blank.jpg" width="83" height="4" style="border:hidden">
                            <a href="forgotten.php"><img src="img/login-pw.jpg" width="83" height="23"></a>
                            </div>
                   	    <div id="loginfield" style=" height:162px; width:180px;">
                        
           		 	    <form action="" method="post" class="login" style="height:62px; width:180px; padding-top: 40px;">
						<div style="height:54px; width:158px;">
    						<div style="height:54px; width:170px; padding-bottom:4px;"><label></label><input name="user" type="text" style="background-color:#999999; background-image:url(img/login-username-backg.jpg); height:23px; width:158px; border:hidden;" value="Username" onfocus="if(this.value==this.defaultValue)this.value=''" onblur="if(this.value=='')this.value=this.defaultValue"  onkeypress="this.defaultValue=''">
    						  <label></label><input name="password" type="password" style="background-color:#999999; background-image:url(img/login-username-backg.jpg); height:23px; width:158px; margin-top: 4px; border:hidden;" value="password" onfocus="if(this.value==this.defaultValue)this.value=''" onblur="if(this.value=='')this.value=this.defaultValue"  onkeypress="this.defaultValue=''"> </div>
    						
               		 	    
               		 	      
                              <input type="submit" value=" " name="login" style="background:url(img/login-ok1.png) no-repeat; border:none; height:43px; width:43px;">
                              
                              <input type="reset" value=" " name="reset" style="background:url(img/login-f1.png) no-repeat; border:none; height:43px; width:43px;">
           		 	        </form>
                            	</div>
                            </div>
               		 	  
                            
                    	
                    
                
                               
              
            
                         
                     

<?php

} else {

  header("location:panel.php");
}

?>