<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $link = $_POST['link'] ?? '';
    $amount = $_POST['amount'] ?? 100;
    $link = filter_var($link, FILTER_SANITIZE_URL);

    $file = 'data.json';
    if (!file_exists($file)) file_put_contents($file, '[]');
    $data = json_decode(file_get_contents($file), true);
    $data[] = ['link' => $link, 'amount' => (int)$amount];
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
}
?>
<form method="POST">
    <input type="url" name="link" placeholder="رابط فيديو تيكتوك" required />
    <select name="amount">
        <option value="100">100</option>
        <option value="500">500</option>
    </select>
    <button type="submit">إرسال</button>
</form>