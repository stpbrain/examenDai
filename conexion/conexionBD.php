<?php

/*
 * DUOC UC
 * Escuela de Inform&acute;tica y Telecomunicaciones
 * Sede Padre Alonso de Ovalle
 * 
 * Dise&ntilde;o de Aplicaciones para Internet
 * DAI5501
 */

class DBConnection {

    const HOST = "localhost";
    const DBNAME = "examendai";
    const PORT = "3306";
    const USER = "root";
    const PASS = "";

    public static function consulta($sql){
        $dsn = "mysql:host=" . self::HOST . ";dbname=" . self::DBNAME . ";port=" . self::PORT . ";charset=utf8";
        $dbConexion = new PDO($dsn, self::USER, self::PASS);

        return $dbConexion->query($sql); 
       
    }

    public static function getConexion() {
        $dsn = "mysql:host=" . self::HOST . ";dbname=" . self::DBNAME . ";port=" . self::PORT . ";charset=utf8";

        try {
            $dbConexion = new PDO($dsn, self::USER, self::PASS);
            return $dbConexion;
        } catch (PDOException $exception) {
            switch ($exception->getCode()) {
                case 2002:
                    echo '<div class="error">No se pudo establecer la conexión con la base de datos, revise que &eacute;sta se encuentre en ejecuci&oacute;n.</div>';
                    exit;
                case 1045:
                    echo '<div class="error">No se pudo conectar a la base de datos, revise las credenciales configuradas</div>';
                    exit;
                case 1049: 
                    echo '<div>  La base de datos no , se creara automaticamente </div>';                        
                   
                   $dbConexion = self::porfavorCrearBD();
                   
                default:
                    echo '<div class="error">' . $exception->getMessage() . '</div>';
                    break;
            }
        }
    }

    public static function porfavorCrearBD(){
        return self::crearBaseDatos();
    }

    private static function crearBaseDatos() {

        echo '<div class="warning">Base de datos no encontrada, se crear&aacute;...</div>';

        try {
            $dsn = "mysql:host=" . self::HOST . ";port=" . self::PORT . ";charset=utf8";
            $mysqlConexion = new PDO($dsn, self::USER, self::PASS);
            $mysqlConexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $mysqlConexion->exec("CREATE DATABASE " . self::DBNAME);
            $mysqlConexion->exec("USE " . self::DBNAME);

            $mysqlConexion->exec("
    CREATE TABLE IF NOT EXISTS `pacientes` (
      `RUN` varchar(12) NOT NULL DEFAULT '0',
      `NOMBRE-APELLIDO` varchar(60) NOT NULL DEFAULT 'ERROR',
      `FNAC` date,
      `GENERO` varchar(9),
      `DIRECCION` varchar(60),
      `TELEFONO1` varchar(10),
      `TELEFONO2` varchar(10),
     PRIMARY KEY (`RUN`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8");

          
            $mysqlConexion->exec("
    CREATE TABLE IF NOT EXISTS `medicos` (
      `RUN` varchar(12) NOT NULL DEFAULT '0',
      `NOMBRE-APELLIDO` varchar(60) NOT NULL DEFAULT 'ERROR',
      `FCONTRATACION` DATE DEFAULT NULL,
      `ESPECIALIDAD` varchar(60) DEFAULT 'ERROR',
      `VALORCONSULTA` int(6),
      PRIMARY KEY (`RUN`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8");

          
            $mysqlConexion->exec("
    CREATE TABLE IF NOT EXISTS `usuarios` (
      `NOMBRE` varchar(10) NOT NULL DEFAULT '0',
      `PASSWORD` varchar(10) DEFAULT NULL,
      `NIVEL`  int(1) DEFAULT 0
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8");

            
            $mysqlConexion->exec("
    CREATE TABLE IF NOT EXISTS `lv_acceso` (
      `NIVEL` int(1) NOT NULL,
      `DESCRIPCION` varchar(10) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8");
            
            $mysqlConexion->exec("
    CREATE TABLE IF NOT EXISTS `atenciones` (
      `N_SECUENCIA` int(7) NOT NULL,
      `F_ATENCION` date NOT NULL,
      `N_PACIENTE` varchar(60) NOT NULL,
      `M_TRATANTE` varchar(60) NOT NULL,
      `ESTADO` int(1) 
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8");
            
            $mysqlConexion->exec("
    CREATE TABLE IF NOT EXISTS `estAtenciones` (
      `ESTADO` int(1) NOT NULL ,
      `DESCRIPCION` varchar(20)NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8");

// Insercion de los datos basicos para iniciar

            $mysqlConexion->exec("
    INSERT INTO `lv_acceso` (`NIVEL`, `DESCRIPCION`) VALUES
    (0,'no asignado'),
    (1,'Director'),
    (2,'Administrador'),
    (3,'Secretaria'),
    (4,'Paciente')");
            
$mysqlConexion->exec("
    INSERT INTO `estAtenciones` (`ESTADO`, `DESCRIPCION`) VALUES
    (0,'no Categorizada'),
    (1,'Agendada'),
    (2,'Confirmada'),
    (3,'Anulada'),
    (4,'Perdida'),
    (5,'Realizada')");
            
$mysqlConexion->exec("
    INSERT INTO `medicos` (`RUN`, `NOMBRE-APELLIDO`,`FCONTRATACION`,`ESPECIALIDAD`,`VALORCONSULTA`) VALUES
    ('15.993.368-7','Patricio Palominos','2010-04-23','Medicina General',23000)");

     
$mysqlConexion->exec("
    INSERT INTO `pacientes` (`RUN`, `NOMBRE-APELLIDO`,`FNAC`,`GENERO`,`DIRECCION`,`TELEFONO1`,`TELEFONO2`) VALUES
    ('23.412.437-4','Alessandro Venegas','2010-08-30','Masculino','La casa de sus papas','123456789',NULL)");
          
         

            
        } catch (Exception $e) {
            echo $e->getMessage();
            die($e->getCode());
        }
    }

}
