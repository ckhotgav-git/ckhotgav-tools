<?php
// 引入資料庫連線
require_once 'db.php';

// === 訪客計數器 ===
// 建立一個紀錄瀏覽次數的資料表（第一次執行時自動建立）
$sql_create = "CREATE TABLE IF NOT EXISTS visitor_counter (
    id INT AUTO_INCREMENT PRIMARY KEY,
    count INT NOT NULL DEFAULT 0
)";
$conn->query($sql_create);

// 取得或初始化計數
$result = $conn->query("SELECT count FROM visitor_counter WHERE id = 1");
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $visitor_count = $row['count'] + 1;
    $conn->query("UPDATE visitor_counter SET count = $visitor_count WHERE id = 1");
} else {
    $visitor_count = 1;
    $conn->query("INSERT INTO visitor_counter (id, count) VALUES (1, 1)");
}
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>點哥AI全能工具箱 — PHP + MySQL 動態網站</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #0f0f23; color: #e0e0e0; line-height: 1.8; }
        .container { max-width: 800px; margin: 0 auto; padding: 40px 20px; }
        header { text-align: center; padding: 60px 0 40px; }
        header h1 { font-size: 2.5em; color: #e94560; margin-bottom: 10px; }
        header .tagline { font-size: 1.1em; color: #8888aa; }
        .badge { display: inline-block; background: #e94560; color: #fff; padding: 4px 14px; border-radius: 20px; font-size: 0.85em; margin-bottom: 20px; }
        .section { background: #1a1a35; border-radius: 12px; padding: 30px; margin-bottom: 24px; border: 1px solid #2a2a50; }
        .section h2 { color: #e94560; margin-bottom: 16px; font-size: 1.4em; }
        .section p { margin-bottom: 12px; }
        .section ul { padding-left: 20px; }
        .section ul li { margin-bottom: 8px; }
        .counter-box { text-align: center; padding: 30px; background: #2a1a30; border-radius: 12px; border: 2px solid #e94560; margin: 20px 0; }
        .counter-box .number { font-size: 3em; font-weight: bold; color: #e94560; }
        .counter-box .label { font-size: 0.9em; color: #8888aa; margin-top: 4px; }
        .success { background: #1a3030; border-left: 4px solid #2ecc71; padding: 12px 16px; border-radius: 0 8px 8px 0; margin-bottom: 12px; color: #2ecc71; }
        .footer { text-align: center; padding: 40px 0; color: #666; font-size: 0.85em; border-top: 1px solid #2a2a50; margin-top: 40px; }
        a { color: #4fc3f7; }
    </style>
</head>
<body>
<div class="container">

    <header>
        <span class="badge">PHP + MySQL 範例頁</span>
        <h1>🧰 點哥AI全能工具箱</h1>
        <p class="tagline">從靜態網頁到動態網站 — 資料庫連線成功！</p>
    </header>

    <div class="section">
        <h2>📖 關於點哥</h2>
        <p><strong>點哥AI全能工具箱 (ckhotgav-tools)</strong> 幫助完全不懂程式的新手，快速在 AI 編輯器上建立開發環境。</p>
        <p>包含 20 項技能：基礎環境、NotebookLM、GitHub、Netlify、資料庫、本地 AI、知識管理⋯⋯</p>
        <p>GitHub：<a href="https://github.com/ckhotgav-git/ckhotgav-tools" target="_blank">https://github.com/ckhotgav-git/ckhotgav-tools</a></p>
    </div>

    <div class="section">
        <div class="success">✅ 資料庫連線成功！</div>
        <h2>⚡ 什麼是 PHP + MySQL？</h2>
        <ul>
            <li><strong>PHP</strong>：讓網頁「會動」的程式語言。靜態 HTML 像一張紙，PHP 像魔術師，能從資料庫抓資料即時顯示</li>
            <li><strong>MySQL</strong>：存放網站資料的資料庫（會員名單、文章、商品等）</li>
            <li>簡單來說：<strong>PHP 是店員，MySQL 是倉庫</strong></li>
            <li>ProFreeHost 支援 PHP 8.x + MySQL 5.7，可用 mysqli 或 PDO 連線</li>
        </ul>
    </div>

    <div class="section">
        <h2>👥 訪客計數器</h2>
        <div class="counter-box">
            <div class="number"><?php echo number_format($visitor_count); ?></div>
            <div class="label">累計瀏覽人次（資料庫紀錄）</div>
        </div>
        <p>這個數字存在 MySQL 資料庫的 <code>visitor_counter</code> 資料表中，每次重新整理就會 +1。</p>
    </div>

    <div class="footer">
        <p>由 ProFreeHost 免費主機代管</p>
        <p>本頁面為點哥AI全能工具箱 (ckhotgav-tools) PHP + MySQL 教學範例</p>
    </div>

</div>
</body>
</html>
<?php $conn->close(); ?>
