<ol>
<li>
Create New Maven Project <strong>BelajarJavaMysqlMvn</strong>
</li>
<li>
Update POM.xml
<script src="https://gist.github.com/nandadidudedo92/fb00d0a85e1c08494fdd01e3443ace96.js"></script>
</li>
<li>
Create package com.enigma.example
</li>
<li>
<p>Create new JavaClass <strong>BelajarJavaMysql</strong></p>
</li>
<li>
Create static parameter to connect to perpustakaan database in class BelajarJavaMysql outside main method 
<script src="https://gist.github.com/nandadidudedo92/f51dd5fabf7ab5d2688f15f8c85acc90.js"></script>
</li>
<li>Create static object to manage and using database below static parameter.</li>
<script src="https://gist.github.com/nandadidudedo92/513f017be4becc5ab12a3bd9b26b2f8f.js"></script>
<li>
Create main method with try-catch
<script src="https://gist.github.com/nandadidudedo92/03a41266b2c52bb1a8509063913a5106.js"></script>
</li>
<li>Write below code
<script src="https://gist.github.com/nandadidudedo92/436894730ec297527dac51b633329edd.js"></script>
</li>
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