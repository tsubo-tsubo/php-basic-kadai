<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php

$nums = [15, 4, 18, 23, 10];

function sort_2way($nums, $order) {
    // $orderがTRUEなら昇順に、FALSEなら降順にソート
    if ($order) {
        echo "昇順にソートします。<br>";
        sort($nums);  // 昇順にソート
    } else {
        echo "降順にソートします。<br>";
        rsort($nums);  // 降順にソート
    }

    // ソート結果を表示
    foreach ($nums as $value) {
        echo $value . "<br>";
    }
}

// 昇順ソート
sort_2way($nums, true);

// 降順ソート
sort_2way($nums, false);

?>
</p>

</body>

</html>

