var search=document.getElementById('search')
var planets=document.querySelector('.planet')
var box1=document.querySelectorAll('.box')


search.addEventListener('keyup',function(){
   
    var searchThing=search.value.toLowerCase();

    for(var i=0;i<box1.length; i++){

        var planetName=box1[i].getElementsByTagName('h2')[0].innerHTML.toLowerCase();
        
        if(planetName.indexOf(searchThing)>-1){
            box1[i].style.display="";
        }
        else{
            box1[i].style.display="none"
        }
        console.log(planetName.indexOf(searchThing))

    }

})





