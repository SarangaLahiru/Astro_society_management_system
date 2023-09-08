var curr=document.querySelector('.curr')
var p1=document.querySelector('.a1')
var p2=document.querySelector('.a2')
var p3=document.querySelector('.a3')
var p4=document.querySelector('.a4')
var img=document.querySelectorAll('.imgs')



function one(){
    var curr=document.querySelector('.curr')
    var p1=document.querySelector('.a1')
    var p2=document.querySelector('.a2')
    var p3=document.querySelector('.a3')
    var p4=document.querySelector('.a4')

          if(curr.previousElementSibling){

            if(curr.classList.value=='a1 imgs p1 curr'){

              
              curr.classList.remove('curr')
              p1.classList.remove('p1')
              p2.classList.remove('p2')
              p3.classList.remove('p3')
              p4.classList.remove('p4')

              p1.classList.add('p4')
              p2.classList.add('p1')
              p3.classList.add('p2')
              p4.classList.add('p3')
              curr.previousElementSibling.classList.add('curr')

            }
             else if(curr.classList.value=='a2 imgs p1 curr'){

              
              curr.classList.remove('curr')
              p1.classList.remove('p4')
              p2.classList.remove('p1')
              p3.classList.remove('p2')
              p4.classList.remove('p3')

              p1.classList.add('p3')
              p2.classList.add('p4')
              p3.classList.add('p1')
              p4.classList.add('p2')
              curr.previousElementSibling.classList.add('curr')

            }
            else if(curr.classList.value=='a3 imgs p1 curr'){

              
              curr.classList.remove('curr')
              p1.classList.remove('p3')
              p2.classList.remove('p4')
              p3.classList.remove('p1')
              p4.classList.remove('p2')

              p1.classList.add('p2')
              p2.classList.add('p3')
              p3.classList.add('p4')
              p4.classList.add('p1')
              curr.previousElementSibling.classList.add('curr')

            }
                       
 }
   else{

              
              curr.classList.remove('curr')
              p1.classList.remove('p2')
              p2.classList.remove('p3')
              p3.classList.remove('p4')
              p4.classList.remove('p1')

              p1.classList.add('p1')
              p2.classList.add('p2')
              p3.classList.add('p3')
              p4.classList.add('p4')
              img[3].classList.add('curr')



            }
}

var time =setInterval(one,5000)


var dis1=document.querySelectorAll('.dis1')


function two(){
  var curr1=document.querySelector('.curr1')
  curr1.classList.remove('curr1')

  if(curr1.nextElementSibling){

    curr1.nextElementSibling.classList.add('curr1')
    
  }
  else{
    dis1[0].classList.add('curr1')

  }

}

var time2=setInterval(two,5000)
var header=document.querySelector('.header')
var planets=document.querySelector('.planets')

window.addEventListener('scroll',function(){
  console.log(this.scrollY)
  if(this.scrollY>1200){
    planets.classList.add('curr2')
  }
  if(this.scrollY>200){
    header.classList.add('header1')
  }
  if(this.scrollY<10){
    header.classList.remove('header1')
  }
})