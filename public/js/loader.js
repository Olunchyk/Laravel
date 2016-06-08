// Custom example logic
//document.getElementById(id);
$(document).ready(function() {
var uploader = new plupload.Uploader({
    runtimes : 'html5',
    drop_element : 'dragndrop',
    browse_button : 'dragndrop',
    max_file_size : '10mb',
    url: 'post/addImage',
    multipart_params : {
        "_token" : $('input[name="_token"]').val()
    }
});
uploader.bind('Init', function(up, params) {
    if (uploader.features.dragdrop) {
        //$('debug').innerHTML = "";

        var target = document.getElementById("dragndrop");

        target.ondragover = function(event) {
            this.className = "active";
        };

        target.ondragenter = function() {
            this.className = "active";
        };

        target.ondragleave = function() {
            this.className = "";
        };

        target.ondrop = function() {
            this.className = "";
        };
    }
});
uploader.bind('FileUploaded', function(up, files, response) {
    $('#dragndrop').next().attr('src', window.location.origin + '/' + response.response).show();
    $('#dragndrop').remove();
    $('input[name="photo"]').val(response.response);
});
uploader.bind('QueueChanged', function(up) {
    up.start();
});
uploader.init();
});