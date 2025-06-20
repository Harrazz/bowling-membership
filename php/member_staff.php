<?php
require 'db_connect.php';
session_start();

  // ADD MEMBER
  if (isset($_POST['add_member'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $packageType = $_POST['package'];
      $status = $_POST['packageStatus'];
      $startDate = $_POST['startDate'];
      $endDate = $_POST['endDate'];

      // Check if package exists
      $packageQuery = $conn->prepare("SELECT Package_ID FROM Package WHERE Package_type = ?");
      $packageQuery->bind_param("s", $packageType);
      $packageQuery->execute();
      $packageResult = $packageQuery->get_result();


      // Insert member
      $passwordHash = password_hash("123456", PASSWORD_DEFAULT);
      $insertMember = $conn->prepare("INSERT INTO Member (Member_ID, Member_name, Member_phone, Member_email, Member_password) VALUES (?, ?, ?, ?, ?)");
      $insertMember->bind_param("issss", $packageID, $name, $phone, $email, $passwordHash);
      $insertMember->execute();
  }

  // DELETE MEMBER
  if (isset($_POST['remove']) && isset($_POST['deleteMember'])) {
      $deleteID = $_POST['deleteMember'];
      $stmt = $conn->prepare("DELETE FROM Member WHERE Member_ID = ?");
      $stmt->bind_param("i", $deleteID);
      $stmt->execute();
  }

$search = $_GET['search'] ?? '';
$package = $_GET['package'] ?? 'All';
$status = $_GET['status'] ?? 'All';

$sql = "SELECT Member.*, Package.Package_type, Package.Package_status, Package.Package_startDate, Package.Package_endDate 
        FROM Member 
        LEFT JOIN Package ON Member.Package_ID = Package.Package_ID 
        WHERE 1";

if (!empty($search)) {
    $search = $conn->real_escape_string($search);
    $sql .= " AND (Member_name LIKE '%$search%' OR Member_email LIKE '%$search%')";
}

if ($package !== 'All') {
    $sql .= " AND Package.Package_type = '$package'";
}

if ($status !== 'All') {
    $sql .= " AND Package.Package_status = '$status'";
}

$members = $conn->query($sql);

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
      <a href="booking_staff.php">Booking  Management</a>
      <a href="member_staff.php" class="active">Member Management</a>
      <a href="staff_staff.php">Staff Management</a>
    </nav>
    <div class="user-section">
      ADMIN
    </div>
   </header> 

   <div class="container">
        <br><h2 align="center">MEMBER MANAGEMENT</h2><br>

        <div class="search-bar">
    <a href="#addForm" class="btn">+New Member</a>
    <form method="GET" action="" style="margin-left: 360px;">
        <!-- Search -->
        <input type="text" name="search" placeholder="Search by name or email..." 
               value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">

        <!-- Package filter -->
        <select name="package">
            <option value="All" <?= (!isset($_GET['package']) || $_GET['package'] == 'All') ? 'selected' : '' ?>>All Packages</option>
            <option value="Basic" <?= (isset($_GET['package']) && $_GET['package'] == 'Basic') ? 'selected' : '' ?>>Basic</option>
            <option value="Pro" <?= (isset($_GET['package']) && $_GET['package'] == 'Pro') ? 'selected' : '' ?>>Pro</option>
        </select>

        <!-- Status filter -->
        <select name="status">
            <option value="All" <?= (!isset($_GET['status']) || $_GET['status'] == 'All') ? 'selected' : '' ?>>All Status</option>
            <option value="Active" <?= (isset($_GET['status']) && $_GET['status'] == 'Active') ? 'selected' : '' ?>>Active</option>
            <option value="Not Active" <?= (isset($_GET['status']) && $_GET['status'] == 'Not Active') ? 'selected' : '' ?>>Not Active</option>
        </select>

        <!-- Buttons -->
        <button class="btn" type="submit">Filter</button>
        <a href="member_staff.php" class="btn">Reset</a>
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
                        <th>Package</th>
                        <th>Package Status</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                  <?php if ($members->num_rows > 0): ?>
                  <?php while ($row = $members->fetch_assoc()): ?>
                  <tr>
                      <td><?= $row['Member_ID'] ?></td>
                      <td><?= $row['Member_name'] ?></td>
                      <td><?= $row['Member_email'] ?></td>
                      <td><?= $row['Member_phone'] ?></td>
                      <td><?= $row['Package_type'] ?></td>
                      <td><?= $row['Package_status'] ?></td>
                      <td><?= date("d M Y", strtotime($row['Package_startDate'])) ?></td>
                      <td><?= date("d M Y", strtotime($row['Package_endDate'])) ?></td>
                      <td><a href="#" class="btn btn-outline">Update</a></td>
                      <td>
                          <form action="" method="post">
                              <input type="hidden" name="deleteMember" value="<?= $row['Member_ID'] ?>">
                              <input class="btn" type="submit" name="remove" value="Remove">
                          </form>
                      </td>
                  </tr>
                  <?php endwhile; ?>
                    <?php else: ?>
                      <tr>
                          <td colspan="10" align="center">NO RECORD FOUND</td>
                      </tr>
                  <?php endif; ?>
                </tbody>
            </table>
        </div><br>

        <div class="create">
            <h2>Add New Member</h2>
            <form method="POST" id="addForm" action="">
                Name: <input type="text" name="name" placeholder="Name" class="create-input" required><br>
                Email: <input type="text" name="email" placeholder="@gmail.com" class="create-input" required><br>
                Phone: <input type="text" name="phone" placeholder="010-0000000" class="create-input" required><br>
                Package: <select name="package" class="create-input" required>
                    <option value="Basic">Basic</option>
                    <option value="PRO">Pro</option>
                </select><br>
                Status: <select name="packageStatus" class="create-input" required>
                    <option value="Active">Active</option>
                    <option value="Not Active">Not Active</option>
                </select><br>
                Start Date: <input type="date" name="startDate" placeholder="Start Date" class="create-input" required><br>
                End Date: <input type="date" name="endDate" placeholder="End Date" class="create-input"><br><br>
                <button class="btn" style="margin-left: 710px;" type="submit" name="add_member">Add Member</button>
            </form>
        </div>

    </div>
</body>
</html>
