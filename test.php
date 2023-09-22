<?php
// Include config file
require_once "config.php";

// Initialize arrays to store data for each parameter
$nitrogenData = array();
$phosphorusData = array();
$kaliumData = array();
$pHData = array();
$temperatureData = array();
$electricalConductivityData = array();
$humidityData = array();
$date = [];

// Attempt select query execution
$sql = "SELECT * FROM sensor1";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Extract data for each parameter
            $nitrogenData[] = (float)$row['Nitrogen'];
            $phosphorusData[] = (float)$row['Phosphorus'];
            $kaliumData[] = (float)$row['Kalium'];
            $pHData[] = (float)$row['pH'];
            $temperatureData[] = (float)$row['Temperature'];
            $electricalConductivityData[] = (float)$row['Electrical_Conductivity'];
            $humidityData[] = (float)$row['Humidity'];
            $date[] = $row['Date'];
        }
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "<p class='lead'><em>No records were found.</em></p>";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Monthly Average Parameters</title>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
</head>
<body>
    <div id="container" style="width: 800px; height: 400px;"></div>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            Highcharts.chart('container', {
                chart: {
                    type: 'spline'
                },
                title: {
                    text: 'Monthly Average Parameters'
                },
                xAxis: {
                    categories: <?php echo json_encode($date); ?>, // Menggunakan data tanggal dari database
                    accessibility: {
                        description: 'Dates'
                    }
                },
                yAxis: {
                    title: {
                        text: 'Value'
                    }
                },
                tooltip: {
                    crosshairs: true,
                    shared: true
                },
                plotOptions: {
                    spline: {
                        marker: {
                            radius: 4,
                            lineColor: '#666666',
                            lineWidth: 1
                        }
                    }
                },
                series: [{
                    name: 'Nitrogen',
                    marker: {
                        symbol: 'square'
                    },
                    data: <?php echo json_encode($nitrogenData); ?>,
                    accessibility: {
                        description: 'Monthly average Nitrogen value'
                    }
                }]
            });
        });
    </script>
</body>
</html>
