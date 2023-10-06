<html>
    <head>
        <title>Data Nilai Mahasiswa</title>
    
<style>
body {
    background-image: url("you.jpeg");
    background-color: #cccccc;
}

</style>
    </head>
<body>
   <?php
    

    $matkul = ["Web Programming","Struktur Data","Struktur Data","Sistem Basis Data"];
    $nilaiuts = [90,90,80,90];
    $nilaiuas = [80,80,80,89];
    $nilaitugas =[89,90,80,80];
    $nilaiabsen =[100,100,100,100];
    ?>
    <center>
    <table border="1" cellpadding="5" bgcolor="white" >


            <tr>
                <th colspan="5">NILAI MAHASISWA</th>
            </tr>
            <tr>
                <th>Mata Kuliah</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Tugas</th>
                <th>Nilai Absen</th>
            </tr>
            <?php for ($i = 0; $i < count($matkul); $i++) { ?>
                <tr>
                    <td><?php echo $matkul[$i];?></td>
                    <td><?php echo $nilaiuts[$i];?></td>
                    <td><?php echo $nilaiuas[$i];?></td>
                    <td><?php echo $nilaitugas[$i];?></td>
                    <td><?php echo $nilaiabsen[$i];?></td>
                   
                </tr>
            <?php }   ?>

            


        </tabel>
    </center>
       
        <th>
        <a href="biodata.PHP">==========> Klik Halaman Utama Untuk Kembali <==========</a>
        
</body>
    
</html>