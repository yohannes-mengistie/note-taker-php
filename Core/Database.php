<?php 

class Database
{
    public $connection;
    public $statement;
    public function __construct($config)
   {
        
        $dsn = "mysql:host={$config['host']};dbname={$config['db']};charset={$config['charset']}";

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $this->connection = new PDO($dsn, $config['user'], $config['pass'], $options);

    }
    

    public function query($query, $params = [])
    {
      
        try {
            
            $this->statement = $this->connection->prepare($query);
            $this->statement->execute($params);
            // $posts = $statement->fetchAll();

            return $this; 
        } catch (PDOException $e) {
            echo 'Database connection failed: ' . $e->getMessage();
            return null;
        }
    }

    public function find(){
        return $this->statement->fetch();
    }

    public function findOrFail(){
        $result = $this->find();
        if(!$result){
            abort(Response::NOT_FOUND);
    }
    return $result;
    
}

public function get(){
    return $this->statement->fetchAll();
}

public function authorization($condition , $statusCode = Response::FORBIDDEN)
{
    if(!$condition){
        abort($statusCode);
    }
    return true;
}




};
