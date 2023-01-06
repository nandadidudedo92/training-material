
# INSTALL TOMCAT

1. install tomcat

2. buka browser masuk ke localhost:8080

3. cari menu Manager App di sebelah kanan
>
    login menggunakan :
    username : tomcat, password : s3cret

4. masuk ke C:\xampp\tomcat\conf\ 

> buka tomcat-users.xml menggunakan text editor

5.  find "tomcat-users"

    masukkan script berikut
~~~xml    
    <role rolename="manager-gui"/>
    <user username="tomcat" password="s3cret" roles="manager-gui"/>
~~~
6.  restart tomcat, tunggu sampai "Server Startup"

> *reload page, masuk ke manager app*


7. Pilih file .war yang tadi dibuat di dalam target

<table cellspacing="0" cellpadding="3">
<tbody>
<tr>
 <td class="row-right">
  <small>Select WAR file to upload</small>
 </td>
 <td class="row-left">
  <input type="file" name="deployWar" size="40">
 </td>
</tr>
<tr>
 <td class="row-right">
  &nbsp;
 </td>
 <td class="row-left">
  <input type="submit" value="Deploy">
 </td>
</tr>
</tbody></table>

8. deploy


