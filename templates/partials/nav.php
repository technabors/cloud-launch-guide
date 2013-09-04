<div id="guide-navbar" global-navigation class="hidden-xs hidden-sm">
    <div id="header-breadcrumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">Guides</a></li>
                <li><a href="/guides/{{guide.slug}}">{{guide.title}}</a></li>
                <li ng-show="state.is('app.guides.view.book')" class="active">
                    <a href="/guides/{{guide.slug}}/{{book.slug}}#">{{book.title}}</a>
                </li>
                <li class="currentChapter">
                    
                </li>
            </ol>
            <div id="toggle-nav"><a href="#" toggle-nav>navigation <img src="/clg/images/icon-cross.png" /></a></div>
        </div>
        
    </div>

<!--             <div id="header-breadcrumbs-wrapper">
                <div id="header-breadcrumbs-container" class="container clearfix">


                    <div class="sixteen columns">
                        <nav id="header-breadcrumbs">
                            <a href="#/guides">Guides</a> &#187;
                            <a href="#/guides/{{guide.slug}}">{{guide.title}}</a> &#187;
                            <a href="" class="selected" ng-show="state.is('app.guides.view.book')">{{book.title}}</a>
                        </nav>
                        <div id="toggle-nav"><a href="" toggle-nav>navigation <img src="clg/images/icon-cross.png" /></a></div>
                    </div>


                </div>
            </div> -->
            
            <progress id="header-progress" value="20" max="100"></progress>
            
            <div id="nav-index-wrapper">
                <div id="nav-index-container" class="container">
                    <div class="sixteen columns">
                        <div id="nav-index" class="clearfix">
                            {% for book in guide.children %}
                            <nav nav-index class="nav-thing" ng-repeat="book in guide.children">
                                <h5 class=""><a href="/guides/{{guide.slug}}/{{book.slug}}">{{book.title}}</a></h5>
                                <ul ng-repeat="chapter in book.children">
                                {% for chapter in book.children %}
                                    <li><a href="/guides/{{guide.slug}}/{{book.slug}}#{{chapter.slug}}" class="">{{chapter.title}}</a></li>
                                {% endfor %}
                                </ul>
                            </nav>
                            {% endfor %}

                        </div>
                    </div>
                </div>
                <div id="nav-index-utility-wrapper">
                    <div id="nav-index-utility-container" class="container">
                        <div id="nav-index-utility">
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked/>
                                <label class="onoffswitch-label" for="myonoffswitch">
                                    <div class="onoffswitch-inner"></div>
                                    <div class="onoffswitch-switch"></div>
                                </label>
                            </div>
                            <p class="label">Expert mode</p>
                        </div>
                    </div>
                </div>
            </div>
</div>