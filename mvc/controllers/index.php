<?php
require_once '../models/CoffeeModel.php';

$coffeeModel = new CoffeeModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['coffee_name'])) {
        $coffeeName = $_POST['coffee_name'];

        if (isset($_POST['add_coffee'])) {
            $coffeeModel->addCoffee($coffeeName);
        } elseif (isset($_POST['delete_coffee'])) {
            $coffeeModel->deleteCoffee($coffeeName);
        }
    }
}

$coffeeNames = $coffeeModel->getCoffeeNames();
$coffeeModel->closeConnection();

require '../views/viewindex.php';
?>