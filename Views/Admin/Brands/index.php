    <?php include ROOT.'/Views/Admin/adminheader.php'; ?>

    <div class="adminContent">
        <div class="container">
            <div class="admin-category">
                <h1>Kategorie(brands)</h1>
                <div class="content-wrapper">
                    <div class="addProduct">
                        <a href="/ad/brands/add_brand" title="add product">
                            <button>
                             dodaj brand+
                            </button>
                        </a>
                    </div>
                    <div class="product_list">
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                                <th>id</th>
                                <th>nazwa kategorii</th>
                                <th>opcje</th>

                            </tr>
                            <?php foreach($brands as $row): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['brand_name']; ?></td>

                                <td class="opcje">
                                    <!-- <a href="/ad/brands/edit_brand/<?php echo $row['id']; ?>">edytuj</a> -->
                                    <a href="/ad/brands/remove_brand/<?php echo $row['id']; ?>">usuń</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
