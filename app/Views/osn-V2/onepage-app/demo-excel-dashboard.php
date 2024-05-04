

<?= $this->extend(OSN_VIEW_V2.'/layout/page-layout-without-body') ?>


<?= $this->section("content") ?>

<div class="main container">
    <div class="row">
        <div class="main-heading">
            <h2 class="primary-color"><?=$title?></h2>
        </div>
        <div class="col-sm-9">
            <div class="main-description">
                <p>You can check our dashboard preview by upload your excel files of any type by selecting provided templates.</p>
                <form class="form-inline demo-excel-dashboard-form">
                    <div class="tc-sec">
                        <h5 class="">Templates</h5>
                        <div class="row tc-sec-parent">
                            <div class="col-md-6 form-group">
                                <label for="template_type">Template Type</label>
                                <select id="template_type" class="form-control" name="template_type">
                                    <option value="">---select---</option>
                                    <option value="kpi_template">KPI Template</option>
                                    <option value="financial_template" >Financial Template</option>
                                    <option value="pm_template">Project Management Template</option>
                                    <option value="sales_template">Sales Template</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group download-link-container">
                                <a style="display: none;" class="download_template_link" href="<?=base_url("assets/files/")?>">Download Template</a>
                            </div>
                        </div>
                        <div class="row tc-sec-parent">
                            <div style="display: none;" class="col-md-6 form-group upload_template">
                                <label for="upload_template_type">Upload Template with Data</label>
                                <input type="file" id="upload_template_type" data-accept="xlsx" name="upload_file">
                            </div>
                            <div class="col-md-6 form-group view-dashboard-link-container">
                                <a style="display: none;" class="view_excel_dashboard" href="javascript:void(0)">View Dashboard</a>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="view_excel_dashboard_container">
                    <h5 class="view_excel_dashboard_header"></h5>
                    <div class="view_excel_dashboard_kpi_template">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">

        </div>
    </div>
</div>

<?= $this->endSection("content") ?>