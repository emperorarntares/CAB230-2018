<!-- Establish connection to database -->
<?php
class Database
{   
    private $host = "cab230.sef.qut.edu.au";
    private $db_name = "n9934731";
    private $username = "n9934731";
    private $password = "myNewPassword";
    public $conn;
     
    public function dbConnection()
	{
     
	    $this->conn = null;    
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }
         
        return $this->conn;
    }
}
?>

<?php
	$database_username = 'n9934731';
	$database_password = 'myNewPassword';
	$pdo_conn = new PDO( 'mysql:host=localhost;dbname=n9934731', $database_username, $database_password );
?>

//put this in review

$servername = "cab230.sef.qut.edu.au";
$dbname = "n9934731";
$username = "n9934731";
$password = "myNewPassword";
$pdo_conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);