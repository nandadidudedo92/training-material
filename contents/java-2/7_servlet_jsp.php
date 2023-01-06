    <!-- 
    create by : M@P
    create date : 27/03/2020 
    -->
<div class="card text-center">
      <div class="card-header">
        Servlet & JSP
      </div>
      <div align="left">
      <p><strong> Servlet = Server Applet = Server Java Applet = Server Java Application.</strong></p>
      <p><strong> Java Server Page (JSP)</strong> adalah html yang dibungkus java </p>
      <p><strong> Servlet </strong> adalah File Java yang berjalan di server supaya bisa menyisipkan HTML untuk response. 
     <ul>
    
      </ul>
      </p>
     
      </div>
      <div class="card-body">
        <h5 class="card-title"> Java Server Page (JSP)</h5>
        
        </div>
        <div align="left">
        <table class="table table-bordered table-striped table-hover" cellpadding="5" cellspacing="0" border="1">
          <tr>
          <td>1. </td>
           <td><a href="index.php?page=javakit6&content=hibernate#bagian1">JSP</a></td>
           <td>
        <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-intermediete/7_jsp/7_jsp.md" target="blank">See On Git...</a></td>
           
          </tr>
        </table>
       <?php 
      
       	if(isset($_GET['content'])){
		$content = $_GET['content'];
 
		switch ($content) {
			case 'hibernate':
				include 'file/6_hibernate.php';
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	
        }
        ?>
        </div>
      <div class="card-footer text-muted">
        <a href="index.php?page=javaLanjutan" class="btn btn-primary">Kembali...</a>
      </div>
    </div>
