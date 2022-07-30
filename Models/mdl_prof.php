<?php

class Mdl_prof
{
    public static function list_data()
    {
        $query = "SELECT * FROM profs ORDER BY id";
        return db_connect()->query($query)->fetchAll();
    }

    public static function save_data($nom, $email, $tel, $photo)
    {
        $query = "INSERT INTO profs(nom, email, tel, photo) VALUES (?,?,?,?)";
        $q = db_connect()->prepare($query);
        return $q->execute(array($nom, $email, $tel, $photo));
    }

    public static function get_data($id)
    {
        $query = "SELECT * FROM profs WHERE id=".$id;
        return db_connect()->query($query)->fetch();
    }

    public static function set_data($nom, $email,$tel, $photo, $id)
    {
        $query = "UPDATE profs SET nom = ?, email= ?, tel = ?, photo = ? WHERE id = ?";
        $q = db_connect()->prepare($query);
        return $q->execute(array($nom, $email,$tel, $photo, $id));
    }
    
    public static function delete_data($id)
    {
        $query = "DELETE FROM profs WHERE id =".$id;
        db_connect()->query($query);
    }
}
