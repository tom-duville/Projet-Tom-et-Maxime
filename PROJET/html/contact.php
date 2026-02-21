<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ELITE - Salle de Musculation Premium</title>
  <link rel="stylesheet" href="../css/contact.css">
</head>
<body>

  <header>
    <div class="logo"><i class="fas fa-dumbbell"></i> ELITE</div>

    <nav class="nav-centre">
      <ul>
        <li><a href="accueil.html">ACCUEIL</a></li>
        <li><a href="apropos.html">À PROPOS</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="equipement.html">EQUIPEMENT</a></li>
        <li><a href="inscription.html">INSCRIPTION</a></li>
      </ul>
    </nav>

    <a href="#" class="btn-red">ESSAI GRATUIT</a>
    <div class="menu">☰</div>
  </header>

  <section class="contact">
    <h1>contactez-nous</h1>
    <h2>PARLONS DE VOS <span>OBJECTIFS</span></h2>
    <p>Une question ? Envie d'un essai gratuit ?<br>Notre équipe est à votre service</p>
  </section>

  <section class="formulaire">
    <div class="formulaire-gauche">

      <form class="contact" method="POST" id="contactForm">

        <input type="text" name="nom" placeholder="Nom prenom" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="tel" name="telephone" placeholder="Téléphone" required>

        <select required>
          <option value="essai">Essai gratuit</option>
          <option value="question">Question sur les abonnements</option>
          <option value="autre">Autre</option>
        </select>

        <textarea placeholder="Votre message" required></textarea>

        <button type="submit">Envoyer</button>

        <p id="messageConfirmation" style="display:none; color:lime; margin-top:10px;">
          Message envoyé
        </p>

      </form>
    </div>
  </section>

  <section>
    <p><strong>Adresse : </strong><br>rue eliteMuscu</p>
    <p><strong>Téléphone : </strong><br>01 01 01 01 01</p>
    <p><strong>Email : </strong><br>contact@elite-muscu.fr</p>
    <p><strong>Horaires : </strong><br>Lundi-vendredi : 6h-23h<br>Samedi : 8h-22h<br>dimanche : 9h-17h</p>
  </section>

  <section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9999999999995!2d2.292292615674998!3d48.85837007928795!2m3!1f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66efc8b9b9b9%3A0x123456789abcdef0!2sTour%20Eiffel%2C%20Champ%20de%20Mars%2C%2075007%20Paris%2C%20France!5e0!3m2!1sen!2sus!4v1610000000000"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </section>

  <footer>
    <section class="Elite">
      <h4>ELITE</h4>
      <div class="musculation">
        <p>la salle de musculation numéro 1 en France.</p>
      </div>
    </section>

    <div class="lien">
      <h4>suivez nous</h4>
    </div>

    <div class="contact">
      <h4>Contact</h4>
      <ul>
        <li>01 01 01 01 01</li>
        <li>contact@elite-muscu.fr</li>
      </ul>
    </div>

    <p>projet web réalisé par Maxime et Tom</p>
  </footer>

<script src="../javascript/contact.js"></script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nom = $_POST["nom"];
  $email = $_POST["email"];
  $telephone = $_POST["telephone"];

  file_put_contents(
    "../media/json/contact.txt", 
    "Nom: $nom | Email: $email | Téléphone: $telephone\n",
    FILE_APPEND
  );

  echo "<p style='color:green; text-align:center;'>Informations enregistrées</p>";
}
?>

</body>
</html>