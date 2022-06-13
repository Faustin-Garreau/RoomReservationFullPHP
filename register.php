<?php 
    require 'config.php';

    if(!empty($_POST)){
        if((isset($_POST['register_nom']) && !empty($_POST['register_nom'])) &&
            (isset($_POST['register_prenom']) && !empty($_POST['register_prenom'])) &&
            (isset($_POST['register_email']) && !empty($_POST['register_email'])) && 
            (isset($_POST['register_password']) && !empty($_POST['register_password'])) &&    
            (isset($_POST['register_date_de_naissance']) && !empty($_POST['register_date_de_naissance'])) &&
            (isset($_POST['register_telephone']) && !empty($_POST['register_telephone'])) &&
            (isset($_POST['register_nationalite']) && !empty($_POST['register_nationalite']))) {
            
                    $register_nom = $_POST['register_nom'];
                    $register_prenom = $_POST['register_prenom'];
                    $register_email = $_POST['register_email'];
                    $register_password = $_POST['register_password'];
                    $register_date_de_naissance = $_POST['register_date_de_naissance'];
                    $register_telephone = $_POST['register_telephone'];
                    $register_nationalite = $_POST['register_nationalite'];

                    if(filter_var($register_email, FILTER_VALIDATE_EMAIL)) {
                        $_SESSION['erreur'] = 'Veuillez remplir un email correct';
                    }else {
                        var_dump('je suis juste');
                    }

            }else{
                $_SESSION['erreur'] = 'Veuillez remplir tous les champs';
            }
    }        
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
<div class="login">
<h1 class="text-center titre_login mt-11">Créer un compte</h1>
<div class="overflow-hidden flex items-center justify-center">
  <div class="bg-white lg:w-5/12 md:6/12 w-10/12 shadow-3xl">
    <form class="p-12" action="/register.php" method="POST">
    <div class="flex items-center text-lg mb-6">
        <input type="text" id="nom" name="register_nom" class="bg-gray-200 pl-1 py-2 md:py-4 focus:outline-none w-full" placeholder="Nom"/>
      </div>
      <div class="flex items-center text-lg mb-6">
        <input type="text" id="prenom" name="register_prenom" class="bg-gray-200 pl-1 py-2 md:py-4 focus:outline-none w-full" placeholder="Prenom"/>
      </div>
      <div class="flex items-center text-lg mb-6">
        <input type="text" id="email" name="register_email" class="bg-gray-200 pl-1 py-2 md:py-4 focus:outline-none w-full" placeholder="Email"/>
      </div>
      <div class="flex items-center text-lg mb-6">
        <input type="password" id="mot_de_passe" name="register_password" class="bg-gray-200 pl-1 py-2 md:py-4 focus:outline-none w-full" placeholder="Mot de passe" />
      </div>
      <div class="flex items-center text-lg mb-6">
        <input type="date" id="date_de_naissance" name="register_date_de_naissance" class="bg-gray-200 pl-1 py-2 md:py-4 focus:outline-none w-full" placeholder="Date de naissance" />
      </div>
      <div class="flex items-center text-lg mb-6">
        <input type="text" id="telephpne" name="register_telephone" class="bg-gray-200 pl-1 py-2 md:py-4 focus:outline-none w-full" placeholder="Telehpone" />
      </div>
      <div class="flex items-center text-lg mb-6">
        <input type="text" id="nationalite" name="register_nationalite" class="bg-gray-200 pl-1 py-2 md:py-4 focus:outline-none w-full" placeholder="Nationalite" />
      </div>
      <?php if(!empty($_SESSION['erreur'])){?> 
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-3">
            <strong class="font-bold"><?php echo $_SESSION['erreur']; ?></strong>
        </div>
        <?php }?>
      <div class="flex items-center justify-between flex-row-reverse flex-wrap-reverse">
      <button type="submit" class="font-medium p-2 md:p-4 button_register uppercase w-full">Créer un compte</button>
      <a href="index.php" class="font-medium">Deja un compte ? Cliquez ici</button>
      </div>
    </form>
  </div>
 </div>
 </div>
</body>

</html>

<?php $_SESSION['erreur'] = "";  ?>