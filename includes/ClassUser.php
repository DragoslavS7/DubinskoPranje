<?php
/** Iclude all needed files  */
require(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config.php');
if(file_exists('ClassSession'))require 'ClassSession.php';


class User {

    /** Login for admin **/
    /**
     * @param $name
     * @param $pass
     * @return bool
     */
    public function login($name,$pass)
    {
        global $db;

        $conn = $db->connect();
        $query = $conn->prepare("SELECT `name`,`pass` FROM `users_D` WHERE `name`= ? AND `pass`= ?");
        $query->bind_param('ss',$name,$pass);
        $query->execute();
        $query->store_result();
        return $query->num_rows;
    }

    /**
     * @param null $string
     * @return bool
     */
    public function profile($string=null)
    {
        global $db;

        $qu = $db->connect();
        $query = $qu->query("SELECT * FROM `users_D`");
        if($query->num_rows > 0)
        {
            while ($r = $query->fetch_assoc()){
                return $r[$string];
            }
        }
        return true;
    }

}

$user = new User();