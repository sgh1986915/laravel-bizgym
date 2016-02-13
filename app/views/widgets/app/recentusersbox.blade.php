<div class='span6'>
    <div class='row-fluid recent-activity'>
        <div class='span12 box box-nomargin'>
            <div class='box-header'>
                <div class='title'>
                    <i class='icon-user'></i>
                    Active Users
                </div>
                <div class='actions'>
                    <a href="#" class="btn box-remove btn-mini btn-link"><i class='icon-remove'></i>
                    </a>
                    <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                    </a>
                </div>
            </div><!--/box-header-->
            <div class='box-content box-no-padding'>
                
                <ul class='unstyled users list-hover list-striped'>
                    @foreach ($logs as $log)
                    @if ($log->metas->count() > 0)
                    <li>
                        {{ Logger::renderLog($log) }}
                    </li>
                    @endif
                    @endforeach
                </ul>
                <div class='load-more'>
                    <a href="#" class="btn btn-block" data-loading-text="&lt;i class=&#x27;icon-spinner icon-spin&#x27;&gt;&lt;/i&gt; Loading more..." id="users-more-activity"><i class='icon-circle-arrow-down'></i>
                        Load more
                    </a>
                </div><!--/.load-more-->
            
            </div><!--/.box-content box-no-padding-->
        </div><!--/.span12 box box-nomargin-->
    </div><!--/.row-fluid recent-activity-->
</div><!--/.span6-->