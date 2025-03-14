<div class="sidebar pe-4 pb-3">
  <nav class="navbar bg-secondary navbar-dark">
      <a href="{{route('home')}}" class="navbar-brand mx-4 mb-3">
          <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Alpha Core</h3>
      </a>
      <div class="d-flex align-items-center ms-4 mb-4">
          <div class="position-relative">
              {{-- <img class="rounded-circle" src="{{asset('assets/admin/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;"> --}}
              <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
          </div>
          <div class="ms-3">
            @if(auth()->check())
                <h6 class="mb-0">{{ ucfirst(auth()->user()->name) }}</h6>
                <span>{{ ucfirst(auth()->user()->role) }}</span>
            @else
                <h6 class="mb-0">Guest</h6>
                <span>No Role</span>
            @endif
        </div>

      </div>
      <div class="navbar-nav w-100">
          <a href="{{route('home')}}" class="nav-item nav-link @if(request()->segment(1) == 'home') active @endif">
            <i class="fa fa-tachometer-alt me-2"></i>Dashboard
        </a>
        @if(auth()->user())
            @if(auth()->user()->role == 'admin' || auth()->user()->role == 'seo')
                <a href="{{ route('seo.index') }}" class="nav-item nav-link @if(request()->segment(1) == 'seo') active @endif">
                    <i class="fa fa-th me-2"></i>SEO
                </a>
            @endif

            @if(auth()->user()->role == 'admin')
                <a href="{{ route('testimonials.index') }}" class="nav-item nav-link @if(request()->segment(1) == 'testimonials') active @endif">
                    <i class="fa fa-th me-2"></i>Testimonials
                </a>
                <a href="{{ route('quotes.index') }}" class="nav-item nav-link @if(request()->segment(1) == 'quotes') active @endif">
                    <i class="fa fa-th me-2"></i>Quotes
                </a>
            @endif
        @endif

      </div>
  </nav>
</div>
