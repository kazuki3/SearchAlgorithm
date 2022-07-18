<?php

    $users = [
        ["name" => "Ann","age" => 18],
        ["name" => "Rolla","age" => 19],
        ["name" => "Nancy","age" => 16],
        ["name" => "Eluza","age" => 17],
        ["name" => "Juliet","age" => 18],
        ["name" => "Machilda","age" => 20],
        ["name" => "Emy","age" => 15],
        ["name" => "Candy","age" => 16],
        ["name" => "Ema","age" => 17],
        ["name" => "Mari", "age" => 18]
    ];

    $length = count($users);

    echo "検索する data ? ";
    $key = trim(fgets(STDIN));

    $users[] = ["name" => $key];
    $i = 0;
    while ($key !== $users[$i]["name"]) $i++;

    if ($i < $length) {
        echo sprintf("%s %d\n",$users[$i]["name"], $users[$i]["age"]);
    } else {
        echo "見つかりませんでした\n";
    }
