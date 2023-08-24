<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
        Pixel<span>Dynamics</span>
        </a>
        <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item nav-category">Components</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="feather"></i>
            <span class="link-title">Portfolio</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="uiComponents">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{ route('portfolio.category') }}" class="nav-link">Category</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('all.subcategory') }}" class="nav-link">Sub-Category</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('all.portfolio') }}" class="nav-link">Portfolio Manage</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
                <i class="link-icon" data-feather="anchor"></i>
                <span class="link-title">Team</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="advancedUI">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{ route('all.carousel.manage') }}" class="nav-link">Team carousel</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('all.member.manage') }}" class="nav-link">Members</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
                <i class="link-icon" data-feather="feather"></i>
                <span class="link-title">Services</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="uiComponents">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{ route('all.offers') }}" class="nav-link">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Subscription</a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="nav-item nav-category">Docs</li>
        <li class="nav-item">
            <a href="" target="_blank" class="nav-link">
            <i class="link-icon" data-feather="hash"></i>
            <span class="link-title">Documentation</span>
            </a>
        </li>
        </ul>
    </div>
    </nav>
