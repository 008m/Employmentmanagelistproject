<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM FORM";
$data = mysqli_query($conn, $query);

$total= mysqli_num_rows($data);
//echo $total






if($total != 0)
{ 
    ?>
    <h1 align="center">Employment Record</h1>
    <table border="3" cellspacing="8" width="100%" align="center">
        <tr>
        <th width="5%">ID</th>
        <th width="5%">First Name</th>
        <th width="5%">Last Name</th>
        <th width="10">Email id</th>
        <th width="5">Phone Number</th>
        <th width="10%">Address</th>
        <th width="5">Gender</th>
        <th width="5">Hobby</th>
        <th width="10">Date</th>
        <th width="40">Solution</th>
        </tr>
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
       echo "<tr>
                <td>".$result["id"]."</td>
                <td>".$result["firstname"]."</td>
                <td>".$result["lastname"]."</td>
                <td>".$result["email"]."</td>
                <td>".$result["phone"]."</td>
                <td>".$result["address"]."</td>
                <td>".$result["gender"]."</td>
                <td>".$result["hobby"]."</td>
                <td>".$result["startdate"]."</td>

                <td><a href='update.php?id=$result[id]'><input type='submit' value='update'></a>
                <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' onclick = 'return checkdelete()'></a></td>
            </tr>";
       


    }
   //echo "record";
}


else
{
    echo "No record found";
}

?>
</table>

<script>
    function checkdelete()
    {
        return Confirm('Are you sure delete this record ?');
    }
</script>

