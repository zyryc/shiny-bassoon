<div id="my-orders">
    <h1><?= $title ?></h1>
    <table class="table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Subject</th>
                <th>Description</th>
                <th>Files</th>
                <th>Budget</th>
                <th>Deadline</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order) : ?>
                <tr>
                    <td><?= $order['id'] ?></td>
                    <td><?= $order['subject'] ?></td>
                    <td><?= $order['details'] ?></td>
                    
                    <td>
                    <?php 
                            // loop through the files array
                            $filez = json_decode($order['files']);
                            foreach ($filez as $file) {
                                echo "<a download href='".base_url()."assets/uploads/".$file."'><i class='fa fa-download' aria-hidden='true'></i> &nbsp;".$file."</a><br>";
                            }

                            ?></td>
                    <td><?= $order['budget'] ?></td>
                    <td><?= $order['deadline'] ?></td>
                    <td><?= $order['status'] ?></td>
                    <td>
                        <a href="<?= base_url() ?>order-edit/<?= $order['slug'] ?>">Edit</a>
                        <a href="<?= base_url() ?>order-delete/<?= $order['slug'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<style>
    
 .table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
  border: #ccc 1px solid;
}
.table tr:nth-child(2n) {
  background-color: #f8f8f8;
}
.table th, .table td {
  text-align: center;
  padding: 10px;
}
.table th {
  font-weight: bold;
  color: #000;
}
.table td {
  border-right: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    border-top: 1px solid #ccc;
}
.table td:last-child {
  border-right: none;
}
.table tr:last-child td {
  border-bottom: none;
}
.table tr:last-child td:first-child {
  border-bottom-left-radius: 5px;
}

</style>