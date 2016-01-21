<li class="dropdown languages-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-language"></i>
        <span>{{LaravelLocalization::getCurrentLocaleNative()}}</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">
            {{trans('interface.langTitle')}}
        </li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                {{-- Create supported locale --}}
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    @if($localeCode != $lang)
                    <li>
                        <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                            <img src="/images/ico/flags/{{$localeCode}}.png" alt="">{{ $properties['native'] }}
                        </a>
                    </li>
                    @endif
                @endforeach
            </ul>
        </li>
    </ul>
</li>