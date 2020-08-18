<?php 

    if (isset($_POST["export_data"])) {
        $filename = "Sistema de Auditoría AHA_" . date('Ymd') . ".xls";

        header("Content-Type: application/vnd.ms-excel");
        
        header("Content-Disposition: attachment; filename="$filename"");

        $show_coloumn = false;
        if(!empty($resultado_registros)) {
        foreach($resultado_registros as $registro) {
        if(!$show_coloumn) {
        // display field/column names in first row
        echo implode("t", array_keys($registro)) . "n";
        $show_coloumn = true;
        }
        echo implode("t", array_values($registro)) . "n";
        }
        }
        exit;
    }

?>