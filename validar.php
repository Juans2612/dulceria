<?php
  session_start();
  
    $usuario=isset($_POST['usuario']) ? $_POST['usuario']: "";
    $pass=isset($_POST['pass']) ? $_POST['pass']: "";
     $_SESSION['seguridad']=0;
     
	//si escribio login y password 
    if($usuario !=""   &&   $pass !=""){
	  //verifica si ese login y password es correcto 
      if($usuario=="admin"   &&   $pass=="123"){
          $_SESSION['administrador']=$usuario;
		  $_SESSION['seguridad']=1;
		  echo  "<SCRIPT TYPE='text/javascript'>window.location='menu.html'; </SCRIPT>";
      }
      else{
	           //si escribio login y pasword pero esta incorrecto 
               $_SESSION['error']="login  incorrecto";
             }
  }else
     {
          //no escribio ni login ni password
		  $_SESSION['llene']="Llene los campos";
		  
    }
  
    
    if($usuario !=""   &&   $pass !=""){
	  //verifica si ese login y password es correcto 
      if($usuario=="cliente"   &&   $pass=="456"){
          $_SESSION['administrador2']=$usuario;
		  $_SESSION['seguridad']=1;
		  echo  "<SCRIPT TYPE='text/javascript'>window.location='clientes.html'; </SCRIPT>";
      }
      else{
	           //si escribio login y pasword pero esta incorrecto 
               $_SESSION['error']="login  incorrecto";
             }
  }else
     {
          //no escribio ni login ni password
		  $_SESSION['llene']="Llene los campos";
		  
    }
    
    if($usuario !=""   &&   $pass !=""){
	  //verifica si ese login y password es correcto 
      if($usuario=="ventas"   &&   $pass=="678"){
          $_SESSION['administrador3']=$usuario;
		  $_SESSION['seguridad']=1;
		  echo  "<SCRIPT TYPE='text/javascript'>window.location='mostrar_ventass.php'; </SCRIPT>";
      }
      else{
	           //si escribio login y pasword pero esta incorrecto 
               $_SESSION['error']="login  incorrecto";
             }
  }else
     {
          //no escribio ni login ni password
		  $_SESSION['llene']="Llene los campos";
		  
    }
     //despues de verificar el login y password, siempre redirecciona a la pagina de index.php
	 //echo "<SCRIPT LANGUAJE='javascript'>  alert('paso por aqui');</script>";
	 if($_SESSION['seguridad']==1)
	 {
		echo  "<SCRIPT TYPE='text/javascript'>window.location='logout.php'; </SCRIPT>"; 
	}        
	else {
   
	echo "<SCRIPT TYPE='text/javascript'>window.location='logout.php'; </SCRIPT>";
	}
        
        
        
  ?>