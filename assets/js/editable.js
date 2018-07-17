(function( $ ){
    $.fn.editable = function(option) {
        this.each(function (index,input) {
            $('#' + input.id).editableSelect(option);
            var keys =Object.keys(option.data);
            for (var i = 0 ; i < keys.length; i++){
                var key = keys[i];
                $('#' + input.id).editableSelect('add',option.data[key]);
            }

        })

    };
})( jQuery );