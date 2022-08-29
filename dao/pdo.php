<?php
    // tạo hàm để kết nối cơ sở dữ liệu
    function pdo_get_connection() {
        $servername = "localhost"; 
        $username = "root";
        $password = "";
    
        try {
        $conn = new PDO("mysql:host=$servername;dbname=btngarden", $username, $password);
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        //echo "Kết nối thành công!";
        return $conn; // trả về kết nối
        }   
        catch(PDOException $e) {
        echo "Lỗi kết nối: " . $e->getMessage();
        
        } 
    }
    
    // tạo hàm thao tác dữ liệu, thực thi các câu lệnh sql: insert, update, delete
    function pdo_execute($sql) {
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $conn = pdo_get_connection(); 
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);    
        }
        catch(PDOException $e) {
            throw $e;
        }
        finally {
            unset($conn); // đóng kết nối
        }
    }

    function pdo_execute_lastInsertId($sql) {
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $conn = pdo_get_connection(); 
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $last_id = $conn->lastInsertId();
            return $last_id;
        }
        catch(PDOException $e) {
            throw $e;
        }
        finally {
            unset($conn); // đóng kết nối
        }
    }

    // function pdo_execute_lastInsertId($sql) {
    //     $sql_args = array_slice(func_get_args(), 1);
    //     try {
    //         $conn = pdo_get_connection(); 
    //         $stmt = $conn->prepare($sql);
    //         $stmt->execute($sql_args);  
    //         return $conn->lastInsertId();
    //     }
    //     catch(PDOException $e) {
    //         throw $e;
    //     }
    //     finally {
    //         unset($conn); // đóng kết nối
    //     }
    // }

    // tạo hàm truy vấn nhiều dữ liệu
    function pdo_query($sql) {
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $conn = pdo_get_connection(); 
            $stmt = $conn->prepare($sql); 
            $stmt->execute($sql_args);    
            $rows = $stmt->fetchAll();
            return $rows;
        }
        catch(PDOException $e) {
            throw $e;
        }
        finally {
            unset($conn);
        }
    }

    // tạo hàm truy vấn một dữ liệu
    function pdo_query_one($sql) {
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }
        catch(PDOException $e) {
            throw $e;
        }
        finally {
            unset($conn);
        }
    }

    // tạo hàm trả về giá trị
    function pdo_query_value($sql) {
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return array_values($row)[0];
        }
        catch(PDOException $e) {
            throw $e;
        }
        finally {
            unset($conn);
        }
    }   
?>