<?php
  $crm_user_id = $this->session->userdata('crm_user_id');
  $crm_company_id = $this->session->userdata('crm_company_id');
  $crm_role_id = $this->session->userdata('crm_role_id');
  $company_info = $this->User_Model->get_info_arr_fields('company_name','company_id', $crm_company_id, 'company');
  $user_info = $this->User_Model->get_info_arr_fields('user_name','user_id', $crm_user_id, 'user');
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>User/logout">
        <i class="fas fa-sign-out-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
  </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light"><?php echo $company_info[0]['company_name']; ?></span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $user_info[0]['user_name']; ?></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>User/dashboard" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Company
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/company_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Company Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/branch_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Branch Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/service_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Service Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/unit_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Unit</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/party_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Party / Vendor</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/service_contract_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Service Contract</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/group_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Group Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/user_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>User Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/issue_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Issue Information</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Master
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Master/education_level" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Master Pages</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Master/custom_fields" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Custom Fields</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Master/database_backup" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Database Backup</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Master/email_template" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Email Templates</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Profile
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Profile/bank_account" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Bank Account </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Profile/change_password" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Change Password</p>
              </a>
            </li>


          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Assets
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Assets/assets_category" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Assets Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Assets/assets" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Assets</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Events And Meeting
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Events/events" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Events/meeting" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Meeting</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Training
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Training/trainers" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Trainers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Training/training" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Training</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Training/training_type" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Training Type</p>
              </a>
            </li>

          </ul>
        </li>



        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Organization
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Organization/announcements" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Announcements</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Organization/company" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Company</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Organization/policies" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Policies</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Organization/dapartments" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Departments</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Organization/designations" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Designations</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Organization/location" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Location</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Organization/documents" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Official Documents</p>
              </a>
            </li>

          </ul>
        </li>


        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              CORE HR
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>CoreHr/award" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Awards</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>CoreHr/complaints" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Complaints</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>CoreHr/transfers" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Transfers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>CoreHr/resignations" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Resignations</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>CoreHr/terminations" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Terminations</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>CoreHr/warning" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Warning</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>CoreHr/travels" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Travels</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>CoreHr/pramotions" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pramotions</p>
              </a>
            </li>

          </ul>
        </li>

         <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Transaction
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/lead_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lead Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/project_contract_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Contract</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/task_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Task Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/ticket_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ticket Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/attendence_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Attendence</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Transaction/receipt_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Receipt</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Report
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lead Report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Register</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Task Register</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ticket Register </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Attendence Register </p>
              </a>
            </li>
          </ul>
        </li>
      </nav>
    <!-- /.sidebar-menu -->
    </div>
  <!-- /.sidebar -->
  </aside>
