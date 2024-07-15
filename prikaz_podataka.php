<style>
<?php include 'style.css'; ?>
</style>

<?php
    include("db_connect.php");
    $query1 = "SELECT * FROM form1";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "SELECT * FROM form2";
    $result2 = mysqli_query($conn, $query2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz podataka</title>
</head>
<body>
    <h3>Općeniti upit</h3>
    <table>
        <tr>
            <td>ID</td>
            <td>Ime i prezime</td>
            <td>E-mail</td>
            <td>Upit</td>
        </tr>
        <tr>
            <?php
                while($row=mysqli_fetch_assoc($result1)){
                    ?>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["imeiprezime"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["upit"]; ?></td>
                </tr>
                <?php
                }
            ?>
        
    </table>
    <h3>Narudžba</h3>
    <table>
        <tr>
            <td>ID</td>
            <td>Ime i prezime</td>
            <td>E-mail</td>
            <td>Adresa</td>
            <td>OIB</td>
            <td>Odabir paketa</td>
            <td>Napomena</td>
        </tr>
        <tr>
            <?php
                while($row=mysqli_fetch_assoc($result2)){
                    ?>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["imeiprezime"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["adresa"]; ?></td>
                    <td><?php echo $row["oib"]; ?></td>
                    <td><?php echo $row["odabirpaketa"]; ?></td>
                    <td><?php echo $row["napomena"]; ?></td>
                </tr>
                <?php
                }
            ?>
    </table>
</body>
</html>