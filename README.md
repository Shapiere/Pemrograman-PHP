# Pemrograman PHP

Repository tugas mata kuliah Pemrograman PHP.

## Tugas 1 — Struktur Kendali & Form Processing

Form penilaian ujian dengan input **Nama**, **Email**, dan **Nilai Ujian**.
Hasil diolah dengan `if` / `elseif` lalu ditampilkan di browser.

| Input nilai ujian | Output |
|---|---|
| `> 70` | **Lulus** |
| `<= 70` | **Remedial** |

### Struktur file

```
tugas-1/
└── index.php    # form + pemrosesan + tampilan hasil
```

### Cara menjalankan

**Opsi 1 — PHP built-in server**

```bash
php -S localhost:8000 -t tugas-1
```

Lalu buka `http://localhost:8000`.

**Opsi 2 — XAMPP / Laragon**

Salin folder `tugas-1` ke `htdocs`, lalu buka `http://localhost/tugas-1/`.

### Catatan

- Form dikirim dengan metode **POST** (`$_POST`), jadi data tidak muncul di URL.
- Nilai yang kosong atau bukan angka tidak diproses lebih lanjut.
- Semua output di-escape dengan `htmlspecialchars()`.
