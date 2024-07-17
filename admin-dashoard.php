<?php include 'php-codes.php' ?>
<?php include 'db.connection.php' ?>
<?php include 'header.php' ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8"><?php include 'php-codes.php' ?>
                <?php include 'db.connection.php' ?>
                <?php include 'header.php' ?>

                <main id="main" class="main">

                    <div class="pagetitle">
                        <h1>Dashboard</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->

                    <section class="section dashboard">
                        <div class="row">

                            <!-- Left side columns -->
                            <div class="col-lg-8">
                                <div class="row">

                                    <!-- Sales Card -->
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card info-card sales-card">

                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <li class="dropdown-header text-start">
                                                        <h6>Filter</h6>
                                                    </li>

                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                </ul>
                                            </div>

                                            <div class="card-body">
                                                <h5 class="card-title">Sales <span>| Today</span></h5>

                                                <div class="d-flex align-items-center">
                                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-cart"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6>145</h6>
                                                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- End Sales Card -->

                                    <!-- Revenue Card -->
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card info-card revenue-card">

                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <li class="dropdown-header text-start">
                                                        <h6>Filter</h6>
                                                    </li>

                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                </ul>
                                            </div>

                                            <div class="card-body">
                                                <h5 class="card-title">Revenue <span>| This Month</span></h5>

                                                <div class="d-flex align-items-center">
                                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-currency-dollar"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6>$3,264</h6>
                                                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- End Revenue Card -->

                                    <!-- Customers Card -->
                                    <div class="col-xxl-4 col-xl-12">

                                        <div class="card info-card customers-card">

                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <li class="dropdown-header text-start">
                                                        <h6>Filter</h6>
                                                    </li>

                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                </ul>
                                            </div>

                                            <div class="card-body">
                                                <h5 class="card-title">Customers <span>| This Year</span></h5>

                                                <div class="d-flex align-items-center">
                                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-people"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6>1244</h6>
                                                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div><!-- End Customers Card -->

                                    <!-- Reports -->
                                    <div class="col-12">
                                        <div class="card">

                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <li class="dropdown-header text-start">
                                                        <h6>Filter</h6>
                                                    </li>
                                                    <li><a class="dropdown-item" href="schedule.php">Upload Schedule</a></li>
                                                </ul>
                                            </div>

                                            <div class="card-body">
                                                <h5 class="card-title">Schedules</h5>

                                                <!-- Table with hoverable rows -->
                                                <?php
                                                // Database connection
                                                $con = new mysqli('localhost', 'root', '', 'miit-portal');

                                                if ($con->connect_error) {
                                                    die("Connection failed: " . $con->connect_error);
                                                }

                                                // Modify this query to fetch all schedules
                                                $query = "SELECT * FROM schedules";
                                                $query_run = mysqli_query($con, $query);
                                                ?>

                                                <table class="table table-hover" id="myTable">
                                                    <thead>
                                                        <tr>
                                                            <th class="py-1 px-2 align-middle sorting_asc" style="font-weight: bold;" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="ID: activate to sort column descending" style="width:48.0875px;" aria-sort="ascending">No.</th>
                                                            <th scope="col">Code</th>
                                                            <th scope="col">Subject</th>
                                                            <th scope="col">Instructor</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Time</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $i = 1;

                                                        if ($query_run && mysqli_num_rows($query_run) > 0) {
                                                            while ($schedule = mysqli_fetch_assoc($query_run)) {
                                                        ?>
                                                                <tr>
                                                                    <td><?php echo $i++; ?></td>
                                                                    <td><?= htmlspecialchars($schedule['code']); ?></td>
                                                                    <td><?= htmlspecialchars($schedule['subject']); ?></td>
                                                                    <td><?= htmlspecialchars($schedule['instructor']); ?></td>
                                                                    <td><?= htmlspecialchars($schedule['date']); ?></td>
                                                                    <td><?= htmlspecialchars($schedule['time']); ?></td>
                                                                </tr>
                                                        <?php
                                                            }
                                                        } else {
                                                            echo "<tr><td colspan='6'><h5>No Record Found</h5></td></tr>";
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>

                                                <script src="path/to/bootstrap.js"></script>
                                                <?php
                                                // Close the database connection
                                                $con->close();
                                                ?>

                                                <!-- End Table with hoverable rows -->
                                            </div>
                                        </div>
                                    </div><!-- End Reports -->

                                    <!-- Recent Sales -->
                                    <div class="col-12">
                                        <div class="card recent-sales overflow-auto">

                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <li class="dropdown-header text-start">
                                                        <h6>Filter</h6>
                                                    </li>

                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                </ul>
                                            </div>

                                            <div class="card-body">
                                                <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                                                <table class="table table-borderless datatable">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Customer</th>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row"><a href="#">#2457</a></th>
                                                            <td>Brandon Jacob</td>
                                                            <td><a href="#" class="text-primary">At praesentium minu</a></td>
                                                            <td>$64</td>
                                                            <td><span class="badge bg-success">Approved</span></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><a href="#">#2147</a></th>
                                                            <td>Bridie Kessler</td>
                                                            <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                                                            <td>$47</td>
                                                            <td><span class="badge bg-warning">Pending</span></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><a href="#">#2049</a></th>
                                                            <td>Ashleigh Langosh</td>
                                                            <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                                                            <td>$147</td>
                                                            <td><span class="badge bg-success">Approved</span></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><a href="#">#2644</a></th>
                                                            <td>Angus Grady</td>
                                                            <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                                                            <td>$67</td>
                                                            <td><span class="badge bg-danger">Rejected</span></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><a href="#">#2644</a></th>
                                                            <td>Raheem Lehner</td>
                                                            <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                                                            <td>$165</td>
                                                            <td><span class="badge bg-success">Approved</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>

                                        </div>
                                    </div><!-- End Recent Sales -->

                                    <!-- Top Selling -->
                                    <div class="col-12">
                                        <div class="card top-selling overflow-auto">

                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <li class="dropdown-header text-start">
                                                        <h6>Filter</h6>
                                                    </li>

                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                </ul>
                                            </div>

                                            <div class="card-body pb-0">
                                                <h5 class="card-title">Top Selling <span>| Today</span></h5>

                                                <table class="table table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Preview</th>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Sold</th>
                                                            <th scope="col">Revenue</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                                                            <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                                            <td>$64</td>
                                                            <td class="fw-bold">124</td>
                                                            <td>$5,828</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                                                            <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                                                            <td>$46</td>
                                                            <td class="fw-bold">98</td>
                                                            <td>$4,508</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                                                            <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                                                            <td>$59</td>
                                                            <td class="fw-bold">74</td>
                                                            <td>$4,366</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                                                            <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                                                            <td>$32</td>
                                                            <td class="fw-bold">63</td>
                                                            <td>$2,016</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                                                            <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                                                            <td>$79</td>
                                                            <td class="fw-bold">41</td>
                                                            <td>$3,239</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>

                                        </div>
                                    </div><!-- End Top Selling -->

                                </div>
                            </div><!-- End Left side columns -->

                            <!-- Right side columns -->
                            <div class="col-lg-4">
                                <!-- Recent Activity -->
                                <div class="card">
                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                            <li><a class="dropdown-item" href="create-event.php"> + <span> Events</span></a></li>

                                        </ul>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">Announcements <span>| Activity</span></h5>
                                        <?php
                                        // Database connection info
                                        $DATABASE_HOST = 'localhost';
                                        $DATABASE_USER = 'root';
                                        $DATABASE_PASS = '';
                                        $DATABASE_NAME = 'miit-portal';

                                        // Create a connection
                                        $conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        // Fetch events from database
                                        $sql = "SELECT id, date, eventTitle, eventDescription FROM events";
                                        $result = $conn->query($sql);

                                        // Initialize $events array
                                        $events = array();

                                        // Check if query returned results
                                        if ($result->num_rows > 0) {
                                            // Fetch each row as an associative array
                                            while ($row = $result->fetch_assoc()) {
                                                $events[] = $row; // Append row to $events array
                                            }
                                        } else {
                                            $events = array(); // No events found, initialize as empty array
                                        }

                                        // Close database connection
                                        $conn->close();
                                        ?>
                                        <div class="activity">
                                            <div id="eventDisplay" class="mt-4">
                                                <?php if (!empty($events)) : ?>
                                                    <?php foreach ($events as $event) : ?>
                                                        <div class="card mb-3">
                                                            <div class="row g-0">
                                                                <div class="col-md-12">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title"><?= htmlspecialchars($event['eventTitle']) ?></h5>
                                                                        <p class="card-text" style="width: 100%; box-sizing: border-box; padding: 0; margin: 0; text-align:justify;"><?= htmlspecialchars($event['eventDescription']) ?></p>
                                                                        <form action="delete-event.php" method="post" style="display:inline; margin-top:20px">
                                                                            <input type="hidden" name="id" value="<?= htmlspecialchars($event['id']) ?>">
                                                                            <button type="submit" name="delete_event" class="btn btn-danger btn-sm">
                                                                                <i class="bi bi-trash-fill"></i>
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <div class="alert alert-warning" role="alert">
                                                        No events available.
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Recent Activity -->


                                <!-- Website Traffic -->
                                <div class="card">
                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>

                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body pb-0">
                                        <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                                        <script>
                                            document.addEventListener("DOMContentLoaded", () => {
                                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                                    tooltip: {
                                                        trigger: 'item'
                                                    },
                                                    legend: {
                                                        top: '5%',
                                                        left: 'center'
                                                    },
                                                    series: [{
                                                        name: 'Access From',
                                                        type: 'pie',
                                                        radius: ['40%', '70%'],
                                                        avoidLabelOverlap: false,
                                                        label: {
                                                            show: false,
                                                            position: 'center'
                                                        },
                                                        emphasis: {
                                                            label: {
                                                                show: true,
                                                                fontSize: '18',
                                                                fontWeight: 'bold'
                                                            }
                                                        },
                                                        labelLine: {
                                                            show: false
                                                        },
                                                        data: [{
                                                                value: 1048,
                                                                name: 'Search Engine'
                                                            },
                                                            {
                                                                value: 735,
                                                                name: 'Direct'
                                                            },
                                                            {
                                                                value: 580,
                                                                name: 'Email'
                                                            },
                                                            {
                                                                value: 484,
                                                                name: 'Union Ads'
                                                            },
                                                            {
                                                                value: 300,
                                                                name: 'Video Ads'
                                                            }
                                                        ]
                                                    }]
                                                });
                                            });
                                        </script>

                                    </div>
                                </div><!-- End Website Traffic -->

                                <!-- News & Updates Traffic -->
                                <div class="card">
                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>

                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body pb-0">
                                        <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                                        <div class="news">
                                            <div class="post-item clearfix">
                                                <img src="assets/img/news-1.jpg" alt="">
                                                <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                                                <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                                            </div>

                                            <div class="post-item clearfix">
                                                <img src="assets/img/news-2.jpg" alt="">
                                                <h4><a href="#">Quidem autem et impedit</a></h4>
                                                <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                                            </div>

                                            <div class="post-item clearfix">
                                                <img src="assets/img/news-3.jpg" alt="">
                                                <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                                                <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                                            </div>

                                            <div class="post-item clearfix">
                                                <img src="assets/img/news-4.jpg" alt="">
                                                <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                                                <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                                            </div>

                                            <div class="post-item clearfix">
                                                <img src="assets/img/news-5.jpg" alt="">
                                                <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                                                <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                                            </div>

                                        </div><!-- End sidebar recent posts-->

                                    </div>
                                </div><!-- End News & Updates -->

                            </div><!-- End Right side columns -->

                        </div>
                    </section>

                </main><!-- End #main -->

                <?php include 'footer.php' ?>
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Sales <span>| Today</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>
                                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Revenue <span>| This Month</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>$3,264</h6>
                                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Customers <span>| This Year</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1244</h6>
                                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="schedule.php">Upload Schedule</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Schedules</h5>

                                <!-- Table with hoverable rows -->
                                <?php
                                // Database connection
                                $con = new mysqli('localhost', 'root', '', 'miit-portal');

                                if ($con->connect_error) {
                                    die("Connection failed: " . $con->connect_error);
                                }

                                // Modify this query to fetch all schedules
                                $query = "SELECT * FROM schedules";
                                $query_run = mysqli_query($con, $query);
                                ?>

                                <table class="table table-hover" id="myTable">
                                    <thead>
                                        <tr>
                                            <th class="py-1 px-2 align-middle sorting_asc" style="font-weight: bold;" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="ID: activate to sort column descending" style="width:48.0875px;" aria-sort="ascending">No.</th>
                                            <th scope="col">Code</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Instructor</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;

                                        if ($query_run && mysqli_num_rows($query_run) > 0) {
                                            while ($schedule = mysqli_fetch_assoc($query_run)) {
                                        ?>
                                                <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><?= htmlspecialchars($schedule['code']); ?></td>
                                                    <td><?= htmlspecialchars($schedule['subject']); ?></td>
                                                    <td><?= htmlspecialchars($schedule['instructor']); ?></td>
                                                    <td><?= htmlspecialchars($schedule['date']); ?></td>
                                                    <td><?= htmlspecialchars($schedule['time']); ?></td>
                                                </tr>
                                        <?php
                                            }
                                        } else {
                                            echo "<tr><td colspan='6'><h5>No Record Found</h5></td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <script src="path/to/bootstrap.js"></script>
                                <?php
                                // Close the database connection
                                $con->close();
                                ?>

                                <!-- End Table with hoverable rows -->
                            </div>
                        </div>
                    </div><!-- End Reports -->

                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="#">#2457</a></th>
                                            <td>Brandon Jacob</td>
                                            <td><a href="#" class="text-primary">At praesentium minu</a></td>
                                            <td>$64</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2147</a></th>
                                            <td>Bridie Kessler</td>
                                            <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                                            <td>$47</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2049</a></th>
                                            <td>Ashleigh Langosh</td>
                                            <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                                            <td>$147</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2644</a></th>
                                            <td>Angus Grady</td>
                                            <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                                            <td>$67</td>
                                            <td><span class="badge bg-danger">Rejected</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2644</a></th>
                                            <td>Raheem Lehner</td>
                                            <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                                            <td>$165</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->

                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title">Top Selling <span>| Today</span></h5>

                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Preview</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Sold</th>
                                            <th scope="col">Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                            <td>$64</td>
                                            <td class="fw-bold">124</td>
                                            <td>$5,828</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                                            <td>$46</td>
                                            <td class="fw-bold">98</td>
                                            <td>$4,508</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                                            <td>$59</td>
                                            <td class="fw-bold">74</td>
                                            <td>$4,366</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                                            <td>$32</td>
                                            <td class="fw-bold">63</td>
                                            <td>$2,016</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                                            <td>$79</td>
                                            <td class="fw-bold">41</td>
                                            <td>$3,239</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">
                <!-- Recent Activity -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>
                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                            <li><a class="dropdown-item" href="create-event.php"> + <span> Events</span></a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Recent Activity <span>| Announcements</span></h5>
                        <?php
                        // Database connection info
                        $DATABASE_HOST = 'localhost';
                        $DATABASE_USER = 'root';
                        $DATABASE_PASS = '';
                        $DATABASE_NAME = 'miit-portal';

                        // Create a connection
                        $conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Fetch events from database
                        $sql = "SELECT id, date, eventTitle, eventDescription FROM events";
                        $result = $conn->query($sql);

                        // Initialize $events array
                        $events = array();

                        // Check if query returned results
                        if ($result->num_rows > 0) {
                            // Fetch each row as an associative array
                            while ($row = $result->fetch_assoc()) {
                                $events[] = $row; // Append row to $events array
                            }
                        } else {
                            $events = array(); // No events found, initialize as empty array
                        }

                        // Close database connection
                        $conn->close();
                        ?>
                        <div class="activity">
                            <div id="eventDisplay" class="mt-4">
                                <?php if (!empty($events)) : ?>
                                    <?php foreach ($events as $event) : ?>
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-12">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= htmlspecialchars($event['eventTitle']) ?></h5>
                                                        <p class="card-text" style="width: 100%; box-sizing: border-box; padding: 0; margin: 0; text-align:justify;"><?= htmlspecialchars($event['eventDescription']) ?></p>
                                                        <form action="delete-event.php" method="post" style="display:inline; margin-top:20px">
                                                            <input type="hidden" name="id" value="<?= htmlspecialchars($event['id']) ?>">
                                                            <button type="submit" name="delete_event" class="btn btn-danger btn-sm">
                                                                <i class="bi bi-trash-fill"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <div class="alert alert-warning" role="alert">
                                        No events available.
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div><!-- End Recent Activity -->
            </div>


            <!-- Website Traffic -->
            <div class="card">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body pb-0">
                    <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                    <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            echarts.init(document.querySelector("#trafficChart")).setOption({
                                tooltip: {
                                    trigger: 'item'
                                },
                                legend: {
                                    top: '5%',
                                    left: 'center'
                                },
                                series: [{
                                    name: 'Access From',
                                    type: 'pie',
                                    radius: ['40%', '70%'],
                                    avoidLabelOverlap: false,
                                    label: {
                                        show: false,
                                        position: 'center'
                                    },
                                    emphasis: {
                                        label: {
                                            show: true,
                                            fontSize: '18',
                                            fontWeight: 'bold'
                                        }
                                    },
                                    labelLine: {
                                        show: false
                                    },
                                    data: [{
                                            value: 1048,
                                            name: 'Search Engine'
                                        },
                                        {
                                            value: 735,
                                            name: 'Direct'
                                        },
                                        {
                                            value: 580,
                                            name: 'Email'
                                        },
                                        {
                                            value: 484,
                                            name: 'Union Ads'
                                        },
                                        {
                                            value: 300,
                                            name: 'Video Ads'
                                        }
                                    ]
                                }]
                            });
                        });
                    </script>

                </div>
            </div><!-- End Website Traffic -->

            <!-- News & Updates Traffic -->
            <div class="card">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body pb-0">
                    <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                    <div class="news">
                        <div class="post-item clearfix">
                            <img src="assets/img/news-1.jpg" alt="">
                            <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                            <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/news-2.jpg" alt="">
                            <h4><a href="#">Quidem autem et impedit</a></h4>
                            <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/news-3.jpg" alt="">
                            <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                            <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/news-4.jpg" alt="">
                            <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                            <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/news-5.jpg" alt="">
                            <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                            <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                        </div>

                    </div><!-- End sidebar recent posts-->

                </div>
            </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->

<?php include 'footer.php' ?>