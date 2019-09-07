const openModalButtons = document.querySelectorAll(['data-model-target'])
const openModalButtons = document.querySelectorAll(['data-model-close'])
const ovelay = document.getElementById('overlay')

openModalButtons.forEach(button => {
    button.addEventListener('click',() =>{
        const modal = document.querySelectorAll(button.dataset.modalTarget)
        openModalButtons()
    })
})