var data = "";
$(window).ready(function(){
    load_data();
})

$.ajaxSetup({
    headers: { 'Authorization': localStorage.getItem('token') }
});

function load_data(){
    $.ajax({
        type : 'GET',
        url : api+'order',
        data:{},
        processData: false,
        contentType: false,
        success : function(data) {
            $('#order-table').bootstrapTable("destroy");
            $('#order-table').bootstrapTable({
                data: data.data,
                pagination: true,
                search: true
            })
        }
    });
}
