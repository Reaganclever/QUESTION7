<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Employee Information System</title>

    <!-- CSS File -->
    <link rel="stylesheet" href="styles.css">

</head>

<body>

    <div class="container">

        <h1>Employee Information Form</h1>

        <!-- Employee Form -->
        <form id="employeeForm">

            <!-- Employee Number -->
            <label>Employee Number</label>

            <input type="text"
            id="empNumber"
            placeholder="Enter Employee Number">


            <!-- Employee Name -->
            <label>Employee Name</label>

            <input type="text"
            id="empName"
            placeholder="Enter Employee Name">


            <!-- Salary -->
            <label>Salary</label>

            <input type="text"
            id="salary"
            placeholder="Enter Salary">


            <!-- Submit Button -->
            <button type="submit">
                Submit
            </button>

        </form>


        <!-- Display Employee Data -->
        <div id="result">

        </div>

    </div>

    <!-- JavaScript File -->
    <script src="script.js"></script>

</body>

</html>