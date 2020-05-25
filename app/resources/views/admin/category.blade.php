
@extends('admin.layout.app')

@section('content')
    <h3>Category</h3>
    <hr>
    <div class="insert-section">
        <h5>Add Category</h5>
        <form id="add-product">
        <div class="form-group">
            <label>Category Name</label>
            <input class="form-control" type="text" placeholder="Name" value="" name="name" required>
        </div>
        <div class="form-group">
            <label>Category Code</label>
            <input class="form-control" type="text" placeholder="Code" value="" name="code" required>
            <small id="recommended-code"></small>
        </div>
        <button type="submit" class="btn btn-md btn-block btn-primary">Save</button>
        </form>
    </div>

    <div class="table-section mt-5">
        <h5>Data Category</h5>
        <table id="category-table" data-height="460">
            <thead>
                <tr>
                    <th data-visible="false" data-field="id">ID</th>
                    <th data-sortable="true" data-field="code">Code</th>
                    <th data-sortable="true" data-field="name">Name</th>
                    <th data-formatter="actionFormatter">Action</th>
                </tr>
            </thead>
        </table>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="edit-category">
                    <div class="form-group">
                        <label>Category Code</label>
                        <input class="form-control" type="text" placeholder="Code" value="" id="code-edit" name="code" disabled required>
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" type="text" placeholder="Name" value="" id="name-edit" name="name" required>
                    </div>
                    <input type="hidden" id="id-edit" name="id" value="">
                    <button type="submit" class="btn btn-primary btn-block">Save changes</button>
                </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal" tabindex="-1" role="dialog" id="delete-modal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Delete Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="delete-product">
                    <input type="hidden" id="id-delete" name="id" value="">
                    <button type="submit" class="btn btn-danger btn-block">Yes</button>
                    <button type="submit" class="btn btn-default btn-block" data-dismiss="modal">No</button>
                </form>
            </div>
          </div>
        </div>
      </div>

@endsection


@section('script')
    <script src="<?=asset('asset/js/admin/category/view.js');?>"></script>
    <script src="<?=asset('asset/js/admin/category/add.js');?>"></script>
    <script src="<?=asset('asset/js/admin/category/edit.js');?>"></script>
    <script src="<?=asset('asset/js/admin/category/delete.js');?>"></script>
@endsection

