<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Barang
            <small>Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home </a></li>
            <li class="active">Barang Masuk </li>
        </ol>
    </section>
    <section class="content">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>ID Barang</th>
                <th>ID Rak</th>
                <th>Jumlah</th>
                <th>Tanggal Keluar</th>
                <th>Keterangan</th>
            </tr>
            <?php
            $no = 1;
            foreach ($brg_keluar as $brgklr) : ?>

                <tr>
                    <td> <?php echo $no++ ?> </td>
                    <td> <?php echo $brgklr->id_barang ?> </td>
                    <td> <?php echo $brgklr->id_rak ?> </td>
                    <td> <?php echo $brgklr->jumlah ?> </td>
                    <td> <?php echo $brgklr->tgl_keluar ?> </td>
                    <td> <?php echo $brgklr->keterangan ?> </td>
                </tr>

            <?php
            endforeach; ?>

        </table>
    </section>
</div>