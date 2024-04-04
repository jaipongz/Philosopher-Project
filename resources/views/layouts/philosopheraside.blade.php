<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('user.performance',[Auth::user()->id])}}">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>ผลงาน</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('user.upload')}}">
          <i class="bi bi-grid"></i>
          <span>อัพโหลดผลงาน</span>
        </a>
      </li><!-- End Dashboard Nav -->

      
      <!-- End Tables Data Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('user.profile',[Auth::user()->id])}}">
          <i class="bi bi-person"></i>
          <span>โปรไฟล์</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/logout">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>ออกจากระบบ</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->