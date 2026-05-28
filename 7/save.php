<?php

// Check if form submitted using POST
if($_SERVER["REQUEST_METHOD"] == "POST"){


    // Receive data from JavaScript
    $empNumber = $_POST["empNumber"];

    $empName = $_POST["empName"];

    $salary = $_POST["salary"];


    // Load XML File
    $xml = simplexml_load_file("employees.xml");


    // Create employee node
    $employee = $xml->addChild("employee");


    // Add employee details
    $employee->addChild("employeeNumber", $empNumber);

    $employee->addChild("employeeName", $empName);

    $employee->addChild("salary", $salary);


    // Save XML File
    $xml->asXML("employees.xml");


    // Success Message
    echo "Employee Saved Successfully";
}

?>