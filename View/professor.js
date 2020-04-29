card1img = document.querySelectorAll('.imgc1')
botoesCard1 = document.querySelectorAll('.button-card-1')



function slider1(index){
    card1img.forEach(e=>{
        e.classList.remove('ativo1')
    })
    botoesCard1.forEach(e=>{
        e.classList.remove('selected')
    })

    card1img[index].classList.add('ativo1')
    botoesCard1[index].classList.add('selected')
}

botoesCard1.forEach((e,index)=>{
    e.addEventListener('click', ()=>{
        slider1(index)
    })
})

marcar = document.querySelector('.marcar')
marcar.onclick = function(){
    alert('AULA MARCADA COM SUCESSO')
}