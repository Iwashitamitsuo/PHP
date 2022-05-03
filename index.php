<?php

    echo '問題①<br>1〜100の数字を順に出力していく。<br>ただし、3の倍数の時は’Fizz’、5の倍数の時は’Buzz’、3と5の倍数の時は’FizzBuzz’と出力する。<br>なお、各出力の後には改行を入れること。<br><br>';

    for ($i = 1; $i <= 100; $i++) {
        if ($i % 15 === 0) { // 3と5の倍数の時
            echo 'FizzBuzz'.'<br>';
            continue; // スキップ
        } elseif ($i % 3 === 0) { // 3の倍数の時
            echo 'Fizz'.'<br>';
            continue; // スキップ
        } elseif ($i % 5 === 0) { // 5の倍数の時
            echo 'Buzz'.'<br>';
            continue; // スキップ
        }
        echo $i.'<br>';
    }

    echo '<br><br>';
    
    echo '問題②<br>1〜10000までの数字の中で素数を割り出し、その素数のみを順に出力する。<br>なお、各出力の後には改行を入れること。<br><br>';
    
    for ($i = 1; $i <= 10000; $i++) {
        $number = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j === 0) {
                $number += 1;
            }
        }
        if ($number === 2) { // 素数のみ取得
            echo $i.'<br>';
        }
    }

    echo '<br><br>';

    echo '問題③<br>題材を任意とし、MECEに基づいたロジックツリーを5次元の配列変数に定義する。<br>なお、最上位の変数からインデックスまたはキーの指定で最下層にアクセスできる状態を正とする。<br><br>';

    $baseball = array(
        '■日本プロ野球' => array(
            'セリーグ' => array(
                '中日ドラゴンズ' => array(
                    '選手一覧' => array(
                        '一塁手' => 'ビシエド',
                        '二塁手' => '阿部寿樹',
                        '遊撃手' => '京田陽太',
                        '三塁手' => '石川昂弥',
                        '左翼手' => '福留孝介',
                        '中堅手' => '大島洋平',
                        '右翼手' => '岡林勇希',
                        '捕手' => '木下拓哉',
                        '投手' => '大野雄大'
                    )
                )
            ),
            'パリーグ' => array(
                '福岡ソフトバンクホークス' => array(
                    '選手一覧' => array(
                        '一塁手' => '中村　晃',
                        '二塁手' => '三森大貴',
                        '遊撃手' => '今宮健太',
                        '三塁手' => '松田宣浩',
                        '左翼手' => '栗原陵矢',
                        '中堅手' => '柳田悠岐',
                        '右翼手' => '上林誠知',
                        '捕手' => '甲斐拓也',
                        '投手' => '千賀滉大'
                    )
                )
            )
        ),
        '■メジャーリーグ' => array(
            'アメリカンリーグ' => array(
                'ミネソタ・ツインズ' => array(
                    '選手一覧' => array(
                        '投手' => '前田健太'
                    )
                ),
                'ロサンゼルス・エンゼルス' => array(
                    '選手一覧' => array(
                        '投手' => '大谷翔平'
                    )
                )
            ),
            'ナショナルリーグ' => array(
                'ピッツバーグ・パイレーツ' => array(
                    '選手一覧' => array(
                        '左翼手' => '筒香嘉智'
                    )
                )
            )
        )
    );
    foreach ( $baseball as $baseballs => $baseball1 ) {
        echo $baseballs.'<br>';
        foreach ( $baseball1 as $key => $baseball2 ) {
            echo '&emsp;'.$key.'<br>';
            foreach ( $baseball2 as $key2 => $baseball3 ) {
                echo '&emsp;'.'&emsp;'.$key2.'<br>';
                foreach ( $baseball3 as $key3 => $baseball4 ) {
                    echo '&emsp;'.'&emsp;'.'&emsp;'.$key3.'<br>';
                    foreach ( $baseball4 as $key4 => $baseball5 ) {
                        echo '&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.$key4.'：'.$baseball5.'<br>';
                    }
                }
            }
        }
    }
    echo('<pre>');
    var_dump($baseball);
    echo('</pre>');

?>