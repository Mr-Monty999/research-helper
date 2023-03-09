<div>
    <br>
    <br>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h1>الخطوة الثانية</h1>

        <div class="col-6 mb-4">
            <label for="exampleFormControlInput1" class="form-label">التخصص</label>
            <select class="form-select" id="exampleFormControlInput1">
                <option selected>تأمين إسلامي</option>
                <option value="1">تأمين مصرفي</option>
                <option value="2">صكوك مصرفية</option>
                <option value="3">مخاطر</option>
            </select>
        </div>

        <div class="col-6 mb-4">
            <label for="exampleFormControlInput1" class="form-label">نوع المساعدة</label>
            <select class="form-select" id="exampleFormControlInput1">
                <option selected>عنوان البحث</option>
                <option value="1">خطة البحث</option>
                <option value="2">توجيه وإرشاد</option>
                <option value="3">توفير المصادر والمراجع</option>
            </select>
        </div>
    </div>
    <nav class="navbar navbar-expand fixed-bottom py-3" id="mainNav">
        <div class="container-fluid px-4 px-lg-5">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul style="width: 100%;"
                    class="navbar-nav ms-auto my-2 my-lg-0 justify-content-between justify-content-md-evenly">
                    {{-- <li class="nav-item"><button class="btn head-btn" wire:click="nextStep">التالي</button></li> --}}
                    <li class="nav-item"><button class="btn head-btn" wire:click="previousStep">السابق</button></li>
                    <li class="nav-item"><a class="btn head-btn" href="{{ route('home') }}">خروج</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
