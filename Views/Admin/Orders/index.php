    <?php include ROOT.'/Views/Admin/adminheader.php'; ?>

    <div class="adminContent">
        <div class="container">
            <div class="admin-category">
                <h1>Orders</h1>
                <div class="content-wrapper">
                    <div class="product_list">
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                                <th>id</th>
                                <th>status</th>
                                <th>customer_id</th>
                                <th>orderDate</th>
                                <th>amount</th>
                                <th>shippedDate</th>
                                <th>transaction_id</th>
                                <th>opcje</th>

                            </tr>
                            <?php foreach($orders as $row): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td><?php echo $row['customer_id']; ?></td>
                                <td><?php echo $row['orderDate']; ?></td>
                                <td><?php echo $row['amount']; ?></td>
                                <td><?php echo $row['shippedDate']; ?></td>
                                <td><?php echo $row['transaction_id']; ?></td>

                                <td class="opcje">
                                    <a href="/ad/orders/edit_brand/<?php echo $row['id']; ?>">zarzadzaj</a>
                                    <a href="/ad/orders/remove_order/<?php echo $row['id']; ?>">usuń</a>
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
