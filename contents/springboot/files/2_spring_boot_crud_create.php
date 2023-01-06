<ol>
<h2 class="code-line" data-line-start=187 data-line-end=188 ><a id="API_ADD_187"></a>API ADD</h2>
<li>Sebelum anda mengikuti materi ini, ada baiknya anda mengikuti materi sebelumnya tentang Springboot - Get All  <a href="index.php?page=spring_crud&content=spring_crud_get_all">di sini.</a></li>
<li class="has-line-data" data-line-start="189" data-line-end="191">Buka application.properties, rubah baris kode di bawah ini.</li>
<script src="https://gist.github.com/nandadidudedo92/ba93f6805167526f7346f03c70693d61.js"></script>

Lakukan perubahan agar table anda tidak tergenerate ulang dan menjadi kosong.
<li>Buka class CategoryController, dan tambahkan kode di bawah ini.</li>

<script src="https://gist.github.com/nandadidudedo92/30c9017f423e991ea1f8e5b4b79ec9ee.js"></script>

<li class="has-line-data" data-line-start="212" data-line-end="214">Run project</li>

<script src="https://gist.github.com/nandadidudedo92/c74bb79cab4a0f565c7ef25837cb3140.js"></script>

<li class="has-line-data" data-line-start="217" data-line-end="219">Gunakan Postman send ke api dengan ketentuan di bawah ini.</li>

<script src="https://gist.github.com/nandadidudedo92/bb3fb57319f8bfbda5402e5f51a8d650.js"></script>

<p class="has-line-data" data-line-start="229" data-line-end="230">Jika anda memasukkan id yang sudah ada di dalam Request Payload, maka data di database akan diupdate oleh hibernate.</p>

<p class="has-line-data" data-line-start="231" data-line-end="232">— JIKA DATA YANG ANDA MASUKKAN SEKARANG MUNCUL KETIKA MELAKUKAN GET LIST—</p>
<p class="has-line-data" data-line-start="233" data-line-end="234">—SELAMAT, ANDA TELAH BERAHASIL MEMBUAT API ADD CATEGORY—</p>