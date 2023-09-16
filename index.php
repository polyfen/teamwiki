<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Team Wiki | Polyfen</title>

    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

  </head>

  <body>
    <nav>
        <h2 class="caption">Table of Contents</h2>
        <ul>
            <li><a href="#" class="caption">Team Wiki</a></li>
            <li><a href="#tech-stack" class="caption">1. Tech stack</a></li>
            <li><a href="#sprints" class="caption">2. Sprints</a></li>
            <li><a href="#team-messaging" class="caption">3. Team Messaging</a></li>
            <li><a href="#naming-conventions" class="caption">4. Naming Conventions</a></li>
            <li><a href="#projects-and-tasks" class="caption">5. Projects &amp; Tasks</a></li>
            <li><a href="#time-tracking" class="caption">6. Time tracking</a></li>
            <li><a href="#google-drive" class="caption">6. Google Drive</a></li>
            <li><a href="#figma-projects" class="caption">7. Figma projects</a></li>
            <li><a href="#github-repos" class="caption">8. Github repos</a></li>
            <li><a href="#getting-paid" class="caption">9. Getting paid</a></li>
            <li><a href="#time-off" class="caption">10. Time off</a></li>
        </ul>
    </nav>
    <main>
        <section id="cover">
          <img src="imgs/polyfen-logo.svg" alt="Polyfen" height="80px" width="auto">
          <div id="cover">
            <div id="cover-text">
              <h1 class="title-2">Team Wiki</h1>
              <h2 class="caption"><br><br>The Polyfen Group LLC<br><br>
              Est. 2018</h2>
            </div>
            <div id="cover-image">
              <img src="imgs/videogame-illustratrion.svg" alt="Videogame Illustration" height="200px" width="auto">
            </div>
          </div>
        </section>
        <hr>
        <!-- INCLUDE TECH-STACK.PHP start -->
        <?php include 'content/tech-stack.php';?>
        <!-- INCLUDE TECH-STACK.PHP end -->
        <hr>
        <!-- INCLUDE SPRINTS.PHP start -->
        <?php include 'content/sprints.php';?>
        <!-- INCLUDE SPRINTS.PHP end -->
        <hr>
        <!-- INCLUDE TEAM-MESSAGING.PHP start -->
        <?php include 'content/team-messaging.php';?>
        <!-- INCLUDE TEAM-MESSAGING.PHP end -->
        <hr>
        <!-- INCLUDE NAMING-CONVENTIONS.PHP start -->
        <?php include 'content/naming-conventions.php';?>
        <!-- INCLUDE NAMING-CONVENTIONS.PHP end -->
        <hr>
        <!-- INCLUDE COMMUNICATION-CHANNELS.PHP start -->
        <?php include 'content/tasks-and-projects.php';?>
        <!-- INCLUDE COMMUNICATION-CHANNELS.PHP end -->
        <hr>
        <!-- INCLUDE COMMUNICATION-CHANNELS.PHP start -->
        <?php include 'content/clockify-tracking.php';?>
        <!-- INCLUDE COMMUNICATION-CHANNELS.PHP end -->
        <hr>
        <!-- INCLUDE COMMUNICATION-CHANNELS.PHP start -->
        <?php include 'content/google-drive.php';?>
        <!-- INCLUDE COMMUNICATION-CHANNELS.PHP end -->
        <hr>
        <!-- INCLUDE COMMUNICATION-CHANNELS.PHP start -->
        <?php include 'content/figma-projects.php';?>
        <!-- INCLUDE COMMUNICATION-CHANNELS.PHP end -->
        <hr>
        <!-- INCLUDE COMMUNICATION-CHANNELS.PHP start -->
        <?php include 'content/github-repos.php';?>
        <!-- INCLUDE COMMUNICATION-CHANNELS.PHP end -->
        <hr>
        <!-- INCLUDE GETTING-PAID.PHP start -->
        <?php include 'content/getting-paid.php';?>
        <!-- INCLUDE GETTING-PAID.PHP end -->
        <hr>
        <!-- INCLUDE VACATIONS-HOLIDAYS-AND-DAYS-OFF.PHP start -->
        <?php include 'content/time-off.php';?>
        <!-- INCLUDE VACATIONS-HOLIDAYS-AND-DAYS-OFF.PHP end -->
        <hr>
    </main>
  </body>
</html>