<?php
/** Iclude all needed files  */


class adminsCreate{

    /**
     * @param $about
     * @param $about_1
     * @param $about2
     * @param $about3
     * @param $service
     * @param $service1
     * @param $service2
     * @param $service3
     * @param $service4
     * @param $port
     * @param $cont
     * @return bool
     */
    public function insert_fields($about, $about_1, $about2, $about3, $service, $service1, $service2, $service3, $service4, $port, $cont)
    {
        global $db;

        $conn = $db->connect();
        $query = $conn->prepare("INSERT INTO `create_admins`(`about_texterea`, `about_1`, `about_2`, `about_3`, `service_texterea`, `service_1`, `service_2`, `service_3`, `service_4`, `portf_text`, `contac_text`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $query->bind_param('sssssssssss',$about,$about_1,$about2,$about3,$service,$service1,$service2,$service3,$service4,$port,$cont);
        return $query->execute();
    }

    /**
     * @param null $string
     * @return bool|mysqli_result
     */
    public function print_customer($string = null)
    {
        global $db;

        $qu = $db->connect();
        $query = $qu->query("SELECT * FROM `create_admins`");
        return $query;
    }

    /**
     * @return bool|mysqli_result
     */
    public function last_query()
    {
        global $db;

        $qu = $db->connect();
        $query = $qu->query("SELECT * FROM ( SELECT * FROM `create_admins` ORDER BY `id` DESC LIMIT 1 ) AS `id` ORDER BY `id` LIMIT 1");
        return $query;
    }

    /**
     * @param $id
     * @return bool|mysqli_result
     */
    public function select($id)
    {
        global $db;

        $qu = $db->connect();
        $query = $qu->query("SELECT * FROM `create_admins` WHERE id = '{$id}'");
        return $query;
    }

    /**
     * @param $about
     * @param $about_1
     * @param $about2
     * @param $about3
     * @param $service
     * @param $service1
     * @param $service2
     * @param $service3
     * @param $service4
     * @param $port
     * @param $cont
     * @param $id
     * @return bool
     */

    public function edit_fields($about, $about_1, $about2, $about3, $service, $service1, $service2, $service3, $service4, $port, $cont, $id)
    {
        global $db;

        $conn = $db->connect();
        $query = $conn->prepare("UPDATE `create_admins` SET `about_texterea`=?,`about_1`=?,`about_2`=?,`about_3`=?,`service_texterea`=?,`service_1`=?,`service_2`=?,`service_3`=?,`service_4`=?,`portf_text`=?,`contac_text`=? WHERE id = ?");
        $query->bind_param('sssssssssssi',$about,$about_1,$about2,$about3,$service,$service1,$service2,$service3,$service4,$port,$cont,$id);
        return $query->execute();

    }

    /**
     * @param $id
     * @return bool
     */
    public function delete_fields($id)
    {
        global $db;

        $conn = $db->connect();
        $query = $conn->prepare("DELETE FROM `create_admins` WHERE id = ?");
        $query->bind_param('i',$id);
        return $query->execute();
    }
}

$create = new adminsCreate();