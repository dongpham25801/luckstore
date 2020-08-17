<div class="modal fade" id="editBrandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header text-light" style="background: #0c5460">
                    <h5 class="modal-title">Chỉnh sửa Thương hiệu</h5>
                </div>
                <form role="form" enctype="multipart/form-data">
                    <div class="modal-body px-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control nameEditBrand" name="name" required autocomplete="name" autofocus placeholder="Nhập tên thương hiệu">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="thumbnail" class="col-md-4 col-form-label text-md-right">Thumbnails</label>

                                    <div class="col-md-8">
                                        <input type="file" class="form-control file-upload-default thumbnailEditBrand" name="thumbnail">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-sm btn-outline-primary" type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm badge-info badge text-black change-brand">Save changes</button>
                    <button class="btn btn-default btn-sm" type="button" data-dismiss="modal">Cancel</button>
                </div>
        </div>
    </div>
</div>
