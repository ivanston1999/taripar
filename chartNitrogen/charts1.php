<?php
// Include config file
require_once "config.php";

// Initialize arrays to store data for each parameter
$sensor1 = array();
$sensor2 = array();
$sensor3 = array();
$sensor4 = array();
$sensor5 = array();
$sensor6 = array();
$sensor7 = array();
$sensor8 = array();
$sensor9 = array();

$date = [];

// Attempt select query execution
$sql = "SELECT * FROM nitrogen";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Extract data for each parameter and Date
            $sensor1[] = (float)$row['Sensor1'];
            $sensor2[] = (float)$row['Sensor2'];
            $sensor3[] = (float)$row['Sensor3'];
            $sensor4[] = (float)$row['Sensor4'];
            $sensor5[] = (float)$row['Sensor5'];
            $sensor6[] = (float)$row['Sensor6'];
            $sensor7[] = (float)$row['Sensor7'];
            $sensor8[] = (float)$row['Sensor8'];
            $sensor9[] = (float)$row['Sensor9'];
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
                    categories: <?php echo json_encode($date); ?>,
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
                    name: '',   
                    marker: {
                        symbol: 'diamond'
                    },
                    data: <?php echo json_encode($sensor1); ?>,
                    accessibility: {
                        description: 'Monthly average Sensor 1 value'
                    }
                }, {
                    name: '',
                    marker: {
                        symbol: 'diamond'
                    },
                    data: <?php echo json_encode($sensor2); ?>,
                    accessibility: {
                        description: 'Monthly average Sensor 2 value'
                    }
                }, {
                    name: 'Sensor 3',
                    marker: {
                        symbol: 'diamond'
                    },
                    data: <?php echo json_encode($sensor3); ?>,
                    accessibility: {
                        description: 'Monthly average Sensor 3 value'
                    }
                }, {
                    name: 'Sensor 4',
                    marker: {
                        symbol: 'diamond'
                    },
                    data: <?php echo json_encode($sensor4); ?>,
                    accessibility: {
                        description: 'Monthly average Sensor 4 value'
                    }
                }, {
                    name: 'Sensor 5',
                    marker: {
                        symbol: 'diamond'
                    },
                    data: <?php echo json_encode($sensor5); ?>,
                    accessibility: {
                        description: 'Monthly average Sensor 5 value'
                    }
                }, {
                    name: 'Sensor 6',
                    marker: {
                        symbol: 'diamond'
                    },
                    data: <?php echo json_encode($sensor6); ?>,
                    accessibility: {
                        description: 'Monthly average Sensor 6 value'
                    }
                }, {
                    name: 'Sensor 7',
                    marker: {
                        symbol: 'diamond'
                    },
                    data: <?php echo json_encode($sensor7); ?>,
                    accessibility: {
                        description: 'Monthly average Sensor 7 value'
                    }
                }, {
                    name: 'Sensor 8',
                    marker: {
                        symbol: 'diamond'
                    },
                    data: <?php echo json_encode($sensor8); ?>,
                    accessibility: {
                        description: 'Monthly average Sensor 8 value'
                    }
                }, {
                    name: 'Sensor 9',
                    marker: {
                        symbol: 'diamond'
                    },
                    data: <?php echo json_encode($sensor9); ?>,
                    accessibility: {
                        description: 'Monthly average Sensor 9 value'
                    }
                }]
            });
        });
    </script>
</body>
</html>
