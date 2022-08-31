
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
            <a class="navbar-brand" href="#!"><strong> GESTION DES STAGE </strong></a>  
            <div class=" pull-right btn btn-outline-dark">
                <a  href="/"> <div class="text-success "><h5><strong> DECONECTER </strong></h5></div></a>
            </div>
            <div class="row"></div> 
        </div>
    </nav>

    <header class="mt-6" >

        <form action="/csCD" method="POST">
            @csrf
            @method('PUT')  
            <input type="hidden" id="id" name="id" value={{session('someDetails')[1]}}>

                <div class="inputs">
                    <div class="stagaire">
                       
                        <label for="stagaire">stagaire : </label>
                       
                        <select class="custom-select mr-sm-2" id="stagaire" name="stagaire"  >
                            @for ($n=0;$n<count(session('someDetails')['stg']);$n++)
                            <option value= {{session('someDetails')['stg'][$n]['id']}}>{{session('someDetails')['stg'][$n]['nom']}}  {{session('someDetails')['stg'][$n]['prenom']}}</option>
                          @endfor
                        </select>
                    </div>
                    <div class="encadrant">
                        <label for="encadrant">encadrant : </label>
                        <select class="custom-select mr-sm-2" id="encadrant" name="encadrant"  > 
                            @for ($l1=0 ;$l1<count(session('someDetails')[0]);$l1++)
                            @for ($l2=0 ;$l2<count(session('someDetails')[0][$l1]);$l2++)
                            <option value= {{session('someDetails')[0][$l1][$l2]['id']}}>{{session('someDetails')[0][$l1][$l2]['nom']}}  {{session('someDetails')[0][$l1][$l2]['prenom']}} : {{session('someDetails')[0][$l1][$l2]['service']}}</option>
                            @endfor
                            @endfor
                           
                        </select>
                    </div>
                    <div class="submit">
                    <button id="submit" type="submit" class="btn btn-primary">Register</button>
                    </div></div>
                </form>
        
    </header>


</body>
<style>
        body{
        background-image:  url("../assets/option2.jpg");
        font-family:Arial, Helvetica, sans-serif;
        font-size: 16px;
        }
    
    .title{
        margin-left: 40%;
        
    }
    header{
        margin-top: 10%;
        margin-left: 10%;
        margin-right: 10%;
        align-items: center;
    }
    .inputs{
        height: 100%;
        width: 100%;
        border-style: dashed;
        border: 1%;
        font-family:Arial, Helvetica, sans-serif;
        font-size: 18px;
        border-color: rgb(101, 101, 218);
        padding: 8%;
    }
    .stagaire{
        padding-right: 1%;
        float: left;
    }

    .encadrant{
     float: right;
    }
    .submit{
        padding-top: 10%;
        padding-left:45%; 
    }



</style>

</html>



@php
    
/*

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    
    <form action="/csCD" method="POST">
        @csrf
        @method('PUT')  
        <div class="form-group">
            <label for="encadrant">encadrant : </label>
            <select class="custom-select mr-sm-2" id="encadrant" name="encadrant"  > 
                @for ($i=0 ;$i<count(App\Models\encadrant::all());$i++)
                <option value= {{App\Models\encadrant::all()[$i]['id']}}>{{App\Models\encadrant::all()[$i]['nom']}}  {{App\Models\encadrant::all()[$i]['prenom']}} : {{App\Models\encadrant::all()[$i]['service']}}</option>
                @endfor
            </select>
        </div>
        <div class="form-group" >
          <br>
          <label for="stagaire">stagaire : </label>
          <select class="custom-select mr-sm-2" id="stagaire" name="stagaire"  >
            <option value= {{session('someDetails')[0]['id']}}>{{session('someDetails')[0]['nom']}}  {{session('someDetails')[0]['prenom']}}</option>
        </select>
        </div>
        <button id="submit" type="submit" class="btn btn-primary">Register</button>
    </form>
</body>
</html>

@endphp
