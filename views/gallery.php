<?php
        
         $sql = "SELECT * FROM gallery"; //select all the columns from gallery database
        //  $sql = "SELECT id, src, thumbnail, name FROM gallery"; //select all the columns from gallery database
		 
         $result = $mysqli->query($sql);
           
         if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            //    printf(
            //     "id: %s, src: %s, thumbnail: %s, name: %d <br />", 
            //     //   $row["id"], 
            //     //   $row["src"], 
            //     //   $row["thumbnail"],
            //     //   $row["name"]); 
            ?> 
               <li class="gallery-row">
                  <a href="?page=showcase?id=<?php echo $row['id'];?>">
                     <img src="<?php echo $row["thumbnail"];?>">
                  </a>
               </li>
            <?php             
            }
         } else {
            printf('No record found.<br />');
         }
         mysqli_free_result($result);
         $mysqli->close();
?>