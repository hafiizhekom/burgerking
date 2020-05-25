var data = "";
$(window).ready(function(){
    load_data();
})

function load_data(){
    $.ajax({
        type : 'GET',
        url : 'http://localhost:5000/category',
        success : function(data) {
            $('#category-table').bootstrapTable("destroy");
            $('#category-table').bootstrapTable({
                data: data.data,
                pagination: true,
                search: true
            })
        }
    });
}


function modaledit(id, code, name, description, price, category){
    $("#id-edit").val(id);
    $("#code-edit").val(code);
    $("#name-edit").val(name);
    $("#desc-edit").val(description);
    $("#price-edit").val(price);
    $("#category-edit").val(category);
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
    var button = '<button class="btn btn-sm btn-warning m-2" onclick="modaledit(\''+row.id+'\', \''+row.code+'\', \''+row.name+'\')">Edit</button>' +
        '<button class="btn btn-sm btn-danger" onclick="modaldelete(\''+row.id+'\')">Delete</button>'
    return button
}
