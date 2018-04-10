
<?php
require("db.php");
$sql ="select name from details";
$result = $conn->query($sql);
echo "<table class='table table-bordered'>";
while($row = $result->fetch_assoc()){
echo "<tr><td>".$row["name"]."</td></tr>";
}
echo "</table>";
?>