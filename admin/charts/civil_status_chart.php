<?php

require 'tracer_config.php'; // Include your database configuration

// Fetch civil status data
$query = "SELECT civil_status, COUNT(*) as count FROM alumni_information GROUP BY civil_status";
$result = $conn->query($query);

$civilStatusData = [];
while ($row = $result->fetch_assoc()) {
    $civilStatusData[$row['civil_status']] = $row['count'];
}

$civilStatusLabels = json_encode(array_keys($civilStatusData));
$civilStatusData = json_encode(array_values($civilStatusData));
