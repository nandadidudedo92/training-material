<!DOCTYPE html>
<html lang="en">
<head>

    <title>
        Training Material
    </title>

    
	<link rel="shortcut icon" href="assets/favicon.png">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src='main.js'></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">EnigmaCamp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=java">Java Basic <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=javaLanjutan">Java Lanjutan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=springBoot">SpringBoot <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=liquibase">Database Migration <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=html">HTML<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=html#css">CSS<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=html#bootstrap">Bootstrap<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=game">Game <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <!-- hitwebcounter Code START -->
      <a class="nav-link disabled" href="https://www.hitwebcounter.com" target="_blank">
      <img src="https://hitwebcounter.com/counter/counter.php?page=7197705&style=0006&nbdigits=5&type=page&initCount=0" title="User Stats" Alt="webcounterwebsite"   border="0" >
      </a> 
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://ceritabodohtakbermutu.blogspot.com/" target="_blank">See On My Blog <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>  
    <!-- end of navigation -->

    <div class="container">
    <div>
        <h1>Someone's Said :</h1>
      </div>

      <blockquote class="blockquote">
        <p class="mb-0">“Experience is the name everyone gives to their mistakes.”
        </p>
        <footer class="blockquote-footer">  Oscar   <cite title="Source Title">Wilde</cite></footer>
      </blockquote>
    </div>
    
    <!-- end of quotes  -->

    <?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
      case 'java':
				include "contents/java/java.php";			  
				break;
			case 'java1':
				include "contents/java/1_buat_build_run_java.php";
				break;
			case 'java2':
				include "contents/java/2_bermain_dengan_parameter.php";
				break;
			case 'java3':
				include "contents/java/3_tipe_data_dan_variabel.php";
				break;
			case 'java4':
				include "contents/java/4_kalkulator_sederhana.php";
				break;
			case 'java5':
        include "contents/java/5_statement.php";
      break;
			case 'java6':
				include "contents/java/6_looping.php";
				break;
			case 'java7':
				include "contents/java/7_method.php";
				break;
			case 'java8':
				include "contents/java/8_arrays.php";
        break;
        // end of java basic
      case "javaLanjutan":
        include "contents/java-2/java2.php";
      break;
      case "javakit1":
        include "contents/java-2/1_scanner.php";
      break;
      case "javakit2":
        include "contents/java-2/2_buffered_reader.php";
      break;
      case "javakit3":
        include "contents/java-2/3_file_parent.php";
      break;
      case "javakit4":
        include "contents/java-2/4_exception_parent.php";
      break;
      case "javakit5":
        include "contents/java-2/5_jdbc_parent.php";
      break;
      case "javakit6":
        include "contents/java-2/6_hibernate.php";
      break;
      case "javakit7":
        include "contents/java-2/7_servlet_jsp.php";
      break;      
        // end of java intermediete      
      case "html":
        include "contents/html/materi-html.php";
      break;      
      case "html1":
        include "contents/html/1_html_structure.php";
      break;      
      case "html2":
        include "contents/html/2_paragraf.php";
      break;    
      case "html3":
        include "contents/html/3_list.php";
      break;     
      case "html4":
        include "contents/html/4_bioskop.php";
      break;    
        // end of html

        case "game":
        include "contents/game/game.php";
      break;    
        // end of game

        case "springBoot":
        include "contents/springboot/springboot.php";
      break;    

        case "spring_crud":
        include "contents/springboot/springboot_crud.php";
      break;    
        // end of springboot
        
        case "liquibase":
        include "contents/liquibase/liquibase.php";
      break;    
        // end of liquibase        
        
        case "baca_java_basic":
        include "contents/baca/baca_java_basic.php";
      break;    
        case "baca_java_lanjutan":
        include "contents/baca/baca_java_lanjutan.php";
      break;    
        case "baca_html":
        include "contents/baca/baca_html.php";
      break;    
        case "baca_java_springboot":
        include "contents/baca/baca_java_springboot.php";
      break;    
        // end of baca
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "contents/index.php";
	}
 
	 ?>

    </div>
    <!-- end of container  -->

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Horizon -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9085002717331157"
     data-ad-slot="1886687071"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>

</html>