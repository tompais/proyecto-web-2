<?php
class Conexion
{
    private $user;
    private $pass;
    private $host;
    private $db;
    private $mysql;
    private $stmt;

    public function __construct()
    {
        $this->user = "root";
        $this->pass = "";
        $this->host = "localhost";
        $this->db = "pokemons_PaisTomas_MartinezAlejo";

        $this->conectar();
    }


    private function conectar()
    {
        $this->mysql = new mysqli($this->host, $this->user, $this->pass, $this->db);

        if ($this->mysql->connect_error)
            die("Error de conexion");
    }

    /**
     * Desconectar
     * 
     * Cierra la conexión con la base de datos
     * 
     * @access public
     */
    public function desconectar()
    {
        $this->mysql->close();
    }

    /**
     * Ejecutar Query
     * 
     * Ejecuta una query, recibida como argumento, con sus parámetros ya fijos
     * 
     * Retorna un objeto en caso de que la query haya resultado exitosa
     * 
     * @access public
     * @param string
     * @return mixed
     */
    public function ejecutarQuery($query)
    {
        return $this->mysql->query($query);
    }

    /**
     * Ejecutar Prepared Statement
     *
     * Ejecuta un Prepared Statement
     * 
     * Retorna un FALSE si ocurrió un problema en la ejecución
     *
     * @access public
     * @return bool
     */
    public function ejecutarPreparedStatement()
    {
        return $this->stmt->execute();
    }

    /**
     * Obtener Cantidad de Filas Afectadas
     * 
     * Obtiene la cantidad de filas afectadas por la última query
     * 
     * @access public
     * @return int
     */
    public function getCantFilasAfectadas()
    {
        return $this->mysql->affected_rows;
    }

    /**
     * Obtener Filas
     * 
     * La función devuelve una fila afectada por la última query ejecutada
     * 
     * @access public
     * @return mixed
     */
    public function getFilaQueryEjecutada($resultado)
    {
        return $resultado->fetch_row();
    }

    /**
     * Limpiar Query
     * 
     * Limpia la variable que guardó el resultado de la query ejecutada
     * 
     * @access public
     */
    public function limpiarQuery($resultado)
    {
        $resultado->free_result();
    }

    /**
     * Setear Sentencia
     * 
     * Setea una sentencia preparada
     * 
     * @access public
     * @param string
     */
    public function setPreparedStmt($stmt)
    {
        return ($this->stmt = $this->mysql->prepare($stmt));
    }

    /**
     * Vincular Parámetros Prepared Statement
     *
     * Vincula los parámetros enviados por argumento y sus tipos, para la sentencia preparada
     * 
     * Retorna FALSE si el bindeo resultó con un error
     *
     * @access public
     * @param string
     * @param array
     * @return bool
     */
    public function vincularParametrosPreparedStatement($tipos, ...$argumentos)
    {
        $bind_names[] = $tipos;
        for ($i = 0; $i < count($argumentos); $i++) {
            $bind_name = 'bind' . $i;
            $$bind_name = $argumentos[$i];
            $bind_names[] = &$$bind_name;
        }
        return call_user_func_array(array($this->stmt, 'bind_param'), $bind_names);
    }

    /**
     * Almacenar Resultado Prepared Statement
     * 
     * La función vuelca en memoria el resultado del prepared statement
     * 
     * Devuelve un objeto que comprueba que esta acción se pudo realizar correctamente
     * 
     * @access public
     * @return mysqli_result
     */
    public function almacenarResultadoPreparedStatementEnMemoria()
    {
        return $this->stmt->store_result();
    }

    /**
     * Vincular Resultado Prepared Statement
     * 
     * La función recibe una cierta cantidad de argumentos, en las cuales se volcarán los resultados del statement
     * 
     * Devuelve un FALSE en caso de que haya ocurrido un error
     * 
     * @access public
     * @return bool
     */
    public function vincularResultadoPreparedStatement(&...$params)
    {
        return call_user_func_array(array($this->stmt, 'bind_result'), $params);
    }

    /**
     * Obtener array asociativo del prepared statement
     * 
     * Obtiene un array, cuyas claves son las columnas a filtrar
     * y los datos corresponden a la consulta
     * 
     * @access public
     * @return array
     */
    public function &getArrayAsociativoPreparedStatement()
    {
        // Obtengo metadata para los nombres de los campos
        $meta = $this->stmt->result_metadata();

        // Creo array dinámico de variables para usar en el bind result
        while ($field = $meta->fetch_field()) {
            $var = $field->name;
            $$var = null;
            $fields[$var] = &$$var;
        }

        // Realizo el bind result
        call_user_func_array(array($this->stmt, 'bind_result'), $fields);

        return $fields;
    }

    /**
     * Recuperar Resultado
     * 
     * Devuelve a los parámetros asociados del resultado lo que trajo el statement en la query
     * 
     * @access public
     * @return bool
     */
    public function recuperarResultadoPreparedStatement()
    {
        return $this->stmt->fetch();
    }

    /**
     * Cerrar Prepared Statement
     *
     * Cierra el statement, borrándolo por completo
     *
     * @access public
     */
    public function cerrarPreparedStatement()
    {
        $this->stmt->close();
    }
}
