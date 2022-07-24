<?php

    session_start();

    include_once('connection.php');
    include_once('url.php');

    $data = $_POST;

    if(!empty($data)){
        $name = $data['name'];
        $phone = $data['phone'];
        $observations = $data['observations'];

        $query = 'INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)';

        $stmt = $conn->prepare($query);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':observations', $observations);

        try{
            $stmt->execute();
            $_SESSION['msg'] = 'Contact successfully created';
    
        }catch(PDOException $e){
            // connection error
            $error = $e->getMessage();
            echo "Error: $error";
        }

        header('Location:' . "http://" . $_SERVER['SERVER_NAME']);

    }else{
        $id;
    
        if(!empty($_GET)){
            $id = $_GET["id"];
        }
        // Return a contact
        if(!empty($id)){
            $query = "SELECT * FROM contacts WHERE id = :id";
            
            $stmt = $conn->prepare($query);
    
            $stmt->bindParam(":id", $id);
    
            $stmt->execute();
    
            $contact = $stmt->fetch();
        }else{
            // Return all contacts
            $contacts = [];
        
            $query = "SELECT * FROM contacts";
        
            $stmt = $conn->prepare($query);
        
            $stmt->execute();
        
            $contacts = $stmt->fetchAll();
        }
    }

    $conn = null;