<h1>Exemple de faille XSS</h1>

<blockquote cite="https://fr.wikipedia.org/wiki/Cross-site_scripting">
  Le cross-site scripting (abrégé XSS), est un type de faille de sécurité des sites web permettant d'injecter du contenu dans une page, permettant ainsi de provoquer des actions sur les navigateurs web visitant la page.
  <br>
  [...]
  <br>
  Il est par exemple possible de rediriger vers un autre site pour du hameçonnage ou encore de voler la session en récupérant les cookies.
  <footer>-- Wikipédia</footer>
</blockquote>


<div>
  <form action="exempleXSS.php" method="post">
    <label>Nom Prénom</label>
    <input type="text" name="nomprenom" value="<script>alert('Et voilà !')</script>">
    <input type="submit" value="Envoyer">
  </form>
</div>
<div>
  <form action="exempleXSS.php" method="post">
    <label>Nom Prénom (sécurisé)</label>
    <input type="text" name="nomprenomsecurise" value="<script>alert('Et voilà !')</script>">
    <input type="submit" value="Envoyer">
  </form>
</div>

<?php

header("X-XSS-Protection: 0"); // Permet d'outrepasser la sécurité XSS des navigateurs

if (isset($_POST['nomprenom'])) {
  echo 'Bonjour ' . $_POST['nomprenom'];
}

if (isset($_POST['nomprenomsecurise'])) {
  echo 'Bonjour ' . htmlspecialchars($_POST['nomprenomsecurise']);
}

?>
