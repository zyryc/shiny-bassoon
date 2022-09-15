<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="w3-container w3-center">
                    <h1>Order #<?php echo $order['id']; ?></h1>
                </div>
                <div>
                    <table>
                        <tr>
                            <td>Order ID</td>
                            <td>#<?php echo $order['id']; ?></td>
                        </tr>
                        <tr>
                            <td>Budget</td>
                            <td><?php echo $order['budget']; ?></td>
                        </tr>
                        <tr>
                            <td>subject</td>
                            <td><?php echo $order['subject']; ?></td>
                        </tr>
                        <tr>
                            <td>Order details</td>
                            <td><?php echo $order['details']; ?></td>
                        </tr>
                        <tr>
                            <td>Order Total</td>
                            <td><?php echo $order['deadline']; ?></td>
                        </tr>
                        <tr>
                            <td>File link</td>
                            <td><?php echo $order['file_link']; ?></td>
                        </tr>
                        <tr>
                            <td>Order files</td>
                            <td><?php 
                            // loop through the files array
                            $filez = json_decode($order['files']);
                            foreach ($filez as $file) {
                                echo "<a download href='".base_url()."assets/uploads/".$file."'>".$file."</a><br>";
                            }

                            ?></td>
                        </tr>
                        <tr>
                            <td>Action</td>
                            <td><a href="<?php echo base_url(); ?>orders/cancel/<?php echo $order['id']; ?>">Cancel</a></td>
                        </tr>
                        
                    </table>
            </div>
        </div>
    </div>
</div>