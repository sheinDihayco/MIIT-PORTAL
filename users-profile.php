<?php
session_start();
require 'db.connection.php'; // Adjust path as needed

// Assume user ID is stored in session after login
$studentID = $_SESSION['studentID']; // Adjust this to your session variable

// Fetch the username from the database
$sql = "SELECT yourUsername, studentID FROM accounts WHERE studentID = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param('i', $studentID);
$stmt->execute();
$stmt->bind_result($yourUsername, $studentID);
$stmt->fetch();
?>

<?php include 'php-codes.php' ?>
<?php include 'header.php' ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <h2>
              <?php echo htmlspecialchars($yourUsername); ?>
            </h2>
            <h3><?php echo htmlspecialchars($studentID); ?></h3>
            <div class="social-links mt-2">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
              </li>

            </ul>

            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Profile Details</h5>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Fullname</div>
                  <div class="col-lg-9 col-md-8">
                    <input name="full_name" type="text" class="form-control" id="full_name" value="<?php echo $yourUsername; ?>" readonly>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Course</div>
                  <div class="col-lg-9 col-md-8">
                    <input name="course" type="text" class="form-control" id="course" value="<?php echo $course; ?>" readonly>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Year</div>
                  <div class="col-lg-9 col-md-8">
                    <input name="year" type="text" class="form-control" id="year" value="<?php echo $year; ?>" readonly>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Country</div>
                  <div class="col-lg-9 col-md-8">
                    <input name="country" type="text" class="form-control" id="country" value="<?php echo $country; ?>" readonly>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Permanent Address </div>
                  <div class="col-lg-9 col-md-8">
                    <input name="address" type="text" class="form-control" id="address" value="<?php echo $address; ?>" readonly>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Phone </div>
                  <div class="col-lg-9 col-md-8">
                    <input name="phone" type="text" class="form-control" id="phone" value="<?php echo $phone; ?>" readonly>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email </div>
                  <div class="col-lg-9 col-md-8">
                    <input name="email" type="text" class="form-control" id="email" value="<?php echo $email; ?>" readonly>
                  </div>
                </div>
              </div>


              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                <!-- Profile Edit Form -->
                <form action="user-profile-update.php" method="POST">

                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>

                    <div class="col-md-8 col-lg-9">
                      <img src="assets/img/profile-img.jpg" alt="Profile" id="profilePreview" class="img-fluid">
                      <div class="pt-2">
                        <input type="file" id="profileImage" name="profileImage" class="d-none" accept="image/*" onchange="previewImage(event)">
                        <button type="button" class="btn btn-primary btn-sm" title="Upload new profile image" onclick="document.getElementById('profileImage').click();">
                          <i class="bi bi-upload"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" title="Remove my profile image" onclick="removeImage();">
                          <i class="bi bi-trash"></i>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h5 class="card-title">Profile Details</h5>
                    <form action="user-profile-insert.php" method="POST">
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Full Name</div>
                        <div class="col-lg-9 col-md-8">
                          <input type="text" class="form-control" id="full_name" name="full_name" value="<?php echo htmlspecialchars($fullName); ?>" readonly>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Course</div>
                        <div class="col-lg-9 col-md-8">
                          <input type="text" class="form-control" id="course" name="course" value="<?php echo htmlspecialchars($course); ?>" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Year</div>
                        <div class="col-lg-9 col-md-8">
                          <input name="year" type="text" class="form-control" value="<?php echo $year; ?>" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Country</div>
                        <div class="col-lg-9 col-md-8">
                          <input name="country" type="text" class="form-control" value="<?php echo $country; ?>" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Address</div>
                        <div class="col-lg-9 col-md-8">
                          <input name="address" type="text" class="form-control" value="<?php echo $address; ?>" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Phone</div>
                        <div class="col-lg-9 col-md-8">
                          <input name="phone" type="text" class="form-control" value="<?php echo $phone; ?>" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Email</div>
                        <div class="col-lg-9 col-md-8">
                          <input name="email" type="text" class="form-control" value="<?php echo $email; ?>" required>
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="update_user">Save Changes</button>
                      </div>
                    </form><!-- End Profile Edit Form -->

                  </div>

                  <div class="tab-pane fade pt-3" id="profile-settings">

                    <!-- Settings Form -->
                    <form>

                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                        <div class="col-md-8 col-lg-9">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="changesMade" checked>
                            <label class="form-check-label" for="changesMade">
                              Changes made to your account
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="newProducts" checked>
                            <label class="form-check-label" for="newProducts">
                              Information on new products and services
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="proOffers">
                            <label class="form-check-label" for="proOffers">
                              Marketing and promo offers
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                            <label class="form-check-label" for="securityNotify">
                              Security alerts
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                    </form><!-- End settings Form -->

                  </div>

                  <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form>

                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="password" type="password" class="form-control" id="currentPassword">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="newpassword" type="password" class="form-control" id="newPassword">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                      </div>
                    </form><!-- End Change Password Form -->

                  </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
  </section>

</main><!-- End #main -->

<?php include 'php-codes.php' ?>