    <!-- 
    create by : M@P
    create date : 27/03/2020 
    -->
<div class="card text-center">
      <div class="card-header">
        JDBC MySQL
      </div>
      <div align="left">
      <p><strong>JDBC</strong> Java database connectivity untuk menghubungkan Java dan berbagai macam RDBMS.</p>
      <p>JDBC bertugas menyediakan koneksi ke database, sehingga kita bisa mengakses dan mengelola datanya dari program Java. </p>
      <ul>
      <li><code>DriverManager</code> adalah sebuah class yang mengelola driver.</li>
      <li><code>Driver</code> adalah interface yang menangani komunikasi dengan database.</li>   
      <li><code>Connection</code> adalah interface yang menyediakan method untuk menghubungi database.</li>     
      <li><code>Statement</code> adalah interface untuk mengeksekusi query.</li>        
      <li><code>ResultSet</code> adalah interface untuk menampung data hasil query.</li>     
      <li><code>com.mysql.jdbc.Driver</code> adalah driver JDBC untuk database MySQL </li>
      <li><code>conn = DriverManager.getConnection(DB_URL, USER, PASS);</code> adalah baris code untuk melakukan koneksi ke database dengan parameter yang sudah dibuat </li>
      <li><code>stmt = conn.createStatement();</code> adalah objek Statement untuk mengeksekusi Query MySQL </li>
      <li><code>String sql = "Select * from buku";</code> adalah Query yang akan di eksekusi.</li>
      <li><code>rs = stmt.executeQuery(sql);</code> adalah baris code yang mengeksekusi query yang telah dibuat dan dan hasilnya akan disimpan ke dalam objek rs (ResultSet)..</li>
      <li><code>rs.getInt("id_buku")</code> digunakan untuk mengambil data dari field id_buku pada database dengan tipe data int</li>
      <li><code>rs.getString("judul")</code> digunakan untuk mengambil data dari field judul pada database dengan tipe data String</li>
      <li><code>stmt.execute(sqlInsert);</code> digunakan untuk mengeksekusi Query Insert</li>
      <li><code>stmt.executeUpdate(sqlUpdate);</code> digunakan untuk mengeksekusi Query Update</li>
      </ul>
     
      </div>
      <div class="card-body">
        <h5 class="card-title">JDBC MySQL</h5>
        </div>
        <div align="left">
        <table class="table table-bordered table-striped table-hover" cellpadding="5" cellspacing="0" border="1">
          <tr>
          <td>1. </td>
           <td><a href="index.php?page=javakit5&content=jdbcApp">JDBC in Java Application</a></td>
           <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-intermediete/5_jdbc/5_jdbc.md" target="blank">See On Git...</a></td>
         
          </tr>
          <tr>
          <td>2. </td>
           <td><a href="index.php?page=javakit5&content=jdbcMvn">JDBC in Maven Structure</a></td>
           <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-intermediete/5_jdbc_mvn/5_jdbc_mvn.md" target="blank">See On Git...</a></td>
        
          </tr>
        </table>
       <?php 
      
       	if(isset($_GET['content'])){
		$content = $_GET['content'];
 
		switch ($content) {
			case 'jdbcApp':
				include 'file/5_jdbcApp.php';
				break;
			case 'jdbcMvn':
				include 'file/5_jdbcMvn.php';
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
