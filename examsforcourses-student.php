<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Exams</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <?php
            include 'navbarstudent.php';
        ?> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 sidebar">
                    <div class="btn-group dropend">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Browse Courses
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                Computer Organization
                            </li>
                            <li class="dropdown-item">
                                Web Programming
                            </li>
                            <li class="dropdown-item">
                                Database Managements
                            </li>
                        </ul>
                    </div>
                    <br/>
                    <br/>
                    <a href="examsforcourses-student.php">Exams for Courses</a>
                    <br/>
                    <br/>
                    <a href="examcreation-student.php">Exam Creation</a>
                    <br/>
                    <br/>
                    <a href="examlist-student.php">Exam List</a>
                    <br/>
                    <br/>
                </div>
                <div class="col paragraph my-3">
                    <h3 class="text-center">Here you can see exams for courses.</h3>
                    <div class="border p2">
                        <p class="fw-bold text-center my-3">First Year:</p>
                        <p class="fw-bold ms-4">Statistics for Engineering: 15 April 12.30</p>
                        <p class="fw-bold ms-4">Computer Programming II: 15 April 15.30</p>
                        <p class="fw-bold ms-4">Physics for Computer Sciences II: 16 April 9.30</p>
                        <p class="fw-bold ms-4">Mathematics for Engineering II: 17 April 12.30</p>
                        <p class="fw-bold ms-4">Career Planning: 18 April 10.30</p>
                    </div>
                    <div class="border p2">
                        <p class="fw-bold text-center my-3">Second Year:</p>
                        <p class="fw-bold ms-4">Database Managements: 22 April 15.30 </p>
                        <p class="fw-bold ms-4">Computer Organization: 23 April 10.30</p>
                        <p class="fw-bold ms-4">Linear Algebra: 23 April 15.30</p>
                        <p class="fw-bold ms-4">Discrete Mathematics II: 24 April 12.30</p>
                        <p class="fw-bold ms-4">Web Programming: 26 April 9.30</p>
                        
                    </div>                    
                </div>            
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>