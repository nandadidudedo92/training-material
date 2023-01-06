    <!-- 
    create by : M@P
    create date : 19/02/2020 
    -->
    
    <div class="card text-center">
      <div class="card-header">
        Java != Jawa
      </div>
      <div class="card-body">
        <h5 class="card-title">Cara Membuat, Compile, Run File Java Sangat Manual Sekali</h5>
        <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-basic/1_buat_build_run_java/1_buat_build_run_java.md" target="blank">See On Git...</a>
       
        <div align="left"><p class="card-text">Materi kali ini kita akan mencoba untuk membuat program <strong>Java Sangat Sederhana</strong>, dengan kebiasaan - kebiasaan yang akan terus diulang hingga teman - teman akan mengingat apa saja yang telah dipelajari ketika berada di dalam kelas. Berikut ini adalah beberapa hal yang harus diperhatikan :</p>
        <ul>
         <li>Pastikan file Java menggunakan extensi <b>*.java</b>.</li>
         <li>Gunakan <strong>Command Prompt</strong> untuk seluruh materi basic pemrograman, khususnya <strong>JAVA</strong>.</li>
         <li>Perhatikan Nama dari <b>File Java</b> dan Nama dari Class yang harus dibuat menggunakan <b>Pascal Case</b>.</li>
         <li>Berikut adalah beberapa perintah dasar dan JAVA pada Command Prompt :</li>
         <ul>
         <li><b>cd</b> <em>spasi</em> nama_folder digunakan untuk pindah directory(folder).</li>
         <li><b>code .</b> digunakan untuk membuka visual studio code di dalam directory dimana anda berada.</li>
         <li>Gunakan  <code>Tab</code> untuk mengarahkan ke directory/file dengan cepat.</li>
         <li><b>javac</b> <em>spasi</em> nama_file.java digunakan untuk compile file <b>*.java</b> dan akan membuat file baru dengan ekstensi <b>*.class</b></li>
         <li><b>java</b> <em>spasi</em> nama_class untuk menjalankan file tersebut dari <b>Command Prompt</b>.</li>
         <li><code>class Simple</code></b> digunakan untuk mendeklarasikan class yang akan kita buat.</li>
         <li><code>public static void main(String[] args)</code> adalah method utama pada Aplikasi Java yang kita buat. Pastikan baris code yang akan kita buat berada di dalam method ini. </li>
         <li>Pastikan nama file *.java sesuai dengan nama <b>class</b> agar saat kita compile, *.class yang terbuat dari file *.java yang kita buat sama.  </li>
         <li><code>System.out.println();</code> digunakan untuk mencetak hal yang kita inginkan pada baris baru.</li>
         </ul>

        </ul>
        </div>
        <!-- end of tips and trick -->
        </div>
        <div align="left">
        <p>Hands On :</p>
        
       <?php 
       $basedir = realpath(__DIR__);
       include($basedir . '/readmes/Parsedown.php');
        $contents = file_get_contents($basedir . '/readmes/1_buat_build_run_java.md',true);
        $Parsedown = new Parsedown();
        echo $Parsedown->text($contents);
        ?>
        </div>
      <div class="card-footer text-muted">
        <a href="index.php?page=java" class="btn btn-primary">Kembali...</a>
      </div>
    </div>