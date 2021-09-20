<div>
  <?php
/* foreach ($_POST as $klucz => $wartosc)
      echo "$klucz => $wartosc <br>"; */
  foreach ($_GET as $klucz => $wartosc)
      echo "$klucz => $wartosc <br>";

      $i= 0;
    /*  while ($i<10)
      {
          ++$i;
          echo "$i <br>";
      } */

      for ($i= 0; $i<10; $i++) {
        $i++;
        echo "$i <br>";
        $i++;
      }
        echo "<br>to juz jest koniec";
   ?>
</div>
