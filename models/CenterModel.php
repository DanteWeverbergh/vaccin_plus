<?php

class Center {
    public static function getAllCenters() {
        global $db; 
        
        $sql = 'SELECT * FROM center';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute();

        return $sql_statement->fetchAll();

    }

    public static function getCenterById($center_id) {
        global $db;

        $sql = 'SELECT * FROM center
                WHERE center_id = :center_id';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':center_id' => $center_id,
        ]);

        return $sql_statement->fetchObject();
    }

    public static function uploadPdf($pdf, $center_id) {
        global $db;

        $sql = 'UPDATE center 
                SET pdf = :pdf
                WHERE center_id = :center_id';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':pdf' => $pdf,
            ':center_id' => $center_id,
        ]);

        $center_id = $db->lastInsertId();

        return $center_id;
    }

   

  

}