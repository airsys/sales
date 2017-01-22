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
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Brand Name</label>
                                            <p class="form-control-static"><?php echo $name; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Name</label>
                                            <p class="form-control-static"><?php echo $contact; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <p class="form-control-static"><?php echo $address ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Group Brand</label>
                                            <p class="form-control-static"><?php echo $group; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Website</label>
                                            <p class="form-control-static"><a href="http://<?php echo $website; ?>" target="_blank"><?php echo $website; ?></a></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Social</label>
                                            <p class="form-control-static"><a href="http://facebook.com/<?php echo $social; ?>" target="_blank">facebook.com/<?php echo $social; ?></a></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Notes</label>
                                            <p class="form-control-static"><?php echo $notes; ?></p>
                                        </div>
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