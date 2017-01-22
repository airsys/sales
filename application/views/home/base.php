
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });

function del(data){
    var isi=data.split('|');
    if(confirm("Data akan Dihapus?")){
        $.ajax({
            type: 'post',
            url: 'home/deletecus/'+isi[0],
            success: function(data) {
                window.location.reload('home');
            }
        });
        return false;
    }
}


    </script>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="<?php echo base_url('addform') ?>" type="button" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Data</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Brand Name</th>
                                            <th>Contact Name</th>
                                            <th>Group Brand</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php echo $tabel; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>