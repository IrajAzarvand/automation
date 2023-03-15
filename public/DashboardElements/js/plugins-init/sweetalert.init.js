// (document.querySelector(".sweet-wrong").onclick = function() {
//     sweetAlert("Oops...", "Something went wrong !!", "error");
// }),
// (document.querySelector(".sweet-message").onclick = function() {
//     swal("Hey, Here's a message !!");
// }),
// (document.querySelector(".sweet-text").onclick = function() {
//     swal("Hey, Here's a message !!", "It's pretty, isn't it?");
// }),
// (document.querySelector(".sweet-success").onclick = function() {
//     swal("Hey, Good job !!", "You clicked the button !!", "success");
// }),
// (document.querySelector(".sweet-confirm").onclick = function() {
//     swal({
//             title: "Are you sure to delete ?",
//             text: "You will not be able to recover this imaginary file !!",
//             type: "warning",
//             showCancelButton: !0,
//             confirmButtonColor: "#DD6B55",
//             confirmButtonText: "Yes, delete it !!",
//             closeOnConfirm: !1,
//         },
//         function() {
//             swal(
//                 "Deleted !!",
//                 "Hey, your imaginary file has been deleted !!",
//                 "success"
//             );
//         }
//     );
// }),
// (document.querySelector(".sweet-success-cancel").onclick = function() {
//     swal({
//             title: "Are you sure to delete ?",
//             text: "You will not be able to recover this imaginary file !!",
//             type: "warning",
//             showCancelButton: !0,
//             confirmButtonColor: "#DD6B55",
//             confirmButtonText: "Yes, delete it !!",
//             cancelButtonText: "No, cancel it !!",
//             closeOnConfirm: !1,
//             closeOnCancel: !1,
//         },
//         function(e) {
//             e
//                 ?
//                 swal(
//                     "Deleted !!",
//                     "Hey, your imaginary file has been deleted !!",
//                     "success"
//                 ) :
//                 swal(
//                     "Cancelled !!",
//                     "Hey, your imaginary file is safe !!",
//                     "error"
//                 );
//         }
//     );
// }),
// (document.querySelector(".sweet-image-message").onclick = function() {
//     swal({
//         title: "Sweet !!",
//         text: "Hey, Here's a custom image !!",
//         imageUrl: "../assets/images/hand.jpg",
//     });
// }),
// (document.querySelector(".sweet-html").onclick = function() {
//     swal({
//         title: "Sweet !!",
//         text: "<span style='color:#ff0000'>Hey, you are using HTML !!<span>",
//         html: !0,
//     });
// }),
// (document.querySelector(".sweet-auto").onclick = function() {
//     swal({
//         title: "Sweet auto close alert !!",
//         text: "Hey, i will close in 2 seconds !!",
//         timer: 2e3,
//         showConfirmButton: !1,
//     });
// }),
// (document.querySelector(".sweet-prompt").onclick = function() {
//     swal({
//             title: "Enter an input !!",
//             text: "Write something interesting !!",
//             type: "input",
//             showCancelButton: !0,
//             closeOnConfirm: !1,
//             animation: "slide-from-top",
//             inputPlaceholder: "Write something",
//         },
//         function(e) {
//             return (!1 !== e &&
//                 ("" === e ?
//                     (swal.showInputError("You need to write something!"), !1) :
//                     void swal("Hey !!", "You wrote: " + e, "success"))
//             );
//         }
//     );
// }),
// (document.querySelector(".sweet-ajax").onclick = function() {
//     swal({
//             title: "Sweet ajax request !!",
//             text: "Submit to run ajax request !!",
//             type: "info",
//             showCancelButton: !0,
//             closeOnConfirm: !1,
//             showLoaderOnConfirm: !0,
//         },
//         function() {
//             setTimeout(function() {
//                 swal("Hey, your ajax request finished !!");
//             }, 2e3);
//         }
//     );
// });




//PUBLIC ALERTS
//=========================================================
//for showing success message when a process done successfully.
window.addEventListener('swal:Success', function() {
    Swal.fire({
        title: 'افزودن اطلاعات',
        text: "عملیات مورد نظر با موفقیت انجام شد!",
        type: 'success',
        confirmButtonText: 'تایید',
    });
});

//for showing success message when a process done successfully.
window.addEventListener('swal:UpdateSuccess', function() {
    Swal.fire({
        title: 'ویرایش اطلاعات',
        text: "اطلاعات مورد نظر با موفقیت بروز رسانی شد!",
        icon: 'success',
        confirmButtonText: 'تایید',
    });
});


//for showing success message when item deleted successfully.
window.addEventListener('swal:DeleteSuccess', function(e) {
    Swal.fire({
        title: 'حذف اطلاعات',
        text: "اطلاعات مورد نظر با موفقیت حذف شد!",
        icon: 'success',
        confirmButtonText: 'تایید',
    });
});



//for showing warning message when items are incomplete.
window.addEventListener('swal:IncompleteData', function(e) {
    Swal.fire({
        title: 'تکمیل اطلاعات',
        text: "تمامی اطلاعات مورد را تکمیل نمایید!",
        icon: 'warning',
        confirmButtonText: 'تایید',
    });
});


//for get confirmaion on delete an item from DB
window.addEventListener('swal:AddItemError', function(e) {
    Swal.fire({
        title: e.detail.title,
        text: e.detail.text,
        icon: 'warning',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'تایید!',
    });
});



//for get confirmaion on delete an item from DB
window.addEventListener('swal:itemDelConfirm', function(e) {
    Swal.fire({
        title: 'آیا مطمئن هستید؟',
        text: "در صورت حذف، غیرقابل بازیابی خواهد بود!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'بله!',
        cancelButtonText: 'خیر'
    }).then((result) => {
        if (result.isConfirmed) {
            console.log(e.detail);
            window.livewire.emit(e.detail.callback, [e.detail.ElementId, e.detail.ItemId]);
        }
    });
});




//for editing api
window.addEventListener('swal:EditForm', function(e) {
    (async() => {

        let api_name = e.detail.Data['api_name'];
        let api_key = e.detail.Data['api_key'];
        let api_secret = e.detail.Data['api_secret'];
        let api_passphrase = e.detail.Data['api_passphrase'];

        const {
            value: formValues
        } = await Swal.fire({
            title: 'ویرایش اطلاعات',
            html: '<input id="swal-input1" value="' + api_name + '" class="swal2-input">' +
                '<input id="swal-input2" value="' + api_key + '" class="swal2-input">' +
                '<input id="swal-input3" value="' + api_secret + '" class="swal2-input">' +
                '<input id="swal-input4" value="' + api_passphrase + '" class="swal2-input">',
            focusConfirm: false,
            preConfirm: () => {
                let updatedApi = {
                    'api_name': document.getElementById('swal-input1').value, //api_name
                    'api_key': document.getElementById('swal-input2').value, //api_key
                    'api_secret': document.getElementById('swal-input3').value, //api_secret
                    'api_passphrase': document.getElementById('swal-input4').value //api_passphrase
                };
                //redirect to api-item component
                window.livewire.emit(e.detail.function, e.detail.id, updatedApi);

            }
        })
    })()
});