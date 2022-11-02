<?php
        
         $sql = "SELECT * FROM songdatabase"; //select all the columns from gallery database
        //  $sql = "SELECT id, src, thumbnail, name FROM gallery"; //select all the columns from gallery database
		 
         $result = $mysqli->query($sql);
      ?>
      <ul class="grid-data">
         <?php
         if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            //    printf(
            //     "id: %s, src: %s, thumbnail: %s, name: %d <br />", 
            //     //   $row["id"], 
            //     //   $row["src"], 
            //     //   $row["thumbnail"],
            //     //   $row["name"]); 
            ?> 
               <li>
                     <p><?php echo $row['Url']?></p>
               </li>
               <li>
                     <p><?php echo $row['SongName']?></p>
               </li>
               <li>
                     <p><?php echo $row['Genre']?></p>
               </li>
            <?php             
            }
         } else {
            printf('No record found.<br />');
         }
         mysqli_free_result($result);
         $mysqli->close();
         ?>
   </ul>