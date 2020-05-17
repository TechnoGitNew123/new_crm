<!DOCTYPE html>
<html>
<style media="screen">
  .dataTables_length{
    display: none !important;
  }
  .dataTables_filter{
    display: none !important;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header pt-0 pb-2">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-left mt-2">
            <h4>Basic Information</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <?php include('side_panel.php') ?>
          </div>
          <div class="col-md-9">

            <!-- Basic Information -->
            <div class="row">
              <div class="col-md-12">
                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16"> Basic Information</h5>
                  </div>
                  <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                    <div class="card-body row">
                      <div class="form-group col-md-6">
                        <label>First Name</label>
                        <input type="text" class="form-control form-control-sm" name="first_name" id="first_name" value="" placeholder="First Name" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Last Name</label>
                        <input type="text" class="form-control form-control-sm" name="last_name" id="last_name" value="" placeholder="Last Name" required>
                      </div>

                      <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control form-control-sm" name="email" id="email" value="" placeholder="Email" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Date Of Birth</label>
                        <input type="text" class="form-control form-control-sm" name="dob" id="dob" value="" placeholder="Date Of Birth" required>
                      </div>

                      <div class="form-group col-md-4 select_sm">
                        <label>Gender</label>
                        <select class="form-control select2" name="gender" id="gender" data-placeholder="Gender">
                          <option value="">Gender</option>
                        </select>
                      </div>

                      <div class="form-group col-md-4 select_sm">
                        <label>Marital status</label>
                        <select class="form-control select2" name="marital_status" id="marital_status" data-placeholder="Marital status">
                          <option value="">Marital status</option>
                        </select>
                      </div>

                      <div class="form-group col-md-4">
                        <label>Phone No.</label>
                        <input type="text" class="form-control form-control-sm" name="phone" id="phone" value="" placeholder="Phone No." required>
                      </div>


                      <div class="form-group col-md-12">
                        <label>Address</label>
                        <textarea class="form-control form-control-sm" name="Address" rows="4" cols="80"></textarea>
                          </div>

                      <div class="form-group col-md-12 text-right m-0">

                          <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Update</button>

                          <button id="btn_save" type="submit" class="btn btn-sm btn-success px-4">Save</button>

                      </div>
                    </div>
                  </form>
                </div>


              </div>

            </div>
            <!-- // Basic Information -->



          </div>
        </div>
      </div>
    </section>
  </div>

</body>
</html>

<script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
  <?php if($this->session->flashdata('save_success')){ ?>
    $(document).ready(function(){
      toastr.success('Saved successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('update_success')){ ?>
    $(document).ready(function(){
      toastr.info('Updated successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('delete_success')){ ?>
    $(document).ready(function(){
      toastr.error('Deleted successfully');
    });
  <?php } ?>
</script>
