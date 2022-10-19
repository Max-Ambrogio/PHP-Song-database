<?php
    if( array_key_exists('Fname', $_POST) && $_POST['Fname']  && array_key_exists('Lname', $_POST) && $_POST['Lname'] && array_key_exists('message', $_POST) && $_POST['message'] ) {
        // Security way
        $sql = $mysqli->prepare("INSERT INTO messages (Fname, Lname, Message) VALUES (?,?,?)");
        $sql -> bind_param('sss', $_POST['Fname'], $_POST['Lname'], $_POST['message']);
        $sql -> execute();

        // Old way
        // $sql = "INSERT INTO messages (Fname, Lname, Message) VALUES ('". $_POST['Fname']."' , '". $_POST['Lname']."' , '". $_POST['message']."' )" ;
        // $result = $mysqli->query($sql);
    
        if ($mysqli->errno) {
            printf("Could not insert record into table: %s<br />", $mysqli->error);
        }

        ?>
        <p>Thanks for Submitting </p>
        <?php
    } else { ?>

        <form action="/" method="POST">

            <label>
                First Name: <input name='Fname'>
            </label>
            <label>
                Last Name: <input name='Lname'>
            </label>
            <label>
                Message: <input name='message'>
            </label>

            <button>Submit</button>

        </form>

    <?php
    }
?>


