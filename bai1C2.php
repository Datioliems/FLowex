<form method="post">
    Nhập n: <input type="number" name="n">
    <button type="submit">Tính</button>
</form>

<?php
if (isset($_POST['n'])) {
    $n = $_POST['n'];

    
    $gt = 1;
    for ($i = 1; $i <= $n; $i++) {
        $gt *= $i;
    }
    echo "Giai thừa (không đệ quy): $gt <br>";

 
    function giaiThua($n) {
        if ($n <= 1) return 1;
        return $n * giaiThua($n - 1);
    }

    echo "Giai thừa (đệ quy): " . giaiThua($n);
}
?>