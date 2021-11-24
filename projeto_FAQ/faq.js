//buscar itens da tela
const itensPerguntasERespostas = document.querySelectorAll('.item')
console.log(itensPerguntasERespostas)
//entender que o item foi clicado
itensPerguntasERespostas.forEach(function chamar(item){
    //add ouvinte de eventos, 'qual evento, oque vai acontecer'
    item.addEventListener('click',function(){
        //verificar se a pergunta clicada esta ativa
        //classlist - ver qual classes do item
        //contains() - função 
        const estaAtiva = item.classList.contains('ativo')
        itensPerguntasERespostas.forEach(function(item){
            item.classList.remove('ativo')
        })
        //se a pergunta não esta ativa
        if(!estaAtiva){
            //abrir a resposta atual, mas eu preciso fechar todas
            item.classList.add('ativo')
        }else{
            item.classList.remove('ativo')
        }
        

        //se a pergunta esta ativa

        //desativar
    })
})
