<?php
include_once("capaNegocios.php");

try
{
    if (!empty($_POST))
    {
        $objetoNegocio=new capaNegocios($_POST["cedula"],$_POST["apellidos"],$_POST["nombre"],$_POST["edad"],$_POST["curso"],$_POST["arrastra"] );
        if (isset($_POST["insertar"] ) )
        {
            $objetoNegocio->insertar();
        }
        if (isset($_POST["eliminar"] ) )
        {
            $objetoNegocio->eliminar();
        }
        if (isset($_POST["actualizar"] ) )
        {
            $objetoNegocio->actualizar();
        }
        if (isset($_POST["consultar"] ) )
        {
            $objetoNegocio->consultar();
        }
    }
}
catch(PDOException $ex)
{
    echo $ex->getMessage() ;
}
?>
<head>
    <style type="text/css">
     form {
            background-color; #008000;
            width:240px;
            padding:10px;
            border-style:solid;
            border-width:2px;
            border-color:white;
            float:center; 
            color: white;
    }
    form fieldset{
        float:center;
    }
    </style>

</head>
<body background="IMG/fondo5.jpg" > 
  <br><center><img src="IMG/fd.png"></center></br> 
</body>
<center>
<form action="capaInterfaz.php" method="post">

    <div> <center>Cedula</center><input type="text"  id="cedula" name="cedula" style="margin-left:9%;"
    value="<?php if(isset($_POST["consultar"])) echo $objetoNegocio->cedula;?>"  /></div>
    <div> <center>Apellidos</center> <input type="text" id="apellidos" name="apellidos" style="margin-left:8%;"
    value="<?php if(isset($_POST["consultar"])) echo $objetoNegocio->apellidos;?>" /></div>
    <div> <center>Nombre</center> <input type="text" id="nombre" name="nombre"style="margin-left:8%;" 
    value="<?php if(isset($_POST["consultar"])) echo $objetoNegocio->nombre;?>"  /></div>
    <div> <center> Edad</center> <input type="text" id="edad" name="edad" style="margin-left:8%;"
    value="<?php if(isset($_POST["consultar"])) echo $objetoNegocio->edad;?>" /></div>
    <div> <center>Curso</center> <input type="text" id="curso" name="curso" style="margin-left:8%;"
    value="<?php if(isset($_POST["consultar"])) echo $objetoNegocio->curso;?>" /></div>
    <div> <center>Arrastra</center> <input type="text" id="arrastra" name="arrastra" style="margin-left:8%;"
    value="<?php if(isset($_POST["consultar"])) echo $objetoNegocio->arrastra;?>" /></div>
    <br>
    <div>
    <input type="submit" id="insertar" name="insertar" value="Insertar" />
    <input type="submit" id="eliminar" name="eliminar" value="Eliminar" />
    <input type="submit" id="actualizar" name="actualizar" value="Actualizar"/>
    
    </div>
   </br>

</form>
<style type="text/css">
.AUTOR {
     background-color; #008000;
     padding: 10px;
     float: center;
    border-style: solid;
    border-color: white;
    width:240px;
    color: white; 
}
</style>
<div class="AUTOR">
<p><strong>Santiago Jose Henao Pardo</strong></p>
  <p><strong>Elkin Barrero<strong></p>
  <p><strong>ADSI 751722</strong></p>
</div>
</center>
