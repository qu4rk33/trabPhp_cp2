
<div class="">
      <form class="" action="questObj.php" method="post">
    <div class="primParte">

      Disciplina <select  name="disc" >
        <option>     </option>
        <?php
      include 'functions.php';
      $fBasic=new tudo();
      $fBasic->consultaDisc();
        ?>
      </select>
      Matéria <input type="text" id="materia" name="materia" onkeypress="return validar(event)" />
      Autor <input type="text" name="autor" id="autor" />
      Dificuldade <select name="dificuldade">
                      <option value="Basico">Fácil</option>
                      <option value="Intermediario">Intermediário</option>
                      <option value="Avancado">Avançado</option>
                  </select>
                  </div>
   <div class="secParte">
     <br />

       Enunciado <input type="text" name="enunciadoObj" />  Gabarito:<br /><br/>
      a) <input type="radio" name="gabarito" value="a" />       <input type="text" name="a" />
      b) <input type="radio" name="gabarito" value="b" />       <input type="text" name="b" />
      c) <input type="radio" name="gabarito" value="c" />       <input type="text" name="c" />
      d) <input type="radio" name="gabarito" value="d" />       <input type="text" name="d" />
      e) <input type="radio" name="gabarito" value="e" />       <input type="text" name="e" />
      <input type="submit" name="Cadastrar" value="Confirmar" />
       </form>
   </div>
</div>
<?php
if (isset($_POST['gabarito'])){
$tipo="Objetiva";
$enum= $_POST['enunciadoObj'];
$gabarito= $_POST['gabarito'];
$disc= $_POST['disc'];
$mat= $_POST['materia'];
$autor= $_POST['autor'];
$nivel= $_POST['dificuldade'];
$op1=$_POST['a'];
$op2=$_POST['b'];
$op3=$_POST['c'];
$op4=$_POST['d'];
$op5=$_POST['e'];
$fBasic->cadQuest($tipo,$autor, $nivel,$enum,$mat,$disc,$gabarito,$op1,$op2,$op3,$op4,$op5);

header("Location:index.php");
}
 ?>
