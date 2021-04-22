<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 px-md-4">
    <div class="container align-items-center">
        <a class="navbar-brand font-weight-bold" href="{{ route('homepage') }}" style="color: #2e3d49;letter-spacing: 4px;">PHICOLFUN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-size dropdown-toggle"
                       href="javascript:void(0)" id="navbarDropdown1" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false">
                        Programs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        @forelse($courses as $course)
                            <a class="dropdown-item nav-size" href="{{ route('home.program', ['slug' => $course->slug]) }}">
                                {{ ucfirst(strtolower($course->title)) }}
                            </a>
                        @empty
                        @endforelse

                        <a class="dropdown-item nav-size text-capitalize" href="#">
                            All Courses
                        </a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link nav-size dropdown-toggle"
                       href="#" id="navbarDropdown2" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Careers</a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item nav-size" href="#">Career prep</a>
                        <a class="dropdown-item nav-size" href="#">Student access</a>
                        <a class="dropdown-item nav-size" href="#">Requirements</a>
                        <a class="dropdown-item nav-size" href="#">Enrollment form</a>
                    </div>

                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link nav-size dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        For Enterprise
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item nav-size" href="#">Overview</a>
                        <a class="dropdown-item nav-size" href="#">Our approach</a>
                        <a class="dropdown-item nav-size" href="#">Solution</a>
                        <a class="dropdown-item nav-size" href="#">Resources</a>
                        <a class="dropdown-item nav-size" href="#">Corporate social responsibility</a>
                        <a class="dropdown-item nav-size" href="#">About us</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link nav-size dropdown-toggle" href="#" tabindex="-1" aria-disabled="true" id="navbarDropdown3" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Procurement</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                        <a class="dropdown-item nav-size" href="{{ route('biddings') }}">Bid Notices</a>
                        <a class="dropdown-item nav-size" href="{{ route('awards') }}">Award Notices</a>
                        <a class="dropdown-item nav-size" href="{{ route('biddings') }}">Infrastructure Projects</a>
                        <a class="dropdown-item nav-size" href="{{ route('reports') }}">Reports</a>
                    </div>
                </li>
            </ul>
            <div class="my-2 my-lg-0" style="margin-left: 3%">
                <a class="nav-size no-hover mr-2" href="{{ route('login') }}" tabindex="-1" aria-disabled="true">Sign In</a>

                <a class="btn btn-sm btn-primary my-2 my-sm-0 btn-started" href="{{ route('pre-registration') }}">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</nav>
