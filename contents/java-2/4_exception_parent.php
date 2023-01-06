    <!-- 
    create by : M@P
    create date : 11/03/2020 
    -->
<div class="card text-center">
      <div class="card-header">
        Exception (Error Handling)
      </div>
      <div align="left">
      <p><strong>Exception</strong> digunakan saat aplikasi anda menemukan error dengan masalah sedikit, contoh kecil adalah kesalahan input dan ingin diperlakukan sesuai keinginan developernya.</p>
      <p>Dalam Contoh kasus sehari hari : 
      <ul>Di mata Cewek :
      <li> Cowok Ngerokok itu jelek.</li>
      <li> Cowok Jelek, Kalau merokok tambah jelek.</li>
      <li> Cowok Ganteng, Kalau merokok tetep Ganteng.</li>
      </ul>
      </p>
      <p>
      Nah, Exception itu perlakuan si cewek ke si Cowok ganteng.
      </p>
      <ul><a href="https://www.geeksforgeeks.org/types-of-exception-in-java-with-examples/" target="blank"> Macam - macam Exception</a> <-- Baca</ul>
      <p><b>Try - Catch</b> salah satu statement yang dapat menangkal error dan mencegah aplikasi anda berhenti. </p>
      <ul>
      <li>Bungkus statement anda yang berpotensi error di dalam <code>try</code> .</li>
      <li>Bungkus statement yang akan anda lakukan jika terjadi error di dalam <code>catch</code> .</li>      
      </ul>
      <p><strong>Throw</strong>  dapat kita gunakan ketika ada beberapa kondisi yang tidak sesuai yang diharapkan.</p>
      <ul>
      <li><code>throw new ArithmeticException(angka kurang dari 5);</code> kita membuat exception jika angka kurang dari 5.</li>
      </ul>
      <p><strong>Throws</strong>  dapat kita gunakan ketika kita akan menggunakan lebih dari 1 Exception.</p>
      <ul>
      <li><code>System.out.println("ArithmeticException :"+e);</code> mencetak error yang ditangkap.</li>

      </ul>
      </div>
      <div class="card-body">
        <h5 class="card-title">Exception (Error Handling)</h5>
        </div>
        <div align="left">
        <table class="table table-bordered table-striped table-hover" cellpadding="5" cellspacing="0" border="1">
          <tr>
          <td>1. </td>
           <td><a href="index.php?page=javakit4&content=tryCatch">Try - Catch</a></td>
           <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-intermediete/4_exception_trycatch/4_exception_trycatch.md" target="blank">See On Git...</a></td>
          </tr>
          <tr>
          <td>2. </td>
           <td><a href="index.php?page=javakit4&content=throw">Throw</a></td>
           <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-intermediete/4_exception_throw/4_exception_throw.md" target="blank">See On Git...</a></td>
          </tr>
          <tr>
          <td>3. </td>
           <td><a href="index.php?page=javakit4&content=throws">Throws</a></td>
           <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-intermediete/4_exception_throws/4_exception_throws.md" target="blank">See On Git...</a></td>
        
          </tr>
          <tr>
        </table>
       <?php 
      
       	if(isset($_GET['content'])){
		$content = $_GET['content'];
 
		switch ($content) {
			case 'tryCatch':
				include 'file/4_try_catch.php';
				break;
			case 'throw':
				include 'file/4_throw.php';
				break;
			case 'throws':
				include 'file/4_throws.php';
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
