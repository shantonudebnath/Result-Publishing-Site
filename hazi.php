<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result || HZA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                      <img src="Capture.PNG" alt="HZA" style="width:500px;height:150px;"> <br> <br>
                        <h4>HSC 2nd Year Result</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="roll" placeholder="Enter Roll" value="<?php if(isset($_GET['roll'])){echo $_GET['roll'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php
                                    $con = mysqli_connect("localhost","id17830894_result1","Fucksorna1@@@@","id17830894_result");

                                    if(isset($_GET['roll']))
                                    {
                                        $roll = $_GET['roll'];

                                        $query = "SELECT * FROM res WHERE roll='$roll' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <h2 text-aling="center">ACADEMIC TRANSCRIPT</h2>
                                                <div class="form-group mb-3">
                                                    <label for="">Roll</label>
                                                    <input type="text" value="<?= $row['Roll']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" value="<?= $row['Name']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Class</label>
                                                    <input type="text" value="<?= $row['Class']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Group</label>
                                                    <input type="text" value="<?= $row['Group']; ?>" class="form-control">
                                                
                                                </div>
                                
                                                <div class="form-group mb-3">
                                                    <label for="">Bangla CQ</label>
                                                    <input type="text" value="<?= $row['Bangla CQ']; ?>" class="form-control">
                                                </div>
                                                
                                                <div class="form-group mb-3">
                                                    <label for="">Bangla MCQ</label>
                                                    <input type="text" value="<?= $row['Bangla MCQ']; ?>" class="form-control">
                                                
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">ICT</label>
                                                    <input type="text" value="<?= $row['ICT']; ?>" class="form-control">
                                                    </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Physics</label>
                                                    <input type="text" value="<?= $row['Physics']; ?>" class="form-control">
                                                    </div>
                                                     <div class="form-group mb-3">
                                                    <label for="">Grade</label>
                                                    <input type="text" value="<?= $row['Total result']; ?>" class="form-control">
                                                    </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }

                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
