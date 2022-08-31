<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="col-md-9">
    <div class="creation">
            <form action="/register" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="nom">nom : </label>
                        <input class="form-control" id="nom" name="nom" type="text" required >
                    </div>
                    <div class="form-group">
                        <label for="prenom">prenom : </label>
                        <input class="form-control" id="prenom" name="prenom" type="text"  required>
                    </div>
                    <div class="form-group">
                        <label for="password">password : </label>
                        <input class="form-control" id="password" name="password" type="text" required >
                    </div>
                    <div class="form-group">
                        <label for="email">email : </label>
                        <input class="form-control" id="email" name="email" type="email" required>
                    </div>
                    <div class="form-group">
                        <label for="tel">tel : </label>
                        <input class="form-control" id="tel" name="tel" type="tel" required >
                    </div>
                    <div class="form-group">
                        <label for="profile">profile : </label>
                        <select class="custom-select mr-sm-2" id="profile" name="profile" type="text" required >
                            <option value="CGM">CGM</option>
                            <option value="BDO">BDO</option>
                            <option value="CS">CS</option>
                            <option value="CD">CD</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </form>        
    </div>                              
</div>
</body>
</html>