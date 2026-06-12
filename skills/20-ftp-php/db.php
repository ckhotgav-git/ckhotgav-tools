<?php
// db.php - MySQL 資料庫連線設定檔
// 使用前請修改以下四項資訊（從 ProFreeHost 控制台取得）

$db_host   = 'localhost';          // 資料庫主機（ProFreeHost 通常是 localhost）
$db_user   = '你的資料庫使用者';    // 改為你建立的使用者名稱
$db_pass   = '你的資料庫密碼';      // 改為你設定的密碼
$db_name   = '你的資料庫名稱';      // 改為你建立的資料庫名稱

// 建立連線
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// 檢查連線是否成功
if ($conn->connect_error) {
    die('資料庫連線失敗：' . $conn->connect_error);
}

// 設定字元編碼（支援中文）
$conn->set_charset('utf8mb4');

// 連線成功（引用此檔案的頁面會繼承 $conn 變數）
?>
