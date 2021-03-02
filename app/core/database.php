<?php

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pwd = DB_PWD;
    private $dbname = DB_NAME;

    private $connection;
    private $error;
    private $statement;
    private $dbConnected = false;

    public function __construct()
    {
        // set PDO connection
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            
            $this->connection = new PDO($dsn, $this->user, $this->pwd, $options);
            $this->dbConnected = true;

        } catch (PDOException $e) {
            
            $this->error = $e->getMessage() . PHP_EOL;
            $this->dbConnected = false;

        }
        
    }

    public function getError()
    {
        return $this->error;
    }

    public function isConnected()
    {
        return $this->dbConnected;
    }

    // prepare statement with query
    public function query($query)
    {
        $this->statement = $this->connection->prepare($query);
    }

    // execute the prepared statement
    public function execute()
    {
        return $this->statement->execute();
    }

    // get result set as an array of objects
    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    // get record row count
    public function rowCount()
    {
        return $this->statement->rowCount();
    }

    // get single record as object
    public function singleRecord()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    // bind value param
    public function bind($param, $value, $type = null)
    {
        if(is_null($type))
        {
            switch(true)
            {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;                                     
            }
        }
        $this->statement->bindValue($param, $value, $type);
    }
}