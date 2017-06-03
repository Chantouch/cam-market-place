function uploadPreview(input, id) {
    if (input.files && input.files[0]) {
        let preview = new FileReader();
        preview.onload = function (e) {
            $('#' + id).attr('src', e.target.result);
        };
        preview.readAsDataURL(input.files[0]);
    }
}

$(function () {
    // We can attach the `fileselect` event to all file inputs on the page
    $(document).on('change', ':file', function () {
        let input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });
    // We can watch for our custom `fileselect` event like this
    $(document).ready(function () {
        $(':file').on('fileselect', function (event, numFiles, label) {
            let input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;

            if (input.length) {
                input.val(log);
            } else {
                if (log) console(log);
            }
        });
    });
});