
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
            <a class="navbar-brand" href="#!"><h1><strong> GESTION DES STAGE </strong><h1></a>
                <div class=" pull-right btn btn-outline-dark">
                    <a  href="/"> <div class="text-success "><h5><strong> DECONECTER </strong></h5></div></a>
                </div>
                <div class="row"></div>  
        </div>
    </nav>


    <header class="mt-6" >
        <div class="user">


                        @if (session('hi'))
                        @if (session('hi')[0])
                             @if (session('hi')[0][0])
                            <div class="alert alert-success">
                                {{ session('hi')[0][0] }}

                                <br>
                                <div class=" text-success pull-right mb-1  ">
                                 <ul>
                                    <li><a href="#numero">editer_info  </a></li>
                                    <li><a href="#Gpdf">  attestation du stage </a></li>
                                 </ul>
                            
                                 <style>
                                    ul li{
                                        display: inline;
                                        text-decoration: none;
                                        list-style:none;
                                        margin-left: 15px;
                                    }
                                 </style>
                                 <br>
                                </div>
                                <br>
                            </div>
                            @endif
                            @endif
                            @endif
                           
        </div>

        
        <div class="inputs">
            
            <form action="/identifiants" method="POST">
                
                @csrf
                @method('PUT')
                <h2  ><strong>QUELQUE INFORMATIONS A PROPOS LE STAGAIRE : </strong></h2>
                <table>
               
                
                    <tr>
                        <div class="input">
                        <td><label for="id_stagaire"><strong>Nom complet  : </strong></label></td>
                        <td><select class="custom-select mr-sm-2" id="id_stagaire" name="id_stagaire">

                            @for ($k=0;$k<count(session('hi')[1]);$k++)
                            
                            <option value={{ session('hi')[1][$k]['id'] }}>{{session('hi')[1][$k]['nom']}} {{session('hi')[1][$k]['prenom']}}</option>
                            @endfor
                        </select></td></div>
                    </tr>
                </div>
                
                    <tr>
                        <div class="input">
                        <td><label for="CIN"><strong>CIN : </strong></label></td>  
                        <td><input id="CIN" name="CIN" type="text" size="80%" required></td>  
                    </div>  
                    </tr>
                
                <div class="input">
                    <tr>
                        <td><label for="addresse"><strong>addresse : </strong></label></td>  
                        <td><input id="addresse" name="addresse" type="text" size="80%" required></td>  
                </tr>
                </div>
                <div class="input">
                    <tr>
                        <td><label for="date_prevue_du_stage"><strong>date_prevue_du_stage : </strong></label></td>  
                        <td><input id="date_prevue_du_stage" name="date_prevue_du_stage" type="date" size="80%" required></td>  
                </tr>
                </div>
                <div class="input">
                    <tr>
                        <td><label for="specialite"><strong>specialite : </strong></label></td>  
                        <td><input id="specialite" name="specialite" type="text" size="80%" required></td>  
                </tr>
                </div>
                <div class="input">
                    <tr>
                        <td><label for="niveau"><strong>niveau d'étude : </strong></label></td>  
                        <td><input id="niveau" name="niveau" type="text" size="80%" required></td>  
                </tr>
                </div> 
                <div class="input">
                    <tr>
                        <td><label for="id_service"><strong>id_service : </strong></label><td>
                        <select class="custom-select mr-sm-2" id="id_service" name="id_service">
                            <option value="serssi">serssi </option>
                            <option value="sbdps">sbdps</option>
                            <option value="sdmpcr"> sdmpcr </option>
                            <option value="sdos"> sdos </option>
                            <option value="sdai"> sdai </option>
                            <option value="sqnvt"> sqnvt </option> </select></td>
                    </tr>
                </div>
                <div class="input">
                    <tr>
                        <td><label for="gmail"><strong>gmail : </strong></label></td>  
                        <td><input id="gmail" name="gmail" type="email" size="80%" required></td>  
                </tr>
                </div>
                <div class="input">
                    <tr>
                        <td><label for="tel"><strong>tel : </strong></label></td>  
                        <td><input id="tel" name="tel" type="tel" size="80%" required></td>  
                </tr>
                </div>
                <div class="input">
                    <tr>
                        <td><label for="etablissement"><strong>etablissement : </strong></label></td>  
                        <td><input id="etablissement" name="etablissement" type="text" size="80%" required></td>  
                </tr>
                </div>
                <tr>
                <td><button id="submit" type="submit" class="btn btn-primary">Register</button></td>
                </tr>
                </table>
        </div>        
        <div class="form-group">
            @php
            
                
           
                $id_cgm=session('hi')[0][1]['id'] ;
                
                
            @endphp

           
           
            
           @if (session('hi')[0]!=null)

            <input type="hidden" id="id_cgm" name="id_cgm" value={{$id_cgm}} ></option> 
         
            @endif
           
          
        </div>
                
                    
                   

                </form>
        </div>
        <div id ="Gpdf">
            <h2><strong>GENERER L'ATTESTATION DU STAGE : </strong></h2>
        </div>
        <div class="inputs">
            <form action="/pdf" method="post">
            @csrf
            <label for="id_stg"><strong>générer l'attestation du stage  : </strong></label>
            @php
            $stgs=App\Http\Controllers\dossierController::pdf_stg()                       
            @endphp
            <select class="custom-select mr-sm-2" id="id_stg" name="id_stg">

                        @for ($k=0;$k<count($stgs);$k++)    
                         <option value={{ $stgs[$k]['id'] }}>{{$stgs[$k]['nom']}} {{$stgs[$k]['prenom']}}
                        </option>   
                         @endfor
                    </select>
                    
            <input type="hidden" id="id_cgm" name="id_cgm" value={{ session('hi')[0][1]['id'] }}></option>
            <button id="submit" type="submit" class="btn btn-primary">pdf</button>
            </form>

        </div>
        <div id ="editerD">
            <h2><strong>EDITER UN DOSSIER DE STAGE : </strong></h2>
        </div>
        <div class="inputs">

        <form action="/etat" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group" >
                <label for="numero">numero : </label>
                <input class="form-control" id="numero" name="numero" type="text" required >
            </div>
            <div class="form-group" >
                <label for="etat">Etat : </label>
                <input class="form-control" id="etat" name="etat" type="text" required >
            </div>
            <div class="form-group" >
                <label for="theme">theme : </label>
                <input class="form-control" id="theme" name="theme" type="text" required >
            </div>
            <div class="form-group" >
                <label for="dateF">date de fin : </label>
                <input class="form-control" id="dateF" name="dateF" type="date" required >
            </div>
            <button id="submit" type="submit" class="btn btn-primary">Register</button>
       
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
    .items{
        margin-bottom: 5%;
    }
    .inputs{
        height: 45%;
        width: 100%;
        border-style: dashed;
        border: 1%;
        border-color: rgb(101, 101, 218);
        padding: 8%;
        margin-bottom: 15%;
    }
    .input{
        margin-bottom: 15%;

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
        float: right;
        padding-left:75%; 
    }




