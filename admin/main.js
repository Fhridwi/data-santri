
$(document).ready(function() {
    // Inisialisasi DataTable
    var table = $('#santriTable').DataTable({
      "searching": true,
      "paging": true,
      "ordering": true,
      "pageLength": 10 
    });
  
   
    $('#rowCount').on('change', function() {
      var length = $(this).val(); 
      table.page.len(length).draw(); 
    });
  });