1. Buka Eclipse

5. Buat Project WriteToFile

6. Tulis `code` di bawah ini

---

```java
  package com.example.kaknanda;

  import java.io.FileWriter;
  import java.io.IOException;

  public class WriteToFile {
	public static void main(String[] args) {
	    try {
	      FileWriter myWriter = new FileWriter("filename.txt");
	      myWriter.write("Files in Java might be tricky, but it is fun enough!");
	      myWriter.close();
	      System.out.println("Successfully wrote to the file.");
	    } catch (IOException e) {
	      System.out.println("An error occurred.");
	      e.printStackTrace();
	    }
	  }
  }

```
---

9. Run

10. Akan tercipta file baru bernama filebaru.txt di dalam project.
