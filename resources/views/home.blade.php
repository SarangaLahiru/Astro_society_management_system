<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astro</title>
    <link rel="stylesheet" href="/public/css/home.css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>

    <header class='header'>
        <h2>Planet</h2>
        <li><a href="">Home</a></li>
         <li><a href="">Contact</a></li>
        <li><a href="">About</a></li>
        <li><a href="">More</a></li>
        <li><a href="/login">Login</a></li>
    </header>
    <div class="slides">
        <div class="slide">
            <div class="dis">
                <div class="dis1 curr1">
                    <h2>planet</h2>
                    <h1>Earth</h1>

                    <p>Mars is the fourth planet and the furthest terrestrial planet from the Sun. The reddish color of its surface is due to
                    finely grained iron(III) oxide dust in the soil, giving it the nickname "the Red Planet". Mars's radius is second
                    smallest among the planets in the Solar System at 3,389.5 km. Wikipedia</p>

                    <a href="" class="btn">Explore</a>
                </div>
                <div class="dis1">
                    <h2>planet</h2>
                    <h1>Earth1</h1>
                    <p>Mars is the fourth planet and the furthest terrestrial planet from the Sun. The reddish color of its surface is due
                        to
                        finely grained iron(III) oxide dust in the soil, giving it the nickname "the Red Planet". Mars's radius is second
                        smallest among the planets in the Solar System at 3,389.5 km. Wikipedia</p>
                    
                    <a href="" class="btn">Explore</a>
                </div>
                <div class="dis1">
                    <h2>planet</h2>
                    <h1>Earth2</h1>
                    <p>Mars is the fourth planet and the furthest terrestrial planet from the Sun. The reddish color of its surface is due
                        to
                        finely grained iron(III) oxide dust in the soil, giving it the nickname "the Red Planet". Mars's radius is second
                        smallest among the planets in the Solar System at 3,389.5 km. Wikipedia</p>
                    
                    <a href="" class="btn">Explore</a>
                </div>
                <div class="dis1">
                    <h2>planet</h2>
                    <h1>Earth3</h1>
                    <p>Mars is the fourth planet and the furthest terrestrial planet from the Sun. The reddish color of its surface is due
                        to
                        finely grained iron(III) oxide dust in the soil, giving it the nickname "the Red Planet". Mars's radius is second
                        smallest among the planets in the Solar System at 3,389.5 km. Wikipedia</p>
                    
                    <a href="" class="btn">Explore</a>
                </div>
                <div class="dis1">
                    <h2>planet</h2>
                    <h1>Earth4</h1>
                    <p>Mars is the fourth planet and the furthest terrestrial planet from the Sun. The reddish color of its surface is due
                        to
                        finely grained iron(III) oxide dust in the soil, giving it the nickname "the Red Planet". Mars's radius is second
                        smallest among the planets in the Solar System at 3,389.5 km. Wikipedia</p>
                    
                    <a href="" class="btn">Explore</a>
                </div>
            </div>
            <div class="img ">
                <div >
                    <img class="a4 imgs p4" src="{{url('images/Planet-PNG-Picture.png')}}" alt="">
                
                    <img class="a3 imgs p3" src="/images/Planet-PNG-Picture.png " alt="">
               
                    <img class="a2 imgs p2" src="/images/1200px-Bringer_of_War_Planet.png" alt="">
                
                    <img class="a1 imgs p1 curr" src="/images/earth_PNG16.png" alt=""> 

                  <!--  <img class="a4 imgs p4" src="/public/images/Planet-PNG-Picture.png" alt="">
                    
                    <img class="a3 imgs p3" src="/public/images/Planet-PNG-Picture.png " alt="">
                    
                    <img class="a2 imgs p2" src="/public/images/1200px-Bringer_of_War_Planet.png" alt="">
                    
                    <img class="a1 imgs p1 curr" src="/public/images/earth_PNG16.png" alt=""> -->
                    <div class="box">
                        <h2></h2>
                    </div>
                </div>
                
               
               
               
                

            </div>
        </div>
    </div>

    <div class="planets">
        <img class="planet1 " src="/images/mars.png" alt="">
        <div class="dis">
          <h2>Planet</h2>
        <p>Mars is the fourth planet and the furthest terrestrial planet from the Sun. The reddish color of its surface is due
            to
            finely grained iron(III) oxide dust in the soil, giving it the nickname "the Red Planet". Mars's radius is second
            smallest among the planets in the Solar System at 3,389.5 km.</p>
        </div>
    </div>

    

    <script src="/js/home.js"></script>
    
</body>
</html>