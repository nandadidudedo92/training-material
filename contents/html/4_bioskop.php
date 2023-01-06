    <!-- 
    create by : M@P
    create date : 27/03/2020 
    -->
<div class="card text-center">
      <div class="card-header">
        Membuat Website
      </div>
      <div align="left">
      
     
      </div>
      <div class="card-body">
        <h5 class="card-title"> Bioskop</h5>

    <div align="left">    
      <p>Kita akan membuat website statis menggunakan html. </p>

      <ul>
        <li><strong>&lt;a&nbsp;href="bioskop/bioskop.html"&gt;disini&lt;/a&gt;</strong> 	<code>(anchor)</code> Tag untuk membuat hyperlink dengan teks "disini", digunakan untuk external/internal link.</li>
        <li><strong><span class="nt">&lt;h2</span> <span class="na">id=</span><span class="s">'bagian1'</span><span class="nt">&gt;</span></strong> 	Memasukkan id element bernama  "bagian 1".</li>
        <li><strong>&lt;a href="../film/deskripsifilm.html#bagian1"&gt;disini&lt;/a&gt</strong> memanggil halaman deskripsiFilm dengan id elemen bagian 1, perhatikan tanda <strong>#</strong>.</li>
      </ul>
     </div>

        </div>
        <div align="left">
        <table class="table table-bordered table-striped table-hover" cellpadding="5" cellspacing="0" border="1">
          <tr>
          <td>1. </td>
           <td><a href="index.php?page=html4&content=bioskopIndex" >Bioskop Saya (Level-1)</a></td>
           <td><a href="index.php?page=html4&content=htmlBioskop" >Preview</a></td>
           <td>
        <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/html-project/index.html" target="blank">See On Git...</a></td>           
          </tr>

          <tr>
          <td>2. </td>
           <td><a href="index.php?page=html4&content=bioskopHomepage" >Home Page Bioskop Saya (Level-2)</a></td>
           <td><a href="index.php?page=html4&content=bioskop" >Preview</a></td>
           <td>
        <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/html-project/bioskop/bioskop.html" target="blank">See On Git...</a></td>           
          </tr>

          <tr>
          <td>3. </td>
           <td><a href="index.php?page=html4&content=bioskopFilm" >Page Film (Level-3)</a></td>
           <td><a href="index.php?page=html4&content=Film" >Preview</a></td>
           <td>
          <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/html-project/film/film.html" target="blank">See On Git...</a></td>           
          </tr>

          <tr>
          <td>4. </td>
           <td><a href="index.php?page=html4&content=bioskopDeskripsifilm" >Page Deskripsi Film (Level-4)</a></td>
           <td><a href="index.php?page=html4&content=deskripsifilm" >Preview</a></td>
           <td>
          <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/html-project/film/deskripsifilm.html" target="blank">See On Git...</a></td>           
          </tr>

          <tr>
          <td>5. </td>
           <td><a href="index.php?page=html4&content=bioskopOnShow" >Page Daftar Film (Level-5)</a></td>
           <td><a href="index.php?page=html4&content=onshow" >Preview</a></td>
           <td>
          <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/html-project/onshow/onshow.html" target="blank">See On Git...</a></td>           
          </tr>

          <tr>
          <td>6. </td>
           <td><a href="index.php?page=html4&content=onshow" > Tautkan semua Hyperlink (BOSS Level)</a></td>
           <td><a href="index.php?page=html4&content=htmlBioskop" >Preview</a></td>
           <td>
          <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/html/4_bioskop.md" target="blank">See On Git...</a></td>           
          </tr>
        </table>

        <p>Jika anda mengikuti Git akan muncul seperti di bawah ini</p>
       <?php 
      
       	if(isset($_GET['content'])){
		$content = $_GET['content'];
 
		switch ($content) {
			case 'htmlBioskop':
				include 'files/2_bioskop/index.html';
				break;
			case 'bioskop':
				include 'files/2_bioskop/bioskop/bioskop.html';
				break;
			case 'film':
				include 'files/2_bioskop/film/film.html';
				break;
			case 'deskripsifilm':
				include 'files/2_bioskop/film/deskripsifilm.html';
				break;
			case 'onshow':
				include 'files/2_bioskop/onshow/onshow.html';
				break;
			case 'bioskopIndex':
				include 'files/bioskop_1.php';
				break;
			case 'bioskopHomepage':
				include 'files/bioskop_2.php';
				break;
			case 'bioskopFilm':
				include 'files/bioskop_3.php';
				break;
			case 'bioskopDeskripsifilm':
				include 'files/bioskop_4.php';
				break;
			case 'bioskopOnShow':
				include 'files/bioskop_5.php';
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	
        }
        ?>
        </div>
      <div class="card-footer text-muted">
        <a href="index.php?page=html" class="btn btn-primary">Kembali...</a>
      </div>
    </div>
