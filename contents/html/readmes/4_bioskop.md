1. create new folder **/html-bioskop**.

2. get inside folder tersebut and open vscode.

3. create *.html file **index.html**

4. edit index.html

~~~html
    <!DOCTYPE html>
	<html>
	<head>
	<title>Bioskop</title>
	</head>
	
	<body>
	<h1>Anda Sudah Membuat Website</h1>
	<h3>Selamat datang di website anda !!!</h3>
	<p>Klik <a href="bioskop/bioskop.html">disini</a> untuk melihat website anda...</p> 
	</body>
	</html>
~~~~

5. create new folder **bioskop** under **/html-bioskop**.

6. create file **bioskop.html** under folder **/bioskop** 

7. edit **bioskop.html**

~~~html
	<!DOCTYPE html>
	<html>
	<head>
	<title>Bioskop</title>
	</head>
	<body>
	<!-- external link(protocol+google), internal link / relative url (lokasi penyimpanan)  -->
	<h3>Selamat Datang di Bioskop Kesayangan Anda</h3>
	<p>Film yang sedang tayang - tayang uluuhh tayaaang tayang <a href="../film/deskripsifilm.html#bagian1">Read More...</a> </p>

	<p>Klik <a href="../film/film.html">disini</a> untuk melihat film...</p> 

	<!-- <p>Klik <a href="../film/deskripsifilm.html#bagian1">disini</a> untuk film dilan...</p>  -->
	</body>
	</html>
~~~

8. create new folder **film** under **/html-bioskop**.

9. create file **film.html** under folder **/film** 

10. edit **film.html**

~~~html
	<!DOCTYPE html>
<html>
<head>
	<title>	Film On Going </title>
</head>
<body>
<h1>Ini adalah halaman Film on Going</h1>
<dl>
	<dt>
		<h3>
		Zombie Land : Double Tap
		</h3>
	</dt>
		<dd>

			<p>
				<strong>Bahasa Indonesia</strong> - Usai pertengkaran antara Columbus dan Wichita menimbulkan keretakan di dalam keluarga yang menyebabkan Little Rock minggat dengan seorang pria aneh, mereka harus bersatu kembali untuk menemukan Little Rock dan memperbaiki hubungan kekeluargaan mereka. Dengan menghadapi zombi-zombi jenis baru dalam perjalanannya, mereka dipaksa mengatur strategi hingga bertemu dengan seorang pemburu zombi hebat yang dikenal dengan nama Nevada.
			</p>
			<p>
				</strong>English</strong> - After a fight between Columbus and Wichita creates a deep rift in the make-shift family that causes Little Rock to leave with a strange man, the group must band together to find Little Rock and mend the family ties. Facing new kinds of zombies along the way, the group are forced to adjust their strategies until they find an incredible new zombie hunter known only as Nevada.
	</p>
</dd>


</dl>

<p>Klik <a href="../index.html">disini</a> untuk melihat website anda...</p> 
</body>
</html>
~~~

11. create file **deskripsifilm.html** under folder **/film** 

12. edit **deskripsifilm.html**

~~~html
	<!DOCTYPE html>
	<html>

	<head>
	<title>Deskripsi Film</title>
	</head>

	<body>

	<h1>Ini adalah Halaman Deskripsi Film </h1>

	<ul>
		<li><a href="#bagian1">Bagian 1</a></li>
		<li><a href="#bagian2">Bagian 2</a></li>
		<li><a href="#bagian3">Bagian 3</a></li>
	</ul>


	<h2 id='bagian1'>Bagian 1</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<!-- src -->
	<!-- internal resource, external resource (with protocol) -->
	<!-- src,alt,title,width,height -->
	<!-- px,% -->
	<img src="dilan.jpg" alt="gambar dilan dari laptop" width="200px" title="Ini adalah Poster Dilan">

	<br><br><br><br><br><br><br><br><br><br>
	<h2 id='bagian2'>Bagian 2</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<br><br><br><br><br><br><br><br><br><br>
	<h2 id='bagian3'>Bagian 3</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<br><br><br><br><br>
	<!-- button -->
	<a href="../halaman5.html"><button type="button">Kembali!</button>
	</body></a>
	<br>
	<a href="../onshow/onshow.html"><button type="button">On Show!!!</button>
	</a>
	</body>

	</html>
~~~


13.  create new folder **onshow** under folder **/html-bioskop**.

14. create file **onshow.html** under folder **/onshow**.

12. edit **onshow.html**

~~~html
	<!DOCTYPE html>
<html>
<head>
	<title>Halaman On Show</title>
</head>
<body>
	<h1>SEDANG TAYANG !!!</h1>

<table border="1" cellspacing="0" cellpadding="5">
<table>
	<thead>
		<th> </th>
		<th> Nama Film</th>
		<th> Waktu</th>
		<th> Bioskop</th>
	</thead>
	<tbody>

	<tr>
		<th> 1 </th>
		<td>Dilan</td>
		<td>12.30 - 14.30, 14.30 -16.30 </td>
		<td>Theater 1</td>
	</tr>
	<tr>
		<th> 2 </th>
		<td>Joker</td>
		<td>12.30 - 14.30, 14.30 -16.30 </td>
		<td>Theater 2</td>
	</tr>
	<tr>
		<th> 3 </th>
		<td>Toy Story</td>
		<td>12.30 - 14.30, 14.30 -16.30 </td>
		<td>Theater 3</td>
	</tr>
	</tbody>
	</table>

	<br>

	</body>
	</html>
~~~