<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Google FAQ - Replica</title>
    <link rel="stylesheet" href="css/style.css">
    <?php require_once "db.php" ?>
    <?php $faqinput = $_GET['faq'];  ?>
  </head>

  <body>
    <header>
      <div class="navbar">
        <div class="logo">
          <a href="#"> <img src="logo.png" alt="google"> <p>Privacy e Termini</p> </a>
        </div>
        <div class="nav-menu">
          <div class="menu-sx">
            <ul>
              <li>
                <a href="#">Introduzione</a>
              </li>
              <li>
                <a href="#">Norme sulla privacy</a>
              </li>
              <li>
                <a href="#">Termini di servizio</a>
              </li>
              <li>
                <a href="#">Tecnologie</a>
              </li>
              <li class="selected">
                <a class="selected-a" href="#">Domande frequenti</a>
              </li>
            </ul>
          </div>
          <div class="menu-dx">
            <a href="#">Account Google</a>
          </div>
        </div>
      </div>
      <div class="numero">
        <h2>
          <?php
            echo "Numero FAQ: " . count($faqArray);
           ?>
        </h2>
      </div>
    </header>

    <main>
      <?php

        function printFaq($elemento){

            echo '<h2>' . $elemento['question'] . '</h2>';
            echo '<p>' . $elemento['answer'] . '</p>';
        }
       ?>
      <div class="container">
        <?php

          foreach ($faqArray as $key => $singlefaq) {
            $key++;
            if ($key == $faqinput) {
              printFaq($singlefaq);
              break;
            }elseif(
              ($faqinput == 0)
              || ($faqinput > count($faqArray))
             ) {
              printFaq($singlefaq);
            }
          }
          ?>
      </div>
    </main>
    <footer>
      <div class="container-footer">
        <div class="footer-sx">
          <ul>
            <li>
              <a href="#">Google</a>
            </li>
            <li>
              <a href="#">Tutto su Google</a>
            </li>
            <li>
              <a href="#">Privacy</a>
            </li>
            <li>
              <a href="#">Termini</a>
            </li>
          </ul>
        </div>
        <div class="footer-dx">
          <div class="container-foot-dx">
            <img src="img/logo.png" alt="">
            <select class="lingua" name="Italiano">
              <option value="it">Italiano</option>
                <option value="de">Deutsch</option>
                  <option value="en">English</option>
                    <option value="fr">Français</option>
            </select>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
