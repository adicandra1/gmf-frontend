<!-- TODO polish edit load data from previous state -->


<form id="education" name="education">

    <div class="form-group row">
        <label for="university" class="col-sm-2 col-form-label">Institute/University</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="university" name="university" placeholder="University">
            <small class="form-error text-danger pl-3 university"></small>
        </div>
    </div>
    <div class="form-group row">
        <label for="date" class="col-sm-2 col-form-label">Graduation Date</label>
        <div class="col-sm-2">
            <select id="inputState" class="form-control" name="grad-date_month">
                <option>Januari</option>
                <option>Februari</option>
                <option>Maret</option>
                <option>April</option>
            </select>
        </div>
        <div class="col-sm-2">
            <select id="inputState" class="form-control" name="grad_date_year">
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="major" class="col-sm-2 col-form-label">Major</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="major" name="major" placeholder="Major">
            <small class="form-error text-danger pl-3 major"></small>
        </div>
    </div>

    <div class="form-group row">
        <label for="additional_info" class="col-sm-2 col-form-label">Additional Information</label>
        <div class="col-sm-10">
            <textarea type="text" class="form-control" placeholder="Additional Information" id="additional_info" name="additional_info"></textarea>
            <small class="form-error text-danger pl-3 additional_info"></small>
        </div>
    </div>

</form>