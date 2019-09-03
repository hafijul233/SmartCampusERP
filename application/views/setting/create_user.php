<?php
/**
 * Created by PhpStorm.
 * Project SmartCampusERP
 * User: hafij
 * Date: 29/08/2019
 * Time: 12:54 PM
 * Description:
 */
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!-- Container fluid  -->
<div class="container-fluid">
  <div class="card">
    <div class="card-header bg-success text-white">
      <h4 class="card-title">Personal Info</h4>
    </div>
    <?= form_open('setting/create_user', array('class' => 'form-horizontal')); ?>
    <div class="card-body">
        <center><span class="text-danger">(*) are Mandatory</span></center>
        <fieldset class="field-body">
          <legend>User Login Information</legend>
          <!-- full name -->
          <div class="form-group row">
            <label for="fullname" class="col-sm-2 text-right control-label col-form-label">Full Name * : </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="fullname" name="full_name" placeholder="Example : ABC DEF XYZ"
                     oninput="this.value = this.value.toUpperCase()" tabindex="1" value="<?= set_value('full_name'); ?>" autofocus required>
              <span class="text-danger"><?php form_error('full_name'); ?></span>
            </div>
          </div>
          <!-- user name -->
          <div class="form-group row">
            <label for="username" class="col-sm-2 text-right control-label col-form-label">UserName * : </label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="username" name="user_name" placeholder="Example: name123"
              oninput="this.value = this.value.toLowerCase()" tabindex="2" value="<?= set_value('user_name'); ?>" required>
              <span class="text-danger"><?= form_error('user_name'); ?></span>
            </div>
          </div>
          <!--email address -->
          <div class="form-group row">
            <label for="email" class="col-sm-2 text-right control-label col-form-label">Email Address * : </label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Example: example123@example.com"
              oninput="this.value = this.value.toLowerCase()" tabindex="3" value="<?= set_value('email'); ?>" required>
              <span class="text-danger"><?= form_error('email'); ?></span>
            </div>
          </div>
          <!-- password -->
          <div class="form-group row">
            <label for="password" class="col-sm-2 text-right control-label col-form-label">Password * : </label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password" name="password" placeholder="Example: abc , 123 (minimum 8 digit)" required>
              <span class="text-danger"><?= form_error('password'); ?></span>
            </div>
          </div>
          <!-- Password Confirm -->
          <div class="form-group row">
            <label for="passconf" class="col-sm-2 text-right control-label col-form-label">Password Confirm * : </label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="passconf" name="password_conf" placeholder="Example: abc , 123 (minimum 8 digit)" required>
              <span class="text-danger"><?= form_error('password_conf'); ?></span>
            </div>
          </div>
          <!-- user role -->
          <div class="form-group row">
            <label for="userRole" class="col-sm-2 text-right control-label col-form-label">User Role : </label>
            <div class="col-sm-5">
              <select class="form-control select2" width="100%" name="user_role" required>
                <option>-- Please Choose Role --</option>
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
                <option value="admin">Administration Head</option>
                <option value="librarian"> Librarian</option>
                <option value="employee"> Administrative Employee</option>
                <option value="parent"> Parent / Gurdian</option>
              </select>
              <span class="text-danger"><?= form_error('user_role'); ?></span>
            </div>
          </div>
        </fieldset>
      </div>
      <div class="border-top">
        <div class="card-body">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- /. Container fluid  -->

<?php
/*
 <!-- Start Page Content -->
  <div class="card">
    <div class="card-body wizard-content">
      <h4 class="card-title">Basic Form Example</h4>
      <h6 class="card-subtitle"></h6>
      <form id="example-form" action="#" class="m-t-40">
        <div>
          <h3>Account</h3>
          <section>
            <label for="userName">User name *</label>
            <input id="userName" name="userName" type="text" class="required form-control">
            <label for="password">Password *</label>
            <input id="password" name="password" type="text" class="required form-control">
            <label for="confirm">Confirm Password *</label>
            <input id="confirm" name="confirm" type="text" class="required form-control">
            <p>(*) Mandatory</p>
          </section>
          <h3>Profile</h3>
          <section>
            <label for="name">First name *</label>
            <input id="name" name="name" type="text" class="required form-control">
            <label for="surname">Last name *</label>
            <input id="surname" name="surname" type="text" class="required form-control">
            <label for="email">Email *</label>
            <input id="email" name="email" type="text" class="required email form-control">
            <label for="address">Address</label>
            <input id="address" name="address" type="text" class=" form-control">
            <p>(*) Mandatory</p>
          </section>
          <h3>Hints</h3>
          <section>
            <ul>
              <li>Foo</li>
              <li>Bar</li>
              <li>Foobar</li>
            </ul>
          </section>
          <h3>Finish</h3>
          <section>
            <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
            <label for="acceptTerms">I agree with the Terms and Conditions.</label>
          </section>
        </div>
      </form>
    </div>
  </div>
  <!-- /. Page Content -->
 */
?>