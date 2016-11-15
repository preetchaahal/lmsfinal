<?php echo $this->render('admin/templates/header.html',$this->mime,get_defined_vars(),0); ?>
  <div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">Profile</h1>
	    </div>
	    <!-- /.col-lg-12 -->
	</div>
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-6">
			<center><img src="" width="300" height="300" style="border: solid 1px #999; border-radius: 100%; overflow: hidden"></center>
			<br />
			<form role="form" method="post" action="<?php echo $BASE,$ALIASES['course_add']; ?>">
				<div class="form-group">
					<input type="file" name="photo" class="form-control">
				</div>
			    <div class="form-group">
			        <label>Name</label>
			        <input type="text" name="name" class="form-control">
			    </div>
			    <div class="form-group">
			        <label>Display Name</label>
			        <input type="text" name="display_name" class="form-control">
			    </div>
			    <div class="form-group">
			        <label>Duration</label>
			        <input type="text" name="duration" class="form-control">
			    </div>
			    <div class="form-group">
			        <label>Description(Optional)</label>
			        <textarea name="description" class="form-control"></textarea>
			    </div>
			    <div class="form-group">
				    <button type="submit" class="btn btn-default">Save</button>
				    <button type="reset" class="btn btn-default">Reset</button>
				</div>
			</form>
		</div>
		<div class="col-lg-3"></div>
	</div>
	<div class="row">
		<div class="col-lg-6">
        </div>
	</div>
<?php echo $this->render('admin/templates/footer.html',$this->mime,get_defined_vars(),0); ?>
