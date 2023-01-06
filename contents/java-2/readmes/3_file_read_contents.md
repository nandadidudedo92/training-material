1. Buka Eclipse

2. Buat Project ReadFile

3. Tulis `code` di bawah ini

---

```java
  	package com.example.kaknanda;

	import java.io.File;
	import java.io.FileNotFoundException;
	import java.util.Scanner;

	public class ReadFile {
	public static void main(String[] args) {
	    try {
	      File myObj = new File("filename.txt");
	      Scanner myReader = new Scanner(myObj);
	      while (myReader.hasNextLine()) {
	        String data = myReader.nextLine();
	        System.out.println(data);
	      }
	      myReader.close();
	    } catch (FileNotFoundException e) {
	      System.out.println("An error occurred.");
	      e.printStackTrace();
	    }
	  }
	}



```
---

4. Run

5. Program akan mengambil dan menampilkan isi dari tiap baris dari file yang dituju.
