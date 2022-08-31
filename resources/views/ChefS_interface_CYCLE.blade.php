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
            
                            
                            <div class="alert alert-success">
                                <p><strong> Bienvenu Chef de servcie</strong></p>
                            </div>
                            
        </div>
        
   
        <form action="/cs" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" id="id_cs" name="id_cs" value={{session('id_cs')}}></option> 
                <div class="inputs">
            <div class="encadrant">
                    <label for="encadrant"><strong>encadrant : </strong></label>
                   
                    <select class="custom-select mr-sm-2" id="encadrant" name="encadrant">
                        
                        @for($p=0 ;$p<count(session('hi')[1]);$p++)
                            @for($i=0 ;$i<count(session('hi')[1]);$i++)
                                <option value= {{session('hi')[1][$i]['id']}}>{{session('hi')[1][$i]['nom']}}  {{session('hi')[1][$i]['prenom']}} : {{session('hi')[1][$i]['service']}}</option>
                            @endfor
                        @endfor
                    </select>

                </div>
                <div class="stagaire">
                        <label for="stgaire">stagaire : </label>
                        <select class="custom-select mr-sm-2" id="stagaire" name="stagaire"  >
                            @php
                                $stg=session('hi')[2];
                            @endphp 
                            @for($j=0 ;$j<count($stg);$j++)
                            @for($k=0 ;$k<count($stg[$j]);$k++)
                            <option value= {{$stg[$j][$k]['id']}}>{{$stg[$j][$k]['nom']}}  {{$stg[$j][$k]['prenom']}}</option>
                            @endfor
                            @endfor
                        </select>
                    </div>
                    <div class="submit">
                    <button id="submit" type="submit" class="btn btn-primary">AFFECTER</button>
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
        font-style:oblique;
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
        border-color: rgb(101, 101, 218);
        padding: 7%;
    }
    .stagaire{
        
        margin-right: 15%;
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

    
    <form action="/cs" method="POST">
        @csrf
        @method('PUT')
        
        
        
        <div class="form-group">
            <label for="encadrant">encadrant : </label>
            <select class="custom-select mr-sm-2" id="encadrant" name="encadrant"  >
                @foreach ($es as $e)

                @for ($i=0 ;$i<count($e);$i++)
                <option value= {{$e[$i]['id']}}>{{$e[$i]['nom']}}  {{$e[$i]['prenom']}} : {{$e[$i]['service']}}</option>
                @endfor
                @endforeach
            </select>
        </div>
        <div class="form-group" >
          <br>
        <?php $stg=App\Http\Controllers\dossierController::search_stg()
        ;
       //    dd($stg);
        ?>
          <label for="stagaire">stagaire : </label>
          <select class="custom-select mr-sm-2" id="stagaire" name="stagaire"  >
            @for($j=0 ;$j<count($stg);$j++)
            @for($k=0 ;$k<count($stg[$j]);$k++)
            <option value= {{$stg[$j][$k]['id']}}>{{$stg[$j][$k]['nom']}}  {{$stg[$j][$k]['prenom']}}</option>
            @endfor
            @endfor
        </select>
        </div>
        <button id="submit" type="submit" class="btn btn-primary">Register</button>
    </form>
</body>
</html>

*/
@endphp

@php
    

/*
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
        @foreach ($es as $e)

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