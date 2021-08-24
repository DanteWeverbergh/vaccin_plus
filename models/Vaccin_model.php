<?php

class Vaccin {

    public static function getAllVaccinsByCenterId($center_id){
        global $db;

        $sql = 'SELECT * FROM vaccin
                WHERE center_id = :center_id';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':center_id' => $center_id,
        ]);

        return $sql_statement->fetchAll();
    }

    public static function getAllVaccinsByCenterIdDesc($center_id){
        global $db;

        $sql = 'SELECT * FROM vaccin
                WHERE center_id = :center_id
                ORDER BY vaccin_id DESC';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':center_id' => $center_id,
        ]);

        return $sql_statement->fetchAll();
    }

    public static function getAvailableVaccinByCenterId($center_id) {
        global $db;

        $sql = 'SELECT * FROM vaccin
                WHERE center_id = :center_id
                AND status = 0';
        
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':center_id' => $center_id,
        ]);

        return $sql_statement->fetchAll();
    }

    public static function countVaccins($center_id) {
        global $db;

        $sql = 'SELECT COUNT(*) FROM vaccin
                WHERE center_id = :center_id
                AND status = 0';

        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':center_id' => $center_id,
        ]);

        return $sql_statement->fetchColumn();
    }

    public static function vaccinRes($data, $center_id) {
        global $db;

        $res_data = [];

        $res_data['name'] = $data['name'];
        $res_data['email'] = $data['email'];
        $res_data['phone'] = $data['phone'];
        $res_data['rijksregisternr'] = $data['rijksregisternr'];

        

        //desc weg als we de eerst willen updaten
        //desc als we de laatse willen updaten
        $sql = 'UPDATE vaccin SET claimer = :claimer , email = :email, rijksregisternr = :rijksregisternr, phone = :phone, status = :status
                WHERE status = 0 AND center_id = :center_id
                order by vaccin_id limit 1';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':claimer' => $res_data['name'],
            ':email' => $res_data['email'],
            ':rijksregisternr' => $res_data['rijksregisternr'],
            ':phone' => $res_data['phone'],
            ':status' => 1,
            ':center_id' => $center_id,

            

        ]);
     

        $vaccin_id = $db->lastInsertId();
        return $vaccin_id;
        

    }

    


}