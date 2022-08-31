
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
    <script type="text/javascript" src="CheminRelatifVersLeFichierjQuery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body >   
    <nav class="navbar navbar-light bg-light static-top">
        <div class="title">
            <a class="navbar-brand" href="#!"><strong> GESTION DES STAGE </strong></a>  
            <div class=" pull-right btn btn-outline-dark">
                <a  href="/"> <div class=" text-success "><h5><strong> DECONECTER </strong></h5></div></a>
            </div>
            <div class="row"></div> 
        </div>
    </nav>
 
    <header class="mt-6" >
        <form action="/sendok" method="GET">
            @csrf
            @method('PUT')
           @php
          // dd(session());
           
            $id_cd=session('details');
                if(session('details')==null)
                    {
                        

                        $id_cd=session('someDetails')['id'];
                    }
                else{
                  
                    if(session('id_cd')!=null)
                    {
                       
                        $id_cd=session('id_cd');
                        
                    }
                    
                    else{
                        $id_cd=session('details')[2];
                    }

                   
                }
                
                    
           @endphp
            <input type="hidden" id="id" name="id" value={{$id_cd}}>

                <div class="inputs">
                    <div class="stagaire">
                    <label for="stagaire">stagaire : </label>
                    <select class="custom-select mr-sm-1" id="stagaire" name="stagaire"  >
                      @for($j=0 ;$j<2;$j++)
                      <option value= {{session('details')[0][0]['id']}}>{{session('details')[0][0]['nom']}}  {{session('details')[0][0]['prenom']}}</option>
                      @endfor
          
                  </select>
                    </div>
                    <div class="encadrant">
                  <label for="encadrant">encadrant : </label>
                  <select class="custom-select mr-sm-1" id="encadrant" name="encadrant"  >
                    @for($j=0 ;$j<2;$j++)
                    <option  value= 'ok_enc'>{{session('details')[1][0]['nom']}}  {{session('details')[1][0]['prenom']}}</option>
                    @endfor
                </select>
                    </div>
                    <div class="submit">
                    <button id="submit" type="submit" class="btn btn-primary">ok</button>
                    </div></div>
                </form>
        </div>
        @php
        $service=session('details')[1][0]['service'];
        if($service=="sbdps") {
            $service="service de base de données et des plateformes statistiques";
        }
        if ($service=="sdmpcr") {
            $service="service de la diffusion multicanal et des platformes collaboratives et régionales";
        }
        if ($service=="serssi") {
            $service="service des équipement , des réseaux et de la sécurité des systémes d'information";
        }
        if ($service=="sdai") {
            $service="services de développement des applications informatique";
        }
        if ($service=="sdos") {
            $service="service de la dégitalisation des opérations statistiques";
        }
                if ($service=="sdos") {
            $service="service de la dégitalisation des opérations statistiques";
        }
        if ($service=="sdos") {
            $service="sqnvt";
        }
        @endphp
        <div id="infomations" >
        
            <table>
            <tr>
                <td><h3><strong>nom  </strong></h3></td>
                <td><h3><strong>{{": ".session('details')[0][0]['nom']}}</strong></h3></td>
            </tr>
            <tr>
                <td><h3><strong>prenom  </strong></h3></td>
                <td><h3><strong>{{": ".session('details')[0][0]['prenom']}}</strong></h3></td>
            </tr>   
            <tr>
                <td><h3><strong>specialité  </strong></h3></td>
                <td><h3><strong>{{": ".session('details')[0][0]['specialite']}}</strong></h3></td>
            </tr>
            <tr>
                <td><h3><strong>niveau d'étude  </strong></h3></td>
                <td><h3><strong>{{": ".session('details')[0][0]['niveau']}}</strong></h3></td>
            </tr>
            <tr>
                <td><h3><strong>établissement  </strong></h3></td>
                <td><h3><strong>{{": ".session('details')[0][0]['etablissement']}}</strong></h3></td>
            </tr>
            <tr>
                <td><h3><strong>service  </strong></h3></td>
                <td><h3><strong>{{": ".$service}}</strong></h3></td>
            </tr>
        </table>
        </div>
       

    </header>
        <script>
        $("#infomations").hide();
        $(document).ready(function(){
            $("#button").click(function(){
                $("#infomations").show("#infomations");
                $('html, body').animate({
                                        scrollTop: $("#infomations").offset().top
                                                }, 2000);
                
                                        });
                                    });
        
        </script>
<button  class="btn btn-primary" id="button">details</button>


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
        font-family:Arial, Helvetica, sans-serif;
        font-size: 18px;
        border: 1%;
        border-color: rgb(101, 101, 218);
        padding: 8%;
        margin-bottom: 10%;
    }
    .encadrant{
        float: right;
    }

    .stagaire{
        
       

        float: left;
    }


    .submit{
        padding-top: 10%;
        padding-left:45%; 
    }
    #button{
        margin-left: 46%;
        margin-bottom: 5%;
    }
    #infomations{
        padding: 7%;
        height: 100%;
        width: 100%;
        background-color: rgb(200, 198, 198);
        border: 5px solid transparent;
        border-image: 16 repeating-linear-gradient(-45deg, red 0, red 1em, transparent 0, transparent 2em,#58a 0, #58a 3em, transparent 0, transparent 4em);
        margin-bottom: 5%;
    }


</style>



</html>




@php
    

/*
background-image:  url("../assets/option2.jpg");
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
    <form action="/sendok" method="GET">
        @csrf
          <label for="stagaire">stagaire : </label>
          <select class="custom-select mr-sm-2" id="stagaire" name="stagaire"  >
            @for($j=0 ;$j<2;$j++)
            <option value= {{session('details')[0][0]['id']}}>{{session('details')[0][0]['nom']}}  {{session('details')[0][0]['prenom']}}</option>
            @endfor

        </select>
        <label for="encadrant">encadrant : </label>
        <select class="custom-select mr-sm-2" id="encadrant" name="encadrant"  >
          @for($j=0 ;$j<2;$j++)
          <option value= 'ok_enc'>{{session('details')[1][0]['nom']}}  {{session('details')[1][0]['prenom']}}</option>
          @endfor
      </select>
        </div>
        <button id="submit" type="submit" class="btn btn-primary">search</button>
    </form>
</body>
</html>
*/
@endphp
<?php 
/*
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
?>