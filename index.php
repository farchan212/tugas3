<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>TUGAS 3</title><link rel="stylesheet" href="style.css"><link rel="icon" href="icons8_3_1.ico"></head><body><h3>Menghitung Nilai Akhir <br></h3><div class="identitas"><table><tr><th>Nama</th><th>:</th><td>Muhammad Farchan Thamrin</td></tr><tr><th>NPM</th><th>:</th><td>20650121</td></tr><tr><th>Kelas</th><th>:</th><td>D</td></tr></table></div><div class="tugas"><form method="post"><table border="1"><tr><td class="caption"><label for="nilaiTugas" >Nilai Tugas</label></td><td class="angka"><input autocomplete="off" placeholder="Masukkan Nilai Tugas" required type="number" min="0" step="any" name="nilaiTugas" id="nilaiTugas"></td></tr><tr><td class="caption"><label for="nilaiMid">Nilai MID</label></td><td class="angka"><input autocomplete="off" placeholder="Masukkan Nilai Mid" required type="number" min="0" step="any" name="nilaiMid" id="nilaiMid"></td></tr><tr><td class="caption"><label for="nilaiFinal">Nilai Final</label></td><td class="angka"><input autocomplete="off" placeholder="Masukkan Nilai Final" required type="number" min="0" step="any" name="nilaiFinal" id="nilaiFinal"></td></tr><tr align="center"><td class="tombol" colspan="2"><button type="submit" name="input">KONVERSI</button></td></tr><tr><td class="caption"><label>Nilai Akhir</label></td><td><?php if (isset($_POST['input'])){$tugas = $_POST['nilaiTugas'];$mid = $_POST['nilaiMid'];$final = $_POST['nilaiFinal'];$akhir = number_format(($tugas + $mid + $final) / 3,2);echo $akhir;} ?></td></tr></table></form></div></body></html>