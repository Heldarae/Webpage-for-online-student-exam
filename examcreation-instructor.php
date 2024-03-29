<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Exam</title>
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
                    <h3 class="text-center">Dear instructor, please select a course that you want to create exam.</h3>
                    
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-secondary" type="button">Statistics for Engineering</button>
                        <button class="btn btn-secondary" type="button">Computer Programming II</button>
                        <button class="btn btn-secondary" type="button">Physics for Computer Sciences II</button>
                        <button class="btn btn-secondary" type="button">Mathematics for Engineering II</button>
                        <button class="btn btn-secondary" type="button">Career Planning</button>
                        <button class="btn btn-secondary" type="button">Database Managements</button>
                        <button class="btn btn-secondary" type="button">Computer Organization</button>
                        <button class="btn btn-secondary" type="button">Linear Algebra</button>
                        <button class="btn btn-secondary" type="button">Discrete Mathematics II</button>
                        <button class="btn btn-secondary" type="button">Web Programming</button>
                    </div>                                                         
                </div>            
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>