$(document).on('change', '.variation-radios input', function() {
    $('select[name="'+$(this).attr('name')+'"]').val($(this).val()).trigger('change');
        
});