botoes = document.querySelectorAll('.bp')
console.log(botoes)

function mostrar(){
    this.nextElementSibling.classList.toggle('ativo')
}

botoes.forEach(e=>{

    e.addEventListener('click',mostrar);

})

mensagem = document.querySelectorAll('.funcao');

mensagem.forEach(e=>{
    e.addEventListener('click',()=>{
        alert('FUÇÃO REALIZADA COM SUCESSO')
    })
})