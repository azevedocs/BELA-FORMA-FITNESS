abrirModal = document.querySelector('.botao');
fecharModal = document.querySelector('.fbotao');
Modal = document.querySelector('.Modal');

abrirModal.onclick = ()=>{
    Modal.classList.add('ativo')
}

fecharModal.onclick = ()=>{
    Modal.classList.remove('ativo')
}

function ver(e){
  
    if(e.target === this){
    Modal.classList.remove('ativo')
  }
}

Modal.addEventListener('click',ver)

EnviarR = document.querySelector("#Vaim")
console.log(EnviarR)
EnviarR.onclick = function(){
    alert('RELATORIO ENVIADO COM SUCESSO!!!!')
}