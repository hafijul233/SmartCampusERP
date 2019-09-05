<?php
/**
 * Created by PhpStorm.
 * Project SmartCampusERP
 * User: hafij
 * Date: 04/09/2019
 * Time: 5:14 PM
 * Description:
 */
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<div class="content-wrapper">
  <h4 class="mb-2 text-titlecase mb-4"><?= $page_title; ?></h4>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-header bg-info">
          <h5 class="card-title text-white">Student Admission Form</h5>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <?= form_open('admission/admit_student', array('class ' => 'forms-sample')); ?>

          <ul class="nav nav-tabs nav-justified" role="tablist" id="formTab">
            <li class="active">
              <a class="nav-link active" id="erp-account-tab" data-toggle="tab" href="#erp-account" role="tab"
                 aria-controls="erp-account" aria-selected="true"><i class="mdi mdi-alpha-e-box"></i> ERP Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="office-tab" data-toggle="tab" href="#office" role="tab" aria-controls="office"
                 aria-selected="false"><i class="mdi mdi-office-building"></i> Office</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student"
                 aria-selected="false"><i class="mdi mdi-account"></i> Student</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="family-tab" data-toggle="tab" href="#family" role="tab" aria-controls=family
                 aria-selected="false"><i class="mdi mdi-account-group"></i> Family</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab"
                 aria-controls="education" aria-selected="false"><i class="mdi mdi-library-books"></i> Education</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="document-tab" data-toggle="tab" href="#document" role="tab"
                 aria-controls="document" aria-selected="false"><i class="mdi mdi-file"></i> Documents</a>
            </li>
          </ul>
          <div class="tab-content">
            <!-- ERP Account -->
            <div class="tab-pane fade show active" id="erp-account" role="tabpanel" aria-labelledby="erp-account-tab">
              <fieldset>
                <legend><i class="mdi mdi-alpha-e-box"></i> ERP Account Information</legend>
                <!-- Username -->
                <div class="form-group row">
                  <label for="username" class="col-sm-3 col-form-label">User Name:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="username" placeholder="Username"
                           name="user_name" value="<?= set_value('user_name'); ?>" tabindex="1" required>
                    <span class="text-danger"><?= form_error('user_name'); ?></span>
                  </div>
                </div>
                <!-- Email -->
                <div class="form-group row">
                  <label for="email" class="col-sm-3 col-form-label">Email Address:</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" placeholder="Email"
                           name="email" value="<?= set_value('email'); ?>" tabindex="2" required>
                    <span class="text-danger"><?= form_error('email'); ?></span>
                  </div>
                </div>
                <!-- Mobile Number -->
                <div class="form-group row">
                  <label for="mobile" class="col-sm-3 col-form-label">Mobile:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="mobile" placeholder="Mobile number"
                           name="mobile_number" value="<?= set_value('mobile_number'); ?>" tabindex="3" required>
                    <span class="text-danger"><?= form_error('mobile_number'); ?></span>
                  </div>
                </div>
                <!-- Password -->
                <div class="form-group row">
                  <label for="password" class="col-sm-3 col-form-label">Password:</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="password" placeholder="Password"
                           name="password" value="<?= set_value('password'); ?>" tabindex="4" required>
                    <span class="text-danger"><?= form_error('password'); ?></span>
                  </div>
                </div>
                <!-- Password Confirmation -->
                <div class="form-group row">
                  <label for="password-confirm" class="col-sm-3 col-form-label">Password Confirmation:</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="password-confirm"
                           placeholder="Password Confirmation"
                           name="password_confirm" value="<?= set_value('password_confirm'); ?>" tabindex="5" required>
                    <span class="text-danger"><?= form_error('password_confirm'); ?></span>
                  </div>
                </div>
              </fieldset>
            </div>
            <!-- office -->
            <div class="tab-pane fade" id="office" role="tabpanel" aria-labelledby="office-tab">
              <fieldset>
                <legend><i class="mdi mdi-office"></i> Official Admission Information</legend>
                <!-- Application ID -->
                <div class="form-group row">
                  <label for="applicationId" class="col-sm-3 col-form-label">Application ID:</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="applicationId" placeholder="Ex: 132131"
                           name="application_id" value="<?= set_value('application_id'); ?>" min="0" tabindex="1"
                           required>
                    <span class="text-danger"><?= form_error('application_id'); ?></span>
                  </div>
                </div>
                <!-- Admission Date -->
                <div class="form-group row">
                  <label for="admission_date" class="col-sm-3 col-form-label">Admission Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" id="admission_date" placeholder="MM/DD/YYYY"
                           name="admission_date" value="<?= set_value('admission_date'); ?>" tabindex="2" required>
                    <span class="text-danger"><?= form_error('admission_date'); ?></span>
                  </div>
                </div>
                <!-- Student ID -->
                <div class="form-group row">
                  <label for="student_id" class="col-sm-3 col-form-label">Student ID:</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="student_id" placeholder="Student ID"
                           name="student_id_number" value="<?= set_value('student_id'); ?>" min="0" tabindex="3"
                           required>
                    <span class="text-danger"><?= form_error('student_id'); ?></span>
                  </div>
                </div>
                <!-- receiver -->
                <div class="form-group row">
                  <label for="receiver" class="col-sm-3 col-form-label">Received By:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="receiver"
                           name="password" value="<?= $this->session->user_name; ?>" tabindex="4" readonly>
                    <span class="text-danger"><?= form_error('password'); ?></span>
                  </div>
                </div>
                <!-- receiver date-->
                <div class="form-group row">
                  <label for="receiver_date" class="col-sm-3 col-form-label">Received Date:</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" id="receiver_date"
                           name="receiver_date" value="" tabindex="4">
                    <span class="text-danger"><?= form_error('password'); ?></span>
                  </div>
                </div>
                <!-- Department -->
                <div class="form-group row">
                  <label for="dept" class="col-sm-3 col-form-label">Department:</label>
                  <div class="col-sm-9">
                    <select id="dept" name="department" class="form-control"
                            style="height: 40px; padding:10px; font-size: 1rem;">
                      <option value="CSE">Computer Science & Engineering</option>
                      <option value="ECE">Electronics & Communication Engineering</option>
                      <option value="BBA">Bachelor of Business Administration</option>
                      <option value="ENG">English</option>
                      <option value="BAN">Bangla</option>
                      <option value="PHA">Pharmacy</option>
                      <option value="MAT">Mathematics</option>
                      <option value="LAW">Law & Governance</option>
                      <option value="OTH">Others</option>
                    </select>
                    <span class="text-danger"><?= form_error('department'); ?></span>
                  </div>
                </div>
                <!-- Class -->
                <div class="form-group row">
                  <label for="cls" class="col-sm-3 col-form-label">Class</label>
                  <div class="col-sm-9">
                    <select id="cls" name="class" class="form-control"
                            style="height: 40px; padding:10px; font-size: 1rem;">
                      <option value="1">Class 1</option>
                      <option value="2">Class 2</option>
                      <option value="3">Class 3</option>
                      <option value="4">Class 4</option>
                      <option value="5">Class 5</option>
                      <option value="6">Class 6</option>
                      <option value="7">Class 7</option>
                      <option value="8">Class 8</option>
                      <option value="9">Class 9</option>
                      <option value="10">Class 10</option>
                      <option value="11">Class 11</option>
                      <option value="12">Class 12</option>
                    </select>
                    <span class="text-danger"><?= form_error('class'); ?></span>
                  </div>
                </div>
                <!-- Session -->
                <div class="form-group row">
                  <label for="session" class="col-sm-3 col-form-label">Session:</label>
                  <div class="col-sm-9">
                    <select id="session" name="class" class="form-control"
                            style="height: 40px; padding:10px; font-size: 1rem;">
                      <option value="1">2020 - 2019</option>
                      <option value="2">2019 - 2018</option>
                      <option value="3">2018 - 2017</option>
                      <option value="4">2017 - 2016</option>
                      <option value="5">2016 - 2015</option>
                      <option value="6">2015 - 2014</option>
                      <option value="7">2014 - 2013</option>
                    </select>
                    <span class="text-danger"><?= form_error('session'); ?></span>
                  </div>
                </div>
                <!-- Roll -->
                <div class="form-group row">
                  <label for="roll" class="col-sm-3 col-form-label">Class Roll:</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="roll"
                           name="class_roll" value="<?= set_value('class_roll') ?>" tabindex="4" min="1">
                    <span class="text-danger"><?= form_error('class_roll'); ?></span>
                  </div>
                </div>
              </fieldset>
            </div>
            <!-- Student -->
            <div class="tab-pane fade" id="student" role="tabpanel" aria-labelledby="student-tab">
              <fieldset>
                <legend><i class="mdi mdi-account-plus"></i> Student Profile Information</legend>
              </fieldset>
              <!-- full name -->
              <div class="form-group row">
                <label for="fullname" class="col-sm-3 col-form-label">Full Name:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="fullname" placeholder=" Enter Full Name"
                         name="full_name" value="<?= set_value('full_name'); ?>" tabindex="1"
                         required>
                  <span class="text-danger"><?= form_error('full_name'); ?></span>
                </div>
              </div>
              <!-- Admission Date -->
              <div class="form-group row">
                <label for="admission_date" class="col-sm-3 col-form-label">Admission Date</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="admission_date" placeholder="MM/DD/YYYY"
                         name="admission_date" value="<?= set_value('admission_date'); ?>" tabindex="2" required>
                  <span class="text-danger"><?= form_error('admission_date'); ?></span>
                </div>
              </div>
              <!-- Student ID -->
              <div class="form-group row">
                <label for="student_id" class="col-sm-3 col-form-label">Student ID:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="student_id" placeholder="Student ID"
                         name="student_id_number" value="<?= set_value('student_id'); ?>" min="0" tabindex="3" required>
                  <span class="text-danger"><?= form_error('student_id'); ?></span>
                </div>
              </div>
              <!-- receiver -->
              <div class="form-group row">
                <label for="receiver" class="col-sm-3 col-form-label">Received By:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="receiver"
                         name="password" value="<?= $this->session->user_name; ?>" tabindex="4" readonly>
                  <span class="text-danger"><?= form_error('password'); ?></span>
                </div>
              </div>
              <!-- receiver date-->
              <div class="form-group row">
                <label for="receiver_date" class="col-sm-3 col-form-label">Received Date:</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="receiver_date"
                         name="receiver_date" value="" tabindex="4">
                  <span class="text-danger"><?= form_error('password'); ?></span>
                </div>
              </div>
              <!-- Department -->
              <div class="form-group row">
                <label for="dept" class="col-sm-3 col-form-label">Department:</label>
                <div class="col-sm-9">
                  <select id="dept" name="department" class="form-control"
                          style="height: 40px; padding:10px; font-size: 1rem;">
                    <option value="CSE">Computer Science & Engineering</option>
                    <option value="ECE">Electronics & Communication Engineering</option>
                    <option value="BBA">Bachelor of Business Administration</option>
                    <option value="ENG">English</option>
                    <option value="BAN">Bangla</option>
                    <option value="PHA">Pharmacy</option>
                    <option value="MAT">Mathematics</option>
                    <option value="LAW">Law & Governance</option>
                    <option value="OTH">Others</option>
                  </select>
                  <span class="text-danger"><?= form_error('department'); ?></span>
                </div>
              </div>
              <!-- Class -->
              <div class="form-group row">
                <label for="cls" class="col-sm-3 col-form-label">Class</label>
                <div class="col-sm-9">
                  <select id="cls" name="class" class="form-control"
                          style="height: 40px; padding:10px; font-size: 1rem;">
                    <option value="1">Class 1</option>
                    <option value="2">Class 2</option>
                    <option value="3">Class 3</option>
                    <option value="4">Class 4</option>
                    <option value="5">Class 5</option>
                    <option value="6">Class 6</option>
                    <option value="7">Class 7</option>
                    <option value="8">Class 8</option>
                    <option value="9">Class 9</option>
                    <option value="10">Class 10</option>
                    <option value="11">Class 11</option>
                    <option value="12">Class 12</option>
                  </select>
                  <span class="text-danger"><?= form_error('class'); ?></span>
                </div>
              </div>
              <!-- Session -->
              <div class="form-group row">
                <label for="session" class="col-sm-3 col-form-label">Session:</label>
                <div class="col-sm-9">
                  <select id="session" name="class" class="form-control"
                          style="height: 40px; padding:10px; font-size: 1rem;">
                    <option value="1">2020 - 2019</option>
                    <option value="2">2019 - 2018</option>
                    <option value="3">2018 - 2017</option>
                    <option value="4">2017 - 2016</option>
                    <option value="5">2016 - 2015</option>
                    <option value="6">2015 - 2014</option>
                    <option value="7">2014 - 2013</option>
                  </select>
                  <span class="text-danger"><?= form_error('session'); ?></span>
                </div>
              </div>
              <!-- Roll -->
              <div class="form-group row">
                <label for="roll" class="col-sm-3 col-form-label">Class Roll:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="roll"
                         name="class_roll" value="<?= set_value('class_roll') ?>" tabindex="4" min="1">
                  <span class="text-danger"><?= form_error('class_roll'); ?></span>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="family" role="tabpanel" aria-labelledby="family-tab">
              fgfdgdfgdf
            </div>
            <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
              dfgdfgdfgdf
            </div>
            <div class="tab-pane fade" id="document" role="tabpanel" aria-labelledby="document-tab">
              <button type="submit" class="btn btn-info btn-lg">Submit</button>
            </div>
          </div>
            <?= form_close(); ?>

        </div>
      </div>
    </div>
  </div>
</div>

