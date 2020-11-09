<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Stok Barang
            <small>Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home </a></li>
            <li class="active">Stok</li>
        </ol>
    </section>
    <section class="content">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>ID Rak</th>
                <th>Nama Rak</th>
                <th>Kapasitas</th>
                <th>Tersedia</th>
            </tr>
            <?php
            $no = 1;
            foreach ($rak as $r) : ?>

                <tr>
                    <td> <?php echo $no++ ?> </td>
                    <td> <?php echo $r->id_rak ?> </td>
                    <td> <?php echo $r->nama_rak ?> </td>
                    <td> <?php echo $r->kapasitas ?> </td>
                    <td> <?php echo $r->kapasitas + $r->jumlah_keluar - $r->jumlah_masuk ?> </td>
                </tr>

            <?php
            endforeach; ?>

        </table>
    </section>
</div>