<?php

namespace utility;
//namespace MyProject\mvcName;

class htmlTable
{
    public static function generateTableFromMultiArray($array)
    {

        $tableGen = '<table class="table" cellpadding="10">';
        $tableGen .= '<tr>';
        //this grabs the first element of the array so we can extract the field headings for the table
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        //this gets the page being viewed so that the table routes requests to the correct controller
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $value) {
            if($value != 'password' && $value != 'userid'){
            $tableGen .= '<th>' . $value . '</th>';
            }
        }
        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
                if ($key == 'id' ) {
                    $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a></td>';
                } else {
                    if($key != 'password' && $key != 'userid'){
                        $tableGen .= '<td>' . $value . '</td>';
                    }
                }
            }
            $tableGen .= '</tr>';
        }

        $tableGen .= '</table>';

        return $tableGen;
    }

    public static function generateTableFromOneRecord($innerArray)
    {
        $tableGen = '<table class="table" cellpadding="10"><tr>';

        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
            if ($innerRow != 'id' && $innerRow != 'password' && $innerRow != 'userid') {
                    $tableGen .= '<th>' . $innerRow . '</th>';
                }
        }
        $tableGen .= '</tr>';

        foreach ($innerArray as $innerRow=>$value) {
            
            if ($innerRow != 'id' && $innerRow != 'password' && $innerRow != 'userid') {                
                    $tableGen .= '<td>' . $value . '</td>';
                }           
        }

        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}

?>