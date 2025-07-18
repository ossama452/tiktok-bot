<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = $_POST['video_url'];
    $action = $_POST['action']; // views, likes, follows

    // استدعاء البوت
    $command = escapeshellcmd("python3 bot.py \"$url\" \"$action\"");
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
} else {
    echo "❌ طلب غير صالح.";
}
