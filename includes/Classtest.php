<?php
require(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config.php');

class Pagination{

    public $db;
    public $per_page;
    public $current_page;
    public $sql;

    //put your code here
    function __construct($db,$per = 8, $current = 1) {
        $this->db = $db->connect();
        $this->per_page = $per;
        $this->current_page = $current;
    }

    function execute_query($sql) {
        $stmt = $this->db->query($sql);
        return $stmt;
    }

    function total_pages() {
        $total = ceil($this->count_rows() / $this->per_page);
        return $total;
    }

    function current_page() {
        if (isset($_GET['page']) && is_numeric($_GET['page']))
            $this->current_page = intval($_GET['page']);

        return $this->current_page;
    }

    function offset() {
        $off = ($this->current_page() - 1) * $this->per_page;
        return $off;
    }
    public function previous_page(){
        //move to previous record by subtracting one into the current record
        return  $this->current_page - 1;
    }
    public function next_page(){
        //mvove to next record by incrementing the current page by one
        return  $this->current_page + 1;

    }

    function count_rows() {
        $nums = $this->execute_query("SELECT COUNT(img_url) FROM save_img  WHERE enum = 1");
        $test = $nums->fetch_assoc();
        $total = (int)$test['COUNT(img_url)'];
        return $total;
    }

    function results() {
        $off = $this->offset();
        $per = $this->per_page;
        $query = $this->execute_query("SELECT img_url FROM save_img LIMIT $off, $per");
        while ($result = mysqli_fetch_array($query)) {
            $data[] = $result;
        }
        return $data;
    }
}

$pagination = new Pagination($db);
$prev  = $pagination->previous_page();
$next  = $pagination->next_page();
$total = $pagination->count_rows();
$limit = $pagination->results();
var_dump($prev,$next,$total,$limit);

?>