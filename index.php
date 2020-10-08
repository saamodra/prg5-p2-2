<?php
  function getAge($birth_date) {
    $date = new DateTime($birth_date);
    $now = new DateTime();
    $interval = $now->diff($date);
    return $interval->y;
  }

  $listSiswa = [
    ['Dio', '2001-12-05'],
    ['Fikri', '2001-10-30'],
    ['Ivan', '1999-12-30'],
    ['Rifqy', '2001-06-18'],
    ['Samodra', '2000-12-08']
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRG5_20201_P2_2_0320190026</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="box-container">
    <h1>Berikut nama-nama teman di kelas saya : </h1>

    <table>
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Tanggal Lahir</th>
          <th>Umur (Tahun)</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $no = 1;
          foreach($listSiswa as $s) { ?>
            <tr>
              <td><?= $no ?></td>
              <td><?= $s[0] ?></td>
              <td><?= $s[1] ?></td>
              <td><?= getAge($s[1]) ?></td>
            </tr>
          <?php  
            $no++;
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>