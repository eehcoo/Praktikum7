<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <title>Pilih provinsi</title>
    <script>
        function tampilkan() {
            var nama_kota = document.getElementById("form1").kategori.value;
            if (nama_kota == "jawa barat") {
                document.getElementById("tampil").innerHTML = "<option value='depok'>depok</option><option value='bogor'>bogor</option><option value='bekasi'>bekasi</option><option value='sukabumi'>sukabumi</option><option value='karawang'>karawang</option>";
            } else if (nama_kota == "jawa tengah") {
                document.getElementById("tampil").innerHTML = "<option value='Brebes'>Brebes</option><option value='Tegal'>Tegal</option><option value='pemalang'>pemalang</option><option value='batang'>batang</option><option value='kendal'>kendal</option>";


            } else if (nama_kota == "jawa timur") {
                document.getElementById("tampil").innerHTML = "<option value='malang'>malang</option><option value='surabaya'>surabaya</option><option value='siduarjo'>siduarjo</option><option value='magetan'>magetan</option><option value='situbondo'>situbondo</option>";


            } else if (nama_kota == "banten") {
                document.getElementById("tampil").innerHTML = "<option value='serang'>serang</option><option value='tangerang'>tangerang</option><option value='cilegon'>cilegon</option><option value='lebak'>lebak</option><option value='pandeglang'>pandeglang</option>";


            }
        }

        function text() {
            var teks = document.getElementById('txt');
            var prov = document.getElementById('kategori');
            var kota = document.getElementById('kota');

            teks.innerText = "Pada provinsi " + prov.value + " ada kota " + kota.value + "<br>";

        }
    </script>

</head>

<body>

    <form id="form1" name="form1" onsubmit="return false">
        <label>Pilih Provinsi: </label>
        <select id="kategori" name="kategori" onchange="tampilkan()">
            <option value="jawa barat">jawa barat</option>
            <option value="jawa tengah">jawa tengah</option>
            <option value="jawa timur">jawa timur</option>
            <option value="banten">banten</option>
        </select>
        <br /><br />
        <label>Pilih Kota: </label> <select id="tampil" name="tampil">
        </select>
    </form>

</body>

</html>