<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Início </title>
    <link rel="stylesheet" href="estilos/TLOLP.css">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <script type="text/javascript" src="javascript/ajax.js"></script> <!-- AJAX -->
    <script src="javascript/jquery-1.12.4.min.js"></script>

    </head>
  <body bgcolor="#E80C7A">
      <!--MENU PRINCIPAL -->
<div class="row">
      <div class="left small-1 columns">
      <ul>
        <li ><a href="#" class="butao"><img src="icons/alunoIcon.png" height="45" width="50"> </a>          </li>
        <li ><a href="#" class="butao" id="hide"><img   src="icons/profIcon.png" height="45" width="50"> </a>           </li>
      </ul>
          </div>
          </div>
      <!--  SUBMENU PRINCIPAL -->
      <div class="row">
         <div class="right small-2 columns" id="right">

           <div class='submenu' >
           <ul>
           <li><a href='#' onclick="criarProva();" > Provas </a></li>
           <li><a href='#' onclick="CadQuest();" > Questoes</a></li>

            </ul>
            </div>
         </div>
         </div>

         <!-- CONTEUDO -->
         <div class="conteudo small-8 columns" id="contente">

        </div>
         <!-- SCRIPTS -->
         <script src="js/vendor/jquery.js"></script>
         <script src="js/vendor/what-input.js"></script>
         <script src="js/vendor/foundation.js"></script>
         <script src="js/app.js"></script>
         <script>

         $(document).ready(function(){
           $("#hide").click(function(){
            $("#right").fadeToggle(200);
          });
        });
         </script>
         <?php
         include 'functions.php';
         if (isset($_POST['enunciado'])){
         $tipo="Discursiva";
         $enum= $_POST['enunciado'];
         $gabarito= $_POST['gabarito'];
         $disc= $_POST['disc'];
         $mat= $_POST['materia'];
         $autor= $_POST['autor'];
         $nivel= $_POST['dificuldade'];
         $fBasic= new tudo();
         $fBasic->cadQuest($tipo,$autor, $nivel,$enum,$mat,$disc,$gabarito);
         echo "<script type='javascript'>alert('Dados enviados com Sucesso!');";
          echo "</script>";
       }



          ?>
  </body>
</html>
