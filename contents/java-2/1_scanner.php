    <!-- 
    create by : M@P
    create date : 19/02/2020 
    -->
    
    <div class="card text-center">
      <div class="card-header">
        <p>Java != Jawa <br/>
        <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-intermediete/1_java_scanner/1_java_scanner.md" target="blank">See On Git...</a></p>
      </div>
      <div class="card-body">
        <h5 class="card-title">Membuat aplikasi interaktif dengan Scanner</h5>
       
        <div align="left"><p class="card-text">Materi kali ini kita akan  <strong>BufferedReader</strong>:</p>
        <ul>
         <li><code>Scanner myObj = new Scanner(System.in);</code> digunakan untuk inisiasi objek yang masuk dari melalui System.in</li>
         <li><code>int angka1 = Integer.parseInt(myObj.nextLine());</code> digunakan untuk mendeklarasikan angka1 berasal dari input yang diketik dan ditampung oleh <code>myObj</code>.</li>
         <li><code>int angka2 = Integer.parseInt(myObj.nextLine());</code> digunakan untuk mendeklarasikan angka2 berasal dari input yang diketik dan ditampung oleh <code>myObj</code>.</li>  
         </ul>

        </ul>
        </div>
        <!-- end of tips and trick -->
        </div>
        <div align="left">
        <p>Hands On :</p>
        
      <ol>
<li class="has-line-data" data-line-start="0" data-line-end="2">
<p class="has-line-data" data-line-start="0" data-line-end="1">Buka <code>CMD</code></p>
</li>
<li class="has-line-data" data-line-start="2" data-line-end="4">
<p class="has-line-data" data-line-start="2" data-line-end="3">masuk ke <code>Drive D:/</code></p>
</li>
<li class="has-line-data" data-line-start="4" data-line-end="6">
<p class="has-line-data" data-line-start="4" data-line-end="5">mkdir <strong>materi</strong>, masuk ke folder <strong>materi</strong></p>
</li>
<li class="has-line-data" data-line-start="6" data-line-end="8">
<p class="has-line-data" data-line-start="6" data-line-end="7">mkdir <strong>1_java_scanner</strong></p>
</li>
<li class="has-line-data" data-line-start="8" data-line-end="10">
<p class="has-line-data" data-line-start="8" data-line-end="9">masuk ke folder <strong>1_java_scanner</strong></p>
</li>
<li class="has-line-data" data-line-start="10" data-line-end="11">
<p class="has-line-data" data-line-start="10" data-line-end="11">buka <code>vscode</code></p>
</li>
</ol>
<blockquote></blockquote>
<pre><code>D:\materi\1_java_scanner&gt; code .
</code></pre>
<p class="has-line-data" data-line-start="14" data-line-end="15"><em>jangan tutup CMD</em></p>
<ol start="7">
<li class="has-line-data" data-line-start="16" data-line-end="18">
<p class="has-line-data" data-line-start="16" data-line-end="17">buat file <code>KalkulatorScanner.java</code></p>
</li>
<li class="has-line-data" data-line-start="18" data-line-end="20">
<p class="has-line-data" data-line-start="18" data-line-end="19">tulis <code>code</code> di bawah ini</p>
</li>
</ol>
<script src="https://gist.github.com/nandadidudedo92/0d1464df00c2e4050ac16200a6587ca3.js"></script>
<hr>
<ol start="9">
<li class="has-line-data" data-line-start="78" data-line-end="79">kembali ke cmd, build file java</li>
</ol>
<blockquote></blockquote>
<pre><code>javac KalkulatorScanner.java
</code></pre>
<ol start="10">
<li class="has-line-data" data-line-start="82" data-line-end="83">lihat ke dalam folder <strong>1_java_scanner</strong>, pastikan muncul file <code>KalkulatorScanner.class</code></li>
</ol>
<blockquote></blockquote>
<pre><code>munculnya KalkulatorScanner.class adalah proses compiling yang dilakukan oleh compiler java
</code></pre>
<ol start="11">
<li class="has-line-data" data-line-start="86" data-line-end="87">kembali ke cmd, jalankan class java</li>
</ol>
<blockquote></blockquote>
<pre><code>java KalkulatorScanner
</code></pre>
        </div>
      <div class="card-footer text-muted">
        <a href="index.php?page=javaLanjutan" class="btn btn-primary">Kembali...</a>
      </div>
    </div>