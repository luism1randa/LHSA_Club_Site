<?php

class DatabaseAdaptor {
    private $DB; // The instance variable used in every method below
    
    // Connect to an existing database named 'database'
    public function __construct() {
        $dataBase = 'mysql:dbname=lhsa_calendar;charset=utf8;host=127.0.0.1';
        
        $user = 'root';
        $password = 'root'; 
        
        try {
            $this->DB = new PDO ( $dataBase, $user, $password );
            $this->DB->setAttribute ( PDO::ATTR_ERRMODE,
            
            PDO::ERRMODE_EXCEPTION );
            
        } catch ( PDOException $e ) {
            echo ('Error establishing Connection');
            exit ();
        }
    }
    
    public function getEvents () {
        $stmt = $this->DB->prepare( "SELECT * FROM events" );
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}