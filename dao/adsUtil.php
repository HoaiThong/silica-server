<?php

class AdsUtil
{
    
    private $conn;
    
    private $message = "message";
    
    private $success = "success";
    
    // constructor
    public function __construct()
    {
        require_once 'dbUtil.php';
        // connecting to database
        $db = new DatabaseUtil();
        $this->conn = $db->connectPDO();
    }
    
    public function __destruct()
    {
        $this->conn = null;
        // $this->db->closePDO();
    }
    
    function get_banner_ads()
    {
        try {
            $sql = "SELECT * FROM adsBanner ";
            $stmt = $this->conn->prepare($sql);
            // Thiết lập kiểu dữ liệu trả về
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();
            
            /*
             * Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
             * $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
             */
            
            $response["adsBanner"] = $resultSet;
            // success
            $response[$this->success] = 1;
            $response[$this->message] = "success";
        } catch (PDOException $e) {
            $response[$this->success] = 0;
            $response[$this->message] = "error";
        }
        return $response;
    }
    
}
?>