<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- icons and material-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- main stylesheet-->
    <link href="style.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">


</head>

<body>
    <div class="container">
        <aside>
            <a href="#">
                <div class="top">
                    <div class="logo">
                        <img src="image/logo.png" alt="broken">
                        <h2 class="">S<span class="danger">V</span>R<span class="danger">S</span></h2>
                    </div>
                    <div class="close">
                        <span class="material-symbols-sharp">close</span>
                    </div>
                </div>
            </a>
            <div class="sidebar">
                <a href="#">
                    <span class="material-symbols-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">note_add</span>
                    <h3>Data-Form</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">database</span>
                    <h3>Database</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-symbols-sharp">manage_accounts</span>
                    <h3>Admin</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">forum</span>
                    <h3>Message</h3>
                    <span class="messagecount">12</span>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">settings</span>
                    <h3>Setting</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <main>
            <h1>Dashboard</h1>
            <div class="current-session">
                <h3>Current session : march-2023</h3>
            </div>

            <div class="insight-heading">
                <h3>Work Pogress</h3>
            </div>
            <div class="insight">
                <!-- total household-->
                <div class="total-box">
                    <div class="middle">
                        <span class="material-symbols-sharp">house</span>
                        <div class="left">
                            <h3>Total House Hold</h3>
                            <h1>297805</h1>
                        </div>
                    </div>
                </div>
                <!--Submitted data-->
                <div class="submission-box">
                    <div class="middle">
                        <span class="material-symbols-sharp">location_away</span>
                        <div class="left">
                            <h3>House hold Submission</h3>
                            <h1>20000</h1>
                        </div>
                    </div>
                </div>
                <!-- progress -->
                <div class="progress-box">
                    <div class="middle">
                        <span class="material-symbols-sharp">stacked_line_chart</span>
                        <div class="left">
                            <h3>Progress</h3>
                            <h1>99.55%</h1>
                        </div>
                    </div>
                </div>

            </div>

        </main>

    </div>

</body>

</html>