___

# LEVEL 1 
___

1. Create new Maven Project **hibernate-buku**

2. Open and add hibernate and mysql as a dependencies in POM.xml
 ~~~xml
    <dependencies>
		<dependency>
			<groupId>org.hibernate</groupId>
			<artifactId>hibernate-core</artifactId>
			<version>4.3.10.Final</version>
		</dependency>

		<dependency>
			<groupId>mysql</groupId>
			<artifactId>mysql-connector-java</artifactId>
			<version>5.1.36</version>
		</dependency>
	</dependencies>
 ~~~

3. Create new .xml file under package #src/main/resouces **Hibernate.cfg.xml**.

~~~xml
   <?xml version="1.0" encoding="UTF-8"?>
	<!DOCTYPE hibernate-configuration PUBLIC      "-//Hibernate/Hibernate Configuration DTD 3.0//EN"
      "http://hibernate.sourceforge.net/hibernate-configuration-3.0.dtd" >
	<hibernate-configuration>
	<session-factory>
		<property name="hibernate.dialect">org.hibernate.dialect.MySQLDialect</property>
		<property name="hibernate.connection.driver_class">com.mysql.jdbc.Driver</property>
		<property name="hibernate.connection.url">jdbc:mysql://localhost:3306/perpustakaan</property>
		<property name="hibernate.connection.username">root</property>
		<property name = "hibernate.connection.password">P@ssw0rd</property> 

		<mapping resource="Buku.hbm.xml"></mapping>
	</session-factory>

	</hibernate-configuration>
~~~ 

4. Create new class **Buku** with id, judul and pengarang as properties, then create constructor and getter setter under <code>com.enigma.kaknana.entities</code> packages

