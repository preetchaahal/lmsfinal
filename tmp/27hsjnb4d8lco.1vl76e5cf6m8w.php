<?php echo $this->render('admin/templates/header.html',$this->mime,get_defined_vars(),0); ?>
<br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1>Add Course</h1>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="<?php echo $BASE,$ALIASES['course_add']; ?>">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control">
                                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                                </div>
                                <div class="form-group">
                                    <label>Display Name</label>
                                    <input type="text" name="display_name" class="form-control">
                                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                                </div>
                                <div class="form-group">
                                    <label>Duration</label>
                                    <input type="text" name="duration" class="form-control">
                                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                                </div>
                                <div class="form-group">
                                    <label>Description(Optional)</label>
                                    <textarea name="description" class="form-control"></textarea>
                                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                                </div>
                                <button type="submit" class="btn btn-default">Save</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php echo $this->render('admin/templates/footer.html',$this->mime,get_defined_vars(),0); ?>