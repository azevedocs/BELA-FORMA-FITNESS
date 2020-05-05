let card1img = document.querySelectorAll('.imgc1')
let botoesCard1 = document.querySelectorAll('.button-card-1')



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
//Slider 2//
let card2img = document.querySelectorAll('.imgc2')
let botoesCard2 = document.querySelectorAll('.button-card-2')

function slider2(index){
    card2img.forEach(e=>{
        e.classList.remove('ativo1')
    })
    botoesCard2.forEach(e=>{
        e.classList.remove('selected')
    })

    card2img[index].classList.add('ativo1')
    botoesCard2[index].classList.add('selected')
}

botoesCard2.forEach((e,index)=>{
    e.addEventListener('click', ()=>{
        slider2(index)
    })
})

//Slider 3//

let card3img = document.querySelectorAll('.imgc3')
let botoesCard3 = document.querySelectorAll('.button-card-3')

function slider3(index){
    card3img.forEach(e=>{
        e.classList.remove('ativo1')
    })
    botoesCard3.forEach(e=>{
        e.classList.remove('selected')
    })

    card3img[index].classList.add('ativo1')
    botoesCard3[index].classList.add('selected')
}

botoesCard3.forEach((e,index)=>{
    e.addEventListener('click', ()=>{
        slider3(index)
    })
})

//Slider 4//

let card4img = document.querySelectorAll('.imgc4')
let botoesCard4 = document.querySelectorAll('.button-card-4')

function slider4(index){
    card4img.forEach(e=>{
        e.classList.remove('ativo1')
    })
    botoesCard4.forEach(e=>{
        e.classList.remove('selected')
    })

    card4img[index].classList.add('ativo1')
    botoesCard4[index].classList.add('selected')
}

botoesCard4.forEach((e,index)=>{
    e.addEventListener('click', ()=>{
        slider4(index)
    })
})

//Efeito de Marcar
marcar = document.querySelectorAll('.marcar')
marcar.forEach(e=>{
    e.addEventListener('click', ()=>{
        alert('AULA MARCADA COM SUCESSO')
    })
})

//MODAL 1//
MODAL = document.querySelector('.pegar1')
bmodal = document.querySelectorAll('.bmodal')

bmodal.forEach(e=>{
    e.onclick = function(){
        MODAL.classList.add('ativo1')
    }
})

// MODAL 2//
MODAL2 = document.querySelector('.pegar2')
bmodal2 = document.querySelectorAll('.bmodal2')

bmodal2.forEach(e=>{
    e.onclick = function(){
        MODAL2.classList.add('ativo1')
    }
})

// MODAL 3 //
MODAL3 = document.querySelector('.pegar3')
bmodal3 = document.querySelectorAll('.bmodal3')

bmodal3.forEach(e=>{
    e.onclick = function(){
        MODAL3.classList.add('ativo1')
    }
})

// MODAL 4 //
MODAL4 = document.querySelector('.pegar4')
bmodal4 = document.querySelectorAll('.bmodal4')

bmodal4.forEach(e=>{
    e.onclick = function(){
        MODAL4.classList.add('ativo1')
    }
})

//ENVIAR PRESENÇAS//

fMODAL = document.querySelectorAll('.Modal')

function fecharModal(e){
    if(e.target === this){
    fMODAL.forEach(e=>{
        e.classList.remove('ativo1')
    })
}
}


fMODAL.forEach(e=>{
    e.addEventListener('click', fecharModal)
})

//MENSAGEM DE PRESENÇA//

msg = document.querySelectorAll('.eModal')

function enviarP(){
    alert('PRESENÇA MARCADA COM SUCESSO')
    fMODAL.forEach(e=>{
        e.classList.remove('ativo1')
    })
}

msg.forEach(e=>{
    e.addEventListener('click', enviarP)

})