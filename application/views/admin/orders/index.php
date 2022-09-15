<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="w3-container w3-center">
                    <h1>Order List</h1>
                </div>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Subject</th>
                                <th>Deadline</th>
                                <th>Order Status</th>
                                <th>Budget</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($orders as $order): ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $order['subject']; ?></td>
                                    <td><?php echo $order['deadline']; ?></td>
                                    <td><?php echo $order['status']; ?></td>
                                    <td><?php echo $order['budget']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>orders/view/<?php echo $order['id']; ?>">View</a>
                                        <a href="<?php echo base_url(); ?>orders/cancel/<?php echo $order['id']; ?>">Cancel</a>
                                    </td>
                                </tr>
                            <?php $i++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>