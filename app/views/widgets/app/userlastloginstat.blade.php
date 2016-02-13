<div class='span3 box-content box-statistic'>
    <h3 class='title text-primary'>{{ Carbon\Carbon::parse($user->last_login)->diffForHumans()}}</h3>
    <small>Last Login</small>
    <div class='text-primary icon-signin align-right'></div>
</div>