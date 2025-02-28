<?php
    $ns1 = ["id" => 1, "nim" => "011022", "uts" => 80, "uas" => 84, "tugas" => 78];
    $ns2 = ["id" => 1, "nim" => "011032", "uts" => 90, "uas" => 70, "tugas" => 75];
    $ns3 = ["id" => 1, "nim" => "011042", "uts" => 60, "uas" => 90, "tugas" => 90];
    $ns4 = ["id" => 1, "nim" => "011052", "uts" => 70, "uas" => 78, "tugas" => 80];

    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Daftar Nilai Siswa</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $nomor = 1; 
                foreach ($ar_nilai as $ns) {
                    echo '<><td>'.$nomor.'</td>';
                    echo '<td>'.$ns['nim'].'</td>'; 
                    echo '<td>'.$ns['uts'].'</td>';
                    echo '<td>'.$ns['uas'].'</td>';
                    echo '<td>'.$ns['tugas'].'</td>';
                    $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) /3;
                    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                    echo '<tr/>';
                    $nomor++;
                }
             ?>
        </tbody>
    </table>
</body>
</html>