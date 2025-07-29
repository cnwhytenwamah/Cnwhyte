$(document).ready(function () {
    $('#table').DataTable({
        dom: "Blfrtip",
        responsive: true,
        buttons: [
            {
                text: '<i class="fa fa-file-excel-o"></i> Save as Excel',
                extend: 'excelHtml5',
                header: true,
                title: ($('#table').data('url') + ' Records').toUpperCase(),
                messageBottom: '\n\n\n\nCreated on: ' + new Date() + '.',
                exportOptions: {
                    columns: ':visible:not(.not-export-col)'
                }
            },
            {
                text: '<i class="fa fa-file-pdf-o"></i> Save as PDF',
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'A4',
                exportOptions: {
                    columns: ':visible:not(.not-export-col)'
                },

                header: true,
                title: ($('#table').data('url') + ' Records').toUpperCase(),
                messageBottom: '\n\n\n\nCreated on: ' + new Date() + '.'
            },

        ],
        columnDefs: [{
            orderable: false,
            targets: -1
        }]
    });
});