<?php
//define('nome','valor');
define('DBBANCO','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNOME','bsc');

class tudo {
/***********************************************************VARIAVEIS***/
  public $conn;
  public $sql;

/***********************************************************METODOS***/
  public  function startCon(){ //Inicia Banco de dados
    $this->conn= new mysqli(DBBANCO, DBUSER, DBPASS, DBNOME);
    if($this->conn->connect_error){
      trigger_error('Erro: ' . $conn->connect_error, E_USER_ERROR);
      echo "Erro";
    }
  }
  public function closeCon(){ //Executa e finaliza certos comandos
    if (!mysqli_query($this->conn,$this->sql))
    {   die('Error: ' . mysqli_error($this->conn)); }
    mysqli_close($this->conn);
  }
  public function cadQuest($tipo,$autor, $nivel, $enunciado,$materia,$conteudo,$gabarito,$op1=null,$op2=null,$op3=null,$op4=null,$op5=null){
    self::startCon();
    if($tipo=='Discursiva'){

       $this->sql="INSERT INTO questoes (autor, nivel, tipo, enunciado, gab, cod_disc, cod_cont) VALUES ('$autor','$nivel','$tipo','$enunciado','$gabarito','$conteudo','$materia')";
       self::closeCon();
    }else{
      $this->sql="INSERT INTO questoes (autor, nivel, tipo, enunciado, gab, op1, op2, op3,op4,op5, cod_disc, cod_cont)  VALUES ('$autor','$nivel','$tipo','$enunciado','$gabarito','$op1','$op2','$op3','$op4','$op5','$conteudo','$materia')";
      self::closeCon();
    }

  }

public function consultaDisc(){
   self::startCon();
   $this->sql="SELECT codigo FROM disciplina ";
   $rs=$this->conn->query($this->sql);
   $linhas = $rs->num_rows;
   while($option = $rs->fetch_object()){
      echo'  <option>'. $option->codigo .'</option>';
}
}


