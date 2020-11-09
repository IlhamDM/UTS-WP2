<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Barang
            <small>Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home </a></li>
            <li class="active">Data Barang</li>
        </ol>
    </section>
    <section class="content">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>ID Barang</th>
                <th>Nama Barang</th>
            </tr>
            <?php
            $no = 1;
            foreach ($barang as $brg) : ?>

                <tr>
                    <td> <?php echo $no++ ?> </td>
                    <td> <?php echo $brg->id_barang ?> </td>
                    <td> <?php echo $brg->nama ?> </td>
                </tr>

            <?php
            endforeach; ?>

        </table>
    </section>
</div>