<?php
//given inputData as a string, find the length of the longest substring containing only unique characters

$inputData = "";
while ($line = fgets(STDIN)){
    $inputData .= $line;
}

function getLongestSubstringLength($inputData) {
    $result = 0;
    $length = strlen($inputData);
    for ($i = 0; $i < $length; $i++) {
        $seen = [];
        for ($j = $i; $j < $length; $j++) {
            $character = $inputData[$j];
            if ($seen[$character] == true) {
                break;
            }else {
                $result = max($result, $j - $i + 1);
                $seen[$character] = true;
            }
        }
    }
    return $result;
}

echo getLongestSubstringLength($inputData);
?>
