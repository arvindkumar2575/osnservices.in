

<?= $this->extend(OSN_VIEW_V2.'/layout/page-layout-without-body') ?>


<?= $this->section("content") ?>

<div class="main container">
    <div class="row">
        <div class="main-heading">
            <h2 class="primary-color"><?=$title?></h2>
        </div>
        <div class="col-sm-9">
            <div class="main-description">
                <p>You can check your taxable income on the basis of expense describe here.</p>
                <form class="form-inline tax-calculator-form">
                    <div class="tc-sec">
                        <h5 class="">Profile</h5>
                        <div class="row tc-sec-parent">
                            <div class="col-md-6 form-group">
                                <label for="assessment_year">Assessment Year</label>
                                <select id="assessment_year" class="form-control" name="assessment_year">
                                    <option value="2021_2022">2021 - 2022</option>
                                    <option value="2022_2023" >2022 - 2023</option>
                                    <option value="2023_2024">2023 - 2024</option>
                                    <option value="2024_2025">2024 - 2025</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="age_category">Age Category</label>
                                <select id="age_category" class="form-control" name="age_category">
                                    <option value="below_60_years" >Below 60 Years</option>
                                    <option value="equal_60_above_60">Equal 60 Years and Above 60 Years</option>
                                    <option value="equal_80_above_80">Equal 80 Years and Above 80 Years</option>
                                </select>
                            </div>
                        </div>
                        <h5 class="">Income</h5>
                        <div class="row tc-sec-parent">
                            <div class="col-md-12 form-group in-single">
                                <label for="i_1">Annual Salary</label>
                                <input type="text" name="i_1" class="form-control" id="i_1" placeholder="" value=""/>
                            </div>
                            <div class="col-md-12 form-group in-single">
                                <label for="i_2">Income from Interest</label>
                                <input type="text" name="i_2" class="form-control" id="i_2" placeholder="" value=""/>
                            </div>
                            <div class="col-md-12 form-group in-single">
                                <label for="i_3">Income from Property(Rents)</label>
                                <input type="text" name="i_3" class="form-control" id="i_3" placeholder="" value=""/>
                            </div>
                            <div class="col-md-12 form-group in-single">
                                <label for="i_4">Income from Other Source</label>
                                <input type="text" name="i_4" class="form-control" id="i_4" placeholder="" value=""/>
                            </div>
                        </div>
                        <h5 class="">Deductions</h5>
                        <div class="row tc-sec-parent">
                            <div class="col-md-12 form-group in-single">
                                <label for="i_1">80C - Investement, LICs, NPS, SSY, Home Loans, etc.</label>
                                <input type="text" name="i_1" class="form-control" id="i_1" placeholder="" value=""/>
                            </div>
                            <div class="col-md-12 form-group in-single">
                                <label for="i_2">80D - Health Insurance, expense on health checkups, etc.</label>
                                <input type="text" name="i_2" class="form-control" id="i_2" placeholder="" value=""/>
                            </div>
                            <div class="col-md-12 form-group in-single">
                                <label for="i_3">80E</label>
                                <input type="text" name="i_3" class="form-control" id="i_3" placeholder="" value=""/>
                            </div>
                            <div class="col-md-12 form-group in-single">
                                <label for="i_4">80G - Donations as charity, etc.</label>
                                <input type="text" name="i_4" class="form-control" id="i_4" placeholder="" value=""/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-3">

        </div>
    </div>
</div>

<?= $this->endSection("content") ?>