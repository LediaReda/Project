<?php require_once '../../../app/config.php'; ?>
<?php require_once MAIN_PATH . 'views/dashboard/inc/header.php';?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>All Categories</h1>
        </div>
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $categories = dbGet('categories'); ?>
                    <?php foreach($categories as $category) :  ?>
                        <tr>
                            <td>1</td>
                            <td><?php echo $category['name']; ?></td>
                            <td>
                                <a href="" calss="btn btn-info">Edit</a>
                            </td>
                            <td>
                                <a href="" calss="btn btn-danger">Delete</a>
                            </td>        
                        </tr>
                    <?php endforeach; ?>    
                </tbody>
            </table>       
        </div>
    </div>       
</div>

<?php require_once MAIN_PATH . 'views/dashboard/inc/footer.php'; ?>