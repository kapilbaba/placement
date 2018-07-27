<?php
$title = "admin-dashboard";
session_start(); ?>
<?php include "core/script/admin-auth.php" ?>
<!DOCTYPE html>
<html>

<?php include_once 'admin/includes/head.php' ?>

<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
    <?php include_once 'admin/includes/header.php'; ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php include_once 'admin/includes/left-sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container">
            <div style="border: solid 1px crimson; margin: 10px; padding: 10px;" class="row">
                <h1 style="text-align: center; text-transform: capitalize">post job</h1>

                <div class="col-md-12">
                    <form method="post" action="postjob.php">
                        <input type="hidden" name="_token" value="">

                        <div class="panel panel-danger">
                            <div class="panel-heading"><h3 class="panel-title">Job Description</h3></div>
                        </div>

                        <div class="form-group input-field">
                            <label for="post">Job Post</label>
                            <input required="required" type="text" name="jobpost" value="" class="form-control"
                                   id="post" data-validation="required">
                        </div>
                        <div class="form-group input-field">
                            <label for="description_1">job Description</label>
                            <textarea cols="10" rows="10" required="required" type="text" name="desription_1" value="" class="form-control"
                                      id="description_1" data-validation="required"></textarea>
                        </div>

                        <div class="col-md-12">
                            <div class="panel panel-danger">
                                <div class="panel-heading"><h3 class="panel-title">Job Information</h3></div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group input-field">
                                    <label for="salary">salary</label>
                                    <input required="required" type="number" name="job_salary" value=""
                                           class="form-control"
                                           id="salary" data-validation="required" placeholder="in RS:">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group input-field">
                                    <label for="indrustry">Indrustry</label>
                                    <input required="required" type="text" name="job_indrustry" value=""
                                           class="form-control"
                                           id="indrustry" data-validation="required">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group input-field">
                                    <label for="category">job category</label>
                                    <input required="required" type="text" name="job_category" value=""
                                           class="form-control"
                                           id="category" data-validation="required">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group input-field">
                                    <label for="typ">employment type</label>
                                    <input required="required" type="text" name="jobtype" value=""
                                           class="form-control"
                                           id="typ" data-validation="required">
                                </div>
                            </div>


                        </div>

                        <div class="col-md-12">
                            <div class="panel panel-danger">
                                <div class="panel-heading"><h3 class="panel-title">Job Skills</h3></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group input-field">
                                    <label for="skill1">key skills 1</label>
                                    <input required="required" type="text" name="skill_1" value="" class="form-control"
                                           id="skill1" data-validation="required">
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="form-group input-field">
                                    <label for="skill2">key skills 2</label>
                                    <input required="required" type="text" name="skill_2" value="" class="form-control"
                                           id="skill2" data-validation="required">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group input-field">
                                    <label for="skill3">key skills 3</label>
                                    <input required="required" type="text" name="skill_3" value="" class="form-control"
                                           id="skill3" data-validation="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group input-field">
                                    <label for="skill4">key skills 4</label>
                                    <input required="required" type="text" name="skill_4" value="" class="form-control"
                                           id="skill4" data-validation="required">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group input-field">
                                    <label for="skill5">key skills 5</label>
                                    <input required="required" type="text" name="skill_5" value="" class="form-control"
                                           id="skill5" data-validation="required">
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="panel panel-danger">
                                <div class="panel-heading"><h3 class="panel-title">Required Candidate Profile</h3></div>
                            </div>
                            <div class="form-group input-field">
                                <label for="candidate_profile">desire candidate profile</label>
                                <textarea rows="4" required="required" type="text" name="candidate_profile" value=""
                                          class="form-control"
                                          id="candidate_profile" data-validation="required"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-danger">
                                <div class="panel-heading"><h3 class="panel-title">company address</h3></div>
                            </div>
                            <div class="form-group input-field">
                                <label for="candidate_profile">company details</label>
                                <textarea rows="4" required="required" type="text" name="company_address" value=""
                                          class="form-control"
                                          id="candidate_profile" data-validation="required"></textarea>
                            </div>
                        </div>

                        <button type="submit" name="post" class="btn btn-default">submit</button>
                    </form>
                </div>
            </div>


        </div>


    </div>

    <?php include_once 'admin/includes/footer.php'; ?>


    <?php include_once 'admin/includes/right-sidebar.php'; ?>

    <div class="control-sidebar-bg"></div>
</div>

<?php include_once 'admin/includes/script.php'; ?>


</body>
</html>
