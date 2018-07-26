<?php


/****************************
 *        Author:           *
 *   Dragoslav Predojevic   *
 *                          *
 *         Date:            *
 *       23/07/2018         *
 * **************************/

/**
 * Connected @DB
 */

class DB{

    public $connection;
    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_name;

    public function  __construct($db_host,$db_user,$db_pass = null,$db_name = null,$connection = null)
    {
        $this->connection = $connection;
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_name = $db_name;

    }
        /** Connect with database **/

    public function connect(){

        $this->connection = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);

        if ($this->connection->connect_error) {
            die("ERROR: ".$this->connection->connect_error);
        } else {
            $this->connection->query("SET NAMES utf8mb4");
        }

        return $this->connection;
    }
        /**  **/

    public function returnError($act, $error, $errno, $url = FALSE ) {

        $error = array(
            'act'   => $act,
            'error' => $error,
            'errno' => $errno,
        );
        if ( $url ) $error[ 'url' ] = $url;

        return $error;
    }
        /**   **/

    public function success ($act,$success,$status,$url = FALSE) {

        $success = array(
            'act'   => $act,
            'success' => $success,
            'status' => $status
        );

        if ( $url ) $error[ 'url' ] = $url;

        return $success;
    }


}

$db = new DB('localhost','root','root','dubinsko_pranje');
