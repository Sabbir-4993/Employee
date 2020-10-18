    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy;<a href="https://www.trimatric.com/" target="_blank">Trimatric</a> 2020</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
    </div>
        </div><script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('template/dist/js/scripts.js')); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('template/dist/assets/demo/chart-area-demo.js')); ?>"></script>
        <script src="<?php echo e(asset('template/dist/assets/demo/chart-bar-demo.js')); ?>"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('template/dist/assets/demo/datatables-demo.js')); ?>"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" crossorigin="anonymous"></script>
    <script>
        $( function() {
            $( "#datepicker").datepicker({dateFormat:("yy-mm-dd")}).val();
        } );
    </script>
    <script>
        $( function() {
            $( "#datepicker1" ).datepicker({dateFormat:("yy-mm-dd")}).val();
        } );
    </script>
    <script type="text/javascript">
        $('#addRow').on('click', function (){
            addRow();
        });
        function addRow(){
            var th='<tr>'+
                '<td><input name="particular[]" class="form-control" type="text"></td>'+
                '<td><input name="quantity[]" class="form-control" type="number"></td>'+
                '<td><input name="unit[]" class="form-control" type="text"></td>'+
                '<td><input name="remarks[]" class="form-control" type="text"></td>'+
                '<td><a href="#" class="btn btn-danger remove" id="remove"><i class="fa fa-trash"></i></a></td>'+
                '</tr>';
            $('tbody').append(th);
        };
        $('#remove').live('click', function (){
            var last=$('tbody tr').length;
            if(last==1){
                alert("Can't Delete the last Particulars form");
            }else {
                $(this).parent().parent().remove();
            }

        });
    </script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\EMS\Employee\resources\views/admin/layouts/footer.blade.php ENDPATH**/ ?>