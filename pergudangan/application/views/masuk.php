<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Barang
            <small>Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home </a></li>
            <li class="active">Barang Masuk </li>
        </ol>
    </section>
    <section class="content">
        <table class="table">
            <tr>
                <th>No</th>
                <th>ID Barang</th>
                <th>ID Rak</th>
                <th>Jumlah</th>
                <th>Tanggal Masuk</th>
                <th>Keterangan</th>
            </tr>
            <?php
            $no = 1;
            foreach ($brg_masuk as $brgmsk) : ?>

                <tr>
                    <td> <?php echo $no++ ?> </td>
                    <td> <?php echo $brgmsk->id_barang ?> </td>
                    <td> <?php echo $brgmsk->id_rak ?> </td>
                    <td> <?php echo $brgmsk->jumlah ?> </td>
                    <td> <?php echo $brgmsk->tgl_masuk ?> </td>
                    <td> <?php echo $brgmsk->keterangan ?> </td>
                </tr>

            <?php
            endforeach; ?>

        </table>
    </section>
</div>