1. Buka `CMD`

2. masuk ke `Drive D:/`

3. mkdir __materi__, masuk ke folder __materi__

4. mkdir __1_java_scanner__

5. masuk ke folder __1_java_scanner__

6. buka `vscode`
>
    D:\materi\1_java_scanner> code .

 *jangan tutup CMD*

7. buat file `KalkulatorScanner.java`

8. tulis `code` di bawah ini

---

```java
    import java.util.Scanner;

    public class KalkulatorScanner {

	public static void main(String[] args) {
		menuAwal();
	}

	static void menuAwal() {
		System.out.println();
		System.out.println("========================================");
		System.out.println();
		System.out.println("Selamat Datang di Kalkulator !!!!");
		System.out.println("Pilih Menu : ");
		System.out.println("1. Tambah");
		System.out.println("2. Kurang");
		System.out.println("3. Kali");
		System.out.println("4. Bagi");
		System.out.println("5. exit");

		System.out.println("Pilih Nomor : ");
		Scanner myObj = new Scanner(System.in);
		String pilihan = myObj.nextLine();
		proses(pilihan);
	}

	static void proses(String pilihan) {

		switch (pilihan) {
		case "1":
			int hasil = tambah();
			System.out.println("Hasilny adalah : " + hasil);
			menuAwal();
			break;
		default:
			System.out.println("menu belum dibuat");
			menuAwal();
		}
	}

	static int tambah() {
		Scanner myObj = new Scanner(System.in);
		System.out.println("Masukkan angka pertama yang akan di Tambah : ");
		int angka1 = Integer.parseInt(myObj.nextLine());
		System.out.println("Masukkan angka kedua yang akan di Tambah : ");
		int angka2 = Integer.parseInt(myObj.nextLine());
		int hasil = angka1 + angka2;
		return hasil;
	}

    }

```
---

9. kembali ke cmd, build file java
>
    javac KalkulatorScanner.java

10. lihat ke dalam folder __1_java_scanner__, pastikan muncul file `KalkulatorScanner.class`
>
    munculnya KalkulatorScanner.class adalah proses compiling yang dilakukan oleh compiler java

11. kembali ke cmd, jalankan class java
>
    java KalkulatorScanner
