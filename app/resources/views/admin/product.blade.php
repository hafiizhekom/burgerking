
@extends('admin.layout.app')

@section('content')
    <h3>Product</h3>
    <hr>
    <div class="insert-section">
        <h5>Add Product</h5>
        <form id="add-product">
        <div class="form-group">
            <label>Product Name</label>
            <input class="form-control" type="text" placeholder="Name" value="" name="name" required>
        </div>
        <div class="form-group">
            <label>Product Code</label>
            <input class="form-control" type="text" placeholder="Code" value="" name="code" required>
            <small id="recommended-code"></small>
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" placeholder="Description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label>Product Price</label>
            <input class="form-control" type="number" min="0" placeholder="Price" value="0" name="price" required>
        </div>
        <div class="form-group">
            <label>Product Image</label><br>
            <input type="file" name="image" id="file" required>
        </div>
        <div class="form-group">
            <label>Product Category</label>
            <select class="form-control category-list" name="category" required>

            </select>
        </div>
        <button type="submit" class="btn btn-md btn-block btn-primary">Save</button>
        </form>
    </div>

    <div class="table-section mt-5">
        <h5>Data Product</h5>
        <table id="product-table" data-height="460">
            <thead>
                <tr>
                    <th data-visible="false" data-field="id">ID</th>
                    <th data-sortable="true" data-field="code">Code</th>
                    <th data-sortable="true" data-field="name">Name</th>
                    <th data-field="description">Description</th>
                    <th data-sortable="true" data-field="price">Price</th>
                    <th data-formatter="imageFormatter">Image</th>
                    <th data-field="productcategory.name">Category</th>
                    <th data-formatter="actionFormatter">Action</th>
                </tr>
            </thead>
        </table>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Product</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="edit-product">
                    <div class="form-group">
                        <label>Product Code</label>
                        <input class="form-control" type="text" placeholder="Code" value="" id="code-edit" name="code" disabled required>
                    </div>
                    <div class="form-group">
                        <label>Product Name</label>
                        <input class="form-control" type="text" placeholder="Name" value="" id="name-edit" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Product Description</label>
                        <textarea class="form-control" placeholder="Description" id="desc-edit" name="description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Product Price</label>
                        <input class="form-control" type="number" min="0" placeholder="Price" value="" id="price-edit" name="price" required>
                    </div>
                    <div class="form-group">
                        <label>Product Image</label><br>
                        <input type="file" name="image">
                    </div>
                    <div class="form-group">
                        <label>Product Category</label>
                        <select class="form-control category-list" id="category-edit" name="category" required>

                        </select>
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
              <h5 class="modal-title">Delete Product</h5>
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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="<?=asset('asset/js/admin/product/view.js');?>"></script>
    <script src="<?=asset('asset/js/admin/product/add.js');?>"></script>
    <script src="<?=asset('asset/js/admin/product/edit.js');?>"></script>
    <script src="<?=asset('asset/js/admin/product/delete.js');?>"></script>
@endsection

