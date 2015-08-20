
  'use strict';

    $('.delete').click(function(){
        var confirmStatus = confirm('Are you sure to delete?');
        if(!confirmStatus){
            return false;
        }
       var _self = $(this);
                
        $.ajax({
            url: _self.attr('href'),
            dataType: "json",
            type: "DELETE",
            contentType: 'application/json; charset=utf-8',
            processData: false,
            cache: false,
            data : {_token : $('meta[name="csrf_token"]').attr('content')},
            success: function (data) {
                _self.closest   ('tr').remove();
                 alert(data);
            },
            error: function (xhr) {
                alert('somthing going wrong.');
            }
        });
        return false;
    });
