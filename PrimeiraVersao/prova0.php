<!DOCTYPE html>
<html>
  <head>
    <?php
    include 'functions.php';
    ?>
    <meta charset="utf-8">
    <title>Gerador de Provas</title>
  </head>
  <body>
    <h2>Gerador de provas</h2><br />
    <div class="" style="float:left; width:50%;">
      <form class="" action="prova.php" method="post">
        Autor: <input type="text" name="name" value=""><br />
        Disciplina: <select name="disciplina">
                        <?php
                      //O codigo é orientado a objeto, entao vc tem que instanciar a classe
                       $fBasic=new tudo(); //com o fBasic, vc instancia uma classe php , todas aquelas funcoes estao dentro dessa classe, ai vc instancia a classe e dps
                       $fBasic->consultaDisc(); //a funcao
                         ?>
                    </select><br /><br />
          Questões discursivas: Básicas <input type="number" name="nFacilD" value="0"><br />
          Intermediárias <input type="number" name="nMediaD" value="0"><br>
          Avançadas <input type="number" name="nDificilD" value="0"><br><br />

          Questões objetivas:   Básicas <input type="number" name="nFacilO" value="0"><br>
          Intermediárias <input type="number" name="nMediaO" value="0"><br>
          Avançadas <input type="number" name="nDificilO" value="0"><br><br />
          <input type="submit" name="send" value="Criar">
      </form>
    </div>

      <div class="" style="float:right; width:50%">
        <?php
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
            echo "<b><align = center>Colégio Pedro II - Campus São Cristóvão III</b></align><br />";
            echo "Prova de ".$disciplina."  Professor(a):".$autor."<br />";
            echo "Aluno:___________________________________________   Nº.:___________   Turma:__________<br />";
      $fBasic=new tudo();
      $fBasic->consultaQuest($nFacilD, $nMediaD, $nDificilD, $nFacilO, $nMediaO, $nDificilO, $disciplina);}
         ?>
      </div>

  </body>
</html>
