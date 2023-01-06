1. Buka Eclipse

2. Buat Project Throws

3. Buat Class ThrowExample.

4. Tulis `code` di bawah ini

---

```java

	
	import java.io.IOException;

	public class ThrowExample {
	public int division(int a, int b) throws ArithmeticException{  
		int t = a/b;
		return t;
	}
	}

```
---

5. Buat Class Throws.

6. Tulis `code` di bawah ini

---

```java

	
	import java.io.IOException;
	import java.util.Scanner;

	public class Throws {
	public static void main(String[] args) {
		try {
			Scanner scan = new Scanner(System.in);
			ThrowExample obj = new ThrowExample();
			System.out.println("masukkan angka1 : ");
			int angka1 = scan.nextInt();
			System.out.println("masukkan angka2 : ");
			int angka2 = scan.nextInt();
			
			int t = obj.division(angka1, angka2);
			
			System.out.println(t);
		} catch(ArithmeticException e){
			   System.out.println("ArithmeticException :"+e);
		}
	}

	}

```
---

9. Run

10. Masukkan angka 0 untuk angka ke dua
