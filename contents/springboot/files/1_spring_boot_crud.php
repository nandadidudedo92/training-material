<h1 class="code-line" data-line-start=0 data-line-end=1 ><a id="CARA_MUDAH_MEMBUAT_API_SPRINGBOOT_CRUD_MySQL_PostGres_Oracle_0"></a>CARA MUDAH MEMBUAT API SPRING-BOOT (CRUD) MySQL, PostGres, Oracle</h1>
<h2 class="code-line" data-line-start=2 data-line-end=3 ><a id="IKUTI_LANGKAH__LANGKAH_DI_BAWAH_INI_2"></a>IKUTI LANGKAH - LANGKAH DI BAWAH INI.</h2>
<pre><code>Untuk membuat API menggunakan springboot gunakan maven project, generate project lebih mudah melalui start.spring.io, dependency yang kita butuhkan adalah
jdbc (oracle/mysql/postgres), spring data jpa, spring web
</code></pre>
<p class="has-line-data" data-line-start="7" data-line-end="8">##API GET ALL</p>
<ol>
<li class="has-line-data" data-line-start="9" data-line-end="11">Buat Maven Project bernama crud-simple / gunakan <a href="http://start.spring.io">start.spring.io</a>.</li>

<script src="https://gist.github.com/nandadidudedo92/dbf4b1d12021ae2406e5c93b3e38cb0f.js"></script>

<li>Open Project menggunakan IntelliJ IDEA. </li>
<li class="has-line-data" data-line-start="18" data-line-end="19">Pastikan terdapat salah satu dependencies di bawah ini pada POM.XML. <br/>
Jika anda ingin menggunakan postgres, pastikan dependency postgres ada, atau jika anda ingin menggunakan database lain, maka pastikan JDBC sudah dimasukkan ke dalam POM.XML.</li>

<script src="https://gist.github.com/nandadidudedo92/dd0ec1bc787b4b9b5a1857d962bae8f1.js"></script>

<li class="has-line-data" data-line-start="38" data-line-end="40">
<p class="has-line-data" data-line-start="38" data-line-end="39">Buat package entities di dalam com.example.kaknanda.crudsimple</p>
</li>
<li class="has-line-data" data-line-start="40" data-line-end="42">
<p class="has-line-data" data-line-start="40" data-line-end="41">Buat Class baru bernama Category, masukkan baris kode di bawah ini.</p>
</li>

<script src="https://gist.github.com/nandadidudedo92/8ce164d52490678580e4c8b2d1a9a323.js"></script>

<li class="has-line-data" data-line-start="86" data-line-end="88">
<p class="has-line-data" data-line-start="86" data-line-end="87">Buat package baru bernama repositories di dalam com.example.kaknanda.crUdsimple,</p>
</li>
<li class="has-line-data" data-line-start="88" data-line-end="90">
<p class="has-line-data" data-line-start="88" data-line-end="89">Buat class baru bernama CategoryRepository di dalam package repositories, masukkan baris kode di bawah ini.</p>
</li>

<script src="https://gist.github.com/nandadidudedo92/42bd6bd75e416191c93f20bbf9309469.js"></script>

<li class="has-line-data" data-line-start="104" data-line-end="106">
<p class="has-line-data" data-line-start="104" data-line-end="105">Buat package baru bernama controllers di dalam com.example.kaknanda.crUdsimple,</p>
</li>
<li class="has-line-data" data-line-start="106" data-line-end="108">
<p class="has-line-data" data-line-start="106" data-line-end="107">Buat class baru bernama CategoryController di dalam package controllers, masukkan baris kode di bawah ini.</p>
</li>

<script src="https://gist.github.com/nandadidudedo92/6e4994172f2b3e2d689d7a6e4d4e7ff7.js"></script>

<li class="has-line-data" data-line-start="146" data-line-end="148">Buka file application.properties yang berada di dalam src/main/resources, masukkan baris code di bawah ini, datasource boleh menggunakan mysql atau apapun.<br>
Pastikan terdapat database bernama ecommerce pada datasource yang dituju, sesuaikan username dan password.</li>

<script src="https://gist.github.com/nandadidudedo92/3b0c46bdb2764c9148516edf5b1421d6.js"></script>

<li class="has-line-data" data-line-start="161" data-line-end="163">Jalankan project </li>

<script src="https://gist.github.com/nandadidudedo92/c74bb79cab4a0f565c7ef25837cb3140.js"></script>

<li class="has-line-data" data-line-start="166" data-line-end="168">Tunggu terminal hingga muncul logger bahwa Tomcat telah berjalan.</li>

<script src="https://gist.github.com/nandadidudedo92/2e8064ce44ccfbf75c6b0a4ba757513e.js"></script>

<li>Jika telah muncul baris loger tersebut, maka project anda sedang dalam beberapa status, antara lain :
 <ul>
 <li> Project anda sedang berjalan pada port 8080.</li>
 <li> Anda baru saja membuat table category pada datasource tujuan, silahkan check database anda.</li>
 </ul>

</li>
<li class="has-line-data" data-line-start="177" data-line-end="179">
<p class="has-line-data" data-line-start="177" data-line-end="178">Masukkan beberapa data pada table category.</p>
</li>
<li class="has-line-data" data-line-start="179" data-line-end="181">
<p class="has-line-data" data-line-start="179" data-line-end="180">Buka POSTMAN / BROWSER masukkan url di bawah ini MENGGUNAKAN .</p>
</li>
<script src="https://gist.github.com/nandadidudedo92/5caf1df84906d26fcc9ec398a70b2742.js"></script>

browser / postman akan menampilkan data yang berasal dari table category pada database milik Anda

<p class="has-line-data" data-line-start="186" data-line-end="187">— SELAMAT API GET ALL CATEGORY ANDA TELAH BERHASIL DIBUAT —</p>
<h2 class="code-line" data-line-start=187 data-line-end=188 ><a id="API_ADD_187"></a>API ADD</h2>
<li class="has-line-data" data-line-start="189" data-line-end="191">Buka application.properties, rubah baris kode di bawah ini.</li>
</ol>
<blockquote></blockquote>
<pre><code>spring.jpa.hibernate.ddl-auto=none 

Lakukan perubahan agar table anda tidak tergenerate ulang dan menjadi kosong.
</code></pre>
<ol start="15">
<li class="has-line-data" data-line-start="196" data-line-end="198">Buka class CategoryController, dan tambahkan kode di bawah ini.</li>
</ol>
<pre><code class="has-line-data" data-line-start="199" data-line-end="211" class="language-java">    <span class="hljs-annotation">@PostMapping</span>(path = <span class="hljs-string">"/add"</span>, produces = MediaType.APPLICATION_JSON_VALUE)
    <span class="hljs-keyword">public</span> <span class="hljs-annotation">@ResponseBody</span>
    <span class="hljs-function">Category <span class="hljs-title">addSiswa</span><span class="hljs-params">(@RequestBody Category request)</span> <span class="hljs-keyword">throws</span> Exception </span>{

        Category category = <span class="hljs-keyword">new</span> Category();
        category.setCategoryName(request.getCategoryName());
        categoryRepository.save(category);

        <span class="hljs-keyword">return</span> category;

    }
</code></pre>
<ol start="16">
<li class="has-line-data" data-line-start="212" data-line-end="214">Run project</li>
</ol>
<blockquote></blockquote>
<pre><code>mvn spring-boot:run
</code></pre>
<ol start="17">
<li class="has-line-data" data-line-start="217" data-line-end="219">Gunakan Postman send ke api dengan ketentuan di bawah ini.</li>
</ol>
<blockquote></blockquote>
<pre><code>METHOD : POST
URL : http://localhost:8080/category/add
BODY -&gt; RAW -&gt;JSON

Request Payload :     
{
    &quot;categoryName&quot; : &quot;Pakaian Wanita&quot;
}
</code></pre>
<blockquote>
<p class="has-line-data" data-line-start="229" data-line-end="230">Jika anda memasukkan id yang sudah ada di dalam Request Payload, maka data di database akan diupdate oleh hibernate.</p>
</blockquote>
<p class="has-line-data" data-line-start="231" data-line-end="232">— JIKA DATA YANG ANDA MASUKKAN SEKARANG MUNCUL KETIKA MELAKUKAN GET LIST—</p>
<p class="has-line-data" data-line-start="233" data-line-end="234">—SELAMAT, ANDA TELAH BERAHASIL MEMBUAT API ADD CATEGORY—</p>