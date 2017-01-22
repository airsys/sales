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
                                    <form role="form" action="<?php echo base_url('home/saveedit') ?>" method="post">
                                        <div class="form-group">
                                            <label>Brand Name</label>
                                            <input class="form-control" name="name" value="<?php echo $name; ?>" required autocomplete="off">
                                            <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Name</label>
                                            <input class="form-control" name="contact" value="<?php echo $contact; ?>" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name="address" rows="3"><?php echo $address ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Group Brand</label>
                                            <input class="form-control" name="group" value="<?php echo $group; ?>" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Website</label>
                                            <input class="form-control" name="website" value="<?php echo $website; ?>" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Social Media (Facebook)</label>
                                            <input class="form-control" name="social" value="<?php echo $social; ?>" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Notes</label>
                                            <textarea class="form-control" rows="3" name="notes"><?php echo $notes; ?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Edit</button>
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