<!DOCTYPE html>
<html>
	<body>
	<?php
    $clients = array (
	    "Luc", 
	    7 => "Paul", 
	    2 =>"Martin", 
	    "Arnaud"
	  );
    
    $produits = array (
	    20 => "Chemise",
	    3 => "Pantalon",
	    10 => "Jupe",
	    "Veste",
	    "Blouson"
	  );
    
    foreach ($clients as $key => $value) {
      echo "Clef : $key Valeur : $value<br />";
    }
    
    echo "<br>";
    
    foreach ($produits as $key => $value) {
      echo "Clef : $key Valeur : $value<br />";
    }
    
    ?>
	</body>
</html>