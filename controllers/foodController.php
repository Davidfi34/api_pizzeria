<?php


require('DB/DbConnection.php');
require_once('models/food.php');

class FoodController {

    /**
     * obteniene todo los registros de Food
     * 
     */
    public function getAllFoods() {
 
        $database = new DbConnection();
        $conn = $database->getConnection();
        $food = new food($conn);
        $data = $food->getAll();
        echo $data;
    }


    /**
     * obteniene registro de Food x id
     * 
     */
    public function getFoodById($foodId){

        $database = new DbConnection();
        $conn = $database->getConnection();
        $food = new food($conn);
        $data = $food->getById($foodId[1]);
        echo $data;
    }


    /**
     * crea registros de Food
     * 
     */
    public function createFood($food) { 
        echo "metodo crear food - createFood"; 
    }


    /**
     * actuliza registros de Food x id
     * 
     */
    public function updateFood($foodId) {

        echo "metodo PUT - id ".$foodId[1];
    
    }

    /**
     * elimina registros de Food x id
     * 
     */
    public function deleteFood($foodId) {

        echo "metodo DELETE - id ".$foodId[1];
    }
 
}