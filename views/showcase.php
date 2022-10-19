<?php
    $sql = "SELECT * FROM gallery WHERE id = " . $id = $_GET['id'];
    $result = $mysqli->query($sql);
?>


<h1>Gallery Image</h1>

<?php           
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        ?> 
            <h2><?php echo $row['name'];?></h2>

            <img class="image" src="<?php echo $row['src'];?>">
        <?php             
        }
        } else {
            printf('No record found.<br />');
        }
    mysqli_free_result($result);
    $mysqli->close();
?>
