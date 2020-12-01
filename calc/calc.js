var valor;
function butao(num){
    valor = document.calc.visor.value +=num;
}
function op(simb){
    valor = document.calc.visor.value+=simb;
}
function limpa(){
    document.calc.visor.value ='';
}
function result(){
    resultado = eval(valor);
    document.calc.visor.value = resultado;
}


