<form method="post">
    Tháng: <input type="number" name="thang">
    Năm: <input type="number" name="nam">
    <button type="submit">Xem</button>
</form>

<?php
if (isset($_POST['thang'])) {
    $m = $_POST['thang'];
    $y = $_POST['nam'];

    if ($m == 2) {
        if (($y % 400 == 0) || ($y % 4 == 0 && $y % 100 != 0))
            echo "29 ngày";
        else
            echo "28 ngày";
    } elseif ($m == 4 || $m == 6 || $m == 9 || $m == 11) {
        echo "30 ngày";
    } else {
        echo "31 ngày";
    }
}
?>