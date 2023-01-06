<ol>
<li>
<p>Open Mysql Workbench and CREATE NEW DATABASE</p>
</li>
<script src="https://gist.github.com/nandadidudedo92/c413b5dfab9bd18187a9e0449c60a940.js"></script>
<li>Create new table under perpustakaan schema
<script src="https://gist.github.com/nandadidudedo92/9669d85f019eb2d63c49a2d79b337d8d.js"></script>
</li>
<li>
<p>Create some data</p>
<script src="https://gist.github.com/nandadidudedo92/bd123056dbe8c23974ba45cba07d48d1.js"></script>
</li>
<li>
<p>Buka IntelliJ IDEA,  Create new Java Project <strong>BelajarJavaMysql</strong></p>
</li>
<li>
<p>Create main class  <strong>BelajarJavaMysql</strong></p>
</li>
<li>
<p>Create static parameter to connect to perpustakaan database in class BelajarJavaMysql outside main method </p>
<script src="https://gist.github.com/nandadidudedo92/f51dd5fabf7ab5d2688f15f8c85acc90.js"></script>
</li>
<li>Create static object to manage and using database below static parameter.</li>
<script src="https://gist.github.com/nandadidudedo92/513f017be4becc5ab12a3bd9b26b2f8f.js"></script>
<li>
<p>Create main method with try-catch</p>
<script src="https://gist.github.com/nandadidudedo92/03a41266b2c52bb1a8509063913a5106.js"></script>
</li>
<li>Write below code</li>
<script src="https://gist.github.com/nandadidudedo92/436894730ec297527dac51b633329edd.js"></script>
<li>
<p>try to Run with Java Application</p>
<blockquote>
<p>if nothing show up, maybe you forget to print the catch.</p>
</blockquote>
</li>
<li>dont forget to add mysql library.</li>
<div class="jumbotron">
  <h1 class="display-7">Note!</h1>
  <p class="lead">Query Insert :</p>
  <p>stmt.execute(sqlInsert);</p>
 <hr class="my-2">
  <p class="lead">Query Update :</p>
  <p>stmt.executeUpdate(sqlUpdate);</p>
</div>
</ol>