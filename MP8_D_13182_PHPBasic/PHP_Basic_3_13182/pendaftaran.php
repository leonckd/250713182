<?php
    echo "<h1>Pendaftaran Akun</h1>";
    echo '<form method="POST" action="">
        <p>Nama     : <br /><input type="text" name="nama" /></p>
        <p>Telepon  : <br /><input type="text" name="telepon" /></p>
        <select id="Verifikasi" name="Verifikasi">
            <option>Whatsapp</option>
            <option>SMS</option>
        </select>
        <button type="submit">Kirim</button>
    </form>';


    if($_POST){
        $nama = $_POST['nama'] ??'';
        $telepon = $_POST['telepon'] ??'';
        $message = array();
        $message2 = "";

        if(empty($nama) || empty($kode)){
            $message[] = "Harap lengkapi semua data.";
        }

        if(!preg_match("/^[a-zA-Z]*$/", $nama)){
            $message[] = "Nama hanya boleh huruf dan spasi.";
        }

        if(!preg_match("/^(\+62|08)[0-9]{9,11}$/", $tlp)){
            $message[] = "Penulisan nomor telepon belum valid.";
        }

        if($verif=="wa"){
            $lokasi = "whatsapp";
        }else if($verif=="sms"){
            $lokasi = "sms";
        }
        if(!empty($message)){
            foreach($message as $msg){
                echo "<p style='color:red;'>!! " . htmlspecialchars($msg) . " !!</p>";
            }
        }else{
            echo "<h2>Informasi Pendaftaran</h2>";
            echo "<p><strong>Nama: </strong> Rp" . htmlspecialchars($nama) . "</p>";
            echo "<p><strong>Telepon: </strong> " . htmlspecialchars($telepon) . "</p>";
            echo "<p><strong>Verifikasi Kode OTP: </strong> " . htmlspecialchars($lokasi) . "</p>";
            echo "<p>Pendaftaran akun anda terkirim. Silahkan mengecek " . htmlspecialchars($lokasi) . " ". htmlspecialchars($telepon) . "Untuk mendapatkan kode OTP verifikasi </p>";
        }


    }else{
        echo "Silahkan lengkapi formulir di atas.";
    }
    
?>