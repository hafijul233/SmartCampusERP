<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<nav class="bottom-navbar">
  <div class="container-fluid">
    <ul class="nav page-navigation" id="navigation">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url().'home/dashboard'; ?>">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="mdi mdi-account-plus menu-icon"></i>
          <span class="menu-title">Admission</span>
          <i class="menu-arrow"></i></a>
        <div class="submenu">
          <ul class="submenu-item">
            <li class="nav-item"><a class="nav-link" href="<?= base_url() . 'admission/admit_student'; ?>">Admit New Student</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url() . 'admission/applicant_list'; ?>">Applicant's List</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url() . 'admission/cancel_re_admission'; ?>">Cancel / Re-Admission</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url() . 'admission/student_transfer'; ?>">Student Transfer</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url() . 'admission/admission_report'; ?>">Admission Report</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url() . '#'; ?>">-----</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item mega-menu">
        <a href="#" class="nav-link">
          <i class="typcn typcn-puzzle-outline menu-icon"></i>
          <span class="menu-title">UI Elements</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="submenu">
          <div class="col-group-wrapper row">
            <div class="col-group col-md-4">
              <div class="row">
                <div class="col-12">
                  <p class="category-heading">Basic Elements</p>
                  <div class="submenu-item">
                    <div class="row">
                      <div class="col-md-6">
                        <ul>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/accordions.html">Accordion</a></li>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/buttons.html">Buttons</a></li>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/badges.html">Badges</a></li>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/dropdowns.html">Dropdown</a></li>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/modals.html">Modals</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <ul>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/progress.html">Progress bar</a></li>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/pagination.html">Pagination</a></li>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/tabs.html">Tabs</a></li>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/typography.html">Typography</a></li>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/tooltips.html">Tooltip</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-group col-md-4">
              <div class="row">
                <div class="col-12">
                  <p class="category-heading">Advanced Elements</p>
                  <div class="submenu-item">
                    <div class="row">
                      <div class="col-md-6">
                        <ul>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/dragula.html">Dragula</a></li>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/carousel.html">Carousel</a></li>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/clipboard.html">Clipboard</a></li>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/context-menu.html">Context Menu</a></li>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/loaders.html">Loader</a></li>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/slider.html">Slider</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <ul>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/popups.html">Popup</a></li>
                          <li class="nav-item"><a class="nav-link" href=" ui-features/notifications.html">Notification</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-group col-md-4">
              <p class="category-heading">Icons</p>
              <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href=" icons/flag-icons.html">Flag Icons</a></li>
                <li class="nav-item"> <a class="nav-link" href=" icons/mdi.html">Mdi icons</a></li>
                <li class="nav-item"><a class="nav-link" href=" icons/font-awesome.html">Font Awesome</a></li>
                <li class="nav-item"><a class="nav-link" href=" icons/simple-line-icon.html">Simple Line Icons</a></li>
                <li class="nav-item"><a class="nav-link" href=" icons/themify.html">Themify Icons</a></li>
              </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="typcn typcn-document-text menu-icon"></i>
          <span class="menu-title">Forms</span>
          <i class="menu-arrow"></i></a>
        <div class="submenu">
          <ul class="submenu-item">
            <li class="nav-item"><a class="nav-link" href=" forms/basic_elements.html">Basic Elements</a></li>
            <li class="nav-item"><a class="nav-link" href=" forms/advanced_elements.html">Advanced Elements</a></li>
            <li class="nav-item"><a class="nav-link" href=" forms/validation.html">Validation</a></li>
            <li class="nav-item"><a class="nav-link" href=" forms/wizard.html">Wizard</a></li>
            <li class="nav-item"><a class="nav-link" href=" forms/text_editor.html">Text Editor</a></li>
            <li class="nav-item"><a class="nav-link" href=" forms/code_editor.html">Code Editor</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item mega-menu">
        <a href="#" class="nav-link">
          <i class="typcn typcn-chart-bar menu-icon"></i>
          <span class="menu-title">Data</span>
          <i class="menu-arrow"></i></a>
        <div class="submenu">
          <div class="col-group-wrapper row">
            <div class="col-group col-md-6">
              <p class="category-heading">Charts</p>
              <div class="submenu-item">
                <div class="row">
                  <div class="col-md-6">
                    <ul>
                      <li class="nav-item"><a class="nav-link" href=" charts/chartjs.html">Chart Js</a></li>
                      <li class="nav-item"><a class="nav-link" href=" charts/morris.html">Morris</a></li>
                      <li class="nav-item"><a class="nav-link" href=" charts/flot-chart.html">Flot</a></li>
                      <li class="nav-item"><a class="nav-link" href=" charts/google-charts.html">Google Chart</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul>
                      <li class="nav-item"><a class="nav-link" href=" charts/sparkline.html">Sparkline</a></li>
                      <li class="nav-item"><a class="nav-link" href=" charts/c3.html">C3 Chart</a></li>
                      <li class="nav-item"><a class="nav-link" href=" charts/chartist.html">Chartist</a></li>
                      <li class="nav-item"><a class="nav-link" href=" charts/justGage.html">JustGage</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-group col-md-3">
              <p class="category-heading">Table</p>
              <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href=" tables/basic-table.html">Basic Table</a></li>
                <li class="nav-item"><a class="nav-link" href=" tables/data-table.html">Data Table</a></li>
                <li class="nav-item"><a class="nav-link" href=" tables/js-grid.html">Js-grid</a></li>
                <li class="nav-item"><a class="nav-link" href=" tables/sortable-table.html">Sortable Table</a></li>
              </ul>
            </div>
            <div class="col-group col-md-3">
              <p class="category-heading">Maps</p>
              <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href=" maps/mapael.html">Mapael</a></li>
                <li class="nav-item"><a class="nav-link" href=" maps/vector-map.html">Vector Map</a></li>
                <li class="nav-item"><a class="nav-link" href=" maps/google-maps.html">Google Map</a></li>
              </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item mega-menu">
        <a href="#" class="nav-link">
          <i class="typcn typcn-book menu-icon"></i>
          <span class="menu-title">Sample Pages</span>
          <i class="menu-arrow"></i></a>
        <div class="submenu">
          <div class="col-group-wrapper row">
            <div class="col-group col-md-3">
              <p class="category-heading">User Pages</p>
              <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href=" samples/login.html">Login</a></li>
                <li class="nav-item"><a class="nav-link" href=" samples/login-2.html">Login 2</a></li>
                <li class="nav-item"><a class="nav-link" href=" samples/register.html">Register</a></li>
                <li class="nav-item"><a class="nav-link" href=" samples/register-2.html">Register 2</a></li>
                <li class="nav-item"><a class="nav-link" href=" samples/lock-screen.html">Lockscreen</a></li>
              </ul>
            </div>
            <div class="col-group col-md-3">
              <p class="category-heading">Error Pages</p>
              <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href=" samples/error-400.html">400</a></li>
                <li class="nav-item"><a class="nav-link" href=" samples/error-404.html">404</a></li>
                <li class="nav-item"><a class="nav-link" href=" samples/error-500.html">500</a></li>
                <li class="nav-item"><a class="nav-link" href=" samples/error-505.html">505</a></li>
              </ul>
            </div>
            <div class="col-group col-md-3">
              <p class="category-heading">E-commerce</p>
              <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href=" samples/invoice.html">Invoice</a></li>
                <li class="nav-item"><a class="nav-link" href=" samples/pricing-table.html">Pricing Table</a></li>
                <li class="nav-item"><a class="nav-link" href=" samples/orders.html">Orders</a></li>
              </ul>
            </div>
            <div class="col-group col-md-3">
              <p class="category-heading">General</p>
              <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href=" samples/search-results.html">Search Results</a></li>
                <li class="nav-item"><a class="nav-link" href=" samples/profile.html">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href=" samples/timeline.html">Timeline</a></li>
                <li class="nav-item"><a class="nav-link" href=" samples/news-grid.html">News grid</a></li>
                <li class="nav-item"><a class="nav-link" href=" samples/portfolio.html">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href=" samples/faq.html">FAQ</a></li>
              </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="typcn typcn-th-large-outline menu-icon"></i>
          <span class="menu-title">Apps</span>
          <i class="menu-arrow"></i></a>
        <div class="submenu">
          <ul class="submenu-item">
            <li class="nav-item"><a class="nav-link" href=" apps/email.html">Email</a></li>
            <li class="nav-item"><a class="nav-link" href=" apps/calendar.html">Calendar</a></li>
            <li class="nav-item"><a class="nav-link" href=" apps/todo.html">Todo List</a></li>
            <li class="nav-item"><a class="nav-link" href=" apps/gallery.html">Gallery</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a href=" documentation/documentation.html" class="nav-link">
          <i class="typcn typcn-document-text menu-icon"></i>
          <span class="menu-title">Documentation</span></a>
      </li>
    </ul>
  </div>
</nav>