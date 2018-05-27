 $(function () {
    $('.defaultIndexTable').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : true,
        'order': [
            [ 0, "desc" ]
        ],
        'info'        : true,
        'autoWidth'   : false,
        'buttons': [
            'copy', 'excel', 'pdf'
        ]
    });
    
    function getCsrf(){
        return $('meta[name="csrf-token"]').prop('content'); 
    }
    
    $('.deleteButton').on('click', function(){
        $('#modal-delete').data('url', $(this).data('href'));
    });                                                                                
    
    $('#modal-delete').on('click', function() {
        var url = $(this).data('url');
        $.ajax({
            type: "delete",
            url: $(this).data('url'),
            data: {_token: getCsrf()},                                                 
            success:function(res) {
                if (res.success) {
                    $('#deleteModal').modal('hide');
                    $('a[data-href="' + url +'"]').closest('tr').remove();
                }
            }
        });
    });

     $('.datepicker').datetimepicker({
         format: 'YYYY-MM-DD HH:mm:ss',
         weekStart: 0,
         calendarWeeks: true,
         autoclose: true,
         todayHighlight: true,
         rtl: true,
         orientation: "auto"
     });

     $('.select2').select2();
});