~~~Java
	public class Buku {
	private int id;
	private String judul;
	private String pengarang;

	public Buku() {
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getJudul() {
		return judul;
	}

	public void setJudul(String judul) {
		this.judul = judul;
	}

	public String getPengarang() {
		return pengarang;
	}

	public void setPengarang(String pengarang) {
		this.pengarang = pengarang;
	}

	}
~~~


5. Create new .xml file under packages #src/main/resouces **Buku.hbm.xml**

~~~xml
	<?xml version="1.0" encoding="UTF-8"?>
	<!DOCTYPE hibernate-mapping PUBLIC "-//Hibernate/Hibernate Mapping DTD 3.0//EN"
	"http://www.hibernate.org/dtd/hibernate-mapping-3.0.dtd">
	<hibernate-mapping>
	<class name = "com.enigma.kaknanda.entities.Buku" table = "buku">
	<id name = "id" column = "id_buku" type = "int">
	</id>
	<property name = "judul" column = "judul" type = "string"/>
	<property name = "pengarang" column = "pengarang" type = "string"/>

</class>

</hibernate-mapping>
~~~

6. Crete new interface **BukuService** under packages com.enigma.kaknanda.services

~~~java
	package com.enigma.kaknanda.services;

	import java.util.List;

	import com.enigma.kaknanda.entities.Buku;


	public interface BukuService {

	public List<Buku> readAll();

	}

~~~

7. Crete new class **BukuServiceInmpl** to implements **BukuService** under packages com.enigma.kaknanda.services

~~~java
	public class BukuServiceImpl implements BukuService {

	public List<Buku> readAll() {
		
		return null;
	}

	}
~~~

8. Create new static final for SessionFactory and import from org.hibernate, and closeSession() method.
~~~java
public class BukuServiceImpl implements BukuService {

	// Create the SessionFactory when you start the application.
	private static final SessionFactory SESSION_FACTORY;
	/**
	 * Initialize the SessionFactory instance.
	 */
	static {
		// Create a Configuration object.
		Configuration config = new Configuration();
		// Configure using the application resource named hibernate.cfg.xml.
		config.configure();
		// Extract the properties from the configuration file.
		Properties prop = config.getProperties();

		// Create StandardServiceRegistryBuilder using the properties.
		StandardServiceRegistryBuilder builder = new StandardServiceRegistryBuilder();
		builder.applySettings(prop);

		// Build a ServiceRegistry
		ServiceRegistry registry = builder.build();

		// Create the SessionFactory using the ServiceRegistry
		SESSION_FACTORY = config.buildSessionFactory(registry);
		}

	public List<Buku> readAll() {
		
		return null;
		}

	public void closeSession() {

		SESSION_FACTORY.close();

	}

	}
~~~

9. Write this code in readAll() method
~~~java
	List<Buku> books = null;
		// Create a session
		Session session = SESSION_FACTORY.openSession();
		Transaction transaction = null;
		try {
			// Begin a transaction
			transaction = session.beginTransaction();
			books = session.createQuery("FROM Buku").list();
			// Commit the transaction
			transaction.commit();
		} catch (HibernateException ex) {
			// If there are any exceptions, roll back the changes
			if (transaction != null) {
				transaction.rollback();
			}
			// Print the Exception
			ex.printStackTrace();
		} finally {
			// Close the session
			session.close();
		}
		return books;
~~~

10. Create new class **CrudBuku** under com.enigma.kaknanda 
~~~java
	public class CrudBuku {
	BukuService bukuService;

	public CrudBuku() {
		this.bukuService = new BukuServiceImpl();
		}

	public void start() {
		List<Buku> buku = bukuService.readAll();
		if (buku != null) {
			for (Buku book : buku) {
				System.out.println(book.getJudul());
			}
		}

		bukuService.closeSession();
		}
	}
~~~

11. Write this in Main Class.
~~~java
	public class Main {

	public static void main(String[] args) {

		CrudBuku crudBuku = new CrudBuku();

		crudBuku.start();
		}
	}
~~~

12. try to Run with **java -jar **
>
    if nothing show up, maybe you forget to edit pom.xml ?.

13. IF SUCCESS, go to NEXT LEVEL. if your not, try to fix it alone or ask somebody.

---

# LEVEL 2

---

14. create new interface in **BukuService** to create new Book.

~~~java

	public List<Buku> readAll();

	public void create(String judul, String pengarang);

	public void closeSession();
~~~

15. Implements code in **BukuServiceImpl**

~~~java 
public void create(String nama, String pengarang) {
		// Create a session
		Session session = SESSION_FACTORY.openSession();
		Transaction transaction = null;
		try {
			// Begin a transaction
			transaction = session.beginTransaction();
			Buku book = new Buku();
			book.setJudul(nama);
			book.setPengarang(pengarang);
			// Save the student
			session.save(book);
			// Commit the transaction
			transaction.commit();
		} catch (HibernateException ex) {
			// If there are any exceptions, roll back the changes
			if (transaction != null) {
				transaction.rollback();
			}
			// Print the Exception
			ex.printStackTrace();
		} finally {
			// Close the session
			session.close();
		}

	}
~~~

16. Update method <code>start()</code> **CrudBuku**.

~~~java

	public void start() {
		//Use create()
		bukuService.create("Bob", "Jauh Sekali");

		List<Buku> buku = bukuService.readAll();
		if (buku != null) {
			for (Buku book : buku) {
				System.out.println(book.getJudul());
			}
		}

		bukuService.closeSession();	}
	
~~~


17. try to Run with **java -jar**
>
    if mysql or hibernate is not found, maybe you must use maven-assembly-plugin ?.

1. IF SUCCESS, go to NEXT LEVEL. if your not, try to fix it alone or ask somebody.

---

# LEVEL 3

---

18. create new interface in **BukuService** to create new Book.

~~~java

	public void delete(int id);

	public void update(int id, String judul, String Pengarang);

~~~

19. Implements method delete in **BukuServiceImpl**

~~~java 
	public void delete(int id) {
		// Create a session
		Session session = SESSION_FACTORY.openSession();
		Transaction transaction = null;
		try {
			// Begin a transaction
			transaction = session.beginTransaction();
			// Get the Student from the database.
			Buku stu = (Buku) session.get(Buku.class, Integer.valueOf(id));
			// Delete the student
			session.delete(stu);
			// Commit the transaction
			transaction.commit();
		} catch (HibernateException ex) {
			// If there are any exceptions, roll back the changes
			if (transaction != null) {
				transaction.rollback();
			}
			// Print the Exception
			ex.printStackTrace();
		} finally {
			// Close the session
			session.close();
		}

	}
~~~

19. Implements methode update in **BukuServiceImpl**

~~~java 
	public void update(int id, String judul, String pengarang) {
		Session session = SESSION_FACTORY.openSession();
		Transaction transaction = null;
		try {
			// Begin a transaction
			transaction = session.beginTransaction();
			// Get the Student from the database.
			Buku buku = (Buku) session.get(Buku.class, Integer.valueOf(id));
			// Change the values
			buku.setJudul(judul);
			buku.setPengarang(pengarang);
			// Update the student
			session.update(buku);

			// Commit the transaction
			transaction.commit();
		} catch (HibernateException ex) {
			// If there are any exceptions, roll back the changes
			if (transaction != null) {
				transaction.rollback();
			}
			// Print the Exception
			ex.printStackTrace();
		} finally {
			// Close the session
			session.close();
		}

	}
~~~

20. Use this to Update and delete .

~~~java

	// Update
	bukuService.update(7, "Bob", "Lampung");

	//delete(id)
	bukuService.delete(3);
	
~~~

21. try to Run with **java -jar**

>

    if mysql or hibernate is not found, maybe you must use maven-assembly-plugin ?.

IF SUCCESS, Congratulations.

---

# NOTE:

~~~xml
	<build>
		<plugins>
			<plugin>
				<groupId>org.apache.maven.plugins</groupId>
				<artifactId>maven-assembly-plugin</artifactId>
				<version>2.6</version>
				<configuration>
					<archive>
						<manifest>
							<mainClass>com.enigma.kaknanda.BelajarJavaMysqlMvn</mainClass>
						</manifest>
					</archive>
					<descriptorRefs>
						<descriptorRef>jar-with-dependencies</descriptorRef>
					</descriptorRefs>
					<appendAssemblyId>false</appendAssemblyId>
				</configuration>
				<executions>
					<execution>
						<phase> package</phase>
						<goals>
							<goal>attached</goal>
						</goals>
					</execution>
				</executions>
			</plugin>


		</plugins>
	</build>
~~~

# Structure

>

	-#src/main/java
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
		Hibernate.cfg.xml

