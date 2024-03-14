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
    <h1 class="paragraph">You don't have access to this site. Please click <a href="studentpage.php">here</a> to return student page.</h1>
    <?php
        class Course{
            private $id;
            private $name;

            function __construct($name,$id){
                $this->name=$name;
                $this->id=$id;
            }

            function setName($name){
                $this->name=$name;
            }

            function getName(){
                return $this->name;
            }

            function setID($id){
                $this->id=$id;
            }

            function getID(){
                return $this->id;
            }
        }

        $jsonobj = '{"name":"Web Programming", "id":"CSE236"}';
        $obj= json_decode($jsonobj);

        echo $obj->name . ", ID: " . $obj->id;

        $web =new Course("Web Programming", "CSE236");
        $data =new Course("Database Managements", "CSE206");
        $computer =new Course("Computer Organization", "CSE252");
        $discrete =new Course("Discrete Mathematics II", "CSE207");
        $linear =new Course("Linear Algebra", "CSE211");

        $courses = array($web,$data,$computer,$discrete,$linear);

        echo json_encode($courses);

        foreach(json_encode($courses) as $jsoncourse){
            $obj = json_decode($jsoncourse);
            $obj->getName(). ", ID: " . $obj->getID();
        }



    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>