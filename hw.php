<table border='1'>
    <?php
    $nums = range(1, 100);
    $pr = array();
    $d = count($nums);
    $pr[0] = false;
    $pr[1] = true;

    // -----------------------------------

    for ($i = 2; $i < $d; $i++) {
        $value = $nums[$i];
        for ($j = 2; $j <= $i; $j++) {

            if ($value % $j == 0) {
                $pr[$i] = false;
                break;
            } else {
                $pr[$i] = true;
            }
        }
    }
    // var_dump($pr);
    for ($j = 0; $j < 10; $j++) {
        echo "<tr>";
        for ($i = 0; $i < 10; $i++) {
            $k = $j * 10 + $i;
            if ($pr[$k] == false) {
                echo "<td>{$nums[$k]}</td>";
            } else {
                echo "<td bgcolor='red'>{$nums[$k]}</td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>