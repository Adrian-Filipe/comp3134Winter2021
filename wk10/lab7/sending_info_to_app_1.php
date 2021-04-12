<?php
if ($_GET["q"] != "") {
    echo $_GET["q"];
}

echo "
<form method=\"get\">
 <input name=\"q\" placeholder=\"Enter Text\">
 <br/>
 <input type=\"submit\" value=\"Go\">
</form>";
?>