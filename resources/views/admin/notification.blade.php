<li class="nav-item dropdown user-menu">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown">
        <span>
            <i class="fa fa-bell" aria-hidden="true"></i><sup><span class="caret">{{ count(auth()->user()->unreadNotifications) }}</span></sup>
        </span>
    </a>  
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right"> 
        @if (count(auth()->user()->unreadNotifications)>0)
            @foreach (auth()->user()->unreadNotifications as $notification )
                <li class="user-footer">
                    <h5>{{ $notification->data['by'] }}</h5>
                    placed order for
                    
                    @foreach (json_decode($notification->data['product']) as $item)
                    <h6>{{ $item }}</h6> 
                    @endforeach       
                </li> 
            @endforeach  
        @else
        <div class="subtitle">All notifications caught up</div>             
        @endif
         
    </ul>
</li>