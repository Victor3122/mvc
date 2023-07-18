
<?php
class CoffeeModel {
    private $servername = "localhost";
    private $username = "coffee";
    private $password = "coffee123";
    private $dbname = "coffeeshop";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getCoffeeNames() {
        $coffeeNames = [];

        $sql = "SELECT name FROM coffee_name";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $coffeeNames[] = $row['name'];
            }
        }

        return $coffeeNames;
    }

    public function addCoffee($name) {
        $sql = "INSERT INTO coffee_name (name) VALUES ('$name')";
        $result = $this->conn->query($sql);
        if (!$result) {
            die("Error: " . $this->conn->error);
        }
    }

    public function deleteCoffee($name) {
        $sql = "DELETE FROM coffee_name WHERE name = '$name'";
        $result = $this->conn->query($sql);
        if (!$result) {
            die("Error: " . $this->conn->error);
        }
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
?>
