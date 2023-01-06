    <!-- 
    create by : M@P
    create date : 19/02/2020 
    -->
<div class="card text-center">
      <div class="card-header">
        Java != Jawa
      </div>
      <div class="card-body">
        <h5 class="card-title">Kalkulator Sederhana</h5>
        <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-basic/4_kalkulator_sederhana/4_kalkulator_sederhana.md" target="blank">See On Git...</a>
       
        </div>
        <div align="left">
        <p>Materi kalkulator sederhana akan kita kita pelajari setelah teman - teman mengerti bagaimana menggunakan <b>Variabel</b> dan <b>Tipe Data</b> karena kita akan mulai belajar menggunakan operator - operator yang ada pada java. </p>
        <p>Beberapa hal yang harus diperhatikan teman - teman antara lain:</p>
        <ul>
        <li><b>Java Operator</b> adalah simbol - simbol yang digunakan untuk melakukan operasi tertentu</li>
        <li>Dalam materi kali ini kita akan membahas tentang operator <b>Aritmatika</b> dan <b>Penugasan</b></li>
        <li><b>Operator Aritmatika</b> yang akan digunakan terdapat pada baris <code>int hasil = parameter1 + parameter2;</code> dan <code>int hasil = angka1 % 4;</code></li>
        <li><b>Operator Penugasan</b> adalah yang kita gunakan untuk mendeklarasikan Variabel pada baris <code>String perintah = args[0];</code> dan <code>int angka1 = Integer.parseInt(args[0]);</code></li>
        <li><code>Integer.parseInt()</code> digunakan untuk merubah Tipe Data yang kita masukkan dari parameter yang kita masukkan menjadi Integer, karena parameter yang kita masukkan dari command line pasti berupa String.</li>
        </ul>
        </div>
        <div align="left">
        <table class="table table-bordered table-striped table-hover" cellpadding="5" cellspacing="0" border="1">
          <tr>
          <td>1. </td>
           <td><a href="index.php?page=java4&operator=penjumlahan">Penjumlahan</a></td>
          </tr>
          <tr>
          <td>2. </td>
           <td><a href="index.php?page=java4&operator=modulus">Modulus</a></td>
          </tr>
        </table>
       <?php 
       $content = "default";
       	if(isset($_GET['operator'])){
		$operator = $_GET['operator'];
 
		switch ($operator) {
			case 'penjumlahan':
				$content = "4_kalkulator_sederhana_penjumlahan.md";
				break;
			case 'modulus':
				$content = "4_modulus.md";
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
