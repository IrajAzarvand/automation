Dropzone.options.fileUploader = {
    maxFilesize: 12,
    renameFile: function(file) {
        var dt = new Date();
        var time = dt.getTime();
        return time + file.name;
    },
    acceptedFiles: ".jpeg,.jpg,.png,.gif",
    // acceptedFiles: ".jpeg,.jpg,.png,.gif",
    addRemoveLinks: true,
    timeout: 5000,
    success: function(file, response) {
        console.log(response);
    },
    error: function(file, response) {
        return false;
    }
};
