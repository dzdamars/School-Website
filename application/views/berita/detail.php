<section>
<div class="container">

<div class="row">

	<!-- LEFT -->
	<div class="col-md-9 col-sm-9">

		<h1 class="blog-post-title"><?=$blog->blog_judul?></h1>
		<ul class="blog-post-info list-inline">
			<li>
				<!-- <a href="#"> -->
					<i class="fa fa-clock-o"></i> 
					<span class="font-lato"><?=$blog->date?></span>
				<!-- </a> -->
			</li>
			<li>
				<a href="#comments" class="scrollTo">
					<i class="fa fa-comment-o"></i> 
					<span class="font-lato"><?=((count($comment) > 1) ? count($comment)." Comments" : count($comment)." Comment")?></span>
				</a>
			</li>
			<li>
				<i class="fa fa-tag"></i> 

				<a class="category" href="<?=site_url('berita/category/'.$blog->category_uri)?>">
					<span class="font-lato"><?=$blog->category_name?></span>
				</a>
			</li>
			<li>
				<!-- <a href="#"> -->
					<i class="fa fa-user"></i> 
					<span class="font-lato"><?=$blog->blog_created_by?></span>
				<!-- </a> -->
			</li>
			<li>
				<!-- <a href="#"> -->
					<i class="fa fa-eye"></i> 
					<span class="font-lato"><?=$blog->blog_view?></span>
				<!-- </a> -->
			</li>
		</ul>


		<!-- IMAGE -->
		
		<figure class="margin-bottom-20">
			<img class="img-responsive" src="<?=((substr($blog->blog_img, 0, 6) != 'assets') ? $blog->blog_img : base_url($blog->blog_img))?>" alt="img" />
		</figure>
		
		<!-- /IMAGE -->


		<!-- article content -->
		<p style="line-height:1.7;"><?=$blog->blog_content?></p>
		<!-- /article content -->


		<div class="divider divider-dotted"><!-- divider --></div>



		<!-- SHARE POST -->
		<div class="clearfix margin-top-30">

			<span class="pull-left margin-top-6 bold hidden-xs">
				Share Post: 
			</span>

			<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-right" data-toggle="tooltip" data-placement="top" title="Facebook">
				<i class="icon-facebook"></i>
				<i class="icon-facebook"></i>
			</a>

			<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-right" data-toggle="tooltip" data-placement="top" title="Twitter">
				<i class="icon-twitter"></i>
				<i class="icon-twitter"></i>
			</a>

			<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-right" data-toggle="tooltip" data-placement="top" title="Google plus">
				<i class="icon-gplus"></i>
				<i class="icon-gplus"></i>
			</a>

			<a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-right" data-toggle="tooltip" data-placement="top" title="Linkedin">
				<i class="icon-linkedin"></i>
				<i class="icon-linkedin"></i>
			</a>

			<a href="#" class="social-icon social-icon-sm social-icon-transparent social-pinterest pull-right" data-toggle="tooltip" data-placement="top" title="Pinterest">
				<i class="icon-pinterest"></i>
				<i class="icon-pinterest"></i>
			</a>

			<a href="#" class="social-icon social-icon-sm social-icon-transparent social-call pull-right" data-toggle="tooltip" data-placement="top" title="Email">
				<i class="icon-email3"></i>
				<i class="icon-email3"></i>
			</a>

		</div>
		<!-- /SHARE POST -->


		
		<!-- <ul class="pager">
			<li class="previous"><a class="noborder" href="#">&larr; Previous Post</a></li>
			<li class="next"><a class="noborder" href="#">Next Post &rarr;</a></li>
		</ul> -->


		<div class="divider"><!-- divider --></div>

		
		<!-- COMMENTS -->
		<div id="comments" class="comments">

			<h4 class="page-header margin-bottom-60 size-20">
				<span><?=count($comment)?></span> COMMENTS
				<a href="#comment" class="scrollTo pull-right">COMMENT</a>
			</h4>			

			<!-- comment item -->
			<?php foreach ($comment as $c) { ?>
				
			<div class="comment-item">

				<!-- user-avatar -->
				<span class="user-avatar">
					<img class="media-object" src="<?=base_url()?>assets/images/avatar.png" width="64" height="64" alt="">
				</span>

				<div class="media-body">
					<a href="#comment" class="scrollTo comment-reply">reply</a>
					<h4 class="media-heading bold"><?=$c->comment_name?></h4>
					<small class="block"><?=$c->comment_date?></small>
					<?=$c->comment_content?>
				</div>
			</div>
			<?php } ?>



			<h4 id="comment" class="page-header size-20 margin-bottom-60 margin-top-100">
				LEAVE A <span>COMMENT</span>
			</h4>

			<!-- Form -->
			<form action="<?=site_url('berita/comment')?>" method="post">
				<input type="hidden" name="blog_id" value="<?=$blog->blog_id?>">
				<div class="row">
					<div class="form-group">
						<div class="col-md-4">
							<label>NAME</label>
							<input required="required" type="text" value="" maxlength="100" class="form-control input-lg" name="author" id="author">
						</div>
						<div class="col-md-4">
							<label>EMAIL</label>
							<input required="required" type="email" value="" maxlength="100" class="form-control input-lg" name="email" id="contact_email">
						</div>
						<div class="col-md-4">
							<label>WEBSITE</label>
							<input type="email" value="" maxlength="100" class="form-control input-lg" name="website" id="url">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="form-group">
						<div class="col-md-12">
							<label>COMMENT</label>
							<textarea required="required" maxlength="5000" rows="5" class="form-control" name="comment" id="comment"></textarea>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">

						<button type="submit" class="btn btn-3d btn-lg btn-reveal btn-black">
							<i class="fa fa-check"></i>
							<span>SUBMIT MESSAGE</span>
						</button>

					</div>
				</div>

			</form>
			<!-- /Form -->

		</div>
		<!-- /COMMENTS -->


	</div>