 public function consultaBanc($opt, $dado){ self::startCon(); if($opt == "cod"){
 $this->sql="SELECT * FROM cliente where Codigo='$dado' "; }else if($opt ==
 "nome"){ $this->sql="SELECT * FROM cliente where Nome like '%".$dado."%' ";
 }else if($opt == "all"){ $this->sql="SELECT * FROM cliente"; }
 $rs=$this->conn->query($this->sql); $linhas = $rs->num_rows; echo "Registros :
 $linhas <br />";
   //
   //  O CODIGO DA TABELA  ABAIXO
   //
   echo'<table border="1"> ';
   echo '<tr><td> Codigo: <td> Nome: <td> Endereço: <td> Telefone: <td>  <td> <td> <td> <td>  </tr> ' ;

   $rs->data_seek(0);

while($row = $rs->fetch_row()){
    echo '<tr> <td>' .$row[0] . '</td>';
      echo'<td>' . $row[1] . '</td>';
        echo '<td>' .$row[2] . '</td>';
          echo '<td>' .$row[3] . '<td>';
            echo'<td>'.'<button type="button" class="btn btn-warning" onclick="teste()"><a href=update.php?nome='.$row[1].'&codigo='.$row[0].'&tel='.$row[3].'&foto='.$row[2].'>Atualizar</a></button>'. '<td>';
            //rogerThat= função que chama a pagina que executara o POO do php :
                echo'<td>'.'<button type="button" class="btn btn-warning" onclick="rogerThat('.$row[0].')">  <a href=#>Deletar</a></button>'. '<td> </tr>';
}


 }
 public function criarPDFFF(){

 }
 public function consultaQuest($nFacilD, $nMediaD, $nDificilD, $nFacilO, $nMediaO, $nDificilO, $disciplina){
    self::startCon();
    require_once('fpdf.php');
    $pdf = new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',12);
    $pdf -> SetY(5);
    $nQuestao = 1;
    $facilD = ""; $mediaD = ""; $dificilD = "";
    $facilO = ""; $mediaO = ""; $dificilO = "";
    $yPDF = 20;

    //Questões Fáceis discursivas
    $this->sql="SELECT * FROM questoes WHERE nivel = 'Basico' AND tipo = 'Discursiva' AND cod_disc = '$disciplina' ORDER BY RAND() LIMIT $nFacilD";
    $rs=$this->conn->query($this->sql);
    while($option = $rs->fetch_assoc())
    {
      $facilD = "\n\n".$nQuestao."- ".$facilD.$option["enunciado"]."\n";
      $facilD = $facilD."_____________________________________________________________________________\n";
      $facilD = $facilD."_____________________________________________________________________________\n\n";
      $nQuestao++;

    }

    //Questões Médias discursivas
    $this->sql="SELECT * FROM `questoes` WHERE nivel = 'Intermediario' AND tipo = 'Discursiva' AND cod_disc = '$disciplina' ORDER BY RAND() LIMIT $nMediaD";
    $rs=$this->conn->query($this->sql);
    while($option = $rs->fetch_assoc())
    { 
      $mediaD = $nQuestao."- ".$mediaD.$option["enunciado"]."\n";
      $mediaD = $mediaD."______________________________________________________________________________________________________\n";
      $mediaD = $mediaD."______________________________________________________________________________________________________\n";
      $mediaD = $mediaD."______________________________________________________________________________________________________\n";
      $mediaD = $mediaD."______________________________________________________________________________________________________\n\n";
      $nQuestao++;
      
    }

    //Questões Difíceis discursivas
    $this->sql="SELECT * FROM `questoes` WHERE nivel = 'Avancado' AND tipo = 'Discursiva' AND cod_disc = '$disciplina' ORDER BY RAND() LIMIT $nDificilD";
    $rs=$this->conn->query($this->sql);
    while($option = $rs->fetch_assoc())
    { 
      $dificilD = $nQuestao."- ".$dificilD.$option["enunciado"]."\n";
      $dificilD = $dificilD."_________________________________________________________________________\n";
      $dificilD = $dificilD."_________________________________________________________________________\n";
      $dificilD = $dificilD."_________________________________________________________________________\n";
      $dificilD = $dificilD."_________________________________________________________________________\n";
      $dificilD = $dificilD."_________________________________________________________________________\n";
      $dificilD = $dificilD."_________________________________________________________________________\n\n";
      $nQuestao++;
  
    }

    //Questões Fáceis Objetivas
    $this->sql="SELECT * FROM `questoes` WHERE nivel = 'Basico' AND tipo = 'Objetiva' AND cod_disc = '$disciplina' ORDER BY RAND() LIMIT $nFacilO";
    $rs=$this->conn->query($this->sql);
    while($option = $rs->fetch_assoc())
    { 
      $facilO = $nQuestao."- ".$facilO.$option["enunciado"]."\n";
      $facilO = $facilO."a) ".$option["op1"]."\n";
      $facilO = $facilO."b) ".$option["op2"]."\n";
      $facilO = $facilO."c) ".$option["op3"]."\n";
      $facilO = $facilO."d) ".$option["op4"]."\n";
      $facilO = $facilO."e) ".$option["op5"]."\n\n";
      $nQuestao++;
    }

    //Questões Médias Objetivas
    $this->sql="SELECT * FROM `questoes` WHERE nivel = 'Intermediario' AND tipo = 'Objetiva' AND cod_disc = '$disciplina' ORDER BY RAND() LIMIT $nFacilO";
    $rs=$this->conn->query($this->sql);
    while($option = $rs->fetch_assoc())
    { 
      $mediaO = $nQuestao."- ".$mediaO.$option["enunciado"]."\n";
      $mediaO = $mediaO."a) ".$option["op1"]."\n";
      $mediaO = $mediaO."b) ".$option["op2"]."\n";
      $mediaO = $mediaO."c) ".$option["op3"]."\n";
      $mediaO = $mediaO."d) ".$option["op4"]."\n";
      $mediaO = $mediaO."e) ".$option["op5"]."\n\n";
      $nQuestao++;
    
    }

    //Questões Difíceis Objetivas
    $this->sql="SELECT * FROM `questoes` WHERE nivel = 'Avancado' AND tipo = 'Objetiva' AND cod_disc = '$disciplina' ORDER BY RAND() LIMIT $nFacilO";
    $rs=$this->conn->query($this->sql);
    while($option = $rs->fetch_assoc())
    { 
      $dificilO = $nQuestao."- ".$dificilO.$option["enunciado"]."\n";
      $dificilO = $dificilO."a) ".$option["op1"]."\n";
      $dificilO = $dificilO."b) ".$option["op2"]."\n";
      $dificilO = $dificilO."c) ".$option["op3"]."\n";
      $dificilO = $dificilO."d) ".$option["op4"]."\n";
      $dificilO = $dificilO."e) ".$option["op5"]."\n\n";
      $nQuestao++;

      
    }
    $pdf->Image('cabe.png');
$pdf->MultiCell(0,5, $facilD.$mediaD.$dificilD.$facilO.$mediaO.$dificilO);
$pdf->Output();

 }


 }

//PENSAR COMO VAI SER O DELETAR

?>
