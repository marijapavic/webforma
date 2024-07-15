<style>
    <?php include 'style.css'; ?>
</style>

<?php 
    include("db_connect.php");
    include("header.html");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web forma</title>
</head>
<body>
    <div class="buttons">
      <button id="btn1">OPĆENITI UPIT</button>
      <button id="btn2">NARUDŽBA</button>
    </div>
    <form style="display: none;" id="form1" class="form" action="index.php" method="post">
        <input type="text" name="imeiprezime" placeholder="Ime i Prezime" required/>
        <input type="text" name="email" placeholder="E-mail" required/>
        <input type="text" name="upit" placeholder="Upit" required/>
        <input class="submit-btn" type="submit" name="submit1" value="Pošalji" />
    </form>
    <form style="display: none;" id="form2" class="form" action="index.php" method="post">
        <input type="text" name="imeiprezime" placeholder="Ime i Prezime" required/>
        <input type="text" name="email" placeholder="E-mail" required/>
        <input type="text" name="adresa" placeholder="Adresa" required/>
        <input type="number" name="oib" placeholder="OIB" required/>
        <select  name="odabirpaketa">
        <option>Odabir paketa</option>
            <?php
            $options = array("Paket 1", "Paket 2", "Paket 3");
            foreach($options as $option){
                echo "<option value='$option'>$option</option>";
            }
            ?>
        </select>
        <input type="text" name="napomena" placeholder="Napomena" required/>
        <input class="submit-btn" type="submit" name="submit2" value="Pošalji" />
      </form>
      <script src="index.js"></script>
</body>
</html>

<?php     
    if(isset($_POST["submit1"])){
        $imeiprezime = $_POST["imeiprezime"];
        $email = $_POST["email"];
        $upit = $_POST["upit"];
        $query = mysqli_query($conn, "INSERT INTO form1(imeiprezime, email, upit) VALUES('$imeiprezime', '$email', '$upit')");

        if($query){
            echo "<h3>Upit poslan</h3>";
        }else{
            echo "<h3>Dogodila se greška</h3>";
        }
    }

    if(isset($_POST["submit2"])){
        $imeiprezime = $_POST["imeiprezime"];
        $email = $_POST["email"];
        $adresa = $_POST["adresa"];
        $oib = $_POST["oib"];
        $odabirpaketa = $_POST["odabirpaketa"];
        $napomena = $_POST["napomena"];
        $query = mysqli_query($conn, "INSERT INTO form2(imeiprezime, email, adresa, oib, odabirpaketa, napomena) VALUES('$imeiprezime', '$email', '$adresa', '$oib', '$odabirpaketa', '$napomena')");
                
        if($query){
            echo "<h3>Narudžba poslana</h3>";
        }else{
            echo "<h3>Dogodila se greška</h3>";
        }
    }
?>