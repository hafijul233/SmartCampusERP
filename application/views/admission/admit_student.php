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
          <h5 class="card-title">Student Admission Form</h5>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
          <ul class="nav nav-tabs nav-justified" role="tablist" id="formTab">
            <li>
            <a class="nav-link active" id="erp-account-tab" data-toggle="tab" href="#erp-account" role="tab" aria-controls="erp-account" aria-selected="true">ERP Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="office-tab" data-toggle="tab" href="#office" role="tab" aria-controls="office" aria-selected="false">Office</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="false">Student</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="family-tab" data-toggle="tab" href="#family" role="tab" aria-controls=family aria-selected="false">Family</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false">Education</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="document-tab" data-toggle="tab" href="#document" role="tab" aria-controls="document" aria-selected="false">Documents</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="erp-account" role="tabpanel" aria-labelledby="erp-account-tab">
              <div class="media">
                <img class="mr-3 w-25 rounded" src="<?= base_url() . 'resources/'; ?>images/samples/300x300/13.jpg" alt="sample image">
                <div class="media-body">
                  <h4 class="mt-0">Why choose us?</h4>
                  <p>
                    Far curiosity incommode now led smallness allowance. Favour bed assure son things yet. She consisted
                    consulted elsewhere happiness disposing household any old the. Widow downs you new shade drift hopes
                    small. So otherwise commanded sweetness we improving. Instantly by daughters resembled unwilling principle
                    so middleton.
                  </p>
                </div>
              </div>
              <button class="btn btn-success float-right" id="nextTab">Next</button>
            </div>
            <div class="tab-pane fade" id="office" role="tabpanel" aria-labelledby="office-tab">
              <div class="media">
                <img class="mr-3 w-25 rounded" src="<?= base_url() . 'resources/'; ?>images/faces/face12.jpg" alt="sample image">
                <div class="media-body">
                  <h4 class="mt-0">John Doe</h4>
                  <p>
                    Fail most room even gone her end like. Comparison dissimilar unpleasant six compliment two unpleasing
                    any add. Ashamed my company thought wishing colonel it prevent he in. Pretended residence are something
                    far engrossed old off.
                  </p>
                  <button class="btn btn-success float-right" id="nextTab">Next</button>
                </div>
              </div>
              <button class="btn btn-success float-right" id="nextTab">Next</button>
            </div>
            <div class="tab-pane fade" id="student" role="tabpanel" aria-labelledby="student-tab">
              <h4>Contact us </h4>
              <p>
                Feel free to contact us if you have any questions!
              </p>
              <p>
                <i class="typcn typcn-phone-outline text-info"></i>
                +123456789
              </p>
              <p>
                <i class="typcn typcn-mail text-success"></i>
                contactus@example.com
              </p>
              <button class="btn btn-success float-right" id="nextTab">Next</button>
            </div>
            <div class="tab-pane fade" id="family" role="tabpanel" aria-labelledby="family-tab">
              <h4>Contact us </h4>
              <p>
                Feel free to contact us if you have any questions!
              </p>
              <p>
                <i class="typcn typcn-phone-outline text-info"></i>
                +123456789
              </p>
              <p>
                <i class="typcn typcn-mail text-success"></i>
                contactus@example.com
              </p>
            </div>
            <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
              <h4>Contact us </h4>
              <p>
                Feel free to contact us if you have any questions!
              </p>
              <p>
                <i class="typcn typcn-phone-outline text-info"></i>
                +123456789
              </p>
              <p>
                <i class="typcn typcn-mail text-success"></i>
                contactus@example.com
              </p>
            </div>
              <div class="tab-pane fade" id="document" role="tabpanel" aria-labelledby="document-tab">
              <h4>Contact us </h4>
              <p>
                Feel free to contact us if you have any questions!
              </p>
              <p>
                <i class="typcn typcn-phone-outline text-info"></i>
                +123456789
              </p>
              <p>
                <i class="typcn typcn-mail text-success"></i>
                contactus@example.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

