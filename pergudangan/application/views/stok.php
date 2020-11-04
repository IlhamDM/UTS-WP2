<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Stok Barang
            <small>Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home </a></li>
            <li class="active">Stok</li>
        </ol>
    </section>
    <section class="content">
        <table class="table">
            <tr>
                <th>No</th>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Stok</th>
            </tr>
            <?php
            $no = 1;
            foreach ($barang as $brg2) : ?>

                <tr>
                    <td> <?php echo $no++ ?> </td>
                    <td> <?php echo $brg2->id_barang ?> </td>
                    <td> <?php echo $brg2->nama ?> </td>
                    <td> <?php echo $brg2->jumlah_masuk - $brg2->jumlah_keluar ?> </td>
                </tr>

            <?php
            endforeach; ?>

        </table>
    </section>
</div>