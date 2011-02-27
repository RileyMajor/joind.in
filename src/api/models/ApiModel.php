<?php

class ApiModel {
    public static function getDefaultFields() {
        return array();
    }
    public static function getVerboseFields() {
        return array();
    }

    public static function transformResults($results, $verbose) {
        $fields = $verbose ? static::getVerboseFields() : static::getDefaultFields();
        $retval = array();

        // format results to only include named fields
        foreach($results as $row) {
            $entry = array();
            foreach($fields as $key => $value) {
                $entry[$key] = $row[$value];
            }
            $retval[] = $entry;
        }
        return $retval;
    }
}