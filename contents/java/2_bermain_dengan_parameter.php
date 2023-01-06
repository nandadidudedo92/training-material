    <!-- 
    create by : M@P
    create date : 19/02/2020 
    -->
    
    <div class="card text-center">
      <div class="card-header">
        Java != Jawa
      </div>
      <div class="card-body">
        <h5 class="card-title">Cara Bermain Dengan Argumen (Parameter) pada Java</h5>
        <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-basic/2_bermain_dengan_parameter/2_bermain_dengan_parameter.md" target="blank">See On Git...</a>
       
        <div align="left">
        <p>Materi kali ini kita akan mencoba untuk <b>Memasukkan Parameter</b> pada aplikasi <b>Java</b> melalui command prompt. Beberapa hal yang harus diperhatikan antara lain :</p>
        <ul>
        <li><b>args[0]</b> adalah argumen yang dimasukkan melalui command prompt dengan index 0. </li>
        <li><b>args[1]</b> adalah argumen yang dimasukkan melalui command prompt dengan index 1, dst. </li>
        <li>parameter pertama dengan index 0 berada setelah nama <b>Class</b> yang kita panggil.</li>
        <li><b>java</b> <em>spasi</em> <b>nama_class</b> <em>spasi</em> <b>parameter_1</b> <em>spasi</em> <b>parameter_2</b> adalah cara memanggil class dan memasukkan parameter ke dalam class tersebut.</li>
        <li><b>parameter_1</b> adalah args[0] atau parameter dengan index 0.</li>
        <li><b>parameter_2</b> adalah args[1] atau parameter dengan index 1.</li>        
        </ul>

        </div>
        <!-- end of tips and trick -->
        </div>
        <div align="left">
        <p>Hands On :</p>
       <?php 
       $basedir = realpath(__DIR__);
       include($basedir . '/readmes/Parsedown.php');
        $contents = file_get_contents($basedir . '/readmes/2_bermain_dengan_parameter.md',true);
        $Parsedown = new Parsedown();
        echo $Parsedown->text($contents);
        ?>
        </div>
      <div class="card-footer text-muted">
        <a href="index.php?page=java" class="btn btn-primary">Kembali...</a>
      </div>
    </div>
