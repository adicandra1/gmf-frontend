<!-- TODO polish edit load data from previous state -->
<form id="experience" name="experience">

    <div class="form-group row">
        <label for="profession" class="col-sm-2 col-form-label">Position Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="profession" name="profession" placeholder="Profesion">
            <small class="form-error text-danger pl-3 profession"></small>
        </div>
    </div>
    <div class="form-group row">
        <label for="company" class="col-sm-2 col-form-label">Company Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="company" name="company" placeholder="Company">
            <small class="form-error text-danger pl-3 company"></small>
        </div>
    </div>
    <div class="form-group row">
        <label for="date" class="col-sm-2 col-form-label">Join Duration</label>
        <div class="col-sm-3">
            <input name="join_date" type="date" data-format="DD-MM-YYYY" class="form-control" id="date" placeholder="Valid date">
            <small class="form-error text-danger pl-3 join_date"></small>
        </div>To
        <div class="col-sm-3">
            <input name="resign_date" type="date" class="form-control" id="date" placeholder="Valid date">
            <small class="form-error text-danger pl-3 resign_date"></small>
        </div>
    </div>

    <div class="form-group row">
        <label for="job_description" class="col-sm-2 col-form-label">Experience Description</label>
        <div class="col-sm-10">
            <textarea type="text" class="form-control" placeholder="job description!" id="job_description" name="job_description"></textarea>
            <small class="form-error text-danger pl-3 job_description"></small>
        </div>
    </div>

</form>