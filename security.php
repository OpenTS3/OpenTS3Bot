<?php  

if(!isset($_SESSION[''])){
 header("Location: logout.php");  
} 
 

if(isset($_SESSION['time'])){ 
 $tiempo = $_SESSION['time']; 
}else{ 
 $tiempo = strtotime(date("Y-m-d H:i:s")); 
} 

$inactividad =60;    

$actual =  strtotime(date("Y-m-d H:i:s")); 

if( ($actual-$tiempo) >= $inactividad){ 
 header("Location: logout.php"); 

}else{ 
 $_SESSION['time'] =$actual; 
} 
?>