

const switchMode = document.querySelector('.switchDarkMode');
const switchModeMobile = document.querySelector('.switchDarkModeMobil');



switchMode.addEventListener('click', ()=>{
    document.documentElement.classList.toggle('dark')
})  



const burgerMenu = document.querySelector('.burgerMenu');
const sliderMenu = document.querySelector('.sliderMenu');
const formInputs = document.querySelector('.wpcf7-form-control-wrap');


burgerMenu.addEventListener('click', ()=>{
console.log("running")
    if (sliderMenu.classList.contains('hidden')) {
        sliderMenu.classList.remove('hidden');
        sliderMenu.classList.add('flex');
    } else {    
        sliderMenu.classList.remove('flex');
        sliderMenu.classList.add('hidden');
    }
})  

switchModeMobile.addEventListener('click', ()=>{
    document.documentElement.classList.toggle('dark')
      
    })  
    
    
    




