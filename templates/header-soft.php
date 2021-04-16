<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cor-Sell</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,400;0,600;0,800;1,400;1,600;1,800&display=swap" rel="stylesheet">
</head>

<body class="body-header-soft">
    <header class="header-header-soft">  <?php if(!empty($_SESSION["user_name"])){?>
            <div class="logout">
               <a href="./logout">Se déconnecter</a>
            </div>
            <?php }else{?>
                <div class="logout-hiden">
               
               </div>
               <?php }?>
        <div class="logo-div-header-soft">
            <a href="./"><img src="assets/img/Cor-Sell_Logo.png" class="logo-header-soft" alt=""></a>
      
            </div>
        <div class="title-header-soft">
            <h1>Cor-Sell</h1>
        </div>
        
    </header>