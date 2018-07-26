<?php

class ClassContactForm{

    public function insert($name,$email,$subject,$message)
    {
        global $db;

        $conn = $db->connect();
        $query = $conn->prepare("INSERT INTO `contact_form`(`name`, `email`, `subject`, `mesage`) VALUES (?,?,?,?)");
        $query->bind_param('ssss',$name,$email,$subject,$message);
        return $query->execute();
    }

    public function select()
    {
        global $db;

        $qu = $db->connect();
        $query = $qu->query("SELECT * FROM `contact_form`");
        return $query;
    }
}

$contact = new ClassContactForm();