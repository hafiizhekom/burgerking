var data = "";
$(window).ready(function(){
    load_data();
})

function load_data(){
    $.ajax({
        type : 'GET',
        url : 'http://localhost:5000/store',
        success : function(data) {
            $('#store-table').bootstrapTable("destroy");
            $('#store-table').bootstrapTable({
                data: data.data,
                pagination: true,
                search: true
            })
        }
    });
}


function modaledit(id, code, name, address, phone, longitude, latitude){
    $("#id-edit").val(id);
    $("#code-edit").val(code);
    $("#name-edit").val(name);
    $("#address-edit").val(address);
    $("#phone-edit").val(phone);
    $("#longitude-edit").val(longitude);
    $("#latitude-edit").val(latitude);
    $('#edit-modal').modal('show')
}

function modaldelete(id){
    $("#id-delete").val(id);
    $('#delete-modal').modal('show')
}

function imageFormatter(value, row){
    return '<img style="width:100px" src="'+row.image+'">'
}


function actionFormatter(value, row) {
    var button = '<button class="btn btn-sm btn-warning m-2" onclick="modaledit(\''+row.id+'\', \''+row.code+'\', \''+row.name+'\', \''+row.address+'\', \''+row.phone+'\', \''+row.longitude+'\', \''+row.latitude+'\')">Edit</button>' +
        '<button class="btn btn-sm btn-danger" onclick="modaldelete(\''+row.id+'\')">Delete</button>'
    return button
}
