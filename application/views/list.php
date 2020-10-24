<html>
<head>
    <title>List Barang</title>
</head>
<body>
        <table>
            <thead>
                <tr>
                        <th> NAMA BARANG </th>
                        <th> JUMLAH </th>
                        <th> MERK </th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach ($list as $key) {?>
                <tr>
                    <td>  <?php echo $no++; ?></td>
                    <td>  <?php echo $key->nm_barang; ?></td>
                    <td>  <?php echo $key->merk; ?></td>
                    <td>  <?php echo $key->jml; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
</body>
</html>