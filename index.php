<?php
// 目標重定向的URL
$url = "https://forum.ssangyongsports.eu.org/t/topic/11/2";

// 使用header函數進行重定向
header("Location: " . $url);

// 結束腳本執行以確保不會執行後續的代碼
exit();
?>
