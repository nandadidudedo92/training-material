    <!-- 
    create by : M@P
    create date : 06/05/2020 
    -->
<h1> MARI BELAJAR SPRING - BOOT </h1>

<div>
<h1 class="code-line" data-line-start=0 data-line-end=1 ><a id="CARA_MUDAH_MEMBUAT_API_SPRINGBOOT_CRUD_MySQL_PostGres_Oracle_0"></a>CARA MUDAH MEMBUAT API SPRING-BOOT (CRUD) MySQL, PostGres, Oracle</h1>
<h2 class="code-line" data-line-start=2 data-line-end=3 ><a id="IKUTI_LANGKAH__LANGKAH_DI_BAWAH_INI_2"></a>IKUTI LANGKAH - LANGKAH DI BAWAH INI.</h2>

</div>
<table class="table table-bordered table-striped table-hover" cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>	
			<th colspan="2">Contents</th>
        </tr>
        <tr>
            <td>1.</td>
            <td> <a href="index.php?page=spring_crud&content=spring_crud_get_all">GET ALL</a></td>
            <td> <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-springboot/crud-simple/1_spring_crud_getall.MD" target="blank">SEE ON GIT</a></td>
        </tr>
        <tr>
            <td>2.</td>
            <td> <a href="index.php?page=spring_crud&content=spring_crud_create">Create New Data (ADD)</a></td>
            <td> <a href="https://gitlab.com/materi1/training-material-md/-/blob/master/java-springboot/crud-simple/2_spring_crud_create.MD" target="blank">SEE ON GIT</a></td>
        </tr>          

</table>


<?php 
      
       	if(isset($_GET['content'])){
		$content = $_GET['content'];
 
		switch ($content) {
			case 'spring_crud_get_all':
				include 'files/1_spring_boot_crud_get_all.php';
				break;
			case 'spring_crud_create':
				include 'files/2_spring_boot_crud_create.php';
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	
        }
        ?>



<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Horizon -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9085002717331157"
     data-ad-slot="1886687071"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>