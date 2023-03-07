<?php
$arrayMahasiswa = [
    [
        'nama' =>'Ginanti',
        'mata_kuliah' => 'Pemrograman Web 2',
        'nilai_uts' => 89,
        'nilai_uas' => 90,
        'nilai_tugas' => 88,
    ],[
        'nama' => 'Annisa',
        'mata_kuliah' => 'Bahasa Inggris 1',
        'nilai_uts' => 88,
        'nilai_uas' => 89,
        'nilai_tugas' => 90,
    ]
];

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center text-primary">
				Nilai Mahasiswa
			</h3> 
            <a href="form_nilai.php" class="btn btn-outline-warning btn-md">
                Tambah Data
            </a>
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>
							No.
						</th>
						<th>
							Nama Mahasiswa
						</th>
						<th>
							Mata Kuliah
						</th>
						<th>
							Nilai UTS
						</th>
                        <th>
                            Nilai UAS
                        </th>
                        <th>
                            Nilai Tugas
                        </th>
                        <th>
                            Rata-rata
                        </th>
                        <th>
                            Grade
                        </th>
					</tr>
				</thead>
				<tbody>
					<?php 
                    $nomor = 1;
                    foreach($arrayMahasiswa as $key => $value) : 
                    ?>
                        <tr>
                            <td><?= $nomor++ ?></td>
                            <td><?= $value['nama'] ?></td>
                            <td><?= $value['mata_kuliah'] ?></td>
                            <td><?= $value['nilai_uts'] ?></td>
                            <td><?= $value['nilai_uas'] ?></td>
                            <td><?= $value['nilai_tugas'] ?></td>
                            <td><?= $rataRata = ($value['nilai_uts'] + $value['nilai_uas'] + $value['nilai_tugas']) / 3 ?></td>
                            <td>
                                <?php
                                if($rataRata >= 85 && $rataRata <= 100){
                                    echo "A";
                                } elseif($rataRata >= 70 && $rataRata <= 84){
                                    echo "B";
                                } elseif($rataRata >= 56 && $rataRata <= 69){
                                    echo "C";
                                } elseif($rataRata >= 36 && $rataRata <= 55){
                                    echo "D";
                                } elseif($rataRata <= 35){
                                    echo "E";
                                }
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>