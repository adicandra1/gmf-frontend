<form id="aboutMe" name="aboutMe" method="post" accept-charset="utf-8">

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" placeholder="full name" value="<?= printIfNotNull($user['name']); ?>">
        <small class="form-error text-danger pl-3 name"></small>
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="email" value="<?= printIfNotNull($user['email']); ?>" readonly>
    </div>
</div>
<div class="form-group row">
    <label for="contact" class="col-sm-2 col-form-label">Contact</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="contact" name="contact" placeholder="no telp" value="<?= printIfNotNull($user['contact']); ?>">
        <small class="form-error text-danger pl-3 contact"></small>
    </div>
</div>
<div class="form-group row">
    <label for="date" class="col-sm-2 col-form-label">Date of Birth</label>
    <div class="col-sm-3">
        <input type="date" data-format="DD-MM-YYYY" class="form-control" id="date" name="date" placeholder="date" value="<?= printIfNotNull($user['date']); ?>">
        <small class="form-error text-danger pl-3 date"></small>
    </div>
</div>

<div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="address" name="address" placeholder="address" value="<?= printIfNotNull($user['address']); ?>">
        <small class="form-error text-danger pl-3 address"></small>
    </div>
</div>

<div class="form-group row">
    <label for="national" class="col-sm-2 col-form-label">National</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="national" name="national" placeholder="national" value="<?= printIfNotNull($user['national']); ?>">
        <small class="form-error text-danger pl-3 national"></small>
    </div>
</div>
<div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">Pictures</label>
    <div class="col-sm-10">
        <div class="row">
            <div class="col-sm-3">
                <img src="<?= base_url() . '/uploads/img/profile/' . printIfNotNull($user['image']); /*TODO polish*/ ?>" class="img-thumbnail">
            </div>
            <div class="col-sm-9">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <small class="form-error text-danger pl-3 image"></small>
                    <label for="image" class="custom-file-label"></label>
                </div>
            </div>
        </div>
    </div>
</div>

</form>