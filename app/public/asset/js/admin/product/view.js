var data = "";
$(window).ready(function(){
    load_category();
})

function load_data(){
    $.ajax({
        type : 'GET',
        url : api+'product/all',
        success : function(data) {
            $('#product-table').bootstrapTable("destroy");
            $('#product-table').bootstrapTable({
                data: data.data,
                pagination: true,
                search: true
            })
        }
    });
}

function load_category(){
    $.ajax({
        type : 'GET',
        url : api+'category',
        success : function(data) {
                $.each( data.data, function( key, value ) {
                $(".category-list").append("<option value='"+value['id']+"'>"+value['name']+"</option>");
            })

            load_data();
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
    var button = '<button class="btn btn-sm btn-warning m-2" onclick="modaledit(\''+row.id+'\', \''+row.code+'\', \''+row.name+'\', \''+row.description+'\', \''+row.price+'\', \''+row.category+'\')">Edit</button>' +
        '<button class="btn btn-sm btn-danger" onclick="modaldelete(\''+row.id+'\')">Delete</button>'
    return button
}
