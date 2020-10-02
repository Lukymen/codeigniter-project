<main role="main" class="container">
      <p class="lead">Selamat Datang di Halaman Karyawan</p> 

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Jenis kelamin</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
  <?php 
        foreach($karyawan->result() as $row)
        { 
        ?>
            <tr>
                <td><?php echo $row->nama_karyawan ?></td>
                <td><?php echo $row->jenis_kelamin ?></td>
                <td><?php echo $row->alamat_karyawan ?></td>
            </tr>
        <?php 
        } 
        ?>
  </tbody>
</table>
     
</main>



