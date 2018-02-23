<?php

if (!function_exists('data2Table')) {
    function data2Table($rows)
    {
        if(empty($rows)) {
            $html = 'no records';
        }   else {
        $html = '<table class="table table-bordered table-hover dataTable" role="grid">';
        $headings = array_keys($rows[0]);
        $html .= '<thead  >';
        foreach($headings as $key=>$row) {


                $html .= '<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="'. $row .'" >' . $row . '</th>';

        }
        $html .= '<thead>';

        foreach($rows as $key=>$row) {
            $html .= "<tr>";
            foreach($row as $key2=>$row2){
                $html .= "<td >" . $row2 . "</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";
        }
        return $html;
    }
}