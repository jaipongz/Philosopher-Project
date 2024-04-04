<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>แดชบอร์ด</span>
        </a>
      </li><!-- End Dashboard Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="forms-elements.html">
          <i class="bi bi-journal-text"></i>
          <span>Forms Elements</span>
        </a>
      </li><!-- End Forms Nav --> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>ฟอร์มกรอกข้อมูล</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.formuser')}}">
              <i class="bi bi-circle"></i><span>ฟอร์มกรอกข้อมูลปราชญ์ชาวบ้าน</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.formstaff')}}">
              <i class="bi bi-circle"></i><span>ฟอร์มกรอกข้อมูลสตาฟ</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.tableuser')}}">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>รายชื่อปราชญ์ชาวบ้าน</span>
        </a>
      </li>
      <!-- End Tables Data Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.tablestaff')}}">
          <i class="bi bi-person-fill-add"></i>
          <span>รายชื่อสตาฟ</span>
        </a>
      </li>
      <!-- End Staff Tables Nav -->

      {{-- <li class="nav-heading">Pages</li> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.profile',[Auth::user()->id])}}">
          <i class="bi bi-person"></i>
          <span>โปรไฟล์</span>
        </a>
      </li><!-- End Profile Page Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav --> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="/logout">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>ออกจากระบบ</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->