$('form.ajax').on('submit', function(){
    var form = $(this);
    url = form.attr('action');
    method = form.attr('method');
    data ={};

    form.find('[name]').each(function(index, value){
        var form = $(this),
        name = form.attr('name'),
        value = form.val();

        data[name] = value;
    });
    $.ajax({
        url: url,
        type: type,
        data: data,
        success: function(){
            console.log(response);
        }
        
    });
    
    
    return false;
});