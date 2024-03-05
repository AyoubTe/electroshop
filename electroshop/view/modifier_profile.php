<?php 
    session_start();
    $id = $_SESSION['id'];
    include '../model/compte.php';
    include '../dao/dao_compte.php';
    $dac = new DaoCompte();

    $client = $dac->findAccount($id);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Modifier profil</title>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    .container {
      width: 600px;
      background: #f1f7fe;
      padding: 3em;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      border-radius: 30px;

      box-shadow: 0 0 2em #e6e9f9;
      gap: 2em;

    }

    .container .email {
      background: white;
      box-shadow: 0 0 2em #e6e9f9;
      padding: 1em;
      display: flex;
      flex-direction: column;
      gap: 0.5em;
      border-radius: 20px;
      color: #4d4d4d;
    }

    .container .email input {
      outline: none;
      border: none;
    }

    .container .email input::placeholder {
      color: black;
      font-size: 0.9em;
    }

    .container .email ion-icon {
      color: #4d4d4d;
      margin-bottom: -0.2em;
    }

    * {
      font-family: "Poppins";


    }

    h1 {
      text-align: center;
    }

    form {
      margin-top: 20px;
    }

    .mb-3 {
      margin-bottom: 15px;
    }

    .form-label {
      font-weight: bold;
    }

    .btn {
      width: 100px;
    }

    body {
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      overflow-y: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #dde5f4;
      height: 100vh;
    }

    .container .sinscrire {
      width: 100%;
      padding: 1em;
      background: #00089c;
      color: white;
      border: none;
      border-radius: 30px;
      font-weight: 600;
      transition-duration: 300ms;
    }

    .container .sinscrire:hover {
      background-color: #2a23eb;
      box-shadow: 0px 5px 5px gray;
    }

    .container form p {
      margin-top: 10px;
      font-size: 20px;
      color: #333;
    }

    .container form .error-msg {
      margin: 10px 0;
      display: block;
      background: crimson;
      color: #fff;
      border-radius: 5px;
      font-size: 20px;
      padding: 15px;
    }

    .container form .reu-msg {
      margin: 10px 0;
      display: block;
      background: #4BB543;
      color: #fff;
      border-radius: 5px;
      font-size: 20px;
      padding: 15px;
    }
  </style>
</head>

<body>

  <div class=" container my-4">
    <form action="../controller/compte_controller.php?action=modifier" method="post">
      <h1>
        <center>Modifier profil</center>
      </h1>
      <div class="mb-3">
        <label for="cin" class="form-label">Email</label>
        <div class="input-group">
          <span class="input-group-text"><ion-icon name="mail-outline"></ion-icon></span>
          <input type="email" class="form-control" id="email" name="email" value="<?php echo $client['email']; ?>">
        </div>
      </div>
      <div class="mb-3 row">

        <div class="col">
          <label for="motdepasse" class="form-label">Mot de passe</label>
          <div class="input-group">
            <span class="input-group-text"><ion-icon name="lock-closed-outline"></ion-icon></span>
            <input type="password" class="form-control" id="motdepasse" name="motdepasse" value="<?php echo $client['motDepasse']; ?>">
          </div>
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col">
          <label for="nom" class="form-label">Nom</label>
          <div class="input-group">
            <span class="input-group-text"><ion-icon name="person-outline"></ion-icon></span>
            <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $client['nom']; ?>">
          </div>
        </div>

        <div class="col">
          <label for="prenom" class="form-label">Prénom</label>
          <div class="input-group">
            <span class="input-group-text"><ion-icon name="person-outline"></ion-icon></span>
            <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $client['prenom']; ?>">
          </div>
        </div>
      </div>

      <div class="mb-3 row">
        <div class="col">
          <label for="adresse" class="form-label">Adresse</label>
          <div class="input-group">
            <span class="input-group-text"><ion-icon name="location-outline"></ion-icon></span>
            <input type="text" class="form-control" id="adresse" name="adresse" value="<?php echo $client['adresse']; ?>">
          </div>
        </div>

        <div class="col">
          <label for="telephone" class="form-label">Téléphone</label>
          <div class="input-group">
            <span class="input-group-text"><ion-icon name="call-outline"></ion-icon></span>
            <input type="text" class="form-control" id="telephone" name="telephone" value="<?php echo $client['telephone']; ?>">
          </div>
        </div>
      </div>


      <center>
        <button type="submit" class="sinscrire">Changer</button>
      </center>
    </form>

  </div>

</body>

</html>