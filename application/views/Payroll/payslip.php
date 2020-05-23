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
            <h4>Bank Account</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">

            <!-- Bank Account -->
            <div class="row">

              <div class="col-md-5">
                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16">Generate Payslip</h5>
                  </div>
                  <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                    <div class="card-body row">

                      <div class="form-group col-md-4 select_sm">
                        <label>Company</label>
                        <select class="form-control select2" name="company" id="company" data-placeholder="Company">
                          <option value="">Company</option>
                        </select>
                      </div>

                      <div class="form-group col-md-4 select_sm">
                        <label>Employee</label>
                        <select class="form-control select2" name="employee_id" id="employee_id" data-placeholder="Employee">
                          <option value="">Employee</option>
                        </select>
                      </div>

                      <div class="form-group col-md-4">
                        <label>Select Month</label>
                        <input type="text" class="form-control form-control-sm" name="month" id="month" value="" placeholder="Select Month" required>
                      </div>

                      <div class="form-group col-md-12 text-right m-0">
                        <button id="btn_save" type="submit" class="btn btn-sm btn-success px-4">Save</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>


              <div class="col-md-7">
                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16"> Bulk Payment</h5>
                  </div>
                  <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                    <div class="card-body row">
                      <div class="form-group col-md-3 select_sm">
                        <label>Company</label>
                        <select class="form-control select2" name="company_id" id="company_id" data-placeholder="Company">
                          <option value="">Company</option>
                        </select>
                      </div>

                      <div class="form-group col-md-3 select_sm">
                        <label>Location</label>
                        <select class="form-control select2" name="location" id="location" data-placeholder="Location">
                          <option value="">Location</option>
                        </select>
                      </div>


                      <div class="form-group col-md-3 select_sm">
                        <label>Department</label>
                        <select class="form-control select2" name="department_id" id="department_id" data-placeholder="Department">
                          <option value="">Department</option>
                        </select>
                      </div>

                      <div class="form-group col-md-3">
                        <label>Select Month</label>
                        <input type="text" class="form-control form-control-sm" name="month_id" id="month_id" value="" placeholder="Select Month" required>
                      </div>

                      <div class="form-group col-md-12 text-right m-0">
                        <button id="btn_save" type="submit" class="btn btn-sm btn-success px-4">Bulk Payment</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

                <div class="row">
                  <div class="col-md-12">

                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16">Payment Info Of <span class="text-danger text-bold">2020-21</span> </h5>
                  </div>
                  <div class="card-body pt-0">
                    <table id="example2" class="table table-striped">
                      <thead>
                      <tr>
                        <th style="display:none;">#</th>
                        <th>Name</th>
                        <th>Payroll Type</th>
                        <th> Salary</th>
                        <th> Net Salary</th>
                        <th> Status</th>
                        <th class="wt_50">Action</th>
                      </tr>
                      </thead>
                      <tbody>

                          <tr>
                            <td style="display:none;"></td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>

                            <td>
                              <div class="btn-group">
                                <a href="<?php echo base_url(); ?>Master/edit_education_level/" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                                <a href="<?php echo base_url(); ?>Master/delete_education_level/" class="btn btn-sm btn-default" onclick="return confirm('Delete this Education Level');" ><i class="fa fa-trash text-danger"></i></a>
                              </div>
                            </td>
                          </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
            <!-- // Bank Account -->



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
