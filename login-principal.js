
/* MAQUINA DE ESCREVER*/

function typeWriter(elemento){
    const textoArray = elemento.innerHTML.split('')
    elemento.innerHTML = '';
    textoArray.forEach((letra, i )=>{
        setTimeout(() => elemento.innerHTML += letra, 75 * i)
    })
}

const titulo = document.querySelector('.mensagem1')
typeWriter(titulo)

/*tabs*/

logins = document.querySelectorAll(".pegar")
principal = document.querySelector(".principal")
botoes = document.querySelectorAll(".b")

function tabs(index){
    logins.forEach(e =>{
        e.classList.remove("ativo")
    })

    logins[index].classList.add("ativo")
    principal.classList.add("pegar")
}

botoes.forEach((item, posicao) =>{
    item.addEventListener('click', ()=>{
        tabs(posicao)
    })
})
