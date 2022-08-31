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
        <div class="user">

            @php
               
            @endphp

                            @if (session('hi')['hi'])
                            <div class="alert alert-success">
                                {{ session('hi')['hi'] }}
                            </div>
                            @endif
        </div>
        
   
    
        <form action="/searchEencadrant" method="GET">
            @csrf
            @method('PUT')
                <div class="inputs">
            <div class="stagaire">
                <label for="stagaire">stagaire : </label>
                <select class="custom-select mr-sm-2" id="id_stagaire" name="id_stagaire"  >
                  @for($j=0 ;$j<count(App\Http\Controllers\dossierController::search_StgEmptyok());$j++)
                  <option value= {{App\Http\Controllers\dossierController::search_StgEmptyok()[$j][0]['id']}}>{{App\Http\Controllers\dossierController::search_StgEmptyok()[$j][0]['nom']}}  {{App\Http\Controllers\dossierController::search_StgEmptyok()[$j][0]['prenom']}}</option>
                  @endfor
              </select>

                <div class="form-group">
                <input type="hidden" id="id" name="id" value={{ session('hi')['id'] }}></option>
                </div>

                </div>
                    <div class="submit">
                    <button id="submit" type="submit" class="btn btn-primary">Rechercher</button>
                    </div></div>
                </form>
            
        </div>
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
        font-size: 19px;
        border-color: rgb(101, 101, 218);
        padding: 8%;
    }
    .stagaire{
        
        margin-right: 15%;
        float: left;
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

    
    <form action="/searchEencadrant" method="GET">
        @csrf
          <label for="stagaire">stagaire : </label>
          <select class="custom-select mr-sm-2" id="id_stagaire" name="id_stagaire"  >
            @for($j=0 ;$j<count(App\Http\Controllers\dossierController::search_StgEmptyok());$j++)
            <option value= {{App\Http\Controllers\dossierController::search_StgEmptyok()[$j][0]['id']}}>{{App\Http\Controllers\dossierController::search_StgEmptyok()[$j][0]['nom']}}  {{App\Http\Controllers\dossierController::search_StgEmptyok()[$j][0]['prenom']}}</option>
            @endfor
        </select>
        </div>
        <button id="submit" type="submit" class="btn btn-primary">search</button>
    </form>
</body>
</html>


        <div class="form-group">
            <label for="encadrant">encadrant : </label>
            <select class="custom-select mr-sm-2" id="encadrant" name="encadrant"  >
                <option value={{session('info')['1']['0']['id']}}>{{session('info')['1']['0']['nom']}}  {{session('info')['1']['0']['prenom']}}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="encadrant">stagaire : </label>
            <select class="custom-select mr-sm-2" id="encadrant" name="encadrant"  >
                <option value={{session('info')['0']['0']['id']}}>{{session('info')['0']['0']['nom']}}  {{session('info')['0']['0']['prenom']}}</option>
            </select>
        </div>
        <div class="form-group" >
          <br>
       @if (session('ens'))
        @for ( $i=0 ;$i<count({{session('ens')}});$i++)
        @for ( $j=0 ;$j<count({{session('ens')}}[$i]);$j++)
        @for ( $k=0 ;$k<count({{session('ens')}}[$i][$j]);$k++)
        <table class="table">
            <thead> nom
                <tr>
                    <th>  {{session('ens')}}[$i][$j]->nom</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody> prenom
                <tr>
                    <td scope="row"></td>
                    <td>{{ {{session('ens')}}[$i][$j]->prenom}}</td>
                    <td></td>
                </tr>
                <tr>service
                    <td scope="row"></td>
                    <td>{{ {{session('ens')}}[$i][$j]->service}}</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        @endfor
        @endfor
        @endfor
        @endif















        <table class="table table-bordered table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>HOOOOOOOOOOOOO</th>
            </tr>
                
            <tbody>
        @foreach (App\Http\Controllers\dossierController::search_StgEmptyok() as $e)

        @for ($i=0 ;$i<count($e);$i++)
                    
                        <tr>
                            <td scope="row">{{$e[$i]['id']}}</td>
                            <td scope="row">{{$e[$i]['nom']}}</td>
                            <td scope="row">{{$e[$i]['prenom']}}</td>
                            <td scope="row">{{$e[$i]['service']}}</td>
                        </tr>
                   
                    
             
              

        @endfor
         @endforeach
        </tbody>
    </thead>
    </table>
*/



@endphp