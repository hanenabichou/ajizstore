<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AJIZ STORE | Recherche</title>
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><strong>AJIZ STORE</strong></li>
        <li><a href="./index.html">Boutique</a></li>
        <li><a href="#">Admin</a></li>
      </ul>
    </nav>
    <nav>
      <ul>
        <li><a href="#">Inscription</a></li>
        <li><a href="#">Connexion</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <aside>
      <form>
        <div class="top">
          <label>
            <b> Recherche </b>
            <br />
            <input type="search" class="my-10" placeholder="Recherche" style="border-radius: 5px; border: none; padding: 7px" />
          </label>
          <br />

          <b> Trier par prix </b>
          <br />
          <div class="my-10"></div>
          <label>
            <input type="radio" name="tri" value="all" /> Tous les prix <br />
            <div class="my-5"></div>
          </label>
          <label>
            <input type="radio" name="tri" value="800-1000" /> entre 800dt et
            1000dt <br />
            <div class="my-5"></div>
          </label>
          <label>
            <input type="radio" name="tri" value="1000-1500" /> entre 1000dt
            et 1500dt <br />
            <div class="my-5"></div>
          </label>
          <label>
            <input type="radio" name="tri" value="1500-2000" /> entre 1500dt
            et 2000dt <br />
            <div class="my-5"></div>
          </label>
          <label>
            <input type="radio" name="tri" value=">2000" /> plus de 2000dt
            <br />
          </label>
          <br />
          <label>
            <b>Trier par categories</b>
            <br />
            <div class="my-10"></div>
            <a href="#">all</a>
            <br />
            <div class="my-10"></div>
            <a href="#">desktop</a>
            <br />
            <div class="my-10"></div>
            <a href="#">gamer</a>
            <br />
            <div class="my-10"></div>
            <a href="#">autres</a>
          </label>
        </div>
        <div>
          <p>Nombre de resultat : 9</p>
          <input type="reset" value="Supprimer les filtres" style="
                color: #fff;
                background-color: red;
                border-radius: 5px;
                border: none;
              " />
        </div>
      </form>
    </aside>
    <section>
    <?php
    require('./products.php');
    foreach ($products as $product) { ?>
      <article>
          <img src="./images/mac.jpg" />
          <h3><?=$product['name']?></h3>
          <p><?=$product['description']?></p>
          <div class="flex">
            <form>
              <strong>Prix : <?=$product['price']?> TND</strong>
              <button class="btn">Ajouter au panier</button>
            </form>
          </div>
        </article>
    <?php } ?>
    </section>
  </main>
  <footer>
    <p>Copyright Ⓒ - Ajiz Store - 2024</p>
  </footer>
</body>
</html>
