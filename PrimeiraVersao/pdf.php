<div class="">
    <div class="primParte">
        <?php
      include 'functions.php';
      require_once("fpdf/fpdf.php");
      $fBasic=new tudo();
     
      
      $pdf = new FPDF();
      $pdf->AddPage();
      $pdf->SetFont('Arial','B',16);
      $pdf->Cell(40,10,'Testando');
      $pdf->Output();
        ?>
      
      
   </div>
</div>
