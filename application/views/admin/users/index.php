<div>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>username</th>
            <th>IP Address</th>
            <th>Created</th>
            <th>Last Login</th>
        </tr>
        <?php $i=1; foreach ($users as $user) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $user->first_name ?> <?= $user->last_name ?> </td>
                <td><?= $user->email ?></td>
                <td><?= $user->username ?></td>
                <td><?= $user->ip_address ?></td>
                <td><?php
                // unix timestamp to date
                echo date('d-m-Y H:m', $user->created_on);
                ?></td>
                <td><?php
                // unix timestamp to date
                echo date('d-m-Y H:m', $user->last_login);
                ?></td>
            </tr>
        <?php $i++; endforeach; ?>
    </table>
</div>