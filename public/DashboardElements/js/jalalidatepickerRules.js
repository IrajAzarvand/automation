     jalaliDatepicker.startWatch({
         autoShow: false,
         hideAfterChange: false,
         showEmptyBtn: true,
         showTodayBtn: true,
         changeMonthRotateYear: true,
         date: true,
         time: false,
     });
     var inputList = document.querySelectorAll("input[data-jdp]");
     for (i = 0; i < inputList.length; i++) {
         inputList[i].addEventListener('focus', function() {
             if (this.hasAttribute("data-jdp-birth-date")) {
                 jalaliDatepicker.updateOptions({
                     minDate: "attr",
                     maxDate: "attr",
                 });
             } else if (this.hasAttribute("data-jdp-option-2")) {
                 jalaliDatepicker.updateOptions({
                     date: true,
                     time: false,
                     dayRendering() {
                         return {
                             isHollyDay: true
                         };
                     }
                 });
             }

             jalaliDatepicker.show(this);
         });
     }