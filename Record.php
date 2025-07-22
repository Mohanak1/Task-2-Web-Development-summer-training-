<!DOCTYPE html>
<html>
<head>
  <title>User Status Toggle</title>
  <style>
    table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px; }
    form { margin-bottom: 20px; }
  </style>
</head>
<body>
  <h2>User Form</h2>
  <form method="POST" action="submit.php">
    Name: <input type="text" name="name" required>
    Age: <input type="number" name="age" required>
    <button type="submit">Submit</button>
  </form>

  <h2>Users</h2>
  <div id="userTable">
    <!-- AJAX Loads This -->
    <?php include 'load.php'; ?>
  </div>

  <script>
    function toggleStatus(id) {
      fetch('toggle.php?id=' + id)
        .then(response => response.text())
        .then(data => {
          document.getElementById('userTable').innerHTML = data;
        });
    }
  </script>
</body>
</html>
