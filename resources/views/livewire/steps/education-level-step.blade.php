<div>
    <div class="sidebar position-fixed d-flex flex-column">
        <button class="sidebar-btn mb-1 active">المرحلة</button>
        <button class="sidebar-btn mb-1">الكلية</button>
        <button class="sidebar-btn mb-1">القسم</button>
        <button class="sidebar-btn mb-1">التخصص</button>
        <button class="sidebar-btn mb-1">نوع المساعدة</button>
    </div>
    <br>
    <br>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h1>الخطوة الأولى</h1>

        <div class="col-6 mb-4">
            <label for="exampleFormControlInput1" class="form-label">المرحلة</label>
            <select class="form-select" id="exampleFormControlInput1">
                <option selected>طالب بكلاريوس</option>
                <option value="1">باحث ماجستير</option>
                <option value="2">باحث دكتوراة</option>
                <option value="3">بحوث ترقية</option>
            </select>
        </div>

        {{-- <div class="col-6 mb-4">
            <label for="exampleFormControlInput1" class="form-label">الكلية</label>
            <select class="form-select" id="exampleFormControlInput1">
                <option selected>الإقتصاد</option>
                <option value="1">القانون</option>
                <option value="2">التربية</option>
                <option value="3">التجارة</option>
            </select>
        </div>

        <div class="col-6 mb-4">
            <label for="exampleFormControlInput1" class="form-label">القسم</label>
            <select class="form-select" id="exampleFormControlInput1">
                <option selected>إقتصاد دولي</option>
                <option value="1">إقتصاد إسلامي</option>
                <option value="2">إقتصاد رياضي</option>
                <option value="3">أخرى</option>
            </select>
        </div> --}}


    </div>
    <nav class="navbar navbar-expand fixed-bottom py-3" id="mainNav">
        <div class="container-fluid px-4 px-lg-5">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul style="width: 100%;"
                    class="navbar-nav ms-auto my-2 my-lg-0 justify-content-between justify-content-md-evenly">
                    <li class="nav-item"><button class="head-btn" wire:click="nextStep">التالي</button></li>
                    <li class="nav-item"><a class="head-btn" href="{{ route('home') }}">الرئيسية</a></li>
                    {{-- <li class="nav-item"><button class="btn head-btn" wire:click="previousStep">السابق</button></li> --}}
                </ul>
            </div>
        </div>
    </nav>
</div>
