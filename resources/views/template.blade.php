<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Td Laravel</title>
    <style>
         header .nav{
    display: flex;
    background-color: #4472c4;
    height: 250px;
    width: 100% ;
}
header .nav img{
    width:300px;
}
.titre{
    font-size: 70px;
    font-family: 'algerian',sans-serif;
    margin-left:100px ;
}

main{
    background-color:#4472c4;
    width:300px ;
    height: 700px;
    margin-top: -20px;
}
main ul li{
    list-style-type: none;
    text-decoration: none;
    font-size: 20px;
    background: #bf9000;
    margin: 20px;
  
}
select{
    width: 250px;
}
.fm{

}

center p{
    font-size: 100px;
    margin-top: -700px;
    margin-left: 300px;
}
center {
    margin-left: -500px;

}
input{
    font-size:20px;
}
label {
    font-size:20px;
    
}

table {
  border-collapse: collapse;
  width: 600px;
 
  margin-left:400px;
  margin-top:20px ;

}

table, th, td {
  border: 1px solid black;
  font-size:15px;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

th {
  background-color: rgb(205, 133, 205);
  color: white;
}

#id{
    background-color: rgb(206, 245, 169);

}


    </style>
</head>
<body>
    <header>
        <nav class="nav">
            <img src="{{asset('img/logo.jpg')}}">
            <h1 class="titre">ESAG  LARAVEL</h1>
        </nav>

    </header>
    <main>
        @include('menu')
      
    </main>
    <center> 
        <p>@yield('contenu') </p>
    </center>

</body>
</html>