
@extends('admin.layout.app')

@section('content')
    <h3>Order</h3>
    <hr>

    <div class="table-section mt-5">
        <h5>Data Order</h5>
        <table id="order-table" data-height="460">
            <thead>
                <tr>
                    <th data-visible="false" data-field="id">ID</th>
                    <th data-sortable="true" data-field="user.name">User</th>
                    <th data-sortable="true" data-field="type">Type</th>
                    <th data-sortable="true" data-field="store.name">Location</th>
                    <th data-sortable="true" data-field="address">Address</th>
                    <th data-sortable="true" data-field="phone">Phone</th>
                    <th data-sortable="true" data-field="note">Note</th>
                </tr>
            </thead>
        </table>
    </div>


@endsection


@section('script')
    <script src="<?=asset('asset/js/admin/order/view.js');?>"></script>
@endsection

