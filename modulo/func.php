<?php 



$stmt = "SELECT * FROM proyecto WHERE estado = ''";   
        foreach ($conn->query($stmt) as $row){
            $id_proyecto = $row['id'];
            
        }


?>