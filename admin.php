<!DOCTYPE html>
<html>
  <head>
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

  </head>
  <body>

    <?php include 'includes/navbar.php' ?>

    <div class="container">
      <div class="row">
        <div class="col-md-12 q-panel" style="padding:0;">
          <div class="panel panel-default card shadow--2dp" style="padding-bottom: 15px;">
            <div class="panel-heading o-nav">
              <h3 class="panel-title">Users List</h3>
            </div>
            <div class="panel-body">
              
              <div class="content-box-large">
                <div class="panel-body">
                  <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Contact</th>
                        <th>Time Period</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody id="userlist">
                    <?php 
                      require('dbconnect.php');
                      $sql = "SELECT * FROM user";
                      $result = $conn->query($sql);
                      //var_dump($result);
                        if($result->num_rows>0){
                          $count = 0;
                          while ($user = $result->fetch_assoc()) {
                            $count++;
                            echo "<tr>
                                    <td>".$count."</td>
                                    <td>".$user['username']."</td>
                                    <td>".$user['email']."</td>
                                    <td>".$user['password']."</td>
                                    <td>".$user['mobile']."</td>
                                    <td>".$user['duration']."</td>
                                    <td>".$user['status']."</td>
                                    <td><button class='mdl-btn' type='submit'>Edit</button><td>
                                  </tr>";
                        }
                      }
                    ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 q-panel" style="padding:0;">
          <div class="panel panel-default card shadow--2dp" style="padding-bottom: 15px;">
            <div class="panel-heading o-nav">
              <h3 class="panel-title">Chart</h3>
            </div>
            <div class="panel-body">
              
              <div style="">
                  <canvas id="canvas"></canvas>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="assets/vendors/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/js/tables.js"></script>

    <script src="assets/vendors/chartjs/dist/Chart.bundle.js"></script>
    <script src="assets/js/chart_utils.js"></script>

    <script>
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var config = {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor()
                    ],
                    fill: false,
                }, {
                    label: "My Second dataset",
                    fill: false,
                    backgroundColor: window.chartColors.blue,
                    borderColor: window.chartColors.blue,
                    data: [
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor()
                    ],
                }]
            },
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'Chart.js Line Chart'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                }
            }
        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myLine = new Chart(ctx, config);
        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            config.data.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return randomScalingFactor();
                });

            });

            window.myLine.update();
        });

        var colorNames = Object.keys(window.chartColors);
        document.getElementById('addDataset').addEventListener('click', function() {
            var colorName = colorNames[config.data.datasets.length % colorNames.length];
            var newColor = window.chartColors[colorName];
            var newDataset = {
                label: 'Dataset ' + config.data.datasets.length,
                backgroundColor: newColor,
                borderColor: newColor,
                data: [],
                fill: false
            };

            for (var index = 0; index < config.data.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());
            }

            config.data.datasets.push(newDataset);
            window.myLine.update();
        });

        document.getElementById('addData').addEventListener('click', function() {
            if (config.data.datasets.length > 0) {
                var month = MONTHS[config.data.labels.length % MONTHS.length];
                config.data.labels.push(month);

                config.data.datasets.forEach(function(dataset) {
                    dataset.data.push(randomScalingFactor());
                });

                window.myLine.update();
            }
        });

        document.getElementById('removeDataset').addEventListener('click', function() {
            config.data.datasets.splice(0, 1);
            window.myLine.update();
        });

        document.getElementById('removeData').addEventListener('click', function() {
            config.data.labels.splice(-1, 1); // remove the label first

            config.data.datasets.forEach(function(dataset, datasetIndex) {
                dataset.data.pop();
            });

            window.myLine.update();
        });
    </script>
  </body>
</html>