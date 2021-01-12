// Call the dataTables jQuery plugin
$(document).ready(function () {
  var table = $('#dataTable').DataTable({
    lengthChange: false,
    buttons: [
      { extend: 'excel', footer: true },
      { extend: 'pdf', footer: true }],
    "footerCallback": function (row, data, start, end, display) {
      var api = this.api(), data;
      var intVal = function (i) {
        return typeof i === 'string' ?
          i.replace(/[\$,]/g, '') * 1 :
          typeof i === 'number' ?
            i : 0;
      };
      // total = api
      //   .column(2)
      //   .data()
      //   .reduce(function (a, b) {
      //     return intVal(a) + intVal(b);
      //   }, 0);
      pageTotal = api
        .column(2, { page: 'current' })
        .data()
        .reduce(function (a, b) {
          return intVal(a) + intVal(b);
        }, 0);
      $(api.column(2).footer()).html(
        pageTotal
      );
    }

  });

  table.buttons().container()
    .appendTo('#dataTable_wrapper .col-md-6:eq(0)');
});

// dom: 'Bfrtip',
// buttons: [
//   'copy', 'csv', 'excel', 'pdf', 'print'
// ]