<!-- navbar -->
<?php include '../Module 4/admin_nav.php'; ?>

<!-- content -->
<h1>Report Total</h1>

<table>
  <tr>
    <th>Period</th>
    <th>Issue</th>
    <th>Total</th>
  </tr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fkedu";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    // Example query to retrieve data from the database
    $query = "SELECT Report_ID, COUNT(*) AS total FROM report GROUP BY Complaint_Type";
    $result = mysqli_query($conn, $query);
    
    // Loop through the query results and populate the table rows
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['period'] . "</td>";
      echo "<td>" . $row['issue'] . "</td>";
      echo "<td>" . $row['total'] . "</td>";
      echo "</tr>";
    }
    
    // Close the database connection
    mysqli_close($connection);
  ?>
</table>
