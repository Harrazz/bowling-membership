<?php
require 'db_connect.php';
session_start();

// Filter parameters
$search = $_GET['search'] ?? '';
$lane = $_GET['lane'] ?? '';
$date = $_GET['date'] ?? '';

// Main query
$sql = "SELECT * 
        FROM member m 
        JOIN booking b ON m.Member_ID = b.Member_ID
        JOIN staff s ON b.Staff_ID = s.Staff_ID
        JOIN laneBooking lb ON b.Booking_ID = lb.Booking_ID
        JOIN lane ln ON lb.lane_ID = ln.lane_ID
        WHERE 1";

if (!empty($search)) {
    $search = $conn->real_escape_string($search);
    $sql .= " AND (m.Member_name LIKE '%$search%' OR m.Member_email LIKE '%$search%')";
}

if (!empty($lane)) {
    $sql .= " AND ln.Lane_ID = '$lane'";
}

if (!empty($date)) {
    $sql .= " AND b.booking_date = '$date'";
}

$booking = $conn->query($sql);
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
      <a href="booking_staff.php" class="active">Booking  Management</a>
      <a href="member_staff.php">Member Management</a>
      <a href="staff_staff.php">Staff Management</a>
    </nav>
    <div class="user-section">
      ADMIN
    </div>
   </header> 

<div class="container">
  <br><h2 align="center">BOOKING MANAGEMENT</h2><br>

  <div class="search-bar">
    <a href="#addForm" class="btn">+ New Reservation</a>
    <form method="GET" action="" style="margin-left: 305px;">
      <input type="text" name="search" placeholder="Search by name or email" value="<?= htmlspecialchars($search) ?>">
      <input type="date" name="date" value="<?= htmlspecialchars($date) ?>">
      <select name="lane">
        <option value="">Select Lane</option>
        <?php
        $laneQuery = $conn->query("SELECT Lane_ID, Lane_number FROM Lane");
        while ($laneRow = $laneQuery->fetch_assoc()):
            $selected = ($lane == $laneRow['Lane_ID']) ? "selected" : "";
        ?>
          <option value="<?= $laneRow['Lane_ID'] ?>" <?= $selected ?>>Lane <?= $laneRow['Lane_number'] ?></option>
        <?php endwhile; ?>
      </select>
      <button class="btn" type="submit">Filter</button>
      <a href="booking_staff.php" class="btn">Reset</a>
    </form>
  </div>
  
  <div class="card-body">
    <table class="table table-bordered">
     <thead>
      <tr>
        <th>ID</th>
        <th>Booking Name</th>
        <th>Contact Number</th>
        <th>Lane Number</th>
        <th>Date</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Booking Status</th>
        <th>Manage By</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($booking && $booking->num_rows > 0): 
        while ($row = $booking->fetch_assoc()): ?>
          <tr>
            <td><?= $row['Member_ID'] ?></td>
            <td><?= $row['Member_name'] ?></td>
            <td><?= $row['Member_phone'] ?></td>
            <td><?= $row['Lane_number'] ?></td>
            <td><?= $row['booking_date'] ?></td>
            <td><?= $row['start_time'] ?></td>
            <td><?= $row['end_time'] ?></td>
            <td><?= $row['status'] ?></td>
            <td><?= $row['Staff_name'] ?></td>
            <td><a href="#" class="btn btn-outline">Update</a></td>
            <td>
              <form method="POST" action="">
                <input type="hidden" name="deleteMember" value="<?= $row['Member_ID'] ?>">
                <input type="submit" name="remove" value="Remove" class="btn" style="background-color: #ef4545;">
              </form>
            </td>
          </tr>
      <?php endwhile; else: ?>
        <tr><td colspan="11" align="center">No records found.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
  </div><br>


  <!-- Add Reservation Form -->
  <div class="create" id="addForm">
    <h3>Add New Reservation</h3>
    <form method="POST" action="">
      Name: <input type="text" name="bookName" required><br>
      Phone: <input type="text" name="phone" required><br>
      Lane Number:
      <select name="laneNumber" required>
        <option value="">-- Select Lane --</option>
        <?php
        $laneQuery = $conn->query("SELECT Lane_ID, Lane_number FROM Lane WHERE Status = 'Available'");
        while ($lane = $laneQuery->fetch_assoc()) {
            echo "<option value='{$lane['Lane_ID']}'>Lane {$lane['Lane_number']}</option>";
        }
        ?>
      </select><br>
      Date: <input type="date" name="date" required><br>
      Start Time: <input type="time" name="startTime" required><br>
      End Time: <input type="time" name="endTime" required><br>
      Booking Status:
      <select name="bookingStatus" required>
        <option value="">-- Select Status --</option>
        <option value="Pending">Pending</option>
        <option value="Confirmed">Confirmed</option>
        <option value="Cancelled">Cancelled</option>
      </select><br>
      Manage By: <input type="text" name="staff" required><br><br>
      <button class="btn" style="margin-left: 710px;" type="submit" name="add_reservation">Add Reservation</button>
    </form>
  </div>

</div>
</body>
</html>
