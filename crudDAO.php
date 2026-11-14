<?php 
class crudDao{
    public function read(){
        global $db;


        $sql=$db->prepare("SELECT * FROM users WHERE status = 1 ORDER BY lname ASC");
        $sql->execute();
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}
?>
