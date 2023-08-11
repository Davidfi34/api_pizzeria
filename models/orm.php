<?php


class orm{

    protected $id;
    protected $table;
    protected $db;


    public function __construct($id, $table,PDO $connection){

        $this->id = $id;
        $this->table = $table;
        $this->db = $connection;
    }
        

    /**
     * METODO GET PARA OBTENER TODOS LOS REGISTROS
    * return List
    */
    public function getAll(){
        $stm = $this->db->prepare("SELECT * FROM {$this->table}");
        $stm->execute();
        return json_encode($stm->fetchAll());
    }
    

    /**
     * METODO GET POR ID
    * return json
    */
      public function getById($id){

        $stm = $this->db->prepare("SELECT * FROM {$this->table} WHERE {$this->id} = {$id}");
        $stm->execute();
        return json_encode($stm->fetchAll());

      } 

   //   public function deleteById($id){}; // ELIMINAR 

   //   public function updateById($id, $data){}; // ACTUALIZAR

   //   public function insert($data){};  // INSERTAR

}
