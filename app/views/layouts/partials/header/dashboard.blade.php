@extends('layouts.partials.header.main')

@section('header_nav_content')
<a class='toggle-nav btn pull-left' href='#'>
    <i class='icon-reorder'></i>
</a>
<ul class='nav pull-right'>

    <li class='dropdown medium only-icon widget chat'>
        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
            <i class='icon-envelope-alt'></i>
            <div class='label'>{{ Message::inboxCount() }}</div>
        </a>

        <ul class="dropdown-menu">
            @if (Message::inboxCount() > 0)
            @foreach (Message::unreadMessages() as $message)
            <li class='message'>
                <div class='avatar'>
                    <img src="/media/user/profile/{{ $message->from_user}}?size=mini" height='23' width='23'>
                </div>
                <div class='name-and-time'>
                    <div class='name pull-left'>
                        <small>
                            <a href="/user/detail/{{ $message->from_user }}" class="text-contrast">{{ User::find($message->from_user)->getFullname() }}</a>
                        </small>
                    </div>
                    <div class='time pull-right'>
                        <small class='date pull-right muted'>
                            <span class='timeago fade has-tooltip' data-placement='top' title="{{ $message->created_at }}">{{ $message->created_at }}</span>
                            <i class='icon-time'></i>
                        </small>
                    </div>
                </div>
                <div class='body'>
                    {{ $message->getTextBody() }}
                </div>
            </li>
            @endforeach
            @else
            <li><center>There are no new message</center></li>
            @endif
            <li class='widget-footer'>
                <a href='/user/message'>Go to Inbox</a>
            </li>
        </ul>
    </li>

    <li class='dropdown medium only-icon widget tasks'>
        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
            <i class='icon-list'></i>
            <div class='label'>2</div>
        </a>
        <ul class='dropdown-menu'>
            <li>
                <a href='#'>
                    <div class='widget-body'>
                        <div class='pull-left icon'>
                            <i class='icon-file-alt text-error'></i>
                        </div>
                        <div class='pull-left text'>
                            TPS Reports Due
                            <small class='muted'>3 Days left</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class='divider'></li>
            <li>
                <a href='#'>
                    <div class='widget-body'>
                        <div class='pull-left icon'>
                            <i class='icon-picture text-success'></i>
                        </div>
                        <div class='pull-left text'>
                            Get business cards printed
                            <small class='muted'>5 Days</small>
                        </div>
                    </div>
                </a>
            </li>
             <li class='widget-footer'>
                <a href='#'>View Tasks</a>
            </li>
        </ul>
    </li>

    <li class='dropdown medium only-icon widget notifications'>
        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
            <i class='icon-rss'></i>
            <div class='label'>4</div>
        </a>
        <ul class='dropdown-menu'>
            <li>
                <a href='#'>
                    <div class='widget-body'>
                        <div class='pull-left icon'>
                            <i class='icon-user text-success'></i>
                        </div>
                        <div class='pull-left text'>
                            James Accepted your invite
                            <small class='muted'>just now</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class='divider'></li>
            <li>
                <a href='#'>
                    <div class='widget-body'>
                        <div class='pull-left icon'>
                            <i class='icon-comment text-warning'></i>
                        </div>
                        <div class='pull-left text'>
                            John left a comment on your public business plan
                            <small class='muted'>1 hour ago</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class='divider'></li>
            <li>
                <a href='#'>
                    <div class='widget-body'>
                        <div class='pull-left icon'>
                            <i class='icon-user text-success'></i>
                        </div>
                        <div class='pull-left text'>
                            Cara joined your team
                            <small class='muted'>last week</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class='divider'></li>
            <li>
                <a href='#'>
                    <div class='widget-body'>
                        <div class='pull-left icon'>
                            <i class='icon-check text-success'></i>
                        </div>
                        <div class='pull-left text'>
                            HR Completed annual Report
                            <small class='muted'>5 days ago</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class='widget-footer'>
                <a href='#'>View All notifications</a>
            </li>
        </ul>
    </li>

    <li class='dropdown dark user-menu'>
        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
            @if(Auth::check())
            <img alt="{{ Auth::user()->getFullname('-') }}" height='23' src="{{ URL::to('/media/user/profile/'.Auth::user()->id.'?size=mini') }}" width='23'>
            <span class='user-name hidden-phone'>{{ Auth::user()->getFullname(Auth::user()->getUsername(Auth::user()->email)) }}</span>
            @else
            {{-- Bellow block exists as dummy data for mockup --}}
            <img alt='Mila Kunis' height='23' src='/assets/images/avatar.jpg' width='23'>
            <span class='user-name hidden-phone'>Some User</span>
            @endif
            <b class='caret'></b>
        </a>
        <ul class='dropdown-menu'>
            @include('layouts.partials.header.dashboard.user_menu', array('user_menu_items' => $header_menus))
        </ul>
    </li>
</ul>
<form accept-charset="UTF-8" action="search_results.html" class="navbar-search pull-right hidden-phone" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <button class="btn btn-link icon-search" name="button" type="submit"></button>
    <input autocomplete="off" class="search-query span2" id="q_header" name="q" placeholder="Search..." type="text" value="" />
</form>
@stop