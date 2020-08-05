var TableManaged = function() {

    var initTable1 = function() {

        var table = $('#data_tabel');
        table.dataTable({
            "lengthMenu": [
                [5, 10, 15, 20, -1],
                [5, 10, 15, 20, "All"]
            ],
            "pageLength": 5,
            "pagingType": "bootstrap_full_number",
            "language": {
                "search": "My search: ",
                "lengthMenu": "  _MENU_ records",
                "paginate": {
                    "previous": "Prev",
                    "next": "Next",
                    "last": "Last",
                    "first": "First"
                }
            }
        });
    }
    return {

        //main function to initiate the module
        init: function() {
            if (!jQuery().dataTable) {
                return;
            }
            initTable1();
        }
    };
}();