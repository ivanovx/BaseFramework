<?php

class UsersModel extends BaseModel {
    public function getAll() {
        $statement = self::$db->query("SELECT * FROM users ORDER BY id");
         
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function createUser($name) {
        if ($name == "") {
            return false;
        }
        $id = 3;
        $statement = self::$db->prepare("INSERT INTO users VALUES(1 + $id, ?)");
        $statement->bind_param("s", $name);
        $statement->execute();
        
        return $statement->affected_rows > 0;
    }

    public function deleteUser($id) {
        $statement = self::$db->prepare("DELETE FROM users WHERE id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        
        return $statement->affected_rows > 0;
    }
}
