(function($) {
    "use strict"
    var table = $('#example3, #example4, #example5').DataTable();
    $('#example tbody').on('click', 'tr', function() {
        var data = table.row(this).data();
    });

    jQuery('.dataTables_wrapper select').selectpicker();

})(jQuery);