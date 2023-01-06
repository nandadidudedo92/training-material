1. Buka Eclipse

5. Buat Project Throw

6. Tulis `code` di bawah ini

---

```java

	import java.util.Scanner;

	public class Throw {

	public static void main(String[] args){

		Scanner scan = new Scanner(System.in);
		System.out.println("Masukkan angka 1 - 10:");
		int angka = scan.nextInt();
		checkAngka(angka);
		
		}

	static void checkAngka(int angka) {
		if (angka<5) 
			throw new ArithmeticException("angka kurang dari 5");
		 else 
			System.out.println("angka lebih dari 5");
		
		}
	}



```
---

9. Run

