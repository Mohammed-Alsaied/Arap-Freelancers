<?php
require ('config.php');
if (isset($_GET['ID'])) {
    $fid=  $_GET['ID'];
    $sql ="SELECT * FROM freelanccers WHERE f_id='$fid'";
    $query = mysqli_query($connection,$sql);
    $row = mysqli_fetch_array($query);      
}?>
<table class="table table-bordered">
    <thead>
        <tr>
             <th>Name</th>
             <th>Phone</th>
             <th>Email</th>
             <th>Photo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $row['f_name']?></td>
            <td><?= $row['f_phone']?></td>
            <td><?= $row['email']?></td>
            <td>
                <img width="50px" height="50px" src="uploaded/<?= $row['photo']?>">
            </td>
        </tr>
    </tbody>
</table>