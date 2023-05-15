<style>
  .total-container.warning {
    background-color: red;
    color: white;
    padding: 10px;
    font-weight: bold;
  }
  .total-container.success {
    background-color: teal;
    color: white;
    padding: 10px;
    font-weight: bold;
  }
  .chart-container {
    width: 2000px;
    height: 1600px;
    padding-left: 80px;
  }
</style>

<?php
include("koneksi.php");
$iduser = $_GET['iduser'];

$tableQuery = "SELECT j.iduser, s.jenissoal, j.jawaban AS jawaban, COUNT(*) AS counts
              FROM soal AS s
              INNER JOIN jawaban AS j ON s.idsoal = j.idsoal
              WHERE s.jenissoal = 'kostickanswer' AND j.iduser = '$iduser'
              GROUP BY j.iduser, j.jawaban
              ORDER BY counts DESC";

$tableResult = mysqli_query($mysqli, $tableQuery);

$chartQuery = "SELECT u.namauser, j.iduser, s.jenissoal, j.jawaban AS jawaban, COUNT(*) AS counts
              FROM soal AS s
              INNER JOIN jawaban AS j ON s.idsoal = j.idsoal
              INNER JOIN user AS u ON j.iduser = u.iduser
              WHERE s.jenissoal = 'kostickanswer' AND j.iduser = '$iduser'
              GROUP BY j.iduser, j.jawaban";

$chartResult = mysqli_query($mysqli, $chartQuery);

$data = array();
while ($row = mysqli_fetch_assoc($chartResult)) {
    $data[] = $row;
}

function mapJawabanToDesc($jawaban) {
  switch ($jawaban) {
      case 'A':
          return 'Kebutuhan Akan Keberhasilan';
      case 'B':
          return 'Kebutuhan untuk menjadi bagian dari kelompok';
      case 'C':
          return 'Keteraturan dan kerapihan';
      case 'D':
          return 'Minat pada tugas yang detail';
      case 'E':
          return 'Kekuatan menahan emosi';
      case 'F':
          return 'Kebutuhan untuk mendukung pemimpin';
      case 'G':
          return 'Peran sebagai pekerja keras';
      case 'I':
          return 'Kemampuan dalam mengambil keputusan';
      case 'K':
          return 'Kebutuhan untuk memaksakan pendapat';
      case 'L':
          return 'Peran Kepemimpinan';
      case 'N':
          return 'Kebutuhan untuk menyelesaikan tugas';
      case 'O':
          return 'Kebutuhan akan kedekatan rasa disukai';
      case 'P':
          return 'Kebutuhan akan mengawasi orang lain';
      case 'R':
          return 'Tipe teoritis';
      case 'S':
          return 'Perluasan lingkup sosial';
      case 'T':
          return 'Kecepatan';
      case 'V':
          return 'Penuh energy';
      case 'W':
          return 'Kebutuhan akan aturan dan pengarahan';
      case 'X':
          return 'Kebutuhan untuk diperhatikan';
      case 'Z':
          return 'Kebutuhan akan perubahan';
      default:
          return 'Unknown';
  }
}

$jsonData = json_encode($data);
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="chartBox">
    <h1 style="text-align:center; font-weight: bold;">Papi Kostick Chart</h1> <br>
    <h3 style="text-align:center;font-weight: bold;">Nama Peserta Ujian : <?php echo $data[0]['namauser']; ?></h3>
    <div class="chart-container">
      <canvas id="myChart"></canvas>
    </div>
</div>

<script>
const ctx = document.getElementById('myChart');

const data = <?php echo $jsonData?>;

