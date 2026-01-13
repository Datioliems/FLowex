<form method="post">
    Nhập chuỗi: <input type="text" name="text">
    <button type="submit">Chuẩn hóa</button>
</form>

<?php
if (isset($_POST['text'])) {
    $s = $_POST['text'];
    $kq = "";
    $space = true;


    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] != ' ') {
            if ($space && $s[$i] >= 'a' && $s[$i] <= 'z')
                $kq .= chr(ord($s[$i]) - 32);
            else
                $kq .= $s[$i];

            $space = false;
        } else {
            if (!$space) {
                $kq .= ' ';
                $space = true;
            }
        }
    }

    echo "Chuỗi chuẩn hóa: $kq";
}
?>