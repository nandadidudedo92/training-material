    <!-- 
    create by : M@P
    create date : 19/02/2020 
    -->
    <div class="card text-center">
      <div class="card-header">
        Java != Jawa
      </div>
      <div class="card-body">
        <h5 class="card-title">Statement (Kondisi)</h5>
        <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-basic/5_statement/5_statement.md" target="blank">See On Git...</a>
       
        </div>
        <div align="left">
        <p> Statement adalah baris code yang mengatur jalannya aplikasi yang kita buat dengan pengkondisian, pada bahasa sehari - hari dapat kita terjemahkan dengan kalimat yang menggunakan kata <b>Jika - Maka</b>. Beberapa hal yang harus kita perhatikan antara lain:</p>
        <ul>
        <li><b>if - else</b> biasa digunakan untuk membuat kondisi yang memiliki perbandingan perhitungan.</li>
        <li><b>Switch - Case</b> biasa digunakan untuk membuat kondisi yang tidak terlalu banyak dan tidak membutuhkan perhitungan.</li>
        <li>Pada baris code <code>if (x < 5) </code> kita menggunakan operator <b>kurang dari</b> untuk menentukan alur program dengan kondisi yang telah ditetapkan dengan membandingkan nilai <code>x</code> dan angka <code>5</code>.</li>
        <li><code>else</code> digunakan untuk menentukan pengecualian yang tidak kita kondisikan.</li>
        <li><code>switch (operator)</code> digunakan untuk mendeklarasikan kondisi dari variabel <code>operator</code> yang telah kita dapatkan dari parameter yang telah dikirim.</li>
        <li><b>case "tambah":</b> digunakan untuk menentukan alur program jika kita memasukkan parameter dengan value "tambah".</li>
        <li><b>default:</b> digunakan untuk menentukan default dari alur program jika tidak ditemukan kondisi yang sesuai dengan case yang telah kita buat.</li>


        </ul>
        </div>
        <div align="left">
        <table class="table table-bordered table-striped table-hover" cellpadding="5" cellspacing="0" border="1">
          <tr>
          <td>1. </td>
           <td><a href="index.php?page=java5&statement=ifelse">If - Else</a></td>
          </tr>
          <tr>
          <td>2. </td>
           <td><a href="index.php?page=java5&statement=case">Switch - Case</a></td>
          </tr>
        </table>
       <?php 
       $content = "default";
       	if(isset($_GET['statement'])){
		$statement = $_GET['statement'];
 
		switch ($statement) {
			case 'ifelse':
				$content = "5_if_statement.md";
				break;
			case 'case':
				$content = "5_case_statement.md";
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
