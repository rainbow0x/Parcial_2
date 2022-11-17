<?php
require_once('modelo.php');

Class sumar extends modeloCredencialesBD
{
    //private $conn;

    public function __construct()
    {
        parent::__construct();
    }

    public function sumatoria($n)
    {
        $instruccion = "CALL Parcial2AR.sp_sumatoria('" . $n . "')";

        $consulta = $this ->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if ($resultado){
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }


    public function listar()
    {
        $instruccion = "SELECT * From Parcial2AR.parcial2";

        $consulta = $this ->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if ($resultado){
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
        else
        {
            echo "Error al conectar";
        }
    }
    
}

?>