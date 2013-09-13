{% include 'partials/header.php' %}

	<div id="content-container">


		<section class="chapter-intro container">
			<div class="page-header ">
				<h5><a href="{{ baseurl }}/guides/{{guide.slug}}/{{book.slug}}">&laquo; {{book.title}}</a></h5>
				<h1>{{chapter.title}} <small>{{chapter.time}}</small></h1>
				<div class="page-header-options">
					{% include 'partials/action-options.php' %}
				</div>
			</div>
			
			{% include 'partials/nav.drawer.php' %}
			
		</section>



		<!-- CHAPTER HEADING -->
		<div id="{{chapter.slug}}" class="chapter-container" ng-repeat="chapter in book.children">
			
			<div class="container chapterHeader">
				<div class="row">

					<div class="sidebar col-md-4">
						<div class="">
							<h5>Estimated time: 10min</h5>
							<h5>Requires:</h5>
							<ul>
								<li>Terminal</li>
								<li>Master Public IP</li>
								<li>Master Private IP</li>
							</ul>

						</div>
					</div>

					<div class="col-md-11 col-md-offset-1">
						{{chapter.content|raw}}
					</div>
				</div>
				

				<hr>
			</div>

			{% for code in chapter.code %}
			<div class="container">
				<div class="row actionOverview">
					<div class="sidebar col-md-4">
						{% if code.iptool %}
						    {% include 'partials/ip-tool.php' %}
						{% else %}
						
						{% endif %}
						
					</div>
					<div class="col-md-11 col-md-offset-1">
						<div class="">
							<ul>
								<li><pre class="{{code.type}}">{{code.text}}</pre></li>
							</ul>

						</div>
					</div>
				</div>
			</div>

			{%endfor%}

			<!-- PAGE SECTION -->
			{% for page in chapter.children %}
			<div id="{{page.slug}}" class="page-container" ng-repeat="page in chapter.children">
				<div class="container">
					<div class="row">
						<div class="sidebar five columns alpha col-md-4">
							{% if page.meta.iptool %}

								{% include 'partials/ip-tool.php' %}
							{% else %}
							
							{% endif %}
						</div>
						<div class="page-content col-md-11 col-md-offset-1">
							<h4 class=""><span>{{loop.index}}</span> {{page.title}}</h4>
							{{page.content | raw}}
							
							{% if page.meta.contentNotes %}
								<div class="notice-container">
									<h4>Additional Notes</h4>
									<ul class="notice">
										{% for note in page.meta.contentNotes %}
								    		<li class="{{note.type}}">{{note.text | raw}}</li>
								    	{% endfor  %}
									</ul>
								</div>
							{% else %}
							
							{% endif %}
							<div markdown="page.content" parent="page" ng-bind-html-unsafe="markdown"></div>
						</div><!-- steps -->
					</div>
				</div>
			</div>
			{%endfor%}

		</div> <!-- CHAPTER -->

		<hr>
		
		<div class="container">
			<p style="text-align:center;">
				<a href="{{ baseurl }}/guides/{{guide.slug}}/{{book.slug}}/{{chapter.previous.slug}}" class="btn btn-primary btn-lg" title="">Previous: {{chapter.previous.title}}</a>

				<a href="{{ baseurl }}/guides/{{guide.slug}}/{{book.slug}}/{{chapter.next.slug}}" class="btn btn-primary btn-lg" title="">Next: {{chapter.next.title}}</a>
			</p>
		</div>


		<!-- MOAR CONENT HUR -->
		
	</div>



{% include 'partials/footer.php' %}







