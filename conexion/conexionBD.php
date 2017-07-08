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
    const DBNAME = "examen-dai5501";
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
    CREATE TABLE IF NOT EXISTS `comuna` (
      `COMUNA_ID` int(5) NOT NULL DEFAULT '0',
      `COMUNA_NOMBRE` varchar(20) DEFAULT NULL,
      `COMUNA_PROVINCIA_ID` int(3) DEFAULT NULL,
      PRIMARY KEY (`COMUNA_ID`),
      KEY `COMUNA_PROVINCIA_ID` (`COMUNA_PROVINCIA_ID`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8");

          
            $mysqlConexion->exec("
    CREATE TABLE IF NOT EXISTS `provincia` (
      `PROVINCIA_ID` int(3) NOT NULL DEFAULT '0',
      `PROVINCIA_NOMBRE` varchar(23) DEFAULT NULL,
      `PROVINCIA_REGION_ID` int(2) DEFAULT NULL,
      PRIMARY KEY (`PROVINCIA_ID`),
      KEY `PROVINCIA_REGION_ID` (`PROVINCIA_REGION_ID`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8");

          
            $mysqlConexion->exec("
    CREATE TABLE IF NOT EXISTS `region` (
      `REGION_ID` int(2) NOT NULL DEFAULT '0',
      `REGION_NOMBRE` varchar(50) DEFAULT NULL,
      `ISO_3166_2_CL`  varchar(5) DEFAULT NULL,
      PRIMARY KEY (`REGION_ID`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8");

            
            $mysqlConexion->exec("
    CREATE TABLE IF NOT EXISTS `persona` (
      `PERSONA_ID` int(8) NOT NULL,
      `PERSONA_NOMBRE` varchar(50) DEFAULT NULL,
      `PERSONA_APELLIDO` varchar(50) DEFAULT NULL,
      `PERSONA_FECHA_NACIMIENTO` DATE DEFAULT NULL,
      PRIMARY KEY (`PERSONA_ID`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8");
            
            $mysqlConexion->exec("
    CREATE TABLE IF NOT EXISTS `carga_legal` (
      `TITULAR_ID` int(8) NOT NULL,
      `BENEFICIARIO_ID` int(8) NOT NULL,
      PRIMARY KEY (`TITULAR_ID`,`BENEFICIARIO_ID`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8");
            
            $mysqlConexion->exec("
    CREATE TABLE IF NOT EXISTS `atencion` (
      `ATENCION_ID` int(8) NOT NULL AUTO_INCREMENT,
      `BENEFICIARIO_ID` int(8) NOT NULL,
      `FECHA_ATENCION` DATE DEFAULT NULL,
       `COMUNA_ID` int(5) NOT NULL,
      PRIMARY KEY (`ATENCION_ID`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8");

          
            $mysqlConexion->exec("
    ALTER TABLE `comuna`
      ADD CONSTRAINT `comuna_ibfk_1` FOREIGN KEY (`COMUNA_PROVINCIA_ID`) REFERENCES `provincia` (`PROVINCIA_ID`) ON UPDATE CASCADE");

            $mysqlConexion->exec("
    ALTER TABLE `provincia`
      ADD CONSTRAINT `provincia_ibfk_1` FOREIGN KEY (`PROVINCIA_REGION_ID`) REFERENCES `region` (`REGION_ID`) ON UPDATE CASCADE");
        
            $mysqlConexion->exec("
    ALTER TABLE `carga_legal`
      ADD CONSTRAINT `persona_titukar_fk` FOREIGN KEY (`TITULAR_ID`) REFERENCES `persona` (`PERSONA_ID`) ON UPDATE CASCADE");
            
            $mysqlConexion->exec("
    ALTER TABLE `carga_legal`
      ADD CONSTRAINT `persona_beneficiario_fk` FOREIGN KEY (`BENEFICIARIO_ID`) REFERENCES `persona` (`PERSONA_ID`) ON UPDATE CASCADE");
    
            
            $mysqlConexion->exec("
    INSERT INTO `persona` (`PERSONA_ID`, `PERSONA_NOMBRE`, `PERSONA_APELLIDO`, `PERSONA_FECHA_NACIMIENTO`) VALUES
    (12345678, 'Juan', 'Pérez','1980-04-28'),
    (20123321, 'Javiera', 'Pérez','2010-05-21'),
    (21987789, 'José', 'Pérez','2012-10-16'),
    ( , 'Francisco', 'Poblete','1985-08-19'),
    (20111111, 'Pedro', 'Poblete','2009-05-19'),
    (20321999, 'Juan', 'Poblete','2011-06-11'),
    (21321321, 'Diego', 'Poblete','2013-01-14'),
    (8123876, 'Pedro', 'Zamora','1983-03-09'),
    (21000321, 'Anastasia', 'Zamora','2014-03-22'),
    (23321655, 'Jacinta', 'Zamora','2015-12-30'),
    (11123321, 'Patricia', 'Fuentes','1981-12-29'),
    (24123321, 'Alfredo', 'Fuentes','2014-11-26')");
            
            
        } catch (Exception $e) {
            echo $e->getMessage();
            die($e->getCode());
        }
    }

}
