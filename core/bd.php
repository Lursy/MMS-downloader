<?php
require_once "base/connect.php";


class Database{
    public function query($sql, $param=null, $type="s", $conn){

        $stmt = $conn->prepare($sql);
        if ($param){
            $stmt->bind_param($type, $param);
        }
        $loaded = $stmt->execute();
        $result = $stmt->get_result();
        return [$result, $loaded];
    }
}

?>