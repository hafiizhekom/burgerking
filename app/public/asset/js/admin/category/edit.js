
$("#edit-category").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.


    var formData = new FormData(this);

    $.ajaxSetup({
        headers: { 'Authorization': localStorage.getItem('token') }
    });

    $.ajax({
           type: "POST",
           url: "http://localhost:5000/category/change",
           data: formData, // serializes the form's elements.
           processData: false,
           contentType : false,
           success: function(data)
           {
               if(data.status){
                    load_data();
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
