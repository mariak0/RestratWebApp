<?php
session_start();
require_once('../main/session_check.php');
checkSessionAndRedirect();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiries History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./history_inquiry.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-3 d-none d-md-flex flex-column p-3 bg-body-tertiary" style="width: 280px; min-height:100vh;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <span class="fs-4"><img src="../images/world.png" alt="logo" height="50"></span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li>
                        <a href="civilian_main.php" class="nav-link link-body-emphasis">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                            Inquiries
                        </a>
                    </li>
                    <li>
                        <a href="announcements_main.php" class="nav-link link-body-emphasis">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                            Announcements
                        </a>
                    </li>
                    <li>
                        <a href="history_main.php" class="nav-link link-body-emphasis">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                            Offers History
                        </a>
                    </li>
                    <li>
                        <a href="history_inquiry_main.php" class="nav-link link-body-emphasis">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                            Inquiries History
                        </a>
                    </li>
                    <hr>
                </ul>
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="settings.html" class="dropdown-item">Settings</a></li>
                        <li><a class="dropdown-item" id="logoutButton" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-9 col-lg-9">
                <nav class="navbar navbar-expand-lg navbar-light bg-light d-md-none">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="../images/world.png" alt="logo" height="50"> </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="civilian_main.php" class="nav-link active link-body-emphasis">
                                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                                    Inquiries
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="announcements_main.php" class="nav-link active link-body-emphasis">
                                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                                    Announcements
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="history_main.php" class="nav-link active link-body-emphasis">
                                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                                    Offers History
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="history_inquiry.php" class="nav-link active link-body-emphasis">
                                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                                    Inquiries History
                                </a>
                            </li>
                            <hr>
                        </ul>

                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="settings.html">Settings</a></li>
                                <li><a class="dropdown-item" id="logoutButton" href="#">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <main>
                    <h1 class="center-title">Inquiries History</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Offer ID</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Current Status</th>
                                    <th>Last Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="history-table-body">
                                <!-- Data will be loaded here dynamically -->
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <script>
        
        document.getElementById('logoutButton').addEventListener('click', function (e) {
            e.preventDefault();
            var confirmLogout = confirm('Are you sure you want to logout?');
            if (confirmLogout) {
                window.location.href = "../main/logout.php";
            }
        });
        $(document).ready(function() {
            $.ajax({
                url: 'history_inquiry.php',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    var tbody = $('#history-table-body');
                    tbody.empty();
                    
                    if (Array.isArray(data)) {
                        data.forEach(function(inquiry) {
                            var statusClass = getStatusClass(inquiry.inquiry_status);
                            var row = '<tr>' +
                                '<td>' + inquiry.inquiry_id + '</td>' +
                                '<td>' + inquiry.item + '</td>' +
                                '<td>' + inquiry.inquiry_quantity + '</td>' +
                                '<td><span class="status-badge ' + statusClass + '">' + inquiry.inquiry_status + '</span></td>' +
                                '<td>' + inquiry.last_updated + '</td>' +
                                '<td><button class="btn btn-sm btn-primary view-history-btn" data-id="' + inquiry.inquiry_id + '">View History</button></td>' +
                                '</tr>';
                            tbody.append(row);
                        });
                    } else {
                        console.error('Unexpected data format:', data);
                    }
                },
                error: function(error) {
                    console.error('Error fetching history data:', error);
                }
            });

            function getStatusClass(status) {
                switch(status.toLowerCase()) {
                    case 'pending': return 'badge-warning';
                    case 'approved': return 'badge-success';
                    case 'rejected': return 'badge-danger';
                    default: return 'badge-secondary';
                }
            }

            // Event delegation for view history buttons
            $(document).on('click', '.view-history-btn', function() {
                var inquiryId = $(this).data('id');
                // Add your logic here to view the history for the specific inquiry
                console.log('View history for inquiry ID:', inquiryId);
            });
        });
    </script>
</body>
</html>