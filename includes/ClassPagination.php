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

    // first and back links
    private $firstBack;

    // next and last links
    private $nextLast;

    // where are we among all pages?
    private $where;

    public function __construct($db) {
        $this->db = $db->connect();
    }

    // determines the total number of records in table
    public function totalRecords($query)
    {
        $stmt = $this->db->query($query);

        $this->total_records = $stmt->fetch_assoc();

        return $this->total_records;
    }

    // sets limit and number of pages
    public function setLimit($limit)
    {
        $this->limit = $limit;

        $total = (int)$this->total_records['COUNT(img_url)'];

        // determines how many pages there will be
        if(!empty($total))
            return $this->total_pages = $total / $this->limit; //return the paging data

    }

    // determine what the current page is also, it returns the current page
    public function page()
    {
        $page = (int)(isset($_GET['page'])) ? $_GET['page'] : $page = 1;

        // out of range check
        if ($page > $this->total_pages) {
            $page = $this->total_pages;
        } elseif ($page < 1) {
            $page = 1;
        }

        // links
//        if ($page > 1) {
//            // backtrack
//            $prevpage = $page -1;
//
//            // 'first' and 'back' links
//            $this->firstBack = "<div class='first-back'><a href='$_SERVER[PHP_SELF]?pageno=1'>First</a> <a href='$_SERVER[PHP_SELF]?pageno=$prevpage'>Back</a></div>";
//        }
//
//        $this->where =  "<div class='page-count'>(Page $page of $this->total_pages)</div>";
//
//        if ($page < $this->total_pages) {
//            // forward
//            $nextpage = $page + 1;
//
//            // 'next' and 'last' links
//            $this->nextLast =  "<div class='next-last'><a href='$_SERVER[PHP_SELF]?pageno=$nextpage'>Next</a> <a href='$_SERVER[PHP_SELF]?pageno=$this->total_pages'>Last</a></div>";
//        }

        return $page;
    }

    // get first and back links
    public function firstBack()
    {
        return $this->firstBack;
    }

    // get next and last links
    public function nextLast()
    {
        return $this->nextLast;
    }

    // get where we are among pages
    public function where()
    {
        return $this->where;
    }
}

$pagination = new Pagination($db);
$pagination->totalRecords('SELECT COUNT(img_url) FROM save_img WHERE enum = 1');
$pagination->setLimit(8);
$tes = $pagination->page();
var_dump($tes);
