<?php
/**
 * Created by PhpStorm.
 * User: Sandip
 * Date: 9/28/2018
 * Time: 11:18 PM
 */
?>


<?php $page_title = 'Create Ceremony'; ?>
<?php include('header.php'); ?>

<div class="container">
    <!--Check the CeremonyCreated and if Failed, display the error message-->
    <?php
    if(isset($_GET['CeremonyCreated'])){
        if($_GET["CeremonyCreated"] == "Failed"){
            echo '<br><h3 class="bg-danger">A ceremony with the NAME already exists. Please try again with a new NAME! </h3>';
        }
    }

    ?>
    <form action="createTheCeremony.php" method="POST">
        <br>
        <h3>Create New Ceremony: </h3> <br>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="id">Id</label>
                <input type="text" class="form-control" name="id"   maxlength="5" required>
            </div>
            <div class="form-group col-md-8">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name"  maxlength="64" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="category">Category</label>
                <input type="text" class="form-control" name="category"   maxlength="20">
            </div>

            <div class="form-group col-md-4">
                <label for="level">Level</label>
                <input type="text" class="form-control" name="level" maxlength="30" >
            </div>

            <div class="form-group col-md-4">
                <label for="facilitator">Facilitator</label>
                <input type="text" class="form-control" name="facilitator"  maxlength="30">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description"  maxlength="255">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="required">Required</label>
                <input type="text" class="form-control" name="required"   maxlength="128">
            </div>

            <div class="form-group col-md-6">
                <label for="optional">Optional</label>
                <input type="text" class="form-control" name="optional"  maxlength="128" >
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="cadence">Cadence</label>
                <input type="text" class="form-control" name="cadence"  maxlength="50">
            </div>

            <div class="form-group col-md-4">
                <label for="time_lower">Time Lower</label>
                <input type="text" class="form-control" name="time_lower" maxlength="3" >
            </div>

            <div class="form-group col-md-4">
                <label for="time_upper">Time Upper</label>
                <input type="text" class="form-control" name="time_upper"  maxlength="3">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="contains_demo">Contains Demo?</label>
                <input type="text" class="form-control" name="contains_demo"  maxlength="1">
            </div>

            <div class="form-group col-md-4">
                <label for="demo_lead">Demo Lead</label>
                <input type="text" class="form-control" name="demo_lead"  maxlength="30" >
            </div>

            <div class="form-group col-md-4">
                <label for="is_optional">Is Optional?</label>
                <input type="text" class="form-control" name="is_optional"  maxlength="1">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="is_safe">Is SAFe?</label>
                <input type="text" class="form-control" name="is_safe"   maxlength="1">
            </div>
            <div class="form-group col-md-8">
                <label for="safe_link">SAFe Link</label>
                <input type="text" class="form-control" name="safe_link"  maxlength="128" >
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status"  maxlength="20">
            </div>

            <div class="form-group col-md-6">
                <label for="comments">Comments</label>
                <input type="text" class="form-control" name="comments"  maxlength="255" >
            </div>
        </div>
        <br>
        <div class="text-left">
            <button type="submit" name="submit" class="btn btn-primary btn-md align-items-center">Create Ceremony</button>
        </div>
        <br> <br>

    </form>
</div>

