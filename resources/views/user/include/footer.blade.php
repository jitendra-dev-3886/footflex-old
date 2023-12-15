
<script src="../frontend/js/jquery-3.5.1.min.js"></script>
<script src="../frontend/js/bootstrap.bundle.min.js"></script>
<script src="../frontend/js/swiper.min.js"></script>
<script src="../frontend/js/smoothscroll.min.js"></script>
<script src="../frontend/js/jquery.nice-select.js"></script>
<script src="../frontend/js/odometer.min.js"></script>
<script src="../frontend/js/viewport.jquery.js"></script>
<script src="../frontend/js/main.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../frontend/js/alert.js"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
$(document).ready( function () {
    $('.table').DataTable({
        "order": [[ 0, "desc" ]],
        dom : 'Bfrtip',
        buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

    var start = moment();
    var end = moment();
    function cb(start, end) {
        
         $("#loadingtext").text("Wait. Loading Data");
        
        $('#reportrange span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));
         console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
         
         $("#fromdate").val(start.format('YYYY-MM-DD'));
         $("#todate").val(end.format('YYYY-MM-DD'));
         
        var fromd = start.format('YYYY-MM-DD');
        var tod = end.format('YYYY-MM-DD');
    }
    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    },cb);
    cb(start, end);

});
</script>


