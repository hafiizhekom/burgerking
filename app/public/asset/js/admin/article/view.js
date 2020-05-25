var data = "";
$(window).ready(function(){
    load_data();
})

function load_data(){
    $.ajax({
        type : 'GET',
        url : 'http://localhost:5000/article/all',
        success : function(data) {
            $('#article-table').bootstrapTable("destroy");
            $('#article-table').bootstrapTable({
                data: data.data,
                pagination: true,
                search: true
            })
        }
    });
}


function modaledit(id, code, title, content){
    $("#id-edit").val(id);
    $("#code-edit").val(code);
    $("#title-edit").val(title);
    $("#summernote-edit").summernote('code', content);
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
    var button = '<button class="btn btn-sm btn-warning m-2" onclick="modaledit(\''+row.id+'\', \''+row.code+'\', \''+row.title+'\', \''+row.content+'\')">Edit</button>' +
        '<button class="btn btn-sm btn-danger" onclick="modaldelete(\''+row.id+'\')">Delete</button>'
    return button
}
