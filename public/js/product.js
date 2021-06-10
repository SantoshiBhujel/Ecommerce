$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#menu').change(function(e){
        // var value= $(this).children("option:selected").val();
        var value = e.target.value;

        console.log(value);
        $.ajax({
            type:"get",    
            url:"/get/"+value+"/submenus",

            success:function (data) {
                $('#submenu').empty();   
                $('#submenu').append('<option value="">Select Submenu</option>');
                $('#category').empty();   
                $('#category').append('<option value="">Select Submenu</option>');
                $.each(data.submenus,function(index,submenu){
                    $('#submenu').append('<option value="'+submenu.id+'">'+submenu.name+'</option>');
                })
                console.log('success');
            }
        });

        // var id= $(this).children("option:selected").val();
        // $.ajax({
        //     type:"get",    
        //     url:"/get/"+id+"/category",

        //     success:function (data) {
        //         $('#category').empty();
        //         $.each(data.categories,function(index,category){
        //             $('#category').append('<option value="'+category.id+'">'+category.name+'</option>');
        //         })
        //         console.log('success');
        //     }
        // });
    });

    $('#submenu').change(function(e){
        // var value= $(this).children("option:selected").val();
        var value = e.target.value;

        console.log(value);
        $.ajax({
            type:"get",    
            url:"/get/"+value+"/category",

            success:function (data) {
                $('#category').empty();
                $('#category').append('<option value="">Select Category</option>');
                $.each(data.categories,function(index,category){
                    $('#category').append('<option value="'+category.id+'">'+category.name+'</option>');
                })
                console.log('success');
            }
        });
    });

});


