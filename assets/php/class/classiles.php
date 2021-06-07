<?php
include __DIR__."./../connexion.php";
class iles{

    /**
     * GetCity
     *
     * @param int $id
     * 
     */
    public function getCity($getVilles){

        global $connect_bdd;
        $req_select = "SELECT v.name FROM `ile_ville` as iv join iles as i on iv.fk_ile = i.id join villes as v on iv.fk_ville = v.id WHERE i.name = '".$getVilles."'";
        $res_select = $connect_bdd->query($req_select);
        
        foreach ($res_select as $value) {
            
            $island['data'][] = $value['name'];

        }

        return json_encode($island);
    }

    /**
     * DeleteIles
     *
     * @param int $id 
     *
     */
    public function  deleteIles($id){
        
        global $connect_bdd; 
        //sql to delete a record
        $sql_delete = "DELETE FROM iles WHERE id=".$id;

        // execute la requête précédente
        $connect_bdd->query($sql_delete);

    }

    /**
     * GetIles 
     *
     * @return $res_listLivres
     * 
     */
    public function getIles(){
        global $connect_bdd; 

        $req_iles = "SELECT * from iles" ; //$sql : contient la requete sql 
        $res_iles = $connect_bdd->query($req_iles); //$result : execute la requete $sql

        return $res_iles;

    }

    /**
     * CreateIles
     *
     * @param string $name
     *
     */
    public function createIles($name){

        global $connect_bdd;
        $sql = "INSERT INTO `iles`(`name`) VALUES ('$name')";
        $connect_bdd->query($sql);

    }
    
    /**
     * UpdateIles
     *
     * @param string $new_name  
     * @param int $id_iles
     *
     */
    public function updateIles($new_name , $id_iles){
        global $connect_bdd;

        $sql_update = "UPDATE `iles` SET `name`= '$new_name' WHERE id =".$id_iles;
        $connect_bdd->query($sql_update);

    }

}