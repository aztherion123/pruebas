<?php
include_once("capaDatos.php");

class capaNegocios
{
    public $cedula;
    public $apellidos;
    public $nombre;
    public $edad;
    public $curso;
    public $arrastra;
    public $objetoDatos;
    public function __construct($cedula,$apellidos,$nombre,$edad,$curso,$arrastra)
    {
        $this->cedula=$cedula;
        $this->apellidos=$apellidos;
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->curso=$curso;
        $this->arrastra=$arrastra;
        $this->objetoDatos= new capaDatos('mysql:host=localhost;dbname=baseproyecto','root','');

    }

    public function insertar()
    {
        try{
            $this->objetoDatos->conectar();
            $this->objetoDatos->ejecutar("insert into estudiantes (cedula,apellidos,nombre,edad,curso,arrastra) values('$this->cedula','$this->apellidos','$this->nombre','$this->edad','$this->curso','$this->arrastra')");
           $this->objetoDatos->desconectar(); 
        }
        catch (PDOException $ex)
        {
            throw $ex;
            
        }
    }
    public function eliminar()
    {
        $this->objetoDatos->conectar();
        $this->objetoDatos->ejecutar("delete from estudiantes where cedula= $this->cedula");
        $this->objetoDatos->desconectar();
    }
    public function actualizar()
    {
        $this->objetoDatos->conectar();
        $this->objetoDatos->ejecutar("update estudiantes set apellidos='$this->apellidos', nombre='$this->nombre',edad='$this->edad',curso='$this->curso',arrastra='$this->arrastra' where cedula=$this->cedula");
        $this->objetoDatos->desconectar();
    }
    public function consultar(){
        $this->objetoDatos->conectar();
        $rs=$this->objetoDatos->ejecutar("select from estudiantes where cedula='$this->cedula'");
        if (count($rs)) {
            $this->apellidos->$rs[0]['apellidos'];
            $this->nombre->$rs[0]['nombre'];
            $this->edad->$rs[0]['edad'];
            $this->curso->$rs[0]['curso'];
            $this->arrastra->$rs[0]['arrastra'];
        }  
        $this->objetoDatos=desconectar(); 
    }
   
}

?>