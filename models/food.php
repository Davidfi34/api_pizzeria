<?php

require(__DIR__ .'/orm.php');

class food extends orm{
    private $id_food;
    private $name;
    private $description;
    private $id_category;
    private $price;

public function __construct(PDO $connection){
    parent::__construct('id_food','foods',$connection);
}



}