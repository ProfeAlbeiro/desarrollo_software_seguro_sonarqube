<?php
    class DataBase{
        #  Conexión Local
        public static function connection(){
            $hostname = "localhost";
            $port = "3307";
            $database = "db_tps_nc_iv_2771440";
            $username = "root";
            if (file_exists('.env')) {
                $env = parse_ini_file('.env');
                $password = $env['DB_PASSWORD'];
            } else {
                // Para producción (Azure)
                $password = getenv('DB_PASSWORD');
            }
			$pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",$username,$password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}
	}
?>