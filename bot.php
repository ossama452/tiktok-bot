<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $url = $_POST["url"];
    $type = $_POST["type"];

    // شغّل البوت
    $command = "python3 bot.py \"$url\" \"$type\"";
    $output = shell_exec($command);

    echo "<pre>$output</pre>";
}
?>
