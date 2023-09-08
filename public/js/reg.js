var box2=document.querySelector('.box2')
var btn=document.getElementById('btn')
var a2=document.querySelector('.a2')
var a4=document.querySelector('.a4')
window.onbeforeunload=function(){
    box2.classList.add('box1')
}
window.onunload=function(){
    box2.classList.remove('box1')
    
}
window.addEventListener('offline',function(){
    
    a2.classList.add('a3')
    a4.classList.remove('a3')
})

window.addEventListener('online',function(){
    
    a4.classList.add('a3')
    a2.classList.remove('a3')
})
