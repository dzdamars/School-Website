<div class="row">
	<div class="col-md-12">
	<?php echo $this->session->userdata('warn') ?>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<ul class="timeline">
		<?php foreach ($timeline as $t) { ?>		
	    <!-- timeline time label -->
	    <li class="time-label">
	        <span>
	            <?=$t->timeline_date?>
	        </span>
	    </li>
	    <!-- /.timeline-label -->

	    <!-- timeline item -->
	    <li>
	    	<?php if ($t->timeline_action == 'Uploaded' || $t->timeline_action == 'uploaded') {
	    		$bg = 'bg-green';
	    	}elseif ($t->timeline_action == 'edited') {
	    		$bg = 'bg-orange';
	    	}elseif ($t->timeline_action == 'deleted') {
	    		$bg = 'bg-red';
	    	}else{
	    		$bg = 'bg-blue';
	    		} ?>
	        <!-- timeline icon -->
	        <i class="<?=$t->timeline_icon?> <?=$bg?>" style="color:#fff!important;"></i>
	        <div class="timeline-item">
	            <span class="time"><i class="fa fa-clock-o"></i> <?=$t->timeline_time?></span>

	            <h3 class="timeline-header"><a href="#"><?=$t->timeline_user?></a>&nbsp<?=$t->timeline_action.' '.$t->timeline_content?></h3>

	            <?php if (!empty($t->timeline_detail)) { ?>
	            <div class="timeline-body">
	                <?=$t->timeline_detail?>
	            </div>
	            <?php } ?>

	            <?php if (!empty($t->timeline_content_uri)) { ?>
	            <div class="timeline-footer">
	                <a class="btn btn-default btn-sm" href="<?=site_url($t->timeline_content_uri)?>"><i class="fa fa-eye"></i> View</a>
	            </div>
	            <?php } ?>
	        </div>
	    </li>
		<?php } ?>
	    <!-- END timeline item -->

		</ul>
	</div>
</div>