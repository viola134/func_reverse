<?php
$fruit = ["apple", "orange", "pear", "melon", "watermelon", "peach", "kiwi", "lemon", "lime", "pineapple"];
function cmp($a, $b)
{
    for ($i = 0; $i < func_num_args(); $i++) {
        return $a <=> $b;
    }
}

uasort($fruit, "cmp");
print_r($fruit);