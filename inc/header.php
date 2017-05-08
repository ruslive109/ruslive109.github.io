<html>
<head>
	<title><?php echo $pageTitle; ?></title>
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<!--- BACKGROUND VIDEO CODE INSERT HERE -->
  
  </div>
	<header class="header">
    <div class="col-container">
  		<h1>
        <a class="logo" href="./">
          
          <span class="logo-name">Do Do List v2</span>
        </a>
      </h1>

  		<ul class="nav">
        <li class="nav-item tasks<?php if ($page == "tasks") { echo " on"; } ?>"><a class="nav-link" href="task_list.php">Tasks</a></li>
        <li class="nav-item projects<?php if ($page == "projects") { echo " on"; } ?>"><a class="nav-link" href="project_list.php">Projects</a></li>
        <li class="nav-item reports<?php if ($page == "reports") { echo " on"; } ?>"><a class="nav-link" href="reports.php">Reports</a></li>
      </ul>
    </div>
  </header>
	<div id="content">
