<?php
/**
 * Helper functions
 */
/**
 * @param array $value
 * @return array
 */
function getUniqueArray($value) {
    return array_unique($value);
}
/**
 * @param array $arrayInput
 * @return integer or float
 */
function getArraySum($arrayInput) {
    return array_sum($arrayInput);
}
/**
 * @param integer or float $arraySum
 * @param int $len
 * @return integer or float
 */
function getArrayAverage($arraySum, $len) {
    return $arraySum / $len;
}
?>