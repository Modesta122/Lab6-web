<?php
$database  ();
$data = $database->gets("data_mahasiswa");
?>
<div class="main">
    <a class="tambah" href="add">Tambah</a>
    <table>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        for ($i = 0; $i < count($data); $i++) {
        ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $data[$i]["nim"]; ?></td>
                <td><?= $data[$i]['nama']; ?></td>
                <td><?= $data[$i]['alamat']; ?></td>
                <td><a class="btnUpdate" href="update/<?= $data[$i]["id"] ?>">ubah</a></td>
                <td><a class="btnDelete" href="delete/<?= $data[$i]["id"] ?>">delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
