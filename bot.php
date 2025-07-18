<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $url = escapeshellarg($_POST["url"]);

    // تشغيل البوت مع الرابط
    $output = shell_exec("python3 bot.py $url");

    echo "<pre>$output</pre>";
}
?>
