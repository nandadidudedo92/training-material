1. Buka Eclipse

2. Buat Project GetFileInfo

3. Tulis `code` di bawah ini

---

```java
  package com.example.kaknanda;

	import java.io.File;

	public class GetFileInfo {
	public static void main(String[] args) {
	    File myObj = new File("filename.txt");
	    if (myObj.exists()) {
	      System.out.println("File name: " + myObj.getName());
	      System.out.println("Absolute path: " + myObj.getAbsolutePath());
	      System.out.println("Writeable: " + myObj.canWrite());
	      System.out.println("Readable " + myObj.canRead());
	      System.out.println("File size in bytes " + myObj.length());
	    } else {
	      System.out.println("The file does not exist.");
	    }
	  }
	}


```
---

4. Run

5. Program akan mengambil info dari file yang dituju.
