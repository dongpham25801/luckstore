<div class="modal fade" id="editCateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-light" id="card-header">
                <h5 class="modal-title">Chỉnh sửa danh mục</h5>
            </div>
            <div class="modal-body px-4">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                            <fieldset class="form-group">
                                <label class="font-weight-bold">Tên danh mục</label>
                                <input class="form-control nameEditCate" name="name" placeholder="Nhập tên danh mục">
                                <span class="text-danger font-italic errorsEdit"></span>
                                {{--                                <span class="text-danger font-italic errorEditCatJS d-none"></span>--}}
                            </fieldset>
                            <div class="form-group">
                                <label for="">Trạng thái</label>
                                <select class="form-control sttEditCate" name="stt">
                                    <option selected disabled>Trạng thái</option>
                                    <option value="1">Hiển thị</option>
                                    <option value="0">Không hiển thị</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm badge badge-warning change" data-url="">Save changes</button>
                <button class="btn btn-default btn-sm" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
