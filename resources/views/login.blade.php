
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing Page - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container bi-person ">
                <a class="navbar-brand" href="#!">Gestion des staiges</a>  
            </div>
        </nav>
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <h1 class="mb-5">login</h1>
                            <form action="/login" method="POST">
                                @csrf  
                                <div class="row">
                                    <div class="col">
                                    
                                        <input class="form-control form-control-lg" id="email" name="email" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                        <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Email Address is required.</div>
                                        <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email Address Email is not valid.</div>
                                        <div class="row mt-5">
                                    <div class="col">
                                        <input class="form-control form-control-lg" id="password" name="password" type="text" placeholder="password" data-sb-validations="required" />
                                        <div class="invalid-feedback text-white" data-sb-feedback="passwordBelow:required">password is required.</div>
                                        <div class="invalid-feedback text-white" data-sb-feedback="passwordBelow:password">password is not valid.</div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                                <button id="submit" type="submit" class="btn btn-primary mt-3 ">Register</button>
                            </form>
                        </div></div></div></div></header>                    
    </body>
</html>




@php
 /*   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Authentification</title>
</head>
<body>
    
<div class="col-md-5 ">
   <p> try email</p>
    <div class="creation">
            <form action="/login" method="POST">
                @csrf   
                    <div class="form-group" >
                        <label for="email">email : </label>
                        <input class="form-control" id="email" name="email" type="email" required >
                    </div>
                    <div class="form-group" >
                        <label for="passsword">passwd : </label>
                        <input class="form-control" id="password" name="password" type="text"  required>
                        <button id="submit" type="submit" class="btn btn-primary">Register</button>

                    </div>
    </div>
</div>


</body>
</html>

*/
@endphp