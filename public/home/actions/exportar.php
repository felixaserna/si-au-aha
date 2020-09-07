<?php 
require 'PHPExcel.php';
require 'conn.php';

$sql="SELECT id,nombre,apellidoPaterno,apellidoMaterno,sede,fechaCurso,factura,proveedor,fechaCompra FROM registro_facturas";
$resultado=$mysqli->query($sql);

$fila=2;

$objPHPExcel = new PHPExcel();

$objPHPExcel->getProperties()->setCreator("Autor")->setDescription("Reporte de ventas");

$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle("Reporte de ventas");

$objPHPExcel->getActiveSheet()->setCellValue('A1','ID');
$objPHPExcel->getActiveSheet()->setCellValue('B1','NOMBRE');
$objPHPExcel->getActiveSheet()->setCellValue('C1','APELLIDO PATERNO');
$objPHPExcel->getActiveSheet()->setCellValue('D1','APELLIDO MATERNO');
$objPHPExcel->getActiveSheet()->setCellValue('E1','SEDE');
$objPHPExcel->getActiveSheet()->setCellValue('F1','FECHA CURSO');
$objPHPExcel->getActiveSheet()->setCellValue('G1','FACTURA');
$objPHPExcel->getActiveSheet()->setCellValue('H1','PROOVEDOR');
$objPHPExcel->getActiveSheet()->setCellValue('I1','FECHA COMPRA');

while($row=$resultado->fetch_assoc()){
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila,$row['id']);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila,$row['nombre']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila,$row['apellidoPaterno']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila,$row['apellidoMaterno']);
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila,$row['sede']);
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila,$row['fechaCurso']);
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $row['factura']);
    $objPHPExcel->getActiveSheet()->getCell('G'.$fila)->getHyperlink()->setUrl('D:/xampp/htdocs/grupo-aspec/si-au-aha/public/home/actions/facturas/' .  $row['id'] . '/' . $row['factura']);
    $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila,$row['proveedor']);
    $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila,$row['fechaCompra']);
    $fila++;
}

header("Content-Type:application/vnd.openxmlformats-officedocument.spreadsheethtml.sheet");
header('Content-Disposition: attachment;filename="Sistema de Auditoria AHA.xlsx"');

header('Cache-control: max-age=0');
$objWriter=new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save('php://output');

?>