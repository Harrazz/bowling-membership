<?php
require 'db_connect.php';
session_start();

// ADD STAFF
if (isset($_POST['add_staff'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $passwordHash = password_hash("123456", PASSWORD_DEFAULT);

    $insertStaff = $conn->prepare("INSERT INTO Staff (Staff_name, Staff_email, Staff_phone, Staff_password) VALUES (?, ?, ?, ?)");
    $insertStaff->bind_param("ssss", $name, $email, $phone, $passwordHash);
    $insertStaff->execute();
}

// DELETE STAFF
if (isset($_POST['remove']) && isset($_POST['deleteStaff'])) {
    $deleteID = $_POST['deleteStaff'];
    $stmt = $conn->prepare("DELETE FROM Staff WHERE Staff_ID = ?");
    $stmt->bind_param("i", $deleteID);
    $stmt->execute();
}

$search = $_GET['search'] ?? '';

$sql = "SELECT * 
        FROM Staff 
        WHERE Staff_name LIKE '%$search%' OR Staff_email LIKE '%$search%'";
$staffs = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Lanes</title>
  <link rel="stylesheet" href="../style/styles_staff.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <div class="logo-section">
      <img src="../images/logo.png" alt="The Lanes Logo" class="logo" />
    </div>

    <nav class="navbar">
      <a href="booking_staff.php">Booking Management</a>
      <a href="member_staff.php">Member Management</a>
      <a href="staff_staff.php" class="active">Staff Management</a>
    </nav>
    <div class="user-section">
      ADMIN
    </div>
  </header>

  <div class="container">
    <br><h2 align="center">STAFF MANAGEMENT</h2><br>

    <div class="search-bar">
      <a href="#addForm" class="btn">+New Staff</a>
      <form method="GET" action="" style="margin-left: 620px;">
        <input type="text" name="search" placeholder="Search by name or email..." value="<?= htmlspecialchars($search) ?>">
        <button class="btn" type="submit">Filter</button>
        <a href="staff_staff.php" class="btn">Reset</a>
      </form>
    </div>

    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php if ($staffs->num_rows > 0): ?>
          <?php while ($row = $staffs->fetch_assoc()): ?>
            <tr>
              <td><?= $row['Staff_ID'] ?></td>
              <td><?= $row['Staff_name'] ?></td>
              <td><?= $row['Staff_email'] ?></td>
              <td><?= $row['Staff_phone'] ?></td>
              <td><a href="#" class="btn btn-outline">Update</a></td>
              <td>
                <form action="" method="post">
                  <input type="hidden" name="deleteStaff" value="<?= $row['Staff_ID'] ?>">
                  <input class="btn" type="submit" name="remove" value="Remove">
                </form>
              </td>
            </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr>
            <td colspan="6" align="center">NO RECORD FOUND</td>
          </tr>
        <?php endif; ?>
        </tbody>
      </table>
    </div><br>

    <div class="create" id="addForm">
      <h2>Add New Staff</h2>
      <form method="POST" action="">
        Name: <input type="text" name="name" placeholder="Name" class="create-input" required><br>
        Email: <input type="text" name="email" placeholder="@gmail.com" class="create-input" required><br>
        Phone: <input type="text" name="phone" placeholder="010-0000000" class="create-input" required><br><br>
        <button class="btn" style="margin-left: 710px;" type="submit" name="add_staff">Add Staff</button>
      </form>
    </div>
  </div>
</body>
</html>
