<?php
include ('nav.php');
$sql = "SELECT * from evenimente inner join oportunities on organizatori=nume"; //INNER JOIN
$sql = "SELECT denumire from admin inner join evenimente on organizatori=denumire";
$sql = "SELECT * from admin inner join oportunities on denumire=nume";
?>

<table border="1" id="table">
    <th>Data</th>
    <th>Eveniment</th>
    <th>Organizatori</th>
    <th>Link inscriere</th>
    <tr>
        <td>27-28.05.2023</td>
        <td>Maratonul Internațional Sibiu</td>
        <td>Fundația Comunitară Sibiu</td>
        <td><a href= "https://maratonsibiu.ro/inscriere-alergator/" target="_blank">🔗</a></td>
    </tr>
    <tr>
        <td>23.06-02.07.2023</td>
        <td>FITS-Festivalul Internațional de Teatru Sibiu</td>
        <td>Teatrul Național Radu Stanca</td>
        <td><a href="https://www.sibfest.ro/ro/newses/yfdxvf9vcd_elw" target="_blank">🔗</a></td>
    </tr>
    <tr>
        <td>momentan nespecificată</td>
        <td>Astra Film Festival</td>
        <td>Astra Film, CNM Astra, Fundația Astra Film</td>
        <td><a href="https://docs.google.com/forms/d/e/1FAIpQLSfKtNhh1eO1yVjc4F6VAZO9lW1e6QRJKuVOuyDnByuWM16oXg/viewform" target="_blank">🔗</a></td>
    </tr>
    <tr>
        <td>momentan nespecificată</td>
        <td>SISAF-Sibiu International Street Art Festival</td>
        <td>Art Factoru Transilvania</td>
        <td><a href="https://www.facebook.com/SibiuInternationalStreetARTFestival/" target="_blank">🔗</a></td>
    </tr>
    </table>
<p>Formular de adaugare, actualizare sau stergere evenimente:</p>
    <table>
<form action= "index.php" method= "GET">
<tr>
<th>Data:<td><input type="date" name="data"></th></td></tr>
<th>Eveniment:<td><input type="text" name="eveniment"></th></td></tr>
<th>Organizatori:<td><input type="text" name="organizatori"></th></td></tr>
<th>Link inscriere:<td><input type="text" name="link"></th></td></tr>
<tr>
<td><input type="submit" name="submit" value="stergere"></td></tr>
<td><input type="submit" name="submit" value="adaugare"></td></tr>
<td><input type="submit" name="submit" value="actualizare"></td></tr>
</form>
</tr>
</table>
    </body>
    </html>