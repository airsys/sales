<script src="<?=base_url()?>assets/js/jquery.validate.min.js" type="text/javascript"></script>

<script>
$(function() {
    $("#formadd").validate({
        rules: {
            name: {
                required: true,
                remote : {
                    url : "addform/avaibility",
                    type : "post",
                    data : {
                        nama : function(){ return $("#nama").val(); }
                    }
                }
            },
        },
        messages: {
                name: {
                    remote: 'Name already used.'
                }
            },
        submitHandler: function(form) {
            $.ajax({
                type: 'POST',
                url: 'addform/saveform',
                data: $('#formadd').serialize(),
                success: function(data) {
                    alert('Data Tersimpan');
                    window.location="home";
                }
            });
        }
    });
});
</script>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $title; ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form id="formadd">
                                        <div class="form-group">
                                            <label>Brand Name</label>
                                            <input class="form-control" type="text" name="name" id="nama" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Name</label>
                                            <input class="form-control" name="contact" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name="address" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Group Brand</label>
                                            <input class="form-control" name="group" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Website</label>
                                            <input class="form-control" name="website" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Social Media (Facebook)</label>
                                            <input class="form-control" name="social" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Notes</label>
                                            <textarea class="form-control" rows="3" name="notes"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Simpan</button>
                                        <a href="<?php echo base_url('home') ?>" type="button" class="btn btn-primary">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>