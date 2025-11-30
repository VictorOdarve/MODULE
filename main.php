<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<link rel="stylesheet" href="h1.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
}


header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}


nav {
  float: left;
  width: 10%;
  background: #ccc;
  padding: 20px;
  min-height: calc(100vh - 130px);
}


nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 90%;
  background-color: #bd9595ff;
  min-height: calc(100vh - 130px); 
}


section::after {
  content: "";
  display: table;
  clear: both;
}


footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
  position: relative;
  bottom: 0;
  width: 100%;
}


@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<h2>ODARVE, VICTOR E.</h2>

<header>
  <h2>FAMOUS DESTINATION</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="main.php?page=london">London</a></li>
      <li><a href="main.php?page=paris">Paris</a></li>
      <li><a href="main.php?page=tokyo">Tokyo</a></li>
    </ul>
  </nav>
  
  <article>
   <!-- content area -->



    <?php
        if (isset($_GET['page'])){
            $page=$_GET['page'];

            switch ($page){
                case 'london':
                    include 'london.php';
                    break;

                    case 'paris':
                        include 'paris.php';
                        break;

                        case 'tokyo':
                            include 'tokyo.php';
                            break;

            }

        }
    ?>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>