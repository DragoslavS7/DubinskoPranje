<?php


class ClassPrice{

    /**
     * @param $title
     * @param $price
     * @return bool
     */
    public function create_price($title, $price)
    {
        global $db;

        $conn = $db->connect();
        $query = $conn->prepare("INSERT INTO `price_list`(`title`, `price`) VALUES (?,?)");
        $query->bind_param('ss',$title,$price);
        return $query->execute();
    }

    /**
     * @return bool|mysqli_result
     */
    public function view_price()
    {
        global $db;

        $qu = $db->connect();
        $query = $qu->query("SELECT * FROM `price_list`");
        return $query;
    }

    /**
     * @param $id
     * @return bool|mysqli_result
     */
    public function select_price($id)
    {
        global $db;

        $qu = $db->connect();
        $query = $qu->query("SELECT * FROM `price_list` WHERE id = '{$id}'");
        return $query;
    }

    /**
     * @param $title
     * @param $price
     * @param $id
     * @return bool
     */
    public function update_price($title, $price, $id)
    {
        global $db;
        $conn = $db->connect();
        $query = $conn->prepare("UPDATE `price_list` SET `title`=?,`price`=? WHERE id = ?");
        $query->bind_param('ssi',$title,$price,$id);
        return $query->execute();
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete_price($id)
    {
        global $db;

        $conn = $db->connect();
        $query = $conn->prepare("DELETE FROM `price_list` WHERE id = ?");
        $query->bind_param('i',$id);
        return $query->execute();
    }
}

$price = new ClassPrice();