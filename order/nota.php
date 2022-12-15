<?php
  session_start();
  include '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
    $no = 1; 
    $id = $_GET['transactions_id'];
    $query = mysqli_query($config, "SELECT transactions_id, pewangi, email, description, price, date_transaction, 
          status, weight, total, payment_method, costumers.name as nameCus, costumers.phone_number, 
          users.name as nameKasir, service.name as name_service FROM transactions 
          JOIN users ON transactions.users_id=users.id
          JOIN service ON transactions.service_id=service.id
          JOIN costumers ON transactions.costumers_id=costumers.id ORDER BY date_transaction DESC");

    while($data = mysqli_fetch_array($query)) {
      $no_wa = substr($data['phone_number'],1);
      $status_pembayaran='';
      if($data['payment_method']== "BAYAR DIAWAL"){
        $status_pembayaran="Sudah Bayar";
      } else {
        $status_pembayaran="Belum Dibayar";
      }

      $tgl1 =$data['date_transaction'];
      $tgl2 =date('Y-m-d', strtotime('+2 days', strtotime($tgl1)));  
                  
  ?>
<p>Wash D'vins Laundry Jalan candi gebang III Yogyakarta, <br>
No. HP 081228128300<br>
====================<br>
Tgl  : <?= $data['date_transaction']; ?> <br>
Nama : <?= $data['nameCus']; ?><br>
No.nota : SL.<?= $data['transactions_id']; ?><br>
Kasir: <?= $data['nameKasir']; ?><br><br>
===================<br>
Tipe Layanan  : <?= $data['name_service']; ?><br>
Jenis Pewangi : <?= $data['pewangi']; ?><br>
Berat (kg)    : <?= $data['weight']; ?><br>
Harga /kg     : Rp.<?= $data['price']; ?>,-<br>
Subtotal      : Rp.<?= $data['total']; ?>,-<br>
====================<br>
Perkiraan Selesai :  <?= $tgl2; ?> <br>
<br>
====================<br>
Status   :  <?= $status_pembayaran; ?><br>
====================<br>
KETENTUAN :<br>
1. Pakaian Luntur bukan menjadi tanggung jawab laundry.<br>
2. Komplain pakaian kami layani 1x24 jam, sejak pakaian diambil.<br>
3. Pengambilan laundry wajib menggunakan nota asli.<br>
4. Laundry yang tidak diambil jangka waktu 1 bulan, <br>&nbsp; jika terjadi kerusakan menjadi tanggung jawab pemilik.<br>
Terimakasih atas kunjungan anda<br>
<br>

Klik link dibawah ini untuk melihat nota digital<br>
<a href="http://laodinawang.site/order/nota.php?transactions_id=<?= $data['transactions_id']; ?>">http://sislaundry.test/order/nota.php ?<?= $data['transactions_id']; ?> </a>
</p>
<?php
}
?>

    <script>
        window.print();
    </script>
</body>
</html>
