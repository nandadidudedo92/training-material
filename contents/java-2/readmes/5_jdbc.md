 1. Open Mysql Workbench and CREATE NEW DATABASE
~~~sql

    create schema `perpustakaan`;
~~~
 2. Create new table under perpustakaan schema

~~~sql

    CREATE TABLE `buku` (
    `id_buku` INT NOT NULL AUTO_INCREMENT,
    `judul` VARCHAR(45) NOT NULL,
    `pengarang` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`id_buku`)
    );
~~~

 3. Create some data
~~~sql
    INSERT INTO `perpustakaan`.`buku` (`judul`, `pengarang`) VALUES ('Dilan', 'Pidi Baiq'), ('Harry Potter', 'J. K. Rowling');
~~~

 4. Create new Java Project **BelajarJavaMysql**

 5. Create main class  **BelajarJavaMysql**

 6. Create static parameter to connect to perpustakaan database in class BelajarJavaMysql outside main class 

 ~~~java
    static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";
	static final String DB_URL = "jdbc:mysql://localhost:3306/perpustakaan";
	static final String USER = "root";
	static final String PASS = "";
 ~~~

 7. Create static object to manage and using database below static parameter.

~~~java
    static Connection conn;
	static Statement stmt;
	static ResultSet rs;
~~~ 

8. Create main method with try-catch
~~~java
public static void main(String[] args) {
		try {
			
		} catch (Exception e) {
			System.out.println(e);
		}
	}
~~~

9. Register jdbc driver inside try

~~~java
Class.forName(JDBC_DRIVER);
~~~

10. Create connection to database under driver declaration
~~~java
conn = DriverManager.getConnection(DB_URL, USER, PASS);
~~~

11. Use object Statement to create new statement to execute query under getConnection() declaration
~~~java
stmt = conn.createStatement();
~~~

12. create query to get all books data under createStatement()
~~~java
String sql = "Select * from buku";
~~~

13. create resultset from executing query with statement under query declarations.
~~~java
rs = stmt.executeQuery(sql);
~~~

14. use While - loop under execute Query to Print Data.
~~~java
while (rs.next()) {
				System.out.println("ID Buku :" + rs.getInt("id_buku"));
				System.out.println("Judul Buku :" + rs.getString("judul"));
				System.out.println("Pengarang :" + rs.getString("pengarang"));

			}
~~~

15. try to Run with Java Application
>
    if nothing show up, maybe you forget to print the catch.

16. dont forget to add mysql library.


# note

```java
stmt.execute(sqlInsert);
stmt.executeUpdate(sqlUpdate);

```