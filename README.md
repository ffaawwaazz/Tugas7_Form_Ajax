# Tugas7_Form_Ajax

LiNK WEB : https://ffaawwaazz.github.io/Tugas7_Form_Ajax/
---

## 📋 Form AJAX Sederhana

Form ini merupakan contoh sederhana dari pengiriman data menggunakan **AJAX (Asynchronous JavaScript and XML)** tanpa perlu me-refresh halaman. Proyek ini dibangun menggunakan:

* HTML untuk struktur halaman
* CSS untuk desain yang menarik dan responsif
* JavaScript (fetch API) untuk AJAX
* PHP untuk proses backend

---

## 📁 Struktur File

```
/project-folder/
│
├── index.html       # Halaman utama form
├── style.css        # Styling form
└── proses.php       # Proses data yang dikirim via AJAX
```

---

## 🧪 Cara Menjalankan

### 1. Jalankan Server Lokal

Gunakan server lokal seperti **XAMPP**, **Laragon**, atau **MAMP**.

### 2. Pindahkan Folder ke Direktori Server

Letakkan folder proyek ke dalam:

* `htdocs/` (jika menggunakan XAMPP)
* `www/` (jika menggunakan Laragon)

Contoh:

```
C:/xampp/htdocs/form-ajax/
```

### 3. Akses di Browser

Buka browser dan akses:

```
http://localhost/form-ajax/index.html
```

---

## 📤 Cara Kerja

1. Pengguna mengisi form nama dan email.
2. Saat tombol "Kirim" ditekan, data dikirim ke `proses.php` menggunakan `fetch()` secara **asinkron (tanpa reload)**.
3. PHP menerima data dan mengembalikan pesan sebagai respon.
4. Respon ditampilkan di halaman.

---

## 📸 Tampilan UI

✔️ Desain clean dan modern
✔️ Responsif di desktop & mobile
✔️ Feedback langsung saat submit

---

## ✨ Contoh Output

Jika user mengisi `nama: Budi` dan `email: budi@mail.com`, maka hasil di bawah form:

```
✅ Halo Budi! Email kamu: budi@mail.com
```

---

## 🛠️ Kebutuhan

* Web browser modern
* Web server dengan PHP (contoh: XAMPP)

---

