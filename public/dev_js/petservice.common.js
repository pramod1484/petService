
  'use strict';
    
    $('.delete').click(function(){
       var _self = $(this);
                
        $.ajax({
    url: _self.attr('href'),
    dataType: "json",
    type: "DELETE",
    contentType: 'application/json; charset=utf-8',
    processData: false,
    cache: false,
    success: function (data) {
        _self.closest   ('tr').remove();
    },
    error: function (xhr) {
console.log(xhr);
        alert('somthing going wrong.');
    }
});
        return false;
    });
