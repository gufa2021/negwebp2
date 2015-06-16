
<?php
$txtNombre ="";
$txtApellido ="";
$txtFinal= "";
if(isset($_POST["btnProcesar"])){
  $txtNombre =$_POST["txtNombre"];
  $txtTelefono =$_POST["txtTelefono"];

  $txtFinal=  $txtNombre. "" .$txtApellido;
}



?>
<!DOCTYPE HTML>
<html>
     <head>
       <meta charset="utf-8" />
          <title>formulario de html y php </title>
    </head>
      <body>
        <h1>FORMULARIO PHP</h1>
             <form action="formulario1.php" method="post">

                  <label for="txtNombre">Nombre</label>
                    <input type="text" id="txtNombre" name="txtNombre" placeholder "Nombres"
                    value="<?php echo  txtNombre; ?>"
                    />
                      <br/>

                  <label for="txtApellido">Apellidos</label>
                    <input type="text" id="txtApellido" name="txtApellido" placeholder "Apellidos"
                    value="<?php echo  txtApellido; ?>"
                    />
                      <br/>

                      <label for="txtTelefono">Telefono</label>
                        <input type="text" id="txtTelefono" name="txtTelefono" placeholder "Telefono"
                        value="<?php echo  txtTelefono; ?>"
                        />
                          <br/>

             <input type="submit" value="Procesar" id="btnProcesar" name="btnProcesar"/>



           </form>
           <div>
             <?php
             echo $txtFinal;
             ?>
           </div>
      </body>
</html>
