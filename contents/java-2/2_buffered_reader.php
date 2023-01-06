    <!-- 
    create by : M@P
    create date : 19/02/2020 
    -->
    
    <div class="card text-center">
      <div class="card-header">
       Buffered Reader vs Scanner <br/>
        <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-intermediete/2_buffered_reader/2_buffered_reader.md" target="blank">See On Git...</a>
      </div>
      <div class="card-body">
        <h5 class="card-title">Buffered Reader</h5>
       
        <div align="left"><p class="card-text">Tugas anda adalah membandingkan <strong>BufferedReader</strong> dan <strong>Scanner</strong>:</p>
        <ul>
         <li><code>BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(System.in));</code> digunakan untuk inisiasi objek yang akan  dimasukan melalui System.in mengggunakan InputStreamReader</li>
         <li><code>String username = bufferedReader.readLine();</code> digunakan untuk mendeklarasikan username dengan tipe data String, berasal dari input yang diketik dan ditampung oleh <code>username</code>.</li>
         <li><code>String username = bufferedReader.readLine();</code> digunakan untuk mendeklarasikan angka2 berasal dari input yang diketik dan ditampung oleh <code>password</code>.</li>  
         <li><code>BufferedReader </code> hanya digunakan untuk membaca objek berupa String. Terutama untuk menangani String yang memiliki value besar / panjang.</li>
         <li><code>BufferedReader </code> mengambil objek String menggunakan <code>readLine()</code>.</li>
         </ul>

        </ul>
        </div>
        <!-- end of tips and trick -->
        </div>
        <div align="left">
        <p>Hands On :</p>
        
        <ol>
<li>
<p>Buka IntelliJ IDEA</p>
</li>
<li>
<p>Buat Project BufferedReader</p>
</li>
<li>Tulis <code>code</code> di bawah ini</li>
<script src="https://gist.github.com/nandadidudedo92/519cda6d76c56fe6e69d0a54769b63cd.js"></script>
<li>Run</li>
</ol>
      
        </div>
      <div class="card-footer text-muted">
        <a href="index.php?page=javaLanjutan" class="btn btn-primary">Kembali...</a>
      </div>
    </div>