(function ($) {
    'use strict';

    // Inline editor
    var editor = new MediumEditor('.editable');

    // Summernote editor
    $('#summernote').summernote({
        height: 200,
        tooltip: false
    })
    // Summernote editor
    $('#summernote_en').summernote({
        height: 200,
        tooltip: false
    })
    // Summernote editor
    $('#summernote_in').summernote({
        height: 200,
        tooltip: false
    })
})(jQuery);
