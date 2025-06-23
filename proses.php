<?php
$nama = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';

if ($nama && $email) {
    echo "✅ Halo $nama! Email kamu: $email";
} else {
    echo "❌ Data tidak lengkap.";
}
