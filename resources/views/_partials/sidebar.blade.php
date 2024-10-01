 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <div class="flex items-center w-full p-1 pl-6"
             style="display: flex; align-items: center; padding: 3px; width: 40px; background-color: transparent; height: 4rem;">
             <div class="flex items-center justify-center"
                 style="display: flex; align-items: center; justify-content: center;">
                 <img src="https://elc-public-images.s3.ap-southeast-1.amazonaws.com/bcp-olp-logo-mini2.png"
                     alt="Logo" style="width: 30px; height: auto;">
             </div>
         </div>

         <div style="display: flex; flex-direction: column; align-items: center; padding: 16px;">
             <div
                 style="display: flex; align-items: center; justify-content: center; width: 96px; height: 96px; border-radius: 50%; background-color: #334155; color: #e2e8f0; font-size: 48px; font-weight: bold; text-transform: uppercase; line-height: 1;">
                 LC
             </div>
             <div
                 style="display: flex; flex-direction: column; align-items: center; margin-top: 24px; text-align: center;">
                 <div style="font-weight: 500; color: #fff;">
                     SuperAdmin
                 </div>
                 <div style="margin-top: 4px; font-size: 14px; color: #fff;">
                     ID
                 </div>
             </div>
         </div>

         <hr class="sidebar-divider">
        
         <li class="nav-heading">Dashboard</li>

         <li class="nav-item">
             <a class="nav-link {{ (trim($__env->yieldContent('title')) === 'Dashboard') ? 'active-tab' : '' }}" href="/">
                 <i class="bi bi-grid"></i>
                 <span>Dashboard</span>
             </a>
         </li><!-- End Dashboard Nav -->

         <hr class="sidebar-divider">

         <li class="nav-heading">Student</li>

         <li class="nav-item">
          <a class="nav-link {{ (trim($__env->yieldContent('title')) === 'Student List') ? 'active-tab' : '' }}" href="/students">
              <i class="bi bi-grid"></i>
              <span>Student List</span>
          </a>
        </li><!-- End Dashboard Nav -->

         <hr class="sidebar-divider">

         <li class="nav-heading">Maintenance</li>

         <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#system-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-layout-text-window-reverse"></i><span>Maintenance</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="system-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a class="nav-link" href="modules.html">
                <i class="bi bi-circle"></i><span>Class</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="modules.html">
                <i class="bi bi-circle"></i><span>Course</span>
              </a>
            </li>
          </ul>
        </li>

        <hr class="sidebar-divider">

         <li class="nav-heading">Reports</li>

         <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a class="nav-link" href="components-alerts.html">
                <i class="bi bi-circle"></i><span>Student Report</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="components-accordion.html">
                <i class="bi bi-circle"></i><span>Class Report</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="components-badges.html">
                <i class="bi bi-circle"></i><span>Course Report</span>
              </a>
            </li>
          </ul>
        </li>


         <hr class="sidebar-divider">

         <li class="nav-heading">Pages</li>

         <li class="nav-item">
             <a class="nav-link collapsed" href="users-profile.html">
                 <i class="bi bi-person"></i>
                 <span>Profile</span>
             </a>
         </li><!-- End Profile Page Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" href="pages-faq.html">
                 <i class="bi bi-question-circle"></i>
                 <span>F.A.Q</span>
             </a>
         </li><!-- End F.A.Q Page Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" href="pages-contact.html">
                 <i class="bi bi-envelope"></i>
                 <span>Contact</span>
             </a>
         </li><!-- End Contact Page Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" href="pages-register.html">
                 <i class="bi bi-card-list"></i>
                 <span>Register</span>
             </a>
         </li><!-- End Register Page Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" href="pages-login.html">
                 <i class="bi bi-box-arrow-in-right"></i>
                 <span>Login</span>
             </a>
         </li><!-- End Login Page Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" href="pages-error-404.html">
                 <i class="bi bi-dash-circle"></i>
                 <span>Error 404</span>
             </a>
         </li><!-- End Error 404 Page Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" href="pages-blank.html">
                 <i class="bi bi-file-earmark"></i>
                 <span>Blank</span>
             </a>
         </li><!-- End Blank Page Nav -->

     </ul>

 </aside><!-- End Sidebar-->
