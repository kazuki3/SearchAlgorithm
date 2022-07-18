<?php
    $array = [2, 3, 7, 11, 31, 50, 55, 70, 77, 80];

    echo "検索する data ? ";
    $key = trim(fgets(STDIN));

    $low = 0;
    $high = count($array) - 1;
    $flag = 0;
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        if ($array[$mid] == $key) {
            echo sprintf("%d は %d 番目にありました\n", $array[$mid], $mid + 1);
            $flag=1;
            break;
        }
        if ($array[$mid] < $key) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }
    if ($flag !== 1) {
        echo "見つかりませんでした\n";
    }
