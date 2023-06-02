<?php include ('index.php');

$host = "localhost";
$username = "root";
$password = "";
$database = "voluntariat";
$con = mysqli_connect($host,$username,$password,$database);

if(ISSET($_POST["submit1"]) && !empty($_POST["nume"])){
    $nume = $_POST["nume"];
    $responsabilitati = $_POST["responsabilitati"];
    $link =  $_POST["link"];
    $sql_update = "UPDATE oportunities SET nume='$nume', responsabilitati='$responsabilitati', link='$link' WHERE nume='$nume'";
    if(mysqli_query($con, $sql_update)){
        echo '<script>alert("S-a actualizat cu succes!");</script>';
    } // UPDATE
} // SUBMIT
elseif(ISSET($_POST['submit2'])){
    $nume = $_POST["nume"];
    $sql_delete = "DELETE FROM oportunities WHERE nume=$nume";
    if(mysqli_query($con, $sql_delete)){
        echo '<script>alert("S-a sters cu succes!");</script>';
    } // DELETE
} 
else {
    $sql_insert = "INSERT INTO oportunities (nume, responsabilitati, link)
VALUES ('Fundatia Comunitara Sibiu', 'aducerea de impact in comunitate', 'https://fundatiacomunitarasibiu.ro/')";
} // INSERT

?>

<table border="1">
    <th>Organizația</th>
    <th>Responsabilități/Scop</th>
    <th>Link inscriere</th>
    <tr>
        <td>Muzeul Astra Sibiu</td>
        <td>voluntar pentru proiectele Muzeului Astra</td>
        <td><a href="https://muzeulastra.ro/implica-te/" target="_blank">🔗</a></td>
    </tr>
    <tr>
        <td>Crucea Roșie Sibiu</td>
        <td>voluntar în cadrul Mișcării de Cruce Roșie și Semiluna Roșie</td>
        <td><a href="https://www.crucearosiesibiu.ro/inscriere-voluntariat/" target="_blank">🔗</a></td>
    </tr>
    <tr>
        <td>Asociația Cavalerii Turnului Înclinat</td>
        <td>voluntar pentru proiectele asociației</td>
        <td><a href="https://docs.google.com/forms/d/e/1FAIpQLSfZz5Lp5q_vRBudPAGZW132DXSO1bpObjqEwg47PwoTj9fdtg/closedform" target="_blank">🔗</a></td>
    </tr>
    <tr>
        <td>Asociația De Poveste</td>
        <td>Petrecerea timpului într-un centru de plasament alături de tinerii de acolo.</td>
        <td><a href="https://docs.google.com/forms/d/e/1FAIpQLSfX51MjNV5gQusBe18otHHDpKVkuLGty6FGlS07CW9kzhWgGA/viewform" target="_blank">🔗</a></td>
    </tr>
    </br>
    </table>
<br>
    <form action= "oportunities.php" method= "POST">
Organizatie:<input type="text" name="nume">
<br/>
Responsabilitati:<input type="text" name="res">
<br/>
Link inscriere:<input type="message" name="link">
<br>
<input type="submit" name="submit0" value="adauga">
<input type="submit" name="submit1" value="actualizeaza">
<input type="submit" name="submit2" value="stergere">

<br>
    </form>
    </body>
    </html> 