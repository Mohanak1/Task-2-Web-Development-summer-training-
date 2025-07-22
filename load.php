<?php
$conn = new mysqli("localhost", "root", "", "records");

$result = $conn->query("SELECT * FROM RecordDate");

echo "<table>
<tr><th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['ID']}</td>
            <td>{$row['Name']}</td>
            <td>{$row['Age']}</td>
            <td>{$row['status']}</td>
            <td><button onclick='toggleStatus({$row['ID']})'>Toggle</button></td>
          </tr>";
}
echo "</table>";
?>
