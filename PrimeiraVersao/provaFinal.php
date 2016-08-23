<?php
require_once('fpdf.php');

  if(isset($_POST["name"]))
  {
    $autor = $_POST["name"];
    $disciplina = $_POST["disciplina"];
    $nFacilD = $_POST["nFacilD"];
    $nMediaD = $_POST["nMediaD"];
    $nDificilD = $_POST["nDificilD"];
    $nFacilO = $_POST["nFacilO"];
    $nMediaO = $_POST["nMediaO"];
    $nDificilO = $_POST["nDificilO"];
include'functions.php';
$fBasic=new tudo();
$fBasic->consultaQuest($nFacilD, $nMediaD, $nDificilD, $nFacilO, $nMediaO, $nDificilO, $disciplina);}

$disciplina = 'Bunda'; $professor = 'Juca';

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf -> SetY(5);
$pdf->Cell(40,10,'Colégio pedro II - São Cristóvão III'.$autor);
$pdf -> SetY(10);
$pdf->Cell(100,10,'Prova de '.$disciplina);
$pdf->Cell(100,10,'Professor:'.$autor);
$pdf->Cell(100,10,'Nota');
$pdf -> SetY(15);
$pdf->Cell(200,10,'Estudante:___________________________________________________');$pdf->Cell(100,10,'Nº.:_____');$pdf->Cell(100,10,'Turma:__________');
$pdf->Output();

?>Tá fezendo o PDF?
mais ou menos
tem que botaar isso na função php
