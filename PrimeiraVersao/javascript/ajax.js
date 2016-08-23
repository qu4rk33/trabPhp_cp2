function criarProva(){
  var resultad=document.getElementById("contente");
  var req= reqHTTP();
  req.open('GET', 'prova.php', true);
  req.send(null);
  req.onreadystatechange =function(){
    if (req.readyState == 4)
    {
      if (req.status == 200)
      {
      resultad.innerHTML = req.responseText;
      }
      else
      {
        resultad.innerHTML = "Erro: " + req.statusText;
      }
    }
  };

}
function validar(e)
{
    var k;
    document.all ? k = e.keyCode : k = e.which;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
}
function reqHTTP(){
  if(window.XMLHttpRequest){
      return httpRequest = new XMLHttpRequest();
  }else if(window.ActiveXObject){
    try{
      return httpRequest= new ActiveXObject("Msxm12.XMLHTTP");
    }
    catch (e){
      try{
        return  httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }
      catch (e) {}
    }
  }
}
function _radios(){
  var escolha="";
  var opts=document.getElementsByName('tipo');
  for(var i=0,tamanho=opts.length; i<tamanho;i++){
    if(opts[i].checked){
        return escolha=opts[i].value;
    }
  }
}
function nextPgDados(){
  var tipoQuestao= _radios();
var conteudo = document.getElementById("contente");
var req=reqHTTP();

if (tipoQuestao=="dsc") {
  req.open('GET','questDisc.php',true);
  req.send(null);

}else{
  req.open('GET','questObj.php',true);
  req.send(null);
}
req.onreadystatechange= function(){
  if (req.readyState == 4)
  {
    if (req.status == 200)
    {
    conteudo.innerHTML = req.responseText;
    }
    else
    {
      conteudo.innerHTML = "Erro: " + req.statusText;
    }
  }
};
}
function CadQuest(){
var resultad=document.getElementById("contente");
var req= reqHTTP();
req.open('GET', 'questoes.php', true);
req.send(null);
req.onreadystatechange =function(){
  if (req.readyState == 4)
  {
    if (req.status == 200)
    {
    resultad.innerHTML = req.responseText;
    }
    else
    {
      resultad.innerHTML = "Erro: " + req.statusText;
    }
  }
};
}
