<?php
require_once 'router.php';
require_once 'controllers/foodController.php';


/***
 * RUTAS DEFINIDAS POR ENTIDAD Y METODO
 */

// Crear una instancia del enrutador (router)
$router = new Router();

// Definir rutas para "foods"

/**
 * EJEMPLO DE URL:
 *  OBTENER TODO    (GET) -> http://localhost/dashboard/sitio.com/food
 *  OBTENER POR ID  (GET) -> http://localhost/dashboard/sitio.com/food/1 
 * 
 */
$router->get('/food', 'FoodController@getAllFoods');
$router->get('/food/id', 'FoodController@getFoodById');
$router->post('/food', 'FoodController@createFood');
$router->put('/food/id', 'FoodController@updateFood');
$router->delete('/food/id', 'FoodController@deleteFood');
// Agregar otras rutas relacionadas con comidas aquí




/**
 * EJEMPLO DE URL:
 *  OBTENER TODO    (GET) -> http://localhost/dashboard/sitio.com/category
 *  OBTENER POR ID  (GET) -> http://localhost/dashboard/sitio.com/category/1 
 * 
 */
// Definir rutas para "categories"
$router->get('/category', 'CategoryController@getAllCategories');
$router->post('/category', 'CategoryController@createCategory');
// Agregar otras rutas relacionadas con categorías aquí