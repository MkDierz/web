<?php 
    include_once("db.php");
    $data = mysqli_query($db, "SELECT * FROM table");
    print($data);
?>
<table>
    <tr>
        <th>No</th>
        <th>id</th>
        <th>nama</th>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>resti</td>
    </tr>
</table>