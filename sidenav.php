      <aside class="main-sidebar">
        <section class="sidebar">
          <img src="images/logo.png" alt="Logo" class="img-responsive center-block company_logo">

          <!-- <nav class="navbar navbar-default">
                <ul class="nav navbar-nav">
                  <li class="dropdown border_bottom_1">
                    <img src="images/profilepic.jpg" class="profile_pic" alt="Profile Pic">
                    <a href="#" class="dropdown-toggle employee_settings" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">P. Subramanian <span class="caret"></span></a>
                    <ul class="dropdown-menu employee_dropdown">
                      <li><a href="#" class="name_dropdown"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
                      <li><a href="#" class="name_dropdown"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                    </ul>
                  </li>
                </ul>
          </nav> --> 

          <ul class="sidebar-menu">
            <li class="active treeview" id="side_menu1">
                <a onclick="analytics();" class="link_pointer"><i class="fa fa-pie-chart font_size_75p"></i> <span>Analytics</span></a>
            </li>
            <li class="treeview" id="side_menu2">
                <a class="link_pointer"><i class="fa fa-inr font_size_75p" aria-hidden="true"></i> <span>Business Development</span></a>
                <ul class="treeview-menu">
                  <li><a onclick="performance();" class="link_pointer" id="side_sub_menu21"><i class="fa fa-caret-right" aria-hidden="true"></i> Performance</a></li>
                  <li><a onclick="enquiryTracking();" class="link_pointer" id="side_sub_menu22"><i class="fa fa-caret-right" aria-hidden="true"></i> Enquiry Tracking</a></li>
                  <li><a onclick="sales();" class="link_pointer" id="side_sub_menu23"><i class="fa fa-caret-right" aria-hidden="true"></i> Sales</a></li>
                  <li><a onclick="invoicingPayment();" class="link_pointer" id="side_sub_menu24"><i class="fa fa-caret-right" aria-hidden="true"></i> Invoicing &amp; Payments</a></li>
                  <li><a onclick="bdsettings();" class="link_pointer" id="side_sub_menu24"><i class="fa fa-caret-right" aria-hidden="true"></i> BD Settings</a></li>
                </ul>
            </li>
            <li class="treeview" id="side_menu3">
                <a class="link_pointer"><i class="fa fa-binoculars font_size_75p" aria-hidden="true"></i> <span>Track Productivity</span></a>
                <ul class="treeview-menu">
                  <li><a onclick="myProductivity();" id="side_sub_menu31" class="link_pointer"><i class="fa fa-caret-right" aria-hidden="true"></i> My Productivity</a></li>
                  <li><a onclick="approveTimesheets();" id="side_sub_menu33" class="link_pointer"><i class="fa fa-caret-right" aria-hidden="true"></i> Approve Timesheets</a></li>
                </ul>
            </li>
            <li class="treeview" id="side_menu4">
                <a class="link_pointer"><i class="fa fa-university font_size_75p" aria-hidden="true"></i> <span>Assets</span></a>
                <ul class="treeview-menu">
                  <li><a onclick="assetViewRoster();" id="side_sub_menu51" class="link_pointer"><i class="fa fa-caret-right" aria-hidden="true"></i> Check-in / Check-out</a></li>
                  <li><a  onclick="assetList();" class="link_pointer" id="side_sub_menu52"><i class="fa fa-caret-right" aria-hidden="true"></i> Assets List</a></li>
                </ul>
            </li>
            <li class="treeview" id="side_menu5">
                <a class="link_pointer"><i class="fa fa-bar-chart font_size_75p" aria-hidden="true"></i> <span>Expenses</span></a>
                <ul class="treeview-menu">
                  <li><a onclick="fileExpenses();" id="side_sub_menu51" class="link_pointer"><i class="fa fa-caret-right" aria-hidden="true"></i> File Expenses</a></li>
                  <li><a onclick="companyExpenses();" class="link_pointer" id="side_sub_menu52"><i class="fa fa-caret-right" aria-hidden="true"></i> Company Expenses</a></li>
                  <li><a onclick="expenseReport();" id="side_sub_menu53" class="link_pointer"><i class="fa fa-caret-right" aria-hidden="true"></i> Expense Report</a></li>
                </ul>
            </li>
            <li class="treeview" id="side_menu6">
              <a class="link_pointer"><i class="fa fa-male font_size_75p" aria-hidden="true"></i> <span>Human Resources</span></a>
              <ul class="treeview-menu">
                <li><a onclick="myPackage();" id="side_sub_menu61" class="link_pointer"><i class="fa fa-caret-right" aria-hidden="true"></i> My Package</a></li>
                <li><a onclick="employeeDirectory();"" id="side_sub_menu63" class="link_pointer"><i class="fa fa-caret-right" aria-hidden="true"></i> Employee Directory</a></li>
                <li><a onclick="payslip();" class="link_pointer" id="side_sub_menu64"><i class="fa fa-caret-right" aria-hidden="true"></i> Manage Payslips</a></li>
                <li><a onclick="hrSettings();" class="link_pointer" id="side_sub_menu65"><i class="fa fa-caret-right" aria-hidden="true"></i> HR Settings</a></li>
              </ul>
            </li>
            <li class="treeview" id="side_menu7">
                <a class="link_pointer"><i class="fa fa-building font_size_75p" aria-hidden="true"></i> <span>My Company</span></a>
                <ul class="treeview-menu">
                  <li><a onclick="companyInfo();" class="link_pointer" id="side_sub_menu71"><i class="fa fa-caret-right" aria-hidden="true"></i> Company Info</a></li>
                  <li><a onclick="accountSettings();" class="link_pointer" id="side_sub_menu72"><i class="fa fa-caret-right" aria-hidden="true"></i> Account Settings</a></li>
                </ul>
            </li>
            <li class="treeview" id="side_menu8">
                <a class="link_pointer"><i class="fa fa-info-circle font_size_75p" aria-hidden="true"></i> <span>Support</span></a>
                <ul class="treeview-menu">
                  <li><a onclick="feedback();" class="link_pointer" id="side_sub_menu71"><i class="fa fa-caret-right" aria-hidden="true"></i> PR3 Feedback</a></li>
                  <li><a class="link_pointer" id="side_sub_menu72"><i class="fa fa-caret-right" aria-hidden="true"></i> Support</a></li>
                </ul>
            </li>
          </ul>
        </section>
        <!-- <img src="images/our_logo.png" class="img-responsive center-block our_logo"> -->
      </aside>