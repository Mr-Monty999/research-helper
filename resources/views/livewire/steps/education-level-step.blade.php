<div>
    <div class="sidebar position-fixed d-flex flex-column">
        <button class="sidebar-btn mb-1 active">المرحلة</button>
        <button class="sidebar-btn mb-1">الكلية</button>
        <button class="sidebar-btn mb-1">القسم</button>
        <button class="sidebar-btn mb-1">التخصص</button>
        <button class="sidebar-btn mb-1">نوع المساعدة</button>
    </div>
    <div class="row">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <div style="margin-top:15%;" class="col-5">
                @foreach ($levels as $level)
                    <button class="selection-btn mb-1">{{ $level->name }}</button>
                @endforeach
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand fixed-bottom py-3" id="mainNav">
        <div class="container-fluid px-4 px-lg-5">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul style="width: 100%;"
                    class="navbar-nav ms-auto my-2 my-lg-0 justify-content-between justify-content-between">
                    <li class="nav-item"><button class="head-btn" wire:click="nextStep">التالي</button></li>
                    <li class="nav-item"><a class="head-btn" href="{{ route('home') }}">الرئيسية</a></li>
                    {{-- <li class="nav-item"><button class="btn head-btn" wire:click="previousStep">السابق</button></li> --}}
                </ul>
            </div>
        </div>
    </nav>
</div>
