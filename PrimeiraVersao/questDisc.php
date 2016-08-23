
<div class="">
      <form class="" action="index.php" method="post">
    <div class="primParte">

      Disciplina <select name="disc">
        <option>     </option>
        <?php
      include 'functions.php';
      $fBasic=new tudo();
      $fBasic->consultaDisc();
        ?>
      </select>
      Matéria <input type="text" id="materia" name="materia" onkeypress="return validar(event)"/>
      Autor <input type="text" id="autor" name="autor" />
      Dificuldade <select name="dificuldade" >
                      <option value="Basico">Fácil</option>
                      <option value="Intermediario">Intermediário</option>
                      <option value="Avancado">Avançado</option>
                  </select>
                  </div>
   <div class="secParte">
     <br />
     <br />

       Enunciado <input type="text" name="enunciado" /><br />
       Gabarito          <input type="text" name="gabarito" />    <br />

      <input type="submit" name="Cadastrar" value="Confirmar"  />
     </form>


   </div>
</div>
