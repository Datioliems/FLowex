<form method="post">
    Nhập số: <input type="number" name="num">
    <button type="submit">Kiểm tra</button>
</form>

<?php
if (isset($_POST['num'])) {
    $n = $_POST['num'];
    $dem = 0;

    if ($n < 2) {
        echo "Không phải số nguyên tố";
    } else {
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i == 0) $dem++;
        }

        if ($dem == 2)
            echo "Là số nguyên tố";
        else
            echo "Không phải số nguyên tố";
    }
}
?>