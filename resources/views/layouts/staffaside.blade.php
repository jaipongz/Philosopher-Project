<aside id="sidebar" class="sidebar">
            
    <ul class="sidebar-nav" id="sidebar-nav">
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('staff.dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav --> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('staff.formuser')}}">
          <i class="bi bi-journal-text"></i>
          <span>ฟอร์มกรอกข้อมูลปราชญ์ชาวบ้าน</span>
        </a>
      </li>
      <!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('staff.tableuser')}}">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>รายชื่อปราชญ์ชาวบ้าน</span>
        </a>
      </li>
      <!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('staff.profile',[Auth::user()->id])}}">
          <i class="bi bi-person"></i>
          <span>โปรไฟล์</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li> -->
      <!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/logout">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>ออกจากระบบ</span>
        </a>
      </li><!-- End Login Page Nav -->
    </ul>
  </aside>