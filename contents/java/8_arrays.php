    <!-- 
    create by : M@P
    create date : 19/02/2020 
    -->
    <div class="card text-center">
      <div class="card-header">
        Java != Jawa
      </div>
      <div class="card-body">
        <h5 class="card-title">Arrays</h5>
        </div>
        <div align="left">
        <p><b>Arrays</b> digunakan untuk menyimpan banyak data dalam satu Variabel. Banyaknya data yang disimpan akan disimpan bersamaan dengan index dari value setiap data yang dimulai dari 0. Hal - hal yang harus diperhatikan antara lain:</p>
        <ul>
        <li><code><a href="index.php?page=java8&topic=basic#bot">String[] cars = { "Volvo", "BMW", "Ford", "Mazda" };</a></code> adalah baris code dimana kita melakukan inisiasi Variabel bernama cars dengan Tipe Data Array yang menyimpan value dengan Tipe Data String pada setiap indexnya.</li>
        <li><code><a href="index.php?page=java8&topic=basic#bot">int[] myNum = { 10, 20, 30, 40 };</a></code> adalah baris code dimana kita melakukan inisiasi Variabel bernama myNum dengan Tipe Data Array yang menyimpan value dengan Tipe Data int pada setiap indexnya.</li>
        <li><code><a href="index.php?page=java8&topic=basic#bot">for (String car : cars)</a> </code> adalah perulangan ForEach yang digunakan untuk memanggil setiap isi dari array cars.</li>
        <li><code><a href="index.php?page=java8&topic=basic#bot">for (int i = 0; i < cars.length; i++)</a> </code> adalah perulangan For yang digunakan untuk memanggil setiap isi dari array cars menggunakan index i yang telah di deklarasikan dimulai dari 0 hingga nilai i kurang dari banyaknya isi dari array cars.</li>
        <li><code><a href="index.php?page=java8&topic=basic2#bot">numbers2 = new int[] { 42, 55, 99 };</a> </code> adalah baris code yang menuliskan isi dari array numbers2.</li>
        <li><code><a href="index.php?page=java8&topic=basic2#bot">numbers2[2] = 100;</a> </code> digunakan untuk mengganti array numbers2 dengan index 2</li>
        <li><code><a href="index.php?page=java8&topic=sorting#bot">for (int i = 1; i < numbers.length; i++)</a> </code> digunakan untuk melakukan pengulangan dari setiap isi numbers dengan index i</li>
        <li><code><a href="index.php?page=java8&topic=sorting#bot">for (int j = i; j > 0; j--)</a>  </code> digunakan untuk melakukan pengulangan dan mengambil setiap isi dari index j yang nilainya sama dengan i dan lebih besar dari 0</li>
        <li><code><a href="index.php?page=java8&topic=sorting#bot">if (numbers[j] < numbers[j - 1]) </a></code> memiliki arti "Jika array numbers dengan index j lebih kecil dari array numbers dengan index  j dikurangi 1, maka ".</li>
        <li><code><a href="index.php?page=java8&topic=sorting#bot">temp = numbers[j]; </a></code> memiliki arti "isi variabel temp dengan nilai dari array numbers dengan index j".</li>
        <li><code><a href="index.php?page=java8&topic=sorting#bot">numbers[j] = numbers[j - 1]; </a></code> memiliki arti "ganti isi arrays index j dengan isi dari array numbers dengan index j dikurangi 1". </li>
        <li><code><a href="index.php?page=java8&topic=sorting#bot">numbers[j - 1] = temp;</a></code> memiliki arti "ganti isi dari arrays numbers index j dikurangi 1 dengan isi dari temp".</li>
        <li><code><a href="index.php?page=java8&topic=arrsearching#bot">if (cars[i].equals("Ford")) {
                found = i;
            }</a></code> berarti ketika perulangan sedang berjalan sesuai dengan index <code>i</code> dan ditemukan nilai <b>Ford</b> pada array cars, maka akan mengisi variabel found dengan nilai <code>i</code>, dimana <code>i</code> adalah index dari array cars tersebut.</li>
        <li><code><a href="index.php?page=java8&topic=multi#bot">int[][] arr = { { 1, 2 }, { 3, 4 } }; </a></code> dapat kita artikan dengan <code>int[][] arr</code> deklarasikan multidimensional arrays dengan nama variabel arr, dengan <code>{ 1, 2 }</code> berada pada dimensi 0 dan <code>{ 3, 4 }</code> pada dimensi 1.</li>
        <li><a href="index.php?page=java8&topic=arrlist#bot"><code>ArrayList < String > cars = new ArrayList < String > ();</code></a> membuat sebuat array list dengan tipe data String pada array tersebut.</li>
        <li><code><a href="index.php?page=java8&topic=arrlist#bot" > cars.add("Volvo");</a></code> digunakan untuk mengisi array list cars. </li>
        </ul>
        </div>
        <div align="left">
        <table class="table table-bordered table-striped table-hover" cellpadding="5" cellspacing="0" border="1">
          <tr>
          <td>1. </td>
           <td><a href="index.php?page=java8&topic=basic">Arrays Basic</a></td>
            <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-basic/8_arrays/8_arrays.md" target="blank">See On Git...</a></td>
          </tr>
          <tr>
          <td>2. </td>
           <td><a href="index.php?page=java8&topic=basic2">Arrays Basic 2</a></td>
          <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-basic/8_arrays_basic/8_arrays_basic.md" target="blank">See On Git...</a></td>
          </tr>
          <tr>
          <td>3. </td>
           <td><a href="index.php?page=java8&topic=sorting">Arrays Sorting</a></td>          
          <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-basic/8_arrays_sorting/8_arrays_sorting.md" target="blank">See On Git...</a></td>
          </tr>
          <tr>
          <td>4. </td>
           <td><a href="index.php?page=java8&topic=arrsearching">Arrays Searching</a></td>
            <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-basic/8_arrays_searching/8_arrays_searching.md" target="blank">See On Git...</a></td>
         </tr>
          <tr>
          <td>5. </td>
           <td><a href="index.php?page=java8&topic=multi">Multidimensional Arrays</a></td>
           <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-basic/8_arrays_multidimensional/8_arrays_multidimensional.md" target="blank">See On Git...</a></td>
         </tr>
          <td>6. </td>
           <td><a href="index.php?page=java8&topic=arrlist">Array List</a></td>
           <td><a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-basic/8_arrays_list/8_arrays_list.md" target="blank">See On Git...</a></td>
          </tr>
          <tr>
        </table>
       <?php 
       $content = "default";
       	if(isset($_GET['topic'])){
		$topic = $_GET['topic'];
 
		switch ($topic) {
			case 'basic':
				$content = "8_arrays.md";
				break;
			case 'basic2':
				$content = "8_arrays_basic.md";
				break;
			case 'sorting':
				$content = "8_arrays_sorting.md";
				break;
			case 'arrsearching':
				$content = "8_arrays_searching.md";
				break;
			case 'multi':
				$content = "8_arrays_multidimensional.md";
				break;
			case 'arrlist':
				$content = "8_arrays_list.md";
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
      <div class="card-footer text-muted" id="bot">
        <a href="index.php?page=java" class="btn btn-primary">Kembali...</a>
      </div>
    </div>
