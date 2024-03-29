<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <?php
            include 'navbarinstructor.php';
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
                    <a href="examsforcourses-instructor.php">Exams for Courses</a>
                    <br/>
                    <br/>
                    <a href="examcreation-instructor.php">Exam Creation</a>
                    <br/>
                    <br/>
                </div>
                <div class="col paragraph my-3">
                    <h3 class="text-center">Welcome back our precious instructor.</h3>
                    <p class="fw-bold text-center">This page is designed for exams.</p>
                    <p class="fw-bold text-center">You can create exam,browse courses, and see exams for courses.</p>
                    <p class="fw-bold text-center">We are trying best for you. </p>
                </div>            
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>