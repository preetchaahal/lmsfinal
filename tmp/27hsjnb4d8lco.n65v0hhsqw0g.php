<?php echo $this->render('admin/templates/header.html',$this->mime,get_defined_vars(),0); ?>
            <br>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1>All Courses</h1>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Display Name</th>
                                        <th>Duration</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (($DATA?:array()) as $course): ?>
                                        <tr>
                                            <td><?php echo $course['name']; ?></td>
                                            <td><?php echo $course['display_name']; ?></td>
                                            <td><?php echo $course['duration']; ?></td>
                                            <td><?php echo $course['description']; ?></td>
                                            <td style="text-align: center">
                                                <?php if ($course['status']): ?>
                                                    
                                                        <button type="button" class="btn btn-success">Active</button>
                                                    
                                                    <?php else: ?>
                                                        <button type="button" class="btn btn-danger">De-Active</button>
                                                    
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

<?php echo $this->render('admin/templates/footer.html',$this->mime,get_defined_vars(),0); ?>