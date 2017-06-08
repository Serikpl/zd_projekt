    <?php include ROOT.'/Views/Admin/adminheader.php'; ?>

    <div class="adminContent">
        <div class="container">
            <div class="admin-category">
                <h1>Produkty</h1>
                <div class="content-wrapper">
                    <div class="addProduct">
                        <a href="/ad/products/add_product/" title="add product">
                            <button>
                             dodaj produkt+
                            </button>
                        </a>
                    </div>
                    <div class="product_list">
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                                <th>id</th>
                                <th>nazwa produktu</th>
                                <th>opis produktu</th>
                                <th>ilość dostępnych</th>
                                <th>cena</th>
                                <th>skład (ID)</th>
                                <th>opcje</th>
                            </tr>
                            <?php foreach($products as $row): ?>
                            <tr>
                                <td>
                                    <?php echo $row['productCode']; ?>
                                </td>                                
                                <td>
                                    <?php echo $row['productName']; ?>
                                </td>
                                <td>
                                    <?php echo $row['productDescription']; ?>
                                </td>
                                <td>
                                    <?php echo $row['quantityInStock']; ?>
                                </td>
                                <td>
                                    <?php echo $row['buyPrice']; ?>
                                </td>
                                <td>
                                    <?php echo $row['warehouseCode']; ?>
                                </td>
                                <td class="opcje">
                                    <a href="/ad/products/edit_prod/<?php echo $row['productCode']; ?>">edytuj</a>
                                    <a href="/ad/products/remove_prod/<?php echo $row['productCode']; ?>">usuń</a>
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