const numbers = data.map(item => item.counts);
const alphabets = data.map(item => item.jawaban);
const desc = [];
for (let i = 0; i < alphabets.length; i++) {
  const element = alphabets[i];
  if (element === 'A') {
    desc.push('Kebutuhan Akan Keberhasilan');
  } else if (element === 'B') {
    desc.push('Kebutuhan untuk menjadi bagian dari kelompok');
  } else if (element === 'C') {
    desc.push('Keteraturan dan kerapihan');
  } else if (element === 'D') {
    desc.push('Minat pada tugas yang detail');
  } else if (element === 'E') {
    desc.push('Kekuatan menahan emosi');
  } else if (element === 'F') {
    desc.push('Kebutuhan untuk mendukung pemimpin');
  } else if (element === 'G') {
    desc.push('Peran sebagai pekerja keras');
  } else if (element === 'I') {
    desc.push('Kemampuan dalam mengambil keputusan');
  } else if (element === 'K') {
    desc.push('Kebutuhan untuk memaksakan pendapat');
  } else if (element === 'L') {
    desc.push('Peran Kepemimpinan');
  } else if (element === 'N') {
    desc.push('Kebutuhan untuk menyelesaikan tugas');
  } else if (element === 'O') {
    desc.push('Kebutuhan akan kedekatan rasa disukai');
  } else if (element === 'P') {
    desc.push('Kebutuhan akan mengawasi orang lain');
  } else if (element === 'R') {
    desc.push('Tipe teoritis');
  } else if (element === 'S') {
    desc.push('Perluasan lingkup sosial');
  } else if (element === 'T') {
    desc.push('Kecepatan');
  } else if (element === 'V') {
    desc.push('Penuh energy');
  } else if (element === 'W') {
    desc.push('Kebutuhan akan aturan dan pengarahan');
  } else if (element === 'X') {
    desc.push('Kebutuhan untuk diperhatikan');
  } else {
    desc.push('Kebutuhan akan perubahan');
  }
}

new Chart(ctx, {
  type: 'radar',
  data: {
    labels: desc,
    datasets: [{
        label: 'Grafik Papikostick',
        data: numbers,
        fill: true,
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgb(255, 99, 132)',
        pointBackgroundColor: 'rgb(255, 99, 132)',
        pointBorderColor: '#fff',
        pointHoverBackgroundColor: '#fff',
        pointHoverBorderColor: 'rgb(255, 99, 132)'
            }]
  },
  options: {
    layout:{
      padding:{
        bottom: 150
      }
    },
    plugins:{
      legend:{
        display: false
      },
    },
    scales: {
        r: {
            pointLabels: {
                font: {
                    size: 16
                },
            },
            beginAtZero: true,
            min: 0,
            max: 9
        },
    },
  }
  });
</script>

<div class="block full">
    <div class="table-responsive">
        <?php
        $totalCounts = 0;
        while ($hasil = mysqli_fetch_array($tableResult)) {
            $counts = $hasil['counts'];
            $totalCounts += $counts;
        }
        ?>
        <style>
          .total-container.warning {
              background-color: red;
              color: white;
              padding: 10px;
              font-weight: bold;
          }
        </style>
        <div class="total-container <?php if ($totalCounts < 90) { echo 'warning'; } else { echo 'success'; } ?>">
            <h4>Total Jawaban: <?php echo $totalCounts; ?><?php if ($totalCounts < 90) echo ', Siswa belum menyelesaikan seluruh soal!'; ?></h4>
        </div>
          <table id="example-datatable" class="table table-striped">
              <thead>
                  <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Deskripsi Kostick</th>
                      <th class="text-center">Nilai</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  $no = 1;
                  mysqli_data_seek($tableResult, 0);
                  while ($hasil = mysqli_fetch_array($tableResult)) {
                    $counts = $hasil['counts'];
                      ?>
                      <tr>
                          <td class="text-center"><?php echo $no++; ?></td>
                          <td class="text-center"><?php echo mapJawabanToDesc($hasil['jawaban']); ?></td>
                          <td class="text-center"><?php echo $hasil['counts']; ?></td>
                      </tr>
                  <?php } ?>
              </tbody>
          </table>
    </div>
</div>