<?php
require 'admin/config.php';
if (isset($_GET['F'])) {
    $lang = '%'. $_GET['F'].'%';
    $sql= "SELECT  freelanccers.f_name , freelanccers.f_phone,freelanccers.photo                   
    FROM    freelanccers INNER JOIN details 
    ON      freelanccers.f_id = details.f_id
    AND     details.description LIKE '$lang'";
    
    $query = mysqli_query($connection,$sql);
    if (mysqli_num_rows($query) > 0) {
       while($data =mysqli_fetch_array($query)){
?>  
<table class="table table-bordered">
    
    <tbody>
        <tr>
       
            <td>
                
                    <img width="100px" height="100px" src="admin/uploaded/<?= $data['photo']?>">
            </td>  
           
            <td     
                     style="width: 300px; height:100px; text-align:left; padding-top:3.5%;"><?= $data['f_name']?>
            </td>
        
            <td 
                     style="width: 300px; height:100px; text-align:left; padding-top:3.5%;"><?= $data['f_phone']?>
            </td>

        </tr>
    </tbody>
</table>
    <?php   }
    }else {
        echo 'Not Found.. ';
    }
}?>