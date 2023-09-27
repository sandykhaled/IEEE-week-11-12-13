<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
            <?php if($user['id']):?>
            Update User : <b><?= $user['name']?></b>
            <?php else:?>
            Create New User
            <?php endif;?>
            </h3>

        </div>
        <div class="card-body">
<form method="post" enctype="multipart/form-data" action="">
    <div class="form-group">
        <label>Name</label>
        <input name="name" class="form-control <?= $errors['name'] ? 'is-invalid':' ';?>"  value="<?= $user['name']?>">
        <div class="invalid-feedback">
            <?= $errors['name']?>
        </div>
    </div>
    <div class="form-group">
        <label>UserName</label>
        <input name="username"  value="<?= $user['username']?>" class="form-control <?= $errors['username'] ? 'is-invalid':' ';?>">
        <div class="invalid-feedback">
            <?= $errors['username']?>
        </div>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input name="email" class="form-control <?= $errors['email']?'is-invalid':''?>" value="<?= $user['email']?>">
        <div class="invalid-feedback">
            <?= $errors['email']?>
        </div>
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input name="phone" class="form-control <?= $errors['phone']?'is-invalid':''?>" value="<?=$user['phone']?>">
        <div class="invalid-feedback">
            <?= $errors['phone']?>
        </div>
    </div>
    <div class="form-group">
        <label>Website</label>
        <input name="website" class="form-control" value="<?=$user['website']?>">
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control-file" name="picture" >
    </div>
    <button class="btn btn-success">Submit</button>
</form>
</div>

</div>
</div>