<?php
/**
 * 数値を判定する関数
 *
 * @param integer|null $num
 * @return string|null
 */
function fx(?int $num): ?string
{
    if (empty($num)) {
        return null;
    }

    if (is_numeric($num)) {
        return '数値です';
    }
    return '文字列です';
}

fx(10);
