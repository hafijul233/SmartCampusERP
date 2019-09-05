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
        <div class="card-header">
          <h5 class="card-title">Student Application's Table</h5>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
          <form action="#" method="get">
          <div class="form-group">
          <div class="row">
          	<div class="col-lg-4">
          		<label for="dept">Department</label>
          		<select id="dept" name="department" class="form-control" style="height: 50px; padding:10px; font-size: 1rem;">
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
          	</div>
          	<div class="col-lg-4">
          		<label for="cls">Class</label>
          		<select id="cls" name="class" class="form-control" style="height: 50px; padding:10px; font-size: 1rem;">
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
          	</div>
          	<div class="offset-2 col-lg-2">
          		<button type="submit" class="btn btn-block btn-warning btn-lg text-dark mt-4"><b>Report</b></button>
          	</div>	
          </div>
          	</div>
          </form>
          <div class="row">
                              <div class="table-responsive">
                    <table id="order-listing" class="table table-bordered table-striped table-hover">
                      <thead class="thead-dark">
                        <tr>
                            <th>Order #</th>
                            <th>Purchased On</th>
                            <th>Customer</th>
                            <th>Ship to</th>
                            <th>Base Price</th>
                            <th>Purchased Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>2012/08/03</td>
                            <td>Edinburgh</td>
                            <td>New York</td>
                            <td>$1500</td>
                            <td>$3200</td>
                            <td>
                              <label class="badge badge-info">On hold</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2015/04/01</td>
                            <td>Doe</td>
                            <td>Brazil</td>
                            <td>$4500</td>
                            <td>$7500</td>
                            <td>
                              <label class="badge badge-danger">Pending</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2010/11/21</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>2016/01/12</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>2017/12/28</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>2000/10/30</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-info">On-hold</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>2011/03/11</td>
                            <td>Cris</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>2015/06/25</td>
                            <td>Tim</td>
                            <td>Italy</td>
                            <td>$6300</td>
                            <td>$2100</td>
                            <td>
                              <label class="badge badge-info">On-hold</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>2016/11/12</td>
                            <td>John</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>2003/12/26</td>
                            <td>Tom</td>
                            <td>Germany</td>
                            <td>$1100</td>
                            <td>$2300</td>
                            <td>
                              <label class="badge badge-danger">Pending</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
