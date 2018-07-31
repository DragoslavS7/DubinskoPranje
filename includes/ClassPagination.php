<?php
class Pagination{

    public $db;
    public $per_page;
    public $current_page;

    //put your code here

    /**
     * Pagination constructor.
     * @param $db
     * @param int $per
     * @param int $current
     */
    function __construct($db, $per = 8, $current = 1) {
        $this->db = $db->connect();
        $this->per_page = $per;
        $this->current_page = $current;
    }

    /**
     * @param $sql
     * @return mixed
     */
    function execute_query($sql) {
        $stmt = $this->db->query($sql);
        return $stmt;
    }

    /**
     * @return float
     */
    function total_pages() {
        $total = ceil($this->count_rows() / $this->per_page);
        return $total;
    }

    /**
     * @return int
     */
    function current_page() {
        if (isset($_GET['page']) && is_numeric($_GET['page']))
            $this->current_page = intval($_GET['page']);

        return $this->current_page;
    }

    /**
     * @return int
     */
    function offset() {
        $off = ($this->current_page() - 1) * $this->per_page;
        return $off;
    }

    /**
     * @return int
     */
    public function previous_page(){
        //move to previous record by subtracting one into the current record
        return  $this->current_page;
    }

    /**
     * @return int
     */
    public function next_page(){
        //mvove to next record by incrementing the current page by one
        return  $this->current_page + 1;

    }

    /**
     * @return int
     */
    function count_rows() {
        $nums = $this->execute_query("SELECT COUNT(img_url) FROM save_img  WHERE enum = 1");
        $test = $nums->fetch_assoc();
        $total = (int)$test['COUNT(img_url)'];
        return $total;
    }

    /**
     * @return array
     */
    function results() {
        $off = $this->offset();
        $per = $this->per_page;
        $query = $this->execute_query("SELECT img_url FROM save_img WHERE enum = 1 LIMIT $off, $per");
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
$res   = $pagination->results();

