Dropzone.autoDiscover = false; // Prevent Dropzone from automatically attaching to every element with the 'dropzone' class
var signDropzone = new Dropzone("#sign-dropzone", {
    url: "/dashboard/sign", // URL to which the files will be uploaded
    maxFiles: 1, // Maximum number of files that can be uploaded
    maxFilesize: 0.03, // Maximum file size in MB =>20 KB
    acceptedFiles: ".jpg,.jpeg,.png,", // Allowed file types
    addRemoveLinks: true, // Adds a remove link to each file preview
    dictRemoveFile: "حدف", // Text for remove link
    dictDefaultMessage: " تصویر نمونه امضا PNG",
    headers: { // Optional headers to send with the file upload request
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function(file, response) { // Function called when file is successfully uploaded
        console.log(response);
    },
    error: function(file, response) {
        console.log(response);
        return false;
    },
});
