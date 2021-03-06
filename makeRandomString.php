<?php

declare(strict_types=1);

/**
 * 数字と大小英字のランダムなトークンを生成する。
 *
 * @param integer $length トークンの文字数を指定する
 * @return string 生成したトークンを返す
 */
function makeRandomString(int $length = 40): string
{
    // トークンに用いる文字の配列
    $chars = [
        0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
    ];
    $cnt = count($chars);
    $rand_chars = '';
    for ($i = 0; $i < $length; $i++) {
        $index = random_int(0, $cnt - 1); // 仮に$cnt === 72なら、0~71のランダムな整数を生成
        $rand_chars .= $chars[$index];
    }
    return $rand_chars;
}
