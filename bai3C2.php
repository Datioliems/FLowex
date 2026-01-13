<form method="post">
    Nhập chuỗi: <input type="text" name="str">
    <button type="submit">Đảo</button>
</form>

<?php
if (isset($_POST['str'])) {
    $s = $_POST['str'];
    $kq = "";

    for ($i = strlen($s) - 1; $i >= 0; $i--) {
        $kq .= $s[$i];
    }

    echo "Chuỗi đảo: $kq";
}
?>