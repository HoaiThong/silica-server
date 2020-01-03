<?php

class CustomerUtil
{

    private $conn;

    private $message = "message";

    private $success = "success";

    private $error = "error";

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

    function get_info_customer($idCustomer,$fcmtoken)
    {
        $idCus=(int) $idCustomer;
        try {
            $sql = "CALL get_info_customer(:idCustomer,:fcmtoken)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':idCustomer', $idCus, PDO::PARAM_INT);
            $stmt->bindParam(':fcmtoken', $fcmtoken, PDO::PARAM_STR);
            
            // Thiết lập kiểu dữ liệu trả về
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();

            /*
             * Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
             * $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
             */

            $response["customer"] = $resultSet;
            // success
            $response[$this->success] = $this->success;
            $response[$this->message] = "success";
        } catch (PDOException $e) {
            $response[$this->success] = $this->error;
            $response[$this->message] = "error";
        }
        return $response;
    }

    public function insertCustomer($customerJson)
    {
        try {
            $customerArray = json_decode($customerJson, true);
            $sql = "INSERT INTO customer (idFacebook, idGoogle, idAccoutKit,nameFaceBook, nameGoogle, firstName, lastName,
             linkFacebook, phone, phoneFacebook, emailFacebook, emailGoogle, emailAccoutKit, sex,address, dateOfBirth, idTokenFcm,fcmToken, iconUrlCustomer, job, locale) 
VALUES (:idFacebook, :idGoogle, :idAccoutKit, :nameFaceBook, :nameGoogle, :firstName, :;lastName, :linkFacebook,
 :phone, :phoneFacebook, :emailFacebook, :emailGoogle, :emailAccoutKit, :sex,:address, :dateOfBirth, :idTokenFcm, :fcmToken, :iconUrlCustomer, :job, :locale);
 SET @last_id = LAST_INSERT_ID();";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($customerArray);
            $last_id = $this->conn->lastInsertId();
            $id = (int) $last_id;
            // error
            // $sql = "INSERT INTO customer (name, sex, age) VALUES (?,?,?)";
            // $this->conn->prepare($sql)->execute($customerArray);
            $response[$this->success] = $id;
            $response[$this->message] = "Đăng nhập thành công!";
        } catch (Exception $e) {
            $response[$this->success] = - 1;
            $response[$this->message] = "Đăng nhập không thành công! Thử lại.";
        }
        return $response;
    }

    public function updateFcmToken($customerArray)
    {
        try {
            // $customerArray = json_decode($customerJson, true);
            $fcmToken = $customerArray["fcmToken"];
            $id = (int) $customerArray["idCustomer"];
            $idTokenFcm =  $customerArray["idTokenFcm"];
            $sql = "UPDATE customer SET fcmToken=? WHERE idCustomer=? AND idTokenFcm=? ;";
            $stmt = $this->conn->prepare($sql);
            // Thiết lập kiểu dữ liệu trả về
            $stmt->bindParam(1, $id, PDO::PARAM_STR);
            $stmt->bindParam(2, $id, PDO::PARAM_INT);
            $stmt->bindParam(3, $idTokenFcm, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();

            $response[$this->success] = $id;
            $response[$this->message] = "Chào mừng bạn đã trở lại!";
        } catch (Exception $e) {
            $response[$this->success] = - 1;
            $response[$this->message] = "Đăng nhập không thành công! Thử lại.";
        }
        return $response;
    }
    public function updateCustomer($customerArray)
    {
        try {
            // $customerArray = json_decode($customerJson, true);
            $fcmToken = $customerArray["fcmToken"];
            $id = (int) $customerArray["idCustomer"];
            $idTokenFcm =  $customerArray["idTokenFcm"];
            $sql = "UPDATE customer SET fcmToken=?,idTokenFcm=? WHERE idCustomer=? ;";
            $stmt = $this->conn->prepare($sql);
            // Thiết lập kiểu dữ liệu trả về
            $stmt->bindParam(1, $id, PDO::PARAM_STR);
            $stmt->bindParam(3, $id, PDO::PARAM_INT);
            $stmt->bindParam(2, $idTokenFcm, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();

            $response[$this->success] = $id;
            $response[$this->message] = "Chào mừng bạn đã trở lại!";
        } catch (Exception $e) {
            $response[$this->success] = - 1;
            $response[$this->message] = "Đăng nhập không thành công! Thử lại.";
        }
        return $response;
    }


    public function isExitGoogle($idGoogle)
    {
        $id = 0;
        try {
            // $sql = "SELECT id FROM customer WHERE idGoogle like ? ";
            $sql = "CALL is_exit_google(:idGoogle)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':idGoogle', $idGoogle, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();
            foreach ($resultSet as $row) {
                $id = (int) $row["idCustomer"];
            }
            return $id;
        } catch (PDOException $e) {
            return - 1;
        }
        return 0;
    }

    public function isExitFacebook($idFacebook)
    {
        $id = 0;
        try {
            // $sql = "SELECT id FROM customer WHERE idFacebook like ? ";
            $sql = "CALL is_exit_facebook(:idFacebook)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':idFacebook', $idFacebook, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();
            foreach ($resultSet as $row) {
                $id = (int) $row["idCustomer"];
            }
            // success
            return $id;
        } catch (PDOException $e) {
            return - 1;
        }
        return 0;
    }

    public function send_message($idCustomer, $msg, $fcmToken,$status)
    {
        $id = (int) $idCustomer;
        try {
            // $sql="SELECT id,name,url from menu order by views DESC LIMIT ?,?";
            $sql = "CALL customer_send_message(:idCustomer,:msg,:token,:status)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':idCustomer', $id, PDO::PARAM_INT);
            $stmt->bindParam(':msg', $msg, PDO::PARAM_STR);
            $stmt->bindParam(':token', $fcmToken, PDO::PARAM_STR);
            $stmt->bindParam(':status', $status, PDO::PARAM_STR);
            $stmt->execute();

            $response[$this->success] = 1;
            $response[$this->message] = "Cảm ơn bạn đã gửi tin nhắn! Chúng tôi đang xem xét!";
        } catch (PDOException $e) {
            $response[$this->success] = 0;
            $response[$this->message] = "Lỗi! Hãy Thử Lại.";
        }
        return $response;
    }
}
?>