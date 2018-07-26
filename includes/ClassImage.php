<?php

class ClassImage{

    /**
     * @param $image
     * @param $enum
     * @return bool
     */
    public function upload_image($image,$enum)
    {
        global $db;

        $conn = $db->connect();
        $query = $conn->prepare("INSERT INTO `save_img`(`img_url`,`enum`) VALUES (?,?)");
        $query->bind_param('ss',$image,$enum);
        return $query->execute();
    }

    /**
     * @return bool|mysqli_result
     */
    public function select_where_enum_one()
    {
        global $db;

        $qu = $db->connect();
        $query = $qu->query("SELECT * FROM `save_img` WHERE `enum` = 1 ");
        return $query;
    }

    /**
     * @return bool|mysqli_result
     */
    public function select_where_enum_two()
    {
        global $db;

        $qu = $db->connect();
        $query = $qu->query("SELECT * FROM `save_img` WHERE `enum` = 2");
        return $query;
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete_image($id)
    {
        global $db;

        $conn = $db->connect();
        $query = $conn->prepare("DELETE FROM `save_img` WHERE  id = ?");
        $query->bind_param('i',$id);
        return $query->execute();
    }

}

$img = new ClassImage();
