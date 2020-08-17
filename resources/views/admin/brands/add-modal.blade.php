<div class="modal fade" id="addBrandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="#form-add-brand" role="form" enctype="multipart/form-data" method="POST" data-url="{{ route('brands.store') }}">
                @method('POST')
                @csrf
                <div class="modal-header text-light" style="background: #0c5460">
                    <h5 class="modal-title">Thêm Thương hiệu</h5>
                </div>
                <div class="modal-body px-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-8">
                                    <input type="text" class="form-control nameAddBrand" name="name" required autocomplete="name" autofocus placeholder="Nhập tên thương hiệu">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="thumbnail" class="col-md-4 col-form-label text-md-right">Thumbnails</label>

                                <div class="col-md-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm badge-info badge text-black add-brand">Create</button>
                    <button class="btn btn-default btn-sm" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
