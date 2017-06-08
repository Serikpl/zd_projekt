    <?php include ROOT.'/Views/Admin/adminheader.php'; ?>

    <div class="adminContent">
        <div class="container">
            <div class="admin-category">
                <h1>Użytkowniki</h1>
                <div class="content-wrapper">
                    <div class="addProduct">
                        <a href="/ad/users/add_user" title="add product">
                            <button>
                             dodaj użytkownika +
                            </button>
                        </a>
                    </div>
                    <div class="product_list">
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>email</th>
                                <th>user type</th>
                                <th>register date</th>
                                <th>opcje</th>

                            </tr>
                            <?php foreach($users as $row): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['user_type']; ?></td>
                                <td><?php echo $row['register_date']; ?></td>

                                <td class="opcje">
                                    <a href="/ad/users/edit_user/<?php echo $row['id']; ?>">edytuj</a>
                                    <a href="/ad/users/remove_user/<?php echo $row['id']; ?>">usuń</a>
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
