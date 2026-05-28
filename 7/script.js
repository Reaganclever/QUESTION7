// Employee Form Event

document.getElementById("employeeForm")
.addEventListener("submit", function(event){

    // Prevent page refresh
    event.preventDefault();


    // Get Input Values
    let empNumber =
    document.getElementById("empNumber").value;

    let empName =
    document.getElementById("empName").value;

    let salary =
    document.getElementById("salary").value;


    // Validation
    if(empNumber == "" ||
       empName == "" ||
       salary == ""){

        alert("All fields are required");

        return;
    }


    // Salary Validation
    if(isNaN(salary)){

        alert("Salary must be a number");

        return;
    }


    // JavaScript Object
    let employee = {

        employeeNumber: empNumber,

        employeeName: empName,

        employeeSalary: salary
    };


    // Display Employee Data Immediately
    document.getElementById("result").innerHTML = `

    <h3>Employee Details</h3>

    <p>
    <strong>Employee Number:</strong>
    ${employee.employeeNumber}
    </p>

    <p>
    <strong>Employee Name:</strong>
    ${employee.employeeName}
    </p>

    <p>
    <strong>Salary:</strong>
    ${employee.employeeSalary}
    </p>

    `;


    // Send Data to PHP
   fetch("save.php", {

    method: "POST",

    headers: {

        "Content-Type":
        "application/x-www-form-urlencoded"
    },

    body:

    "empNumber=" + empNumber +

    "&empName=" + empName +

    "&salary=" + salary

})

.then(response => response.text())

.then(data => {

    // Show Success Message
    alert(data);

    // Reset Form AFTER successful save
    document.getElementById("employeeForm").reset();

    // Clear Display Area
    document.getElementById("result").innerHTML = "";

})

.catch(error => {

    console.log(error);

});

});