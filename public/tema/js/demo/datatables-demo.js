// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
  $('#periksa').DataTable({
    order: [[1, 'desc']]
  });
  $('#datarekam').DataTable({
    order: [[1,'desc']]
  });
  $('#rekammedisdokter').DataTable({
    order: [[1,'desc']]
  });
  $('#periksapetugas').DataTable({
    order: [[1, 'desc']]
  });
  $('#datakontrol').DataTable({
    order: [[1, 'desc']]
  });
  $('#kontroldokter').DataTable({
    order: [[1, 'desc']]
  });
  $('#rkdokter').DataTable({
    order: [[1, 'desc']]
  });
  });
  $('#datariwayat').DataTable({
    order: [[1, 'desc']]
  });
  $('#datalaporan').DataTable({
    order: [[1, 'desc']]
  });
  $('#ripetugas').DataTable({
    order: [[1, 'desc']]
  });
