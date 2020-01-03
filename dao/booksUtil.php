<?php

class BookUtil
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

    public function get_limit_book_by_views($start)
    {
        $value = (int) $start;
        $quantity = 10;
        $dem = 0;
        try {
            // $sql="SELECT id,name,url from menu order by views DESC LIMIT ?,?";
            $sql = "CALL get_limit_book_by_views(:start_at,:quantity)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':start_at', $value, PDO::PARAM_INT);
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
            // Thiết lập kiểu dữ liệu trả về
            // $stmt->bindParam(1, $value, PDO::PARAM_INT);
            // $stmt->bindParam(2, $quantity, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();

            /*
             * Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
             * $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
             */
            foreach ($resultSet as $row) {
                $dem = $dem + 1;
            }
            $response["books"] = $resultSet;
            // success
            $response[$this->success] = 1;
            $response[$this->message] = $dem;
        } catch (PDOException $e) {
            $response[$this->success] = 0;
            $response[$this->message] = $e;
        }

        return $response;
    }

    public function get_topten_book($start)
    {
        $value = (int) $start;
        $quantity = 10;
        $dem = 0;
        try {
            // $sql="SELECT id,name,url from menu order by views DESC LIMIT ?,?";
            $sql = "CALL get_topten_book(:start_at,:quantity)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':start_at', $value, PDO::PARAM_INT);
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
            // Thiết lập kiểu dữ liệu trả về
            // $stmt->bindParam(1, $value, PDO::PARAM_INT);
            // $stmt->bindParam(2, $quantity, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();

            /*
             * Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
             * $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
             */
            foreach ($resultSet as $row) {
                $dem = $dem + 1;
            }
            $response["books"] = $resultSet;
            // success
            $response[$this->success] = 1;
            $response[$this->message] = $dem;
        } catch (PDOException $e) {
            $response[$this->success] = 0;
            $response[$this->message] = $e;
        }

        return $response;
    }

    public function get_limit_book_by_update($start)
    {
        $value = (int) $start;
        $quantity = 10;
        $dem = 0;
        try {
            $sql = "CALL get_limit_book_by_update(:start_at,:quantity)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':start_at', $value, PDO::PARAM_INT);
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
            // $sql="SELECT id,name,url from menu order by update_at DESC LIMIT ?,?";
            // $stmt = $this->conn->prepare($sql);
            // //Thiết lập kiểu dữ liệu trả về
            // $stmt->bindParam(1, $value, PDO::PARAM_INT);
            // $stmt->bindParam(2, $quantity, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();

            /*
             * Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
             * $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
             */
            foreach ($resultSet as $row) {
                $dem = $dem + 1;
            }
            $response["books"] = $resultSet;
            // success
            $response[$this->success] = 1;
            $response[$this->message] = $dem;
        } catch (PDOException $e) {
            $response[$this->success] = 0;
            $response[$this->message] = $dem;
        }

        return $response;
    }

    public function get_limit_book_complete($start)
    {
        $value = (int) $start;
        $quantity = 10;
        $dem = 0;
        try {

            $sql = "CALL get_limit_book_complete(:start,:quantity)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':start', $value, PDO::PARAM_INT);
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();
            /*
             * Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
             * $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
             */
            foreach ($resultSet as $row) {
                $dem = $dem + 1;
            }
            $response["books"] = $resultSet;
            // success
            $response[$this->success] = 1;
            $response[$this->message] = $dem;
        } catch (Exception $e) {
            $response[$this->success] = 0;
            $response[$this->message] = $e;
        }
        return $response;
    }

    public function search_book($condition, $start)
    {
        $value = $condition;
        $cond = "%" . $value . "%";
        $startAt = (int) $start;
        $quantity = 10;
        $dem = 0;
        $dem = 0;
        try {

            $sql = "CALL search_limit_book(:search,:start_at,:quantity)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':search', $cond, PDO::PARAM_STR);
            $stmt->bindParam(':start_at', $startAt, PDO::PARAM_INT);
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
            // $sql = "SELECT id,name,url FROM menu WHERE name like ? or tag like ?;";
            // $stmt = $this->conn->prepare($sql);
            // //Thiết lập kiểu dữ liệu trả về
            // $stmt->bindParam(1, $cond, PDO::PARAM_STR);
            // $stmt->bindParam(2, $cond, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();
            foreach ($resultSet as $row) {
                $dem = $dem + 1;
            }
            $response["books"] = $resultSet;
            // success
            $response[$this->success] = 1;
            $response[$this->message] = $dem;
        } catch (PDOException $e) {
            $response[$this->success] = 1;
            $response[$this->message] = $e;
        }
        return $response;
    }

    public function get_limit_book_by_coutry($country, $start)
    {
        $value = (int) $start;

        $condition = "%" . $country . "%";
        $quantity = 18;
        $dem = 0;
        // $sql="SELECT id,name,url from menu order by views DESC LIMIT ?,?";
        try {
            $sql = "CALL get_limit_book_by_country(:str,:start_at,:quantity)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':str', $condition, PDO::PARAM_STR);
            $stmt->bindParam(':start_at', $value, PDO::PARAM_INT);
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
            // Thiết lập kiểu dữ liệu trả về
            // $stmt->bindParam(1, $value, PDO::PARAM_INT);
            // $stmt->bindParam(2, $quantity, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();

            /*
             * Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
             * $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
             */
            foreach ($resultSet as $row) {
                $dem = $dem + 1;
            }
            $response["country"] = $resultSet;
            // success

            $response[$this->success] = 1;
            $response[$this->message] = $dem;
        } catch (PDOException $e) {
            $response[$this->success] = 0;
            $response[$this->message] = $e;
        }
        return $response;
    }

    // ---- Lấy danh sách books theo thể loại với số lượng xác định ------
    public function get_limit_book_by_category($type, $start)
    {
        $value = (int) $start;

        $condition = "%" . $type . "%";
        $quantity = 18;
        $dem = 0;
        // $sql="SELECT id,name,url from menu order by views DESC LIMIT ?,?";
        try {
            $sql = "CALL get_limit_book_by_category(:str,:start_at,:quantity)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':str', $condition, PDO::PARAM_STR);
            $stmt->bindParam(':start_at', $value, PDO::PARAM_INT);
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
            // Thiết lập kiểu dữ liệu trả về
            // $stmt->bindParam(1, $value, PDO::PARAM_INT);
            // $stmt->bindParam(2, $quantity, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();

            /*
             * Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
             * $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
             */
            foreach ($resultSet as $row) {
                $dem = $dem + 1;
            }
            $response["category"] = $resultSet;
            // success

            $response[$this->success] = 1;
            $response[$this->message] = $dem;
        } catch (PDOException $e) {
            $response[$this->success] = 0;
            $response[$this->message] = $e;
        }
        return $response;
    }

    public function get_limit_book_by_author($author, $start)
    {
        $value = $author;
        $cond = "%" . $value . "%";
        $startAt = (int) $start;
        $quantity = 10;
        $dem = 0;
        $dem = 0;
        try {

            $sql = "CALL get_limit_book_by_author(:author,:start_at,:quantity)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':author', $cond, PDO::PARAM_STR);
            $stmt->bindParam(':start_at', $startAt, PDO::PARAM_INT);
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
            // $sql = "SELECT id,name,url FROM menu WHERE name like ? or tag like ?;";
            // $stmt = $this->conn->prepare($sql);
            // //Thiết lập kiểu dữ liệu trả về
            // $stmt->bindParam(1, $cond, PDO::PARAM_STR);
            // $stmt->bindParam(2, $cond, PDO::PARAM_STR);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();
            foreach ($resultSet as $row) {
                $dem = $dem + 1;
            }
            $response["books"] = $resultSet;
            // success
            $response[$this->success] = 1;
            $response[$this->message] = $dem;
        } catch (PDOException $e) {
            $response[$this->success] = 1;
            $response[$this->message] = $e;
        }
        return $response;
    }

    public function get_book_subcribe($start, $idCustomer)
    {
        $value = (int) $start;
        $quantity = 10;
        $idCus = (int) $idCustomer;
        $dem = 0;
        try {

            $sql = "CALL get_limit_book_subcribe(:start_at,:quantity)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':start_at', $value, PDO::PARAM_INT);
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
            $stmt->bindParam(':idCustomer', $idCus, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();
            /*
             * Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
             * $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
             */
            foreach ($resultSet as $row) {
                $dem = $dem + 1;
            }
            $response["books"] = $resultSet;
            // success
            $response[$this->success] = 1;
            $response[$this->message] = $dem;
        } catch (Exception $e) {
            $response[$this->success] = 0;
            $response[$this->message] = $e;
        }
        return $response;
    }

    public function subcribeBook($subcribeArray)

    {
        try {
            $sql = "CALL subcribe_book(:idCustomer, :idBook, :topic)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($subcribeArray);
            $response[$this->success] = 1;
            $response[$this->message] = "Đăng ký nhận thông báo thành công!";
        } catch (Exception $e) {
            $response[$this->success] = 0;
            $response[$this->message] = "Thử lại!";
        }
        return $response;
    }

    public function cancelSubcribeBook($subcribeArray)

    {
        try {
            $idCustomer = (int) $subcribeArray['idCustomer'];
            $idBook = (int) $subcribeArray['idBook'];
            $sql = "CALL cancel_subcribe_book(:idCustomer, :idBook)";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':idCustomer', $idCustomer, PDO::PARAM_INT);
            $stmt->bindParam(':idBook', $idBook, PDO::PARAM_INT);
            $stmt->execute();

            // error
            // $sql = "INSERT INTO customer (name, sex, age) VALUES (?,?,?)";
            // $this->conn->prepare($sql)->execute($customerArray);
            $response[$this->success] = 1;
            $response[$this->message] = "Hủy nhận thông báo thành công!";
        } catch (Exception $e) {
            $response[$this->success] = 0;
            $response[$this->message] = $e;
        }
        return $response;
    }

    // // --- function gửi thông báo từ khách hàng tới server --------
    // public function send_msg_notify_bug($id, $name_chap, $msg)
    // {
    // $value = (int) $id;
    // $tbl = "notify_msg_customer";
    // try {
    // $sql = "CALL send_msg_notify(:id_manga,:name_chapter,:msg)";
    // $stmt = $this->conn->prepare($sql);
    // $stmt->bindParam(':id_manga', $value, PDO::PARAM_INT);
    // $stmt->bindParam(':name_chapter', $name_chap, PDO::PARAM_STR);
    // $stmt->bindParam(':msg', $msg, PDO::PARAM_STR);

    // $stmt->execute();
    // // success
    // $response[$this->success] = 1;
    // $response[$this->message] = "Cảm ơn bạn đã phản hồi! Chúng tôi đang xem xét!";
    // } catch (PDOException $e) {
    // $response[$this->success] = 0;
    // $response[$this->message] = "Gửi thông báo không thành công! Xin vui lòng gửi lại!";
    // }
    // return $response;
    // }

    // --- Lấy danh sách thể loại sách ---------
    // public function get_list_category()
    // {
    // $tbl = "kindCategory";
    // $dem = 0;
    // try {
    // $sql = "CALL get_list_kind_category();";
    // $stmt = $this->conn->prepare($sql);
    // $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // $stmt->execute();
    // $resultSet = $stmt->fetchAll();
    // foreach ($resultSet as $row) {
    // $dem = $dem + 1;
    // }

    // $response[$tbl] = $resultSet;
    // // success
    // $response[$this->success] = 1;
    // $response[$this->message] = $dem;
    // } catch (PDOException $e) {
    // $response[$this->success] = 0;
    // $response[$this->message] = $e;
    // }
    // return $response;
    // }
    public function update_views($id)
    {
        $value = (int) $id;
        $sql = "Call increase_count_view(:id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $value, PDO::PARAM_INT);

        $stmt->execute();
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // ---------------------------------------------------------------------------------
    public function get_limit_manga_by_category($id, $start)
    {
        $value = (int) $start;

        $condition = "%," . $id . ",%";
        $quantity = 18;
        $dem = 0;
        // $sql="SELECT id,name,url from menu order by views DESC LIMIT ?,?";
        try {
            $sql = "CALL get_limit_manga_by_category(:str,:start_at,:quantity)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':str', $condition, PDO::PARAM_STR);
            $stmt->bindParam(':start_at', $value, PDO::PARAM_INT);
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
            // Thiết lập kiểu dữ liệu trả về
            // $stmt->bindParam(1, $value, PDO::PARAM_INT);
            // $stmt->bindParam(2, $quantity, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();

            /*
             * Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
             * $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
             */
            foreach ($resultSet as $row) {
                $dem = $dem + 1;
            }
            $response["category"] = $resultSet;
            // success

            $response[$this->success] = 1;
            $response[$this->message] = $dem;
        } catch (PDOException $e) {
            $response[$this->success] = 0;
            $response[$this->message] = $e;
        }
        return $response;
    }

    public function get_list_chapter($tbl, $start, $id)
    {
        $dem = 0;
        $quantity = 200;
        $table = (string) $tbl;
        $value = (int) $start;
        try {
            $sql = "SELECT DISTINCT name FROM $tbl ORDER BY id ASC LIMIT ?,?";
            $stmt = $this->conn->prepare($sql);
            // Thiết lập kiểu dữ liệu trả về
            // $stmt->bindParam(1, $table, PDO::PARAM_STR);
            $stmt->bindParam(1, $value, PDO::PARAM_INT);
            $stmt->bindParam(2, $quantity, PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $resultSet = $stmt->fetchAll();

            /*
             * Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
             * $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
             */
            foreach ($resultSet as $row) {
                $dem = $dem + 1;
            }
            $response[$tbl] = $resultSet;
            // success
            $response[$this->success] = 1;
            $response[$this->message] = $dem;
            if ($value < $quantity) {
                $this->update_views($id);
            }
        } catch (PDOException $e) {
            $response[$this->success] = 0;
            $response[$this->message] = "error";
        }
        return $response;
    }

    public function get_chapters($tbl, $condition)
    {
        $dem = 0;
        $cond = "%" . $condition;
        $sql = "SELECT * FROM $tbl WHERE name like ? ORDER BY page ASC;";
        $stmt = $this->conn->prepare($sql);
        // Thiết lập kiểu dữ liệu trả về
        $stmt->bindParam(1, $cond, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $resultSet = $stmt->fetchAll();
        foreach ($resultSet as $row) {
            $dem = $dem + 1;
        }

        $response[$condition] = $resultSet;
        // success
        $response[$this->success] = 1;
        $response[$this->message] = $dem;
        return $response;
    }

    public function search_manga_by_id($table, $condition)
    {
        $value = (int) $condition;
        $tbl = "truyentranh";
        $dem = 0;
        $sql = "SELECT * ,(SELECT COUNT(DISTINCT(o.name)) FROM $table as o) as count FROM truyentranh as m WHERE m.id=?;";
        $stmt = $this->conn->prepare($sql);
        // Thiết lập kiểu dữ liệu trả về
        $stmt->bindParam(1, $value, PDO::PARAM_INT);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $resultSet = $stmt->fetchAll();
        foreach ($resultSet as $row) {
            $dem = $dem + 1;
        }
        $response["manga"] = $resultSet;
        // success
        $response[$this->success] = 1;
        $response[$this->message] = $dem;
        return $response;
    }

    
}
?>