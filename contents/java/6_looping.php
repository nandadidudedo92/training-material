    <!-- 
    create by : M@P
    create date : 19/02/2020 
    -->
<div class="card text-center">
      <div class="card-header">
        Looping
      </div>
      <div align="left">
      <p><b>Looping</b> atau perulangan adalah kegiatan mengulang perintah sampai batas tau kondisi yang kita inginkan. Beberapa hal yang harus diperhatikan adalah:</p>
      <ul>
      <li><code>do {</code> digunakan untuk melakukan pengulangan dari perintah yang berada di dalamnya. </li>
      <li><code>i++;</code> adalah operator yang digunakan untuk menambah nilai dari variabel <code>i</code> saat perulangan sedang dijalankan bisa juga kita mengganti dengan <code>i=i+1</code>.</li>

      <li><code> while (i < 5);</code> dapat kita terjemahkan dengan bahasa "Ketika nilai i kurang dari 5, maka hentikan perulangan". </li>
      <li><code>for (int i = 0; i < 10; i = i + 2)</code> dapat kita terjemahkan dengan "Ulangi perintah hingga nilai i kurang dari 10 dengan menambahkan 2 pada nilai i". </li>
      <li><code>for (String i : cars)</code> dapat kita terjemahkan dengan "Ulangi perintah untuk setiap objek String yang ada pada Arrays Car". </li>
      </ul>
      </div>
      <div class="card-body">
        <h5 class="card-title">Looping (Perulangan)</h5>
        </div>
        <div align="left">
        <table class="table table-bordered table-striped table-hover" cellpadding="5" cellspacing="0" border="1">
          <tr>
          <td>1. </td>
           <td><a href="index.php?page=java6&loop=dowhile">Do - While</a></td>
           <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-basic/6_do_while_loop/6_do_while_loop.md" target="blank">See On Git...</a></td>
          </tr>
          <tr>
          <td>2. </td>
           <td><a href="index.php?page=java6&loop=forloop">For - Loop</a></td>
            <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-basic/6_for_loop/6_for_loop.md" target="blank">See On Git...</a></td>
          </tr>
          <tr>
          <td>3. </td>
           <td><a href="index.php?page=java6&loop=foreach">For - Each</a></td>
             <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-basic/6_for_each_loop/6_for_each_loop.md" target="blank">See On Git...</a></td>
          </tr>
        </table>
       <?php 
       $content = "default";
       	if(isset($_GET['loop'])){
		$loop = $_GET['loop'];
 
		switch ($loop) {
			case 'dowhile':
				$content = "6_do_while_loop.md";
				break;
			case 'forloop':
				$content = "6_for_loop.md";
				break;
			case 'foreach':
				$content = "6_for_each_loop.md";
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
