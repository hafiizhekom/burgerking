
@extends('admin.layout.app')

@section('content')
    <h3>Article</h3>
    <hr>
    <div class="insert-section">
        <h5>Add Article</h5>
        <form id="add-article">
        <div class="form-group">
            <label>Article Title</label>
            <input class="form-control" type="text" placeholder="Title" value="" name="title" required>
        </div>
        <div class="form-group">
            <label>Article Code</label>
            <input class="form-control" type="text" placeholder="Code" value="" name="code" required>
            <small id="recommended-code"></small>
        </div>
        <div class="form-group">
            <label>Article Image</label><br>
            <input type="file" name="image" id="file" required>
        </div>
        <div class="form-group">
            <label>Article Content</label><br>
            <textarea id="summernote" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-md btn-block btn-primary">Save</button>
        </form>
    </div>

    <div class="table-section mt-5">
        <h5>Data Article</h5>
        <table id="article-table" data-height="460">
            <thead>
                <tr>
                    <th data-visible="false" data-field="id">ID</th>
                    <th data-sortable="true" data-field="code">Code</th>
                    <th data-sortable="true" data-field="title">Title</th>
                    <th data-sortable="true" data-formatter="imageFormatter">Image</th>
                    <th data-formatter="actionFormatter">Action</th>
                </tr>
            </thead>
        </table>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Article</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="edit-article">
                    <div class="form-group">
                        <label>Article Code</label>
                        <input class="form-control" type="text" placeholder="Code" value="" id="code-edit" name="code" disabled required>
                    </div>
                    <div class="form-group">
                        <label>Article Title</label>
                        <input class="form-control" type="text" placeholder="Name" value="" id="title-edit" name="title" required>
                    </div>
                    <div class="form-group">
                        <label>Article Image</label><br>
                        <input type="file" name="image" id="file">
                    </div>
                    <div class="form-group">
                        <label>Article Content</label><br>
                        <textarea id="summernote-edit" name="content"></textarea>
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
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });

        $(document).ready(function() {
            $('#summernote-edit').summernote();
        });
    </script>
    <script src="<?=asset('asset/js/admin/article/view.js');?>"></script>
    <script src="<?=asset('asset/js/admin/article/add.js');?>"></script>
    <script src="<?=asset('asset/js/admin/article/edit.js');?>"></script>
    <script src="<?=asset('asset/js/admin/article/delete.js');?>"></script>
@endsection

