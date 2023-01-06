    <!-- 
    create by : M@P
    create date : 11/03/2020 
    -->
<div class="card text-center">
      <div class="card-header">
        File Input / Output (I/O) 
      </div>
      <div align="left">
      <p><b>File</b> adalah kelas dari package java.io yang membantu kita untuk bekerja dengan files. </p>
      <ul>
      <li><code>File myObj = new File("filename.txt");</code> adalah perintah yang menunjukan lokasi file bernama filename.txt di dalam project. </li>
      <li><code>myObj.createNewFile()</code> adalah perintah yang digunakan untuk membuat file bernama filename.txt di dalam project. </li>
      <li><code>myObj.exists()</code> adalah perintah yang digunakan untuk melakukan pengecekan apakah objek bernama filename.txt berada pada tempatnya. </li>
      <li><code>myObj.getName()</code> adalah perintah untuk yang digunakan untuk mengambil nama file dari objek yang di tuju. </li>
      <li><code>myObj.getAbsolutePath()</code> adalah perintah yang digunakan untuk mengambil data tempat penyimpanan file tersebut. </li>
      <li><code>myObj.canWrite()</code> adalah perintah untuk yang digunakan untuk melakukan pengecekan apakah objek bernama filename.txt dapat di write atau tidak. </li>
      <li><code>myObj.length()</code> adalah perintah untuk yang digunakan untuk mengambil ukuran file tersebut dan mengembalikannya dengan ukuran bytes. </li>
      </ul>
      </div>
      <div class="card-body">
        <h5 class="card-title">File Input / Output</h5>
        </div>
        <div align="left">
        <table class="table table-bordered table-striped table-hover" cellpadding="5" cellspacing="0" border="1">
          <tr>
          <td>1. </td>
           <td><a href="index.php?page=javakit3&loop=create">Create File</a></td>
           <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-intermediete/3_file_create/3_file_create.md" target="blank">See On Git...</a></td>
          </tr>
          <tr>
          <td>2. </td>
           <td><a href="index.php?page=javakit3&loop=read">Read File Info</a></td>
           <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-intermediete/3_file_read_info/3_file_read_info.md" target="blank">See On Git...</a></td>
          </tr>
          <tr>
          <td>3. </td>
           <td><a href="index.php?page=javakit3&loop=reading">Read File Contents</a></td>
           <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-intermediete/3_file_read_contents/3_file_read_contents.md" target="blank">See On Git...</a></td>
          </tr>
        </table>
       <?php 
      
       	if(isset($_GET['loop'])){
		$loop = $_GET['loop'];
 
		switch ($loop) {
			case 'create':
				include 'file/3_file_create.php';
				break;
			case 'read':
				include 'file/3_file_read_info.php';
				break;
			case 'reading':
				include 'file/3_file_read_contents.php';
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
