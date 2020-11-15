<?php
/**
 * Class SekudoGame
 */
class SekudoGame {
    /**
     * @var $gameInput
     */
    private $gameInput = array();
    /**
     * @param array $input
     */
    public function __construct($input) {
        $this->gameInput = $input;
    }
    /**
     * @return Boolean
     */
    public function validateSekudo() {
        if (!empty($this->gameInput)) {
            // validate Rows
            foreach ($this->gameInput as $key => $value) {
                if (!$this->validateRow($value)) {
                    return false;
                }
            }
            // validate Columns
            for ($col = 0;$col < count($this->gameInput);$col++) {
                $column = array();
                for ($row = 0;$row < count($this->gameInput);$row++) {
                    $column[] = $this->gameInput[$row][$col];
                }
                if (!$this->validateColumn($column)) {
                    return false;
                }
            }
            // validate Groups
            for ($row = 0;$row < 9;$row = $row + 3) {
                for ($col = 0;$col < 9;$col = $col + 3) {
                    $group = ($this->getGroup($this->gameInput, $row, $col, 3, 3));
                    if (!$this->validateGroup($group)) {
                        return false;
                    }
                }
            }
            return true;
        } else {
            throw new Exception("SekudoGame input is empty");
        }
    }
    /**
     * @param array $inputRow
     * @return Boolean isValidRow
     */
    protected function validateRow($inputRow) {
        $isValidRow = false;
        $uniqueRow = getUniqueArray($inputRow);
        $rowCount = count($uniqueRow);
        if ($rowCount == 9) {
            $rowSum = getArraySum($inputRow);
            $rowAvg = getArrayAverage($rowSum, $rowCount);
            if ($rowSum == 45 && $rowAvg === 5) {
                $isValidRow = true;
            }
        }
        return $isValidRow;
    }
    /**
     * @param array $inputCol
     * @return Boolean
     */
    protected function validateColumn($inputCol) {
        return $this->validateRow($inputCol);
    }
    /**
     * @param array $inputGroup
     * @return Boolean
     */
    protected function validateGroup($inputGroup) {
        $groupArray = array();
        foreach ($inputGroup as $key => $group) {
            $groupArray = array_merge($groupArray, $group);
        }
        return $this->validateRow($groupArray);
    }
    /**
     * @param array $inputGroup
     * @param int $rowOffset
     * @param int $columnOffset
     * @param int $rowLength
     * @param int $columnLength
     * @return array group
     */
    protected function getGroup(array $array, $rowOffset, $columnOffset, $rowLength, $columnLength) {
        $array = array_slice($array, $rowOffset, $rowLength);
        foreach ($array as & $row) {
            $row = array_slice($row, $columnOffset, $columnLength);
        }
        return $array;
    }
}