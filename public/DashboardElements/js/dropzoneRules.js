Dropzone.options.userSignUploader = {
    maxFilesize: 0.03, // MB =>20KB
    renameFile: function(file) {
        var dt = new Date();
        var time = dt.getTime();
        return time + file.name;
    },
    acceptedFiles: ".jpeg,.jpg,.png",
    dictDefaultMessage: "فایل تصویر نمونه امضا",
    addRemoveLinks: true,
    timeout: 5000,
    success: function(file, response) {
        console.log(response);
    },
    error: function(file, response) {
        return false;
    }
};