<ul class="sidebar-menu">
    <li class="header">{{ trans('interface.adminMainNav') }}</li>
    @foreach($adminListComp as $title => $data)
        @if($data['subLink'] != null)
            @if($requestListComp == $data['link'])
                <li class="treeview active">
                    <a><i class="fa {{$data['ico']}}"></i> <span>{{$title}}</span></a>
                    <ul class="treeview-menu">
                        @foreach($data['subLink'] as $subTitle => $subData)
                            @if($requestListComp == $subData['link'])
                                <li class="active"><a href="{{$subData['link']}}"><i class="fa {{$subData['ico']}}"></i> {{$subTitle}}</a></li>
                            @else
                                <li><a href="{{$subData['link']}}"><i class="fa {{$subData['ico']}}"></i> {{$subTitle}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            @else
                <li class="treeview">
                    <a><i class="fa {{$data['ico']}}"></i> <span>{{$title}}</span></a>
                    <ul class="treeview-menu">
                        @foreach($data['subLink'] as $subLink)
                            <li><a href=""><i class="fa {{$subData['ico']}}"></i> {{$subTitle}}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endif
        @else
            @if($requestListComp == $data['link'])
                <li class="active">
                    <a href="{{$data['link']}}">
                        <i class="fa {{$data['ico']}}"></i> <span>{{$title}}</span>
                    </a>
                </li>
            @else
                <li>
                    <a href="{{$data['link']}}">
                        <i class="fa {{$data['ico']}}"></i> <span>{{$title}}</span>
                    </a>
                </li>
            @endif
        @endif
    @endforeach
</ul>