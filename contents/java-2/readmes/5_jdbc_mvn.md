 1. Create New Maven Project **BelajarJavaMysqlMvn**

 2. Update POM.xml
~~~xml
<dependencies>
		<dependency>
			<groupId>mysql</groupId>
			<artifactId>mysql-connector-java</artifactId>
			<version>5.1.36</version>
		</dependency>
	</dependencies>
~~~


 3. Create package com.enigma.example

 4. Create new JavaClass **BelajarJavaMysql**

 5. Create static parameter to connect to perpustakaan database in class BelajarJavaMysql outside main class 

 ~~~java
    static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";
	static final String DB_URL = "jdbc:mysql://localhost:3306/perpustakaan";
	static final String USER = "root";
	static final String PASS = "";
 ~~~

 6. Create static object to manage and using database below static parameter.

~~~java
    static Connection conn;
	static Statement stmt;
	static ResultSet rs;
~~~ 

7. Create main method with try-catch
~~~java
public static void main(String[] args) {
		try {
			
		} catch (Exception e) {
			System.out.println(e);
		}
	}
~~~

8. Register jdbc driver inside try

~~~java
Class.forName(JDBC_DRIVER);
~~~

9. Create connection to database under driver declaration
~~~java
conn = DriverManager.getConnection(DB_URL, USER, PASS);
~~~

10. Use object Statement to create new statement to execute query under getConnection() declaration
~~~java
stmt = conn.createStatement();
~~~

11. create query to get all books data under createStatement()
~~~java
String sql = "Select * from buku";
~~~

12. create resultset from executing query with statement under query declarations.
~~~java
rs = stmt.executeQuery(sql);
~~~

13. use While - loop under execute Query to Print Data.
~~~java
while (rs.next()) {
				System.out.println("ID Buku :" + rs.getInt("id_buku"));
				System.out.println("Judul Buku :" + rs.getString("judul"));
				System.out.println("Pengarang :" + rs.getString("pengarang"));

			}
~~~

14. try to Run with Java Application
>
    if nothing show up, maybe you forget to print the catch.

15. dont forget to add mysql library.


# note

```java
stmt.execute(sqlInsert);
stmt.executeUpdate(sqlUpdate);

```