
<div class="modal fade" id="editProductTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body px-4">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="modal-title" style="font-family: Tahoma; font-weight: bolder">Chỉnh sửa loại sản phẩm</h4>
                        <p></p>
                        <form role="form">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Loại SP</label>
                                <div class="col-sm-9">
                                    <input class="form-control text-light nameEditPtype" name="name" placeholder="Nhập tên loại sản phẩm">
                                </div>
                                <div class="alert-danger alert error"></div>
                                {{--<span class="text-danger font-italic errorEditCatJS d-none"></span>--}}
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="">Danh mục</label>
                                <div class="col-sm-9">
                                    <select class="form-control text-light cateEditPtype" name="cate_id">
    {{--                                    <option selected disabled>Danh mục</option>--}}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="">Trạng thái</label>
                                <div class="col-sm-9">
                                    <select class="form-control text-light sttEditPtype" name="stt" id="">
                                        <option selected disabled>Trạng thái</option>
                                        <option value="1" class="ht">Hiển thị</option>
                                        <option value="0" class="kht">Không hiển thị</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm badge badge-warning save-changes" data-url="">Save changes</button>
                <button class="btn btn-default btn-sm" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
