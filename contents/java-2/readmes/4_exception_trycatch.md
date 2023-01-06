1. Buka Eclipse

5. Buat Project TryCatch

6. Tulis `code` di bawah ini

---

```java

	import java.util.Scanner;

	public class TryCatch {

	public static void main(String[] args) {
		try {
			Scanner scan = new Scanner(System.in);
			System.out.println("masukkan angka : ");
			int angka = scan.nextInt();
			System.out.println("angka yang anda masukkan : " + angka);
		} catch (Exception e) {
			System.out.println("Jangan Masukkan String!!!!");
		}

		System.out.println("anda harusnya masukkan integer");

	}
}


```
---

9. Run

10. Banding saat memakai try-catch dan tidak
