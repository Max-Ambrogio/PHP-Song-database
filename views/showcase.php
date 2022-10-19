<?php 
    include 'views/partials/header.php'; 
    $sql = "SELECT id, src FROM gallery";
    $result = $mysqli->query($sql);
    $id = $_GET['id'];
?>


<h1>Gallery Image</h1>

<?php           
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        ?> 
            <h2><?php echo $row[$id]['name'];?></h2>

            <img src="<?php echo $row[$id]['src'];?>">
        <?php             
        }
        } else {
            printf('No record found.<br />');
        }
    mysqli_free_result($result);
    $mysqli->close();
?>
