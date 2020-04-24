<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!--    head files   -->
    @include('partials._head')

    @yield('stylesheet')
</head>

<body>
    <div id="page-contianer">
        <!--    header section   -->
        @include('partials._header')

            <main id="main-content">
                @yield('FeaturePost')

                <section class="Contents">
                    <div class="container d_flex">
                        <div class="innerContainer">

                            @yield('content')

                        </div>
                        <!--    side bar section   -->
                        @include('partials._side-bar')

                    </div>
                </section>
            </main>

            <!--    footer section   -->
        @include('partials._footer')
    </div>
        <!--    all scripts   -->
        @include('partials._scripts')

        @yield('scripts')

</body>

</html>
