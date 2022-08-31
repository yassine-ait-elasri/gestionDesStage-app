<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Document</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->

</head>
<body >   
    <nav class="navbar navbar-light bg-light static-top">
        <div class="title">
            <a class="navbar-brand" href="#!"><h3><strong> GESTION DES STAGE  </strong></h3></a>  
        </div>
        <div class=" pull-right btn btn-outline-dark">
            <a  href="/"> <div class="text-success "><h5><strong> DECONECTER </strong></h5></div></a>
        </div>
        <div class="row"></div>
    </nav>

    <header class="mt-6" >
        <div class="user">
                           
                            @if (session('hi')['hi'])
                            <div class="alert alert-success">
                                {{ session('hi')['hi'] }}

                               
                            </div>
                            
                            
                            @endif
        </div>


        <div class="inputs">

            <form action="/intier" method="POST">
                @csrf
                @method('PUT')
                <div class="table">
                <table>
                    <tr>
                        <td><label for="numero"><strong>Numero : </strong></label></td>
                        <td><input id="numero" name="numero" type="text" placeholder="XX/YY/ZZ" size="100%" required></td>
                        </div>
                    </tr>

                    <tr>
                        <div class="nom">
                        <td><label for="nom"><strong>Nom : </strong></label></td>
                        <td><input id="nom" name="nom" type="text" placeholder="Nom" size="100%" required></td>
                        </div>
                    </tr>
                    
                    <tr>
                        <div class="prenom">
                        <td><label for="prenom"><strong>prenom : </strong></label></td>
                        <td><input id="prenom" name="prenom" type="text" placeholder="prenom" size="100%" required></td>
                        </div>
                    </tr>
            <tr>
                    <div class="date">
                    <td><label for="dateR">Date de reception : </label></td>
                    <td><input id="dateR" name="dateR" type="date" size="100%"  required></td>
                    </div>
            </tr>
    </table>
        
                    <div class="submit">
                    <button id="submit" type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form></div>
        </div>
    </header>


</body>

<style>
        body{
        background-image:  url("../assets/option2.jpg");
        font-family:Arial, Helvetica, sans-serif;
        font-size: 16px;
        font-style:oblique;
        }
    .title{
        margin-left: 40%;
        
    }
    header{
        margin-top: 5%;
        margin-left: 10%;
        margin-right: 10%;
        align-items: center;
    }
    .inputs{
        height: 45%;
        width: 100%;
        border-style: dashed;
        border: 1%;
        border-color: rgb(101, 101, 218);
        padding: 8%;
        
    }
    .num{
        margin-right: 15%;
        float: left;
    }
    tr, td {
    padding-top: 10px;
    padding-bottom: 20px;
    margin-right: 1%;
    }
    .dateR{
        float: right;
    }
    .submit{
        float:right;

        padding-left:75%; 
    }



</style>

</html>


@php
    
/*
                    <img class="bg-img" src="{{asset("assets/img/bg-masthead.jpg")}}" alt="...">
    <--!background="{{asset("assets/img/bg-masthead.jpg")}}"->

@if (session('hi'))
    <div class="alert alert-success">
        {{ session('hi') }}
    </div>
    @endif
    <form action="/intier" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group" >
            <label for="numero">numero : </label>
            <input class="form-control" id="numero" name="numero" type="text" required >
        </div>
        <div class="form-group" >
            <label for="dateR">date: </label>
            <input class="form-control" id="dateR" name="dateR" type="date"  required>
            <button id="submit" type="submit" class="btn btn-primary">Register</button>

*/

@endphp