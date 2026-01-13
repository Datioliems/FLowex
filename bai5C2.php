<form method="post">
    Ngày: <input type="number" name="d">
    Tháng: <input type="number" name="m">
    Năm: <input type="number" name="y">
    <button type="submit">Kiểm tra</button>
</form>

<?php
if (isset($_POST['d'])) {
    $d = $_POST['d'];
    $m = $_POST['m'];
    $y = $_POST['y'];

    $hopLe = true;

    if ($m < 1 || $m > 12 || $d < 1) {
        $hopLe = false;
    } else {
        if ($m == 2) {
            if (($y % 400 == 0) || ($y % 4 == 0 && $y % 100 != 0)) {
                if ($d > 29) $hopLe = false;
            } else {
                if ($d > 28) $hopLe = false;
            }
        } elseif ($m == 4 || $m == 6 || $m == 9 || $m == 11) {
            if ($d > 30) $hopLe = false;
        } else {
            if ($d > 31) $hopLe = false;
        }
    }

    if ($hopLe)
        echo "Ngày hợp lệ";
    else
        echo "Ngày không hợp lệ";
}
?>