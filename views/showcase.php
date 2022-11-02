<?php
   if(array_key_exists('delete', $_GET)){
    $sql = "DELETE FROM songdatabase WHERE ID=" . $_GET['delete'];
    // echo $sql;
    $mysqli->query($sql);
   }

   if(array_key_exists('genre', $_GET)){
       $sql = "SELECT * FROM songdatabase WHERE Genre = '" . $_GET['genre'] . "'";
    //    echo $sql;
       $result = $mysqli->query($sql);  
   } else {
       $sql = "SELECT * FROM songdatabase ";
       //SELECT * (* = all colums) FROM yourdatabase
       $result = $mysqli->query($sql);  
   }

?>

<div class="main">
    <h1>Song Entries:</h1>
    <div class="dropdown">
        <button class="dropbtn">Genres</button>
        <div class="dropdown-content"  method="POST">
                <a href="/?">All</a>
                <a href="/?genre=House">House</a>
                <a href="/?genre=Rap">Rap</a>
                <a href="/?genre=Classical">Classical</a>
                <a href="/?genre=Experimental">Experimental</a>
                <a href="/?genre=Rock">Rock</a>
                <a href="/?genre=Drum-and-Bass">D&B</a>
                <a href="/?genre=Phonk">Phonk</a>
        </div>
    </div>
</div>



<?php       
    $song_number = 1;
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            ?> 
            <!-- //normal html with the specific colums in php as the copy -->
            <div class="song-data">
                <p class="id"><?php echo $song_number;?></p>
                <div class="name">
                    <h2><?php echo $row['SongName'];?></h2>
                    <h3><?php echo $row['Artist'];?></h3>
                </div>
                <p>Genre: <?php echo $row['Genre'];?></p>
                <a href="<?php echo $row['Url'];?>"><?php echo $row['Url'];?></a>
                <a href="/?delete=<?php echo $row['ID'];?>" class="delete">delete</a>
            </div>
        <?php
        $song_number++;             
        }
        } else {
            printf('No record found.<br />');
        }
    mysqli_free_result($result);
    $mysqli->close();
?>


