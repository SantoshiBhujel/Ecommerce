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
                $.each(data.submenus,function(index,submenu){
                    $('#submenu').append('<option value="'+submenu.id+'">'+submenu.name+'</option>');
                })
                console.log('success');
            }
        });
    });

});


