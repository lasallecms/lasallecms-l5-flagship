@inject('DatesHelper', 'Lasallecms\Helpers\Dates\DatesHelper')
<section id="blogpost">
<div class="container">
  <div class="well">
      <div class="media">
      	<a class="pull-left" href="#">
    		<img class="media-object" src="http://lorempixel.com/150/150/technics">
  		</a>
  		<div class="media-body">
    		<h4 class="media-heading">{{{ $post->title }}}</h4>
          <p>{!! $post->content !!}</p>
          <ul class="list-inline list-unstyled">
  			<li><span><i class="fa fa-calendar"></i> {!! $DatesHelper::convertDatetoFormattedDateString($post->updated_at) !!}</span></li>
                                    <li>|</li>
            <li>
            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
              <span><i class="fa fa-facebook-square"></i></span>
              <span><i class="fa fa-twitter-square"></i></span>
              <span><i class="fa fa-google-plus-square"></i></span>
            </li>
			</ul>
       </div>
    </div>
  </div>
</section>