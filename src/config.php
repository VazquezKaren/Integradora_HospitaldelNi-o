<?php
    class conn{
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "hospitalinfantil";

        public function connect(){
            try {
                $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ];
                return new PDO($dsn, $this->username, $this->password, $options);

            } catch (\Throwable $th) {
                echo "Error en la conexion" . $th->getMessage();
                exit;
            }
        }

    }
?>
