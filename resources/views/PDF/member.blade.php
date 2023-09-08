<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Application</title>
   
   
</head>
    <style>
        table{
    border-collapse:collapse;
    width: 80%;
    margin: 10px auto;
    height: 250px;
    position: relative;
    top: 100px;
}
h2{
    margin-left: 100px;
    position: relative;
    top: 80px;
    font-size: 40px;
}
table  td{
    position: relative;
    left: 20px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

}
h3{
    position: relative;
    top: 150px;
  
    width: 500px;
    left: 400px;
}
.box p{
    position: absolute;
    top: 180px;
    font-size: 15px;
    left: 300px;
}
    </style>
<body>



    <div class="box">
        <h2>Astro member Application</h2>
        <p>Date - <span>2023</span></p>

        <table border="">
            <tr>
                <td>Name  </td>
                <td>{{Session::get('m_name')}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{Session::get('m_email')}}</td>
            </tr>
            <tr>
                <td>Address </td>
                <td>{{Session::get('m_address')}}</td>
            </tr>
            <tr>
                <td>Phone number</td>
                <td>{{Session::get('m_phone')}}</td>
            </tr>
            <tr>
                <td>Age </td>
                <td>{{Session::get('m_age')}}</td>
            </tr>
        </table>


        <h3>Signature</h3>
    </div>
    
</body>
</html>