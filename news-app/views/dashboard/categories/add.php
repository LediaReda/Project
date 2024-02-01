<?php require_once '../../../app/config.php'; ?>
<?php require_once MAIN_PATH . 'views/dashboard/inc/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center my-4">All New Category</h1>
        </div> 
        <div class="col-8 mx-auto">
            <form action="<?php echo URL . "controllers/dashboard/categories/store.php";
            ?>" class="form border p-3 my-3" method="POST">
                <?php include MAIN_PATH . "views/dashboard/inc/messages.php"; ?>
                <div class="mb-3">
                    <label for="">Category Nane</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>  
                <div class="mb-3"> 
                    <input type="submit" value="Add" class="form-control text-white bg-success">
                </div>
            </form>        
    </div>
</div>

<?php require_once MAIN_PATH . 'views/dashboard/inc/footer.php'; ?>