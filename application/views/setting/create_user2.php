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
</div>
<!-- /. Container fluid  -->

