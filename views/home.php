<?php
    if( array_key_exists('Url', $_POST) && $_POST['Url']  && array_key_exists('SongName', $_POST) && $_POST['SongName'] && array_key_exists('Genre', $_POST) && $_POST['Genre'] && array_key_exists('Artist', $_POST) && $_POST['Artist'] ) {
        // Security way
        $sql = $mysqli->prepare("INSERT INTO songdatabase (Url, SongName, Genre, Artist) VALUES (?,?,?,?)");
        $sql -> bind_param('ssss', $_POST['Url'], $_POST['SongName'], $_POST['Genre'], $_POST['Artist']);
        $sql -> execute();

        // Old way
        // $sql = "INSERT INTO messages (Fname, Lname, Message) VALUES ('". $_POST['Fname']."' , '". $_POST['Lname']."' , '". $_POST['message']."' )" ;
        // $result = $mysqli->query($sql);
    
        if ($mysqli->errno) {
            printf("Could not insert record into table: %s<br />", $mysqli->error);
        }

        ?>

        <?php
    } ?>


        <form class="input" action="/" method="POST">

            <label>
                Song Url: <input name='Url'>
            </label>
            <label>
                Song name: <input name='SongName'>
            </label>
            <label>
                Artist: <input name='Artist'>
            </label>
            <label>
                Genre: <input name='Genre'>
            </label>

            <button>Submit</button>
            

        </form>
    <?php
    
?>

<?php include 'views/showcase.php';?>


