    <!-- 
    create by : M@P
    create date : 19/02/2020 
    -->
<div class="card text-center">
      <div class="card-header">
        Java != Jawa
      </div>
      <div class="card-body">
        <h5 class="card-title">Tipe Data dan Variabel</h5>
        <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-basic/3_tipe_data_dan_variabel/3_tipe_data_dan_variabel.md" target="blank">See On Git...</a>
       
        <div align="left">
        <p>Materi kali ini kita akan belajar tentang <b>Tipe Data</b> dan <b>Variabel</b>. <b>Tipe data</b> adalah tipe dari data yang akan diolah oleh aplikasi yang akan kita gunakan, sedangakan <b>Variabel</b> adalah tempat menampung isi dari tipe data yang akan kita gunakan. Hal - hal yang harus kita perhatikan pada Tipe Data dan Variabel pada Java antara lain :</p>
        <ul>
        <li>Teman - teman harus mengingat ada <b>2 Tipe Data</b> yang akan sangat sering digunakan, yaitu <b>String</b> dan <b>int</b>.</li>
        <li><b>String</b> digunakan untuk mengolah seluruh karakter yang ada di keyboard laptop/pc teman - teman.</li>
        <li><b>int</b> hanya digunakan untuk mengolah angka, biasanya digunakan untuk melakukan perhitungan matematika.</li>
        <li><b>boolean</b> hanya memiliki 2 value, yaitu <b>true</b> atau <b>false</b></li>
        </ul>

        </div>
        <!-- end of tips and trick -->
        </div>
        <div align="left">
        <p>Hands On :</p>
       <?php 
       $basedir = realpath(__DIR__);
       include($basedir . '/readmes/Parsedown.php');
        $contents = file_get_contents($basedir . '/readmes/3_tipe_data_dan_variabel.md',true);
        $Parsedown = new Parsedown();
        echo $Parsedown->text($contents);
        ?>
        </div>
      <div class="card-footer text-muted">
        <a href="index.php?page=java" class="btn btn-primary">Kembali...</a>
      </div>
    </div>
