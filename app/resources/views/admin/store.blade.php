
@extends('admin.layout.app')

@section('content')
    <h3>Store</h3>
    <hr>
    <div class="insert-section">
        <h5>Add Store</h5>
        <form id="add-store">
        <div class="form-group">
            <label>Store Name</label>
            <input class="form-control" type="text" placeholder="Name" value="" name="name" required>
        </div>
        <div class="form-group">
            <label>Store Code</label>
            <input class="form-control" type="text" placeholder="Code" value="" name="code" required>
            <small id="recommended-code"></small>
        </div>
        <div class="form-group">
            <label>Store Address</label>
            <textarea class="form-control" placeholder="Address" name="address" required></textarea>
        </div>
        <div class="form-group">
            <label>Store Phone</label>
            <input class="form-control" type="text" placeholder="Phone" value="" name="phone" onkeyup="numOnly(this)" onblur="numOnly(this)" required>
        </div>
        <div class="form-group">
            <div id="map" style="width:100%;height:400px;"></div>
        </div>
        <div class="form-group">
            <label>Store Longitude</label>
            <input class="form-control" type="text" placeholder="Longitude" value="" name="longitude" id="longitude" required>
        </div>
        <div class="form-group">
            <label>Store Latitude</label>
            <input class="form-control" type="text" placeholder="Latitude" value="" name="latitude" id="latitude" required>
        </div>

        <button type="submit" class="btn btn-md btn-block btn-primary">Save</button>
        </form>
    </div>

    <div class="table-section mt-5">
        <h5>Data Store</h5>
        <table id="store-table" data-height="460">
            <thead>
                <tr>
                    <th data-visible="false" data-field="id">ID</th>
                    <th data-sortable="true" data-field="code">Code</th>
                    <th data-sortable="true" data-field="name">Name</th>
                    <th data-sortable="true" data-field="address">Address</th>
                    <th data-sortable="true" data-field="phone">Phone</th>
                    <th data-sortable="true" data-field="longitude">Longitude</th>
                    <th data-sortable="true" data-field="latitude">Latitude</th>
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
                <form id="edit-store">
                    <div class="form-group">
                        <label>Category Code</label>
                        <input class="form-control" type="text" placeholder="Code" value="" id="code-edit" name="code" disabled required>
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" type="text" placeholder="Name" value="" id="name-edit" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Store Address</label>
                        <textarea class="form-control" placeholder="Address" id="address-edit" name="address" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Store Phone</label>
                        <input class="form-control" type="text" placeholder="Phone" value="" id="phone-edit" name="phone" onkeyup="numOnly(this)" onblur="numOnly(this)" required>
                    </div>
                    <div class="form-group">
                        <div id="map-edit" style="width:100%;height:400px;"></div>
                    </div>
                    <div class="form-group">
                        <label>Store Longitude</label>
                        <input class="form-control" type="text" placeholder="Longitude" value="" id="longitude-edit" name="longitude" id="longitude" required>
                    </div>
                    <div class="form-group">
                        <label>Store Latitude</label>
                        <input class="form-control" type="text" placeholder="Latitude" value="" id="latitude-edit" name="latitude" id="latitude" required>
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
                <form id="delete-store">
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
    <script src="<?=asset('asset/js/admin/store/view.js');?>"></script>
    <script src="<?=asset('asset/js/admin/store/add.js');?>"></script>
    <script src="<?=asset('asset/js/admin/store/edit.js');?>"></script>
    <script src="<?=asset('asset/js/admin/store/delete.js');?>"></script>
    <script src="<?=asset('asset/js/admin/store/map.js');?>"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAv3KB4lwr4gTaDuAkeFFGO11tHDGv8vz8&callback=initMap"
    type="text/javascript"></script>


@endsection

