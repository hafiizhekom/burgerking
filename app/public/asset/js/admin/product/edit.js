
$("#edit-product").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var formData = new FormData(this);


    $.ajax({
           type: "POST",
           url: "http://localhost:5000/product/change",
           data: formData, // serializes the form's elements.
           processData: false,
           contentType: false,
           success: function(data)
           {
               if(data.status){
                    $('#product-table').bootstrapTable('refresh');
                    alert(data.message);
                    $('#edit-modal').modal('hide')
               }else{
                   alert(data.message);
               }
           },
           error: function(xhr, status, error) {
            alert(xhr.responseText);
           }
         });


});
