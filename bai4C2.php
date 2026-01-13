<form method="post">
    Nhập chuỗi: <input type="text" name="lower">
    <button type="submit">Kiểm tra</button>
</form>

<?php
if (isset($_POST['lower'])) {
    $s = $_POST['lower'];
    $ok = true;

    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] < 'a' || $s[$i] > 'z') {
            $ok = false;
            break;
        }
    }

    if ($ok)
        echo "Toàn chữ thường";
    else
        echo "Không phải toàn chữ thường";
}
?>