</style>

</html>




@php
    
/*
<ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
      id="ex1-tab-1"
      data-mdb-toggle="tab"
      href="#ex1-tabs-1"
      role="tab"
      aria-controls="ex1-tabs-1"
      aria-selected="true"
      >Tab 1</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-2"
      data-mdb-toggle="tab"
      href="#ex1-tabs-2"
      role="tab"
      aria-controls="ex1-tabs-2"
      aria-selected="false"
      >Tab 2</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-3"
      data-mdb-toggle="tab"
      href="#ex1-tabs-3"
      role="tab"
      aria-controls="ex1-tabs-3"
      aria-selected="false"
      >Tab 3</a
    >
  </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex1-content">
  <div
    class="tab-pane fade show active"
    id="ex1-tabs-1"
    role="tabpanel"
    aria-labelledby="ex1-tab-1"
  >
    Tab 1 content
  </div>
  <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
    Tab 2 content
  </div>
  <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
    Tab 3 content
  </div>
</div>
<!-- Tabs content -->


*/


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
    
    @if (session('hi'))
    <div class="alert alert-success">
        {{ session('hi')[0] }}
    </div>
    @endif
    <form action="/identifiants" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group" >
            <label for="nom">nom : </label>
            <input class="form-control" id="nom" name="nom" type="text" required >
        </div>
        <div class="form-group" >
            <label for="prenom">prenom: </label>
            <input class="form-control" id="prenom" name="prenom" type="text"  required>
        </div>
        <div class="form-group" >
            <label for="CIN">CIN : </label>
            <input class="form-control" id="CIN" name="CIN" type="text" required >
        </div>
        <div class="form-group" >
            <label for="addresse">Address: </label>
            <input class="form-control" id="addresse" name="addresse" type="text" required >
        </div>
        <div class="form-group" >
            <label for="gmail">email : </label>
            <input class="form-control" id="gmail" name="gmail" type="email" required >
        </div>
        <div class="form-group" >
            <label for="tel">tel : </label>
            <input class="form-control" id="tel" name="tel" type="tel" required >
        </div>
        <div class="form-group" >
            <label for="etablissement">Etablissment : </label>
            <input class="form-control" id="etablissement" name="etablissement" type="text" required >
        </div>        
        <div class="form-group">
                <input type="hidden" id="id_cgm" name="id_cgm" value={{ session('hi')[1]['id'] }}></option>
        </div>

        <button id="submit" type="submit" class="btn btn-primary">Register</button>
    </form>
<br>
    <form action="/etat" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group" >
            <label for="numero">numero : </label>
            <input class="form-control" id="numero" name="numero" type="text" required >
        </div>
        <div class="form-group" >
            <label for="etat">Etat : </label>
            <input class="form-control" id="etat" name="etat" type="text" required >
        </div>
        <button id="submit" type="submit" class="btn btn-primary">Register</button>
   
    </form>    

</body>
</html>
*/
@endphp