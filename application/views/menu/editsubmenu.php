<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('menu/editSubMenu/' . $subMenu['id']); ?>
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" value="<?= $subMenu['title']; ?>">
                    <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="menu_id" class="col-sm-2 col-form-label">Menu</label>
                <div class="col-sm-10">
                    <select name="menu_id" id="menu_id" class="form-control">
                        <option value="">Select Menu</option>
                        <?php foreach ($menu as $m) : ?>
                        <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('menu', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="url" class="col-sm-2 col-form-label">URL</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="url" name="url" value="<?= $subMenu['url']; ?>">
                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="icon" class="col-sm-2 col-form-label">ICON</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $subMenu['icon']; ?>">
                    <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="is_active" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                        <label class="form-check-label" for="is_active">
                            Active ?
                        </label>
                    </div>
                    <?= form_error('is_active', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

</div>
<!-- End of Main Content --> 