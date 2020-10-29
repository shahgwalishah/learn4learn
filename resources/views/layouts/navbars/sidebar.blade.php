<style>
    #repl{
        color:black !important;
    }
    #repl3{
        color: #ffc10e !important;
    }
    .customColor{
        background-color: white !important;
        border: 1px solid #efefef;
    }
    .customShadow{
        box-shadow: 0 0 black !important;
    }
</style>

<div class="sidebar customShadow">
    <div class="sidebar-wrapper customColor">
        <div class="logo">
            <link rel="shortcut icon" href="{{asset('asset/images/logo1.png')}}" type="image/png">
        </div>
        <ul class="nav">
            <li @if (isset($pageSlug) && $pageSlug=='dashboard' ) class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36" id="repl3"></i>
                    <p id="repl">{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" id="repl3"></i>
                    <span class="nav-link-text"id="repl">User Management</span>
                    <b class="caret mt-1" id="repl3"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">

                        <li @if (isset($pageSlug) && $pageSlug=='users' ) class="active " @endif>
                            <a href="{{ route('userManagement')  }}">
                                <i class="tim-icons icon-bullet-list-67"id="repl3"></i>
                                <p id="repl">{{ __('User') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{--            ====================my working===================================--}}

            <li>
                <a data-toggle="collapse" href="#poster_colap" aria-expanded="true">
                    <i class="tim-icons icon-paper" id="repl3"></i>
                    <span class="nav-link-text" id="repl">{{ __('Posters') }}</span>
                    <b class="caret mt-1" id="repl3"></b>
                </a>

                <div class="collapse show" id="poster_colap">
                    <ul class="nav pl-4">
                        <li @if (isset($pageSlug) && $pageSlug=='Schedule' ) class="active " @endif>
                            <a href="{{ route('schedulePoster') }}">
                                <i class="tim-icons icon-pencil" id="repl3"></i>
                                <p id="repl">{{ __('Schedule') }}</p>
                            </a>
                        </li>
                        <li @if (isset($pageSlug) && $pageSlug=='howitworks' ) class="active " @endif>
                            <a href="{{ route('howItPoster') }}">
                                <i class="tim-icons icon-pencil" id="repl3"></i>
                                <p id="repl">{{ __('howitworks') }}</p>
                            </a>
                        </li>

                        <li @if (isset($pageSlug) && $pageSlug=='forteacher' ) class="active " @endif>
                            <a href="{{ route('forTeacher') }}">
                                <i class="tim-icons icon-pencil" id="repl3"></i>
                                <p id="repl">{{ __('forteacher') }}</p>
                            </a>
                        </li>


                        <li @if (isset($pageSlug) && $pageSlug=='forstudent' ) class="active " @endif>
                            <a href="{{ route('forStudent') }}">
                                <i class="tim-icons icon-pencil" id="repl3"></i>
                                <p id="repl">{{ __('forstudent') }}</p>
                            </a>
                        </li>

                        <li @if (isset($pageSlug) && $pageSlug=='forparents' ) class="active " @endif>
                            <a href="{{ route('forParents') }}">
                                <i class="tim-icons icon-pencil" id="repl3"></i>
                                <p id="repl">{{ __('ForParents') }}</p>
                            </a>
                        </li>


                    </ul>
                </div>
            </li>

            <li>
                <a href="{{ route('email-config') }}">
                    <i class="tim-icons icon-settings" id="repl3"></i>
                    <p id="repl">{{ __('Mail Configuration') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.index') }}">
                    <i class="tim-icons icon-settings" id="repl3"></i>
                    <p id="repl">{{ __('Pages') }}</p>
                </a>
            </li>
            <li>
            <a href="{{route('subjects.index')}}">
                    <i class="tim-icons icon-settings" id="repl3"></i>
                    <p id="repl">{{ __('Subjects') }}</p>
                </a>
            </li>




        </ul>
    </div>
</div>
