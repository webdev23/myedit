<?php
$line = '';
$f = fopen('token.log', 'r');
$cursor = -1;
fseek($f, $cursor, SEEK_END);
$char = fgetc($f);

while ($char === "\n" || $char === "\r") {
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
}
while ($char !== false && $char !== "\n" && $char !== "\r") {
    $line = $char . $line;
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
}

echo $line;
