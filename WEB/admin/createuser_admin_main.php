<?php include('../main/session_check.php'); ?> <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="createuser_admin.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar (for larger screens) -->
            <div class="col-md-3 col-lg-3 d-none d-md-flex flex-column p-3 bg-body-tertiary" style="width: 280px; min-height:100vh;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <span class="fs-4"><img src="../images/world.png" alt="logo" height="50"></span>
                </a>
          
                <hr>
               
                <ul class="nav nav-pills flex-column mb-auto">
                    <li>
                        <a href="#" class="nav-link link-body-emphasis">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                            Map
                        </a>
                    </li>
                    <li>
                        <a href="announcement.php" class="nav-link link-body-emphasis">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                            Announcements
                        </a>
                    </li>
                    <li>
                        <a href="warehouse_main.php" class="nav-link link-body-emphasis">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                            Warehouse
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-body-emphasis">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                            Create Account
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

            <!-- Content area (for all screens) -->
            <div class="col-md-9 col-lg-9 ">
                <!-- Navbar (for smaller screens) -->
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
                              <a href="#" class="nav-link active link-body-emphasis">
                                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                                  Map
                              </a>
                          </li>
                          <li class="nav-item">
                            <a href="announcement.php" class="nav-link activelink-body-emphasis">
                                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                                Announcements
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="warehouse_main.php" class="nav-link active link-body-emphasis">
                                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                               Warehouse
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active link-body-emphasis">
                                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                                Create Account
                            </a>
                        </li>
                        
                        
                        
                        <hr>
                
                      </ul>
          
                      <div class="dropdown ">
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

                <br>
                <h2 class="text-center">Add User</h2>

                <div id="message" class="alert" style="display:none;"></div>

                <form id="createUserForm">
                    <label for="username">Username:</label>
                    <input type="text" name="username" required><br>
                
                    <label for="password">Password:</label>
                    <input type="password" name="password" required><br>
                
                    <label for="profile">Profile:</label>
                    <select name="profile" class="form-select">
                        <option value="volunteer">Volunteer</option>
                        <option value="civilian">Civilian</option>
                        <option value="administrator">Administrator</option>
                    </select>
                    <br>
                    <input type="submit" class="form_button" value="Create User">
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous">
    </script>
    <script>
        document.getElementById('createUserForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            var formData = new FormData(this);

            fetch('createuser_admin.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                var messageElement = document.getElementById('message');
                if (data.success) {
                    messageElement.className = 'alert alert-success';
                    messageElement.textContent = data.message;
                } else {
                    messageElement.className = 'alert alert-danger';
                    messageElement.textContent = data.message;
                }
                messageElement.style.display = 'block';
            })
            .catch(error => {
                var messageElement = document.getElementById('message');
                messageElement.className = 'alert alert-danger';
                messageElement.textContent = 'An error occurred: ' + error;
                messageElement.style.display = 'block';
            });
        });
        document.getElementById('logoutButton').addEventListener('click', function () {
    var confirmLogout = confirm('Are you sure you want to logout?');
    if (confirmLogout) {
        // Redirect to another page
        window.location.href = "../main/main.html"; // Replace 'logout.php' with the actual URL you want to redirect to
    }
    });
    </script>
</body>

</html>