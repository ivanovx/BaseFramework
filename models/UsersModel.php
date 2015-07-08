<?php

class UsersModel extends BaseModel {
    public function getAll() {
        $statement = self::$db->query("SELECT * FROM users ORDER BY ID");
         
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function createUser($name) {
        if ($name == "") {
            return false;
        }
        $statement = self::$db->prepare("INSERT INTO users VALUES(NULL, ?)");
        $statement->bind_param("s", $name);
        $statement->execute();
        
        return $statement->affected_rows > 0;
    }

    public function deleteUser($id) {
        $statement = self::$db->prepare("DELETE FROM users WHERE ID = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        
        return $statement->affected_rows > 0;
    }
}
