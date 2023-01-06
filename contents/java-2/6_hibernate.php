    <!-- 
    create by : M@P
    create date : 27/03/2020 
    -->
<div class="card text-center">
      <div class="card-header">
        Hibernate ORM (Object Relational Mapping)
      </div>
      <div align="left">
      <p><strong>Object Relational Mapping</strong> Menggunakan Object sebagai representasi dari relasi database.</p>
      <p><strong>Hibernate.cfg.xml</strong> adalah file konfigurasi hibernate dengan format .xml.
      Di dalam file tersebut terdapat <code>hibernate-configuration</code> dan <code>session-factory</code> yang memiliki beberapa property :
      <ul>
      <li><code>name="hibernate.dialect"</code> </li>
      <li><code>name="hibernate.connection.driver_class"</code> </li>
      <li><code>name="hibernate.connection.url"</code> </li>
      <li><code>name="hibernate.connection.username"</code> </li>
      <li><code>name="hibernate.connection.password"</code> </li>
      <li><code>&lt;mapping resource="Buku.hbm.xml"&gt;&lt;/mapping&gt;</code> digunakan untuk menunjukkan File yang akan di Mapping</li>
      <li><code>name="hibernate.connection.password"</code> </li>

      </ul>
      <!-- end of Hibernate.cfg.xml -->
      </p>
      <p><strong>Buku.hbm.xml</strong> adalah file konfigurasi hibernate-mapping dengan format .xml.
      Di dalam file tersebut terdapat <code>hibernate-mapping</code> yang di dalamnya terdapat beberapa property :
      <ul>
      <li><code>&lt;class name = "com.enigma.kaknanda.entities.Buku" table = "buku"&gt;</code> artinya menggunakan class Buku, dan table buku pada database.  </li>
      <li><code>&lt;id name = "id" column = "id_buku" type = "int"&gt;</code> berarti nama property : id, dan nama field/ nama kolom  pada table buku : id_buku dengan type data int.</li>
      </ul>
      </p>
      
      <p>The rest is in the code. Try to make an application with menu like we used to.</p>
      <!-- end of Buku.hbm.xml -->
     
      </div>
      <div class="card-body">
        <h5 class="card-title">Hibernate ORM JDBC MySQL</h5>
        <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-intermediete/6_hibernate/6_hibernate.md" target="blank">See On Git...</a>
        
        </div>
        <div align="left">
        <table class="table table-bordered table-striped table-hover" cellpadding="5" cellspacing="0" border="1">
          <tr>
          <td>1. </td>
           <td><a href="index.php?page=javakit6&content=hibernate#bagian1">Hibernate ORM JDBC MySQL</a></td>
           
          </tr>
           <tr>
          <td>2. </td>
           <td><a href="index.php?page=javakit6&content=hibernate#bagian2">Hibernate ORM JDBC MySQL ~ Next Level 1</a></td>
          </tr>
           <tr>
          <td>3. </td>
           <td><a href="index.php?page=javakit6&content=hibernate#bagian3">Hibernate ORM JDBC MySQL ~ Next Level 2</a></td>
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
