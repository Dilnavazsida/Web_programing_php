<!DOCTYPE html>
<html lang="en">
<head>
<!-- Designed by Dr. Ripal Ranpara for student Activity Project Assignment-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Dashboard</title>
    <!-- Add Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        .atmiya-logo{
            height: 20px;
            width: 20px;
        }
        body {
            font-family: 'Arial', sans-serif;
            background: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        #header {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: left;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        #header h1 {
            font-size: 28px;
            margin: 0;
            font-weight: bold;
        }
        #sidebar {
            background: #343a40;
            color: #fff;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        #sidebar ul {
            list-style: none;
            padding: 0;
        }
        #sidebar li {
            margin-bottom: 10px;
        }
        #sidebar li a {
            color: #fff;
            text-decoration: none;
        }
        #sidebar .list-group-item {
            background: transparent;
            border: none;
            color: #fff;
        }
        #sidebar .list-group-item:hover {
            background: #212529;
        }
        #main-content {
            padding: 20px;
        }
        .section-title {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: center;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        .dashboard-item {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-family: 'Arial', sans-serif;
        }
        #footer {
            background: linear-gradient(135deg, #001f3f, #1f3278);
            color: #fff;
            text-align: center;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
		
		/* Button 1: Ocean Blue */
.ocean-blue-button {
    background: linear-gradient(135deg, #006a88, yellow);
    color: #fff;
}


/* Button 2: Sunset Orange */
.sunset-orange-button {
    background: linear-gradient(135deg, yellow, red);
    color: #fff;
    text-decoration: none;

    /* #ffbc3b) */
}

/* Button 3: Spring Green */
.spring-green-button {
    background: linear-gradient(135deg, yellow, blue);
    color: #fff;
}

/* Button 4: Royal Purple */
.royal-purple-button {
    background: linear-gradient(135deg, red, green);
    color: #fff;
}

/* Button 5: Ruby Red */
.ruby-red-button {
    background: linear-gradient(135deg, #cb1e52, #de6b4b);
    color: #fff;
}

/* Button 6: Goldenrod Yellow */
.goldenrod-yellow-button {
    background: linear-gradient(135deg, darkblue, #ffb344);
    color: #fff;
}

/* Button 7: Sky Blue */
.sky-blue-button {
    background: linear-gradient(135deg, #31a7ff, #3abeff);
    color: #fff;
}

/* Common Button Styles */
.gradient-button {
    border: none;
    padding: 10px 20px;
    margin: 5px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
}
.dash-title{
    font-size: 27px;
    font-family: 'Helvetica Neue', sans-serif;
}

    </style>
    <!-- <script>
        function program1() {
            window.location.href = 'https://github.com/Dilnavazsida/Web_programing_php/blob/main/pogram1.php';
        }
        function program2() {
            window.location.href = 'https://github.com/Dilnavazsida/Web_programing_php/blob/main/program2.php';
        }

    </script> -->
</head>
<body>
    <form action="" enctype="">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3">
                <h2>Sidebar</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#">Menu 1</a></li>
                    <li class="list-group-item"><a href="#">Menu 2</a></li>
                    <li class="list-group-item"><a href="#">Menu 3</a></li>
                </ul>
                <h2>My Social Profiles</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="https://sites.google.com/view/dilnavazsida/home    " target="_blank">Google Site</a></li>
                    <li class="list-group-item"><a href="https://www.linkedin.com" target="_blank">LinkedIn</a></li>
                    <li class="list-group-item"><a href="https://www.blog.com" target="_blank">Blog</a></li>
                    <li class="list-group-item"><a href="https://www.github.com" target="_blank">GitHub</a></li>
                </ul>
            </nav>
            <!-- Main content -->
            <main class="col-md-9">
                <div id="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Title </h1>
                            </div>  <marquee behavior="alternate" scrollamount="10" class="dash-title">  <?php $dashtitle = $_GET['title']; echo $dashtitle; ?>  </marquee>

                           
                            <div class="col-md-6" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="dashboard-item">
                        <div id="about-me" class="section-title">
                            <h2>About My Self</h2>
                        </div>
                        <p> <?php $self=$_GET['myself']; echo $self; ?></p>
                    </div>
                    <div class="dashboard-item">
                        <div id="my-skillset" class="section-title">
                            <h2>My Skillset</h2>
                        </div>
                        <p><?php $myskill= $_GET['skill']; echo $myskill; ?></p>
                    </div>
                    <div class="dashboard-item">
                        <div id="assignments" class="section-title">
                            <h2>Assignments</h2>
                        </div>
                        <div class="btn-group">
                        <!-- onclick="program1()"
                        onclick="program2()" -->
<button class="ocean-blue-button gradient-button"> <a class="task1" href="https://github.com/Dilnavazsida/Web_programing_php/blob/main/pogram1.php" style="color:white; text-decoration:none";>Task 1</a> </button>
<button class="sunset-orange-button gradient-button"><a class="task1"  href="https://github.com/Dilnavazsida/Web_programing_php/blob/main/program2.php" style="color:white; text-decoration:none";>Task 2</a> </button>
<button class="spring-green-button gradient-button"><a class="task1"  href="https://github.com/Dilnavazsida/Web_programing_php/blob/main/program3.php" style="color:white; text-decoration:none";>Task 3</a></button>
<button class="royal-purple-button gradient-button"><a href=""></a>Task 4</button>
<button class="ruby-red-button gradient-button">Task 5</button>
<button class="goldenrod-yellow-button gradient-button">Task 6</button><br>

<button class="spring-green-button gradient-button">Task 7  </button>
                        </div>
                    </div>
                    <div class="dashboard-item">
                        <div id="project-details" class="section-title">
                            <h2>My Project Details</h2>
                        </div>
                    <?php $project = $_GET['pro-details']; echo $project ?></p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div id="footer">
        <h3>Footer Title</h3>
        &copy; Copyright ||  Contact:- 9870086800   ||  Guide:- Dr. Ripal Ranpara
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </form>
</body>
</html>