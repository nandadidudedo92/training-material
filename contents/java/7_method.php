    <!-- 
    create by : M@P
    create date : 19/02/2020 
    -->
    <div class="card text-center">
      <div class="card-header">
        Java != Jawa
      </div>
      <div class="card-body">
        <h5 class="card-title">Method !!!</h5>
        </div>
        <div align="left">
        <p><b>Method</b> adalah sebuah blok program terpisah (diluar program utama) yang kita gunakan untuk menyelesaikan masalah khusus.Berikut adalah hal yang harus diperhatikan.</p>
        <ul>
        <li><code>static int tambah(int x, int y)</code> adalah method diluar main class dimana di dalamnya terdapat perintah untuk melakukan operasi penjumlahan dan akan mengembalikan hasil dengan tipe data int.</li>
        <li><code>return hasil;</code> digunakan untuk mengembalikan hasil dari operasi penjumlahan di dalam method tambah.</li>
        <li><code>tambah(angka1, angka2)</code> digunakan untuk memanggil method tambah yang dipanggil dan memasukkan variabel yang sesuai dengan tipe data yang dibutuhkan pada method tambah.</li>
        <li>Pastikan return value yang diminta oleh method sesuai dengan tipe data dari method yang sedang dipanggil.</li>
        </ul>
        </div>
        <div align="left">
        <table class="table table-bordered table-striped table-hover" cellpadding="5" cellspacing="0" border="1">
          <tr>
          <td>1. </td>
           <td><a href="index.php?page=java7&topic=calc">Kalkulator</a></td>
            <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-basic/7_method/7_method.md" target="blank">See On Git...</a></td>
          </tr>
          <tr>
          <td>2. </td>
           <td><a href="index.php?page=java7&topic=calc2">Kalkulator Beda File</a></td>
             <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-basic/7_kalkulator_beda_file/7_kalkulator_beda_file.md" target="blank">See On Git...</a></td>
          </tr>
          <tr>
        </table>
       <?php 
       $content = "default";
       	if(isset($_GET['topic'])){
		$topic = $_GET['topic'];
 
		switch ($topic) {
			case 'calc':
				$content = "7_method.md";
				break;
			case 'calc2':
				$content = "7_kalkulator_beda_file.md";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	
       $basedir = realpath(__DIR__);
       include($basedir . '/readmes/Parsedown.php');
        $contents = file_get_contents($basedir . '/readmes/'.$content,true);
        $Parsedown = new Parsedown();
        echo $Parsedown->text($contents);
        }
        ?>
        </div>
      <div class="card-footer text-muted">
        <a href="index.php?page=java" class="btn btn-primary">Kembali...</a>
      </div>
    </div>
