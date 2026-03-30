<?php

// Helper functions for database operations
function db_query($sql, $params = [])
{
    global $db; // Lấy biến $db (PDO object) từ file database.php
    try {
        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    } catch (PDOException $e) {
        die("Lỗi truy vấn CSDL: " . $e->getMessage());
    }
}

// Helper function to get all room types
function get_all_room_types()
{
    $sql = "SELECT * FROM room_types ORDER BY base_price ASC";
    $stmt = db_query($sql);
    return $stmt->fetchAll();
}

?>