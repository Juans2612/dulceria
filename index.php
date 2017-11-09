<?php

?>
<HTML>
<BODY bgcolor="white" background="imagenes/imagen1.jpg">
    <H1 align="center"><embed src="imagenes/img.jpg"  width="500" heigth="300"> </H1>
    
   <H1></H1>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   
   <FORM  ACTION="validar.php"  METHOD="POST">
   <H1 align="center">   
      
  <FONT FACE="Goudy Stout" SIZE=5> Usuario:<BR>
      <INPUT   TYPE="text"  NAME="usuario"><BR>
      <br>
      <FONT FACE="Goudy Stout" SIZE=5>Password:<BR>
      <INPUT  TYPE="password"  NAME="pass"><BR>
   <br>
      <INPUT  TYPE="submit"  VALUE="Iniciar sesion" >
   </h1>
  </FORM>
   
   
   
   
<?php
      //en el login y password no escribio nada
      if(isset($_SESSION['llene'])){
             echo $_SESSION['llene'];
             unset($_SESSION['llene']);
      }else if(isset($_SESSION['error'])){  //escribio login y password pero esta incorrecta la autentificacion
                   echo $_SESSION['error'];
                   unset($_SESSION['error']); 
             
}//else de arriba, antes del formulario
?>


</BODY>
</HTML>