<?php
class Pagination
{
    // database handle
    private $db;

    // total records in table
    private $total_records;

    // limit of items per page
    private $limit;

    // total number of pages needed
    private $total_pages;

    /**
     * Pagination constructor.
     * @param $db
     */
    public function __construct($db) {
        $this->db = $db->connect();
    }

    /**
     * @param $query
     * @return int
     */
    public function totalRecords($query)    // determines the total number of records in table
    {
        $stmt = $this->db->query($query);

        $this->total_records = $stmt->fetch_assoc();

        $total = (int)$this->total_records['COUNT(img_url)'];

        return $total;
    }

    /**
     * @param $limit
     * @return float
     */
    public function setLimit($limit)    // sets limit and number of pages
    {
        $this->limit = $limit;

        $total = (int)$this->total_records['COUNT(img_url)'];

        // determines how many pages there will be
        if(!empty($total))
            return $this->total_pages = ceil($total / $this->limit); //return the paging data

    }

    /**
     * @return int
     */
    public function page()   // determine what the current page is also, it returns the current page
    {
        $page = (int)(isset($_GET['page'])) ? $_GET['page'] : $page = 1;

        // out of range check
        if ($page > $this->total_pages) {
            $page = $this->total_pages;
        } elseif ($page < 1) {
            $page = 1;
        }


        return $page;
    }

}

$pagination = new Pagination($db);
$total = $pagination->totalRecords('SELECT COUNT(img_url) FROM save_img WHERE enum = 1');
$pagination->setLimit(8);
$page = $pagination->page();

