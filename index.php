<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Registration Form | RVITM Web Tech Assignment</title>
    <link rel="stylesheet" href="style.css">
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

    <div class="container">
        <header>
            <h2>Student Event Registration</h2>
            <p>Fill out the form below to register for the upcoming technical symposium.</p>
        </header>

        <!-- Error message banner for client-side validation -->
        <div id="error-message" class="error-banner" style="display: none;"></div>

        <form id="registrationForm" action="process.php" method="POST">
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter your full name">
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="name@example.com">
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" placeholder="10-digit mobile number">
            </div>

            <div class="form-group">
                <label for="department">Department:</label>
                <select id="department" name="department">
                    <option value="">-- Select Department --</option>
                    <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                    <option value="Information Science and Engineering">Information Science and Engineering</option>
                    <option value="Electronics and Communication">Electronics and Communication</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                </select>
            </div>

            <div class="form-group">
                <label for="semester">Semester:</label>
                <select id="semester" name="semester">
                    <option value="">-- Select Semester --</option>
                    <option value="1st Semester">1st Semester</option>
                    <option value="3rd Semester">3rd Semester</option>
                    <option value="5th Semester">5th Semester</option>
                    <option value="7th Semester">7th Semester</option>
                </select>
            </div>

            <button type="submit" id="submitBtn">Submit Application</button>
        </form>
    </div>

    <!-- jQuery Client-Side Validation Script -->
    <script>
        $(document).ready(function() {
            $('#registrationForm').on('submit', function(e) {
                const fullname = $('#fullname').val().trim();
                const email = $('#email').val().trim();
                const phone = $('#phone').val().trim();
                const department = $('#department').val();
                const semester = $('#semester').val();

                let errorBox = $('#error-message');
                errorBox.hide().text('');

                // Validation Checks
                if (fullname === "" || email === "" || phone === "" || department === "" || semester === "") {
                    errorBox.text("All fields are required. Please fill out every field.").show();
                    e.preventDefault();
                    return false;
                }

                // Email format check
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    errorBox.text("Please enter a valid email address.").show();
                    e.preventDefault();
                    return false;
                }

                // Phone number digits check (10 digits)
                const phoneRegex = /^\d{10}$/;
                if (!phoneRegex.test(phone)) {
                    errorBox.text("Please enter a valid 10-digit phone number.").show();
                    e.preventDefault();
                    return false;
                }

                return true; // Allow submission to process.php
            });
        });
    </script>
</body>
</html>