<hr />
<h1 id='bagian1'>LEVEL 1</h1>
<hr />
<ol>
<li>
<p>Create new Maven Project <strong>hibernate-buku</strong></p>
</li>
<li>
<p>Open and add hibernate and mysql as a dependencies in POM.xml</p>
<script src="https://gist.github.com/nandadidudedo92/03808fcfeb9fe24cc6ec34e0ea4ad481.js"></script>
</li>
<li>Create new .xml file under package #src/main/resouces <strong>Hibernate.cfg.xml</strong>.</li>
<script src="https://gist.github.com/nandadidudedo92/9e7703484ed24ed4ded50d59566bb501.js"></script>
<li>Create new class <strong>Buku</strong> with id, judul and pengarang as properties, then create constructor and getter setter under <code>com.enigma.kaknanda.entities</code> packages</li>
<script src="https://gist.github.com/nandadidudedo92/b41de4c30850838ea80f57e5272132ce.js"></script>
<li>Create new .xml file under packages #src/main/resouces <strong>Buku.hbm.xml</strong></li>
<script src="https://gist.github.com/nandadidudedo92/d3897a02ce9aa4bc02922058c94fba3a.js"></script>
<li>Create new interface <strong>BukuService.java</strong> under packages com.enigma.kaknanda.services</li>
<script src="https://gist.github.com/nandadidudedo92/fe134d81ab5efe2ddabbf6b27c4377ed.js"></script>
<li>Create new Impl class <strong>BukuServiceImpl.java</strong> to implements <strong>BukuService</strong> under packages com.enigma.kaknanda.services</li>
<script src="https://gist.github.com/nandadidudedo92/7ecd3e3578baec1813451b3224f1fb7b.js"></script>
<li>
<p>Create new static final for SessionFactory and import from org.hibernate, and closeSession() method.</p>
<script src="https://gist.github.com/nandadidudedo92/0e4e780f7fa32ea3df06b926cf991026.js"></script>
</li>
<li>
<p>Write this code in readAll() method</p>
<script src="https://gist.github.com/nandadidudedo92/8187d195c66b8a97a4a2b9ab484215b8.js"></script>
</li>
<li>
<p>Create new class <strong>CrudBuku.java</strong> under package com.enigma.kaknanda </p>
<script src="https://gist.github.com/nandadidudedo92/084da1b5623e8104999b76deacbf80bc.js"></script>
</li>
<li>
<p>Write this in Main Class.</p>
<script src="https://gist.github.com/nandadidudedo92/1f81ee864a59ff7f393b22727d9d8d64.js"></script>
</li>
<li>
<p>try to Run with <strong>java -jar </strong></p>
<blockquote>
<p>if nothing show up, maybe you forget to edit pom.xml ?.</p>
</blockquote>
</li>
<li>IF SUCCESS, go to NEXT LEVEL. if your not, try to fix it alone or ask somebody.</li>
</ol>
<hr />
<h1 id='bagian2'>LEVEL 2</h1>
<hr />
<ol start="14">
<li>create new interface in <strong>BukuService.java</strong> to create new Book.</li>
<script src="https://gist.github.com/nandadidudedo92/a0a7814371eb4f7a3c75c87a756eb677.js"></script>
<li>Implements method chreate in <strong>BukuServiceImpl.java</strong></li>
<script src="https://gist.github.com/nandadidudedo92/f98fc20fe6ece8b064c10126a23014ba.js"></script>
<li>Update method <code>start()</code> <strong>CrudBuku.java</strong>.</li>
<script src="https://gist.github.com/nandadidudedo92/95e21e5c8943161630beead068d05722.js"></script>
<li>
<p>try to Run with <strong>java -jar</strong></p>
<blockquote>
<p>if mysql or hibernate is not found, maybe you must use maven-assembly-plugin ?.</p>
</blockquote>
</li>
<li>IF SUCCESS, go to NEXT LEVEL. if your not, try to fix it alone or ask somebody.</li>
</ol>
<hr />
<h1 id='bagian3'>LEVEL 3</h1>
<hr />
<ol start="18">
<li>create new interface in <strong>BukuService.java</strong> to delete and update new Book.</li>
<script src="https://gist.github.com/nandadidudedo92/28ee12174ffd6047ea9a866103094caf.js"></script>
<li>Implements method delete in <strong>BukuServiceImpl.java</strong></li>
<script src="https://gist.github.com/nandadidudedo92/238839365df5590e760c63363d3b5507.js"></script>
<li>Implements methode update in <strong>BukuServiceImpl.java</strong></li>
<script src="https://gist.github.com/nandadidudedo92/aeb7782a39618e2e37cd48babe8a64f7.js"></script>
<li>Use this to Update and delete .</li>
<script src="https://gist.github.com/nandadidudedo92/a29f83c58e81bb9816f23d8805f46130.js"></script>
<li>try to Run with <strong>java -jar</strong></li>
</ol>
<blockquote>
</blockquote>
<pre><code>if mysql or hibernate is not found, maybe you must use maven-assembly-plugin ?.</code></pre>
<p>IF SUCCESS, Congratulations.</p>
<hr />
<h1>NOTE:</h1>
<pre><code class="language-xml">    &lt;build&gt;
        &lt;plugins&gt;
            &lt;plugin&gt;
                &lt;groupId&gt;org.apache.maven.plugins&lt;/groupId&gt;
                &lt;artifactId&gt;maven-assembly-plugin&lt;/artifactId&gt;
                &lt;version&gt;2.6&lt;/version&gt;
                &lt;configuration&gt;
                    &lt;archive&gt;
                        &lt;manifest&gt;
                            &lt;mainClass&gt;com.enigma.kaknanda.BelajarJavaMysqlMvn&lt;/mainClass&gt;
                        &lt;/manifest&gt;
                    &lt;/archive&gt;
                    &lt;descriptorRefs&gt;
                        &lt;descriptorRef&gt;jar-with-dependencies&lt;/descriptorRef&gt;
                    &lt;/descriptorRefs&gt;
                    &lt;appendAssemblyId&gt;false&lt;/appendAssemblyId&gt;
                &lt;/configuration&gt;
                &lt;executions&gt;
                    &lt;execution&gt;
                        &lt;phase&gt; package&lt;/phase&gt;
                        &lt;goals&gt;
                            &lt;goal&gt;attached&lt;/goal&gt;
                        &lt;/goals&gt;
                    &lt;/execution&gt;
                &lt;/executions&gt;
            &lt;/plugin&gt;

        &lt;/plugins&gt;
    &lt;/build&gt;</code></pre>
<h1>Structure</h1>
<blockquote>
</blockquote>
<pre><code>-#src/main/java
--#com.enigma.kaknanda
    Main.java
    CrudBuku.Java
--#com.enigma.kaknanda.entities
    Buku.java
--#com.enigma.kaknanda.services
    BukuService.java
    BukuServiceImpl.java
-#src/main/resources
    Buku.hbm.xml
    Hibernate.cfg.xml</code></pre>