function fn_ValForm() {
            var sMsg = "";
            var iUmur;
            var iEmail = /^[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9]@[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9][\.][a-z0-9]{2,4}$/;
            var sKategori;
            var info;

            if (document.getElementById("nama").value == ""){
                sMsg += "\n* Anda belum mengisikan nama";
            }
            if (document.getElementById("email").value == ""){
                sMsg += "\n* Anda belum mengisikan email";
            }else{
                if(!iEmail.test(document.getElementById("email").value)){
                    sMsg += "\n* Format email tidak valid";
                }
            }
            if (document.getElementById("umur").value == ""){
                sMsg += "\n* Anda belum mengisikan umur";
            }else{
                iUmur = parseInt(document.getElementById("umur").value);
                if(iUmur <= 60 && iUmur >= 15){
                   if(iUmur <= 25){
                      info="Peserta Mahasiswa";
                   }else{
                      info="Peserta Umum";
                   }
                }else{
                   alert("Tidak valid");
                }
            }
            if (document.getElementById("kategori").value == ""){
                sMsg += "\n* Anda belum mengisikan jenis acara";
            }else{
                sKategori = kategori;
                switch(sKategori){
                case "W":
                    sKategori = "Workshop";
                    break;
                case "S":
                    sKategori = "Seminar";
                    break;
                case "L":
                    sKategori = "Lomba Coding";
                    break;
                }
            }

            if(sMsg != ""){
                alert("Peringatan:\n" + sMsg);
                return false;
            }else{
                alert("Terima kasih "+nama+"! Anda terdaftar di acara "+kategori+" "+info+".");
                return true;
            }

           
        }
