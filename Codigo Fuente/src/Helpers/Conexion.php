<?php
    class Conexion
    {
        private $user;
        private $pass;
        private $host;
        private $db;
        private $conec;
        /*
        public function __construct($user, $pass, $db)
        {
            $this->user = $user;
            $this->pass = $pass;
            $this->host = "127.0.0.1";
            $this->db = $db;
            $this->conectar();
        }
        */
        public function __construct()
        {
            $this->user = "root";
            $this->pass = "";
            $this->host = "127.0.0.1";
            $this->db = "pw";
            $this->conectar();
        }
        
        
        private function conectar()
        {
            $this->conec = new mysqli($this->host, $this->user, $this->pass, $this->db);
            
            if($this->conec->connect_error)
                die("Error de conexion");
        }

        public function desconectar()
        {
            $this->conec->close();
        }

        public function ejecutarQuery($query)
        {
            //devuelve el resultado de la query
            return $this->conec->query($query);
        }

        public function filasAfectadas()
        {
            //devuelve la cantidad de filas que fueron afectadas
            return $this->conec->affected_rows;
        }

        public function getFila($resultado)
        {
            //devuelve el siguiente registro si es que existe
            return $resultado->fetch_row();
        }

        public function limpiarQuery($resultado)
        {
            //libera el resultado del query.
            $resultado->free_result();
        }
    }
?>