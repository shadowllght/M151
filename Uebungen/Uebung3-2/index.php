<?php
$db = DB::get();
class DB
{
    protected static $instance;
    
    protected $pdo;
    protected $isTransactionRunning =false;
    
    private function __construct()
    {
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $database = "database";

        $this->pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    public static function get() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        
        return self::$instance;
    }

    public function startTransaction(){
        if($isTransactionRunning==false){
            $this->pdo->exec('START TRANSACTION');
            $this->$isTransactionRunning=true;
        }
        else{
            throw new Exception('There already is a transaction running'); 
        }
    }

    
    public function commitTransaction(){
        if($isTransactionRunning==true){
            $this->pdo->exec('COMMIT TRANSACTION');
        }
        else{
            throw new Exception('Please start a transaction before comitting');
        }
        $isTransactionRunning=false;
    }
    
    
    
    public function rollbackTransaction(){
        if($isTransactionRunning==true){
            $this->pdo->exec('ROLLBACK');
        }
        else{
            throw new Exception('Please start a transaction first');
        }
        
    }
    
    
    
    public function query($sql, $params){
        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);
    }
    
    public function select($sql, $params){
        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);

        return $statement->fetchAll();
    }
}

?>
