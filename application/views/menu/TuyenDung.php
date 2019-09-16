<?php
$dataTuyenDung = (object) $this->TuyenDung_model->listall();
?>

<div class="tuyendungcontent container-fluid">



    <div class="container tuyendung">
        <h3>Tuyển dụng</h3>
        <div class="gird_standard ">
            <dl>
                <table id="table_id">
                    <thead>
                        <tr>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dataTuyenDung as $key => $value) {
                            ?>
                            <tr>
                                <td>
                                    <dd class="brief ">
                                        <span class="logoJobs">
                                            <table width="100%" height="100%" cellspacing="0" cellpadding="0" style="table-layout: fixed">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#">
                                                                <img src="<?php echo $value['tuyendung_file'] == '' ? '../assets/dist/images/tuyen_dung.png' : '../assets/uploads/files/tuyendung/' . $value['tuyendung_file'] ?>" alt="Công Ty Cổ Phần Milli" title="Công Ty Cổ Phần Milli" class="lazy-new" style="display: inline;">
                                                            </a> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </span>
                                        <span class="jobtitle">
                                            <h3 class="job"><a target="_blank" href="tuyendung?id=<?php echo  $value['id'] ?> "> <?php echo  $value['title'] ?> </a> <em class="set_jobnew">(Mới)</em></h3>
                                            <p class="namecom"><a href="#"> Vị trí tuyển dụng : <?php echo  $value['vitrituyendung'] ?> </a></p>
                                            <p class="location"><i class="fa fa-map-marker fa-fw"></i> Số lượng : <?php echo  $value['soluong'] ?></p>
                                            <p class="salary lred"><i class="fa fa-dollar fa-fw"></i>Lương: <?php echo  $value['luong'] ?></p>
                                        </span>
                                        <div class="dateposted">Ngày tuyển dụng: <?php echo  date("d/m/Y", strtotime($value['createdtime']));  ?> </div>
                                    </dd>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>



            </dl>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>
<style>
    .gird_standard {
        width: 100%;
        margin-bottom: 0;
    }

    dl {
        margin-top: 0;
        margin-bottom: 20px;
    }

    .gird_standard dl dd {
        position: relative;
        border-left: 1px solid #D0D3D4;
        border-right: 1px solid #D0D3D4;
        padding: 7px 0;
        float: left;
        width: 757px;
    }

    .gird_standard dl span,
    #submenu .submenu_wrapper ul,
    .frm_adsearch label,
    .frm_adsearch span,
    .frm_adsearch select,
    .box_form .bor_center .form_containter ul,
    .title_frm,
    .cmdbig_horizontal ul li,
    ul.NavigationCommon,
    ul.NavigationCommon li,
    .GroupSearchJob .groupJob,
    .groupJob ul li,
    .top_filter select,
    .top_filter span.btn_submit,
    .gotopage label,
    .gotopage span,
    .gotopage input,
    .gotopage span.btn_submit,
    ul.block_info,
    ul.block_info li,
    ul.block_info li label,
    ul.block_info li div,
    ul.standard label,
    ul.standard select,
    ul.standard input,
    #NotesResume span,
    .list_resume_alert span.btn_submit,
    .Useful_Ser .UseList strong,
    .sort label,
    .sort select,
    .s_savingmoney,
    .s_branding,
    .permission .hr_divchk li input,
    .buyService .top p,
    .buyService .top span,
    .address ul li span,
    #ViewProfile,
    .jobcreated ul,
    .jobcreated label,
    .datePosted,
    .kv_porlet ul.infoacc div,
    .sitemap .col,
    div.row input,
    div.row select,
    .cb-createresume .ui-multiselect-checkboxes li,
    .cb-createresume .ic_remove,
    #spec-app .button-app,
    .ui-multiselect-checkboxes label span,
    .SetAlert .resume_date,
    .SetAlert .ResumeFreshness label,
    .ResumeFreshness label input,
    .relevance,
    .CategoriesListing,
    .manage-benefits .item label input {
        float: left;
    }

    .gird_standard dl dd {
        width: 100%;
        padding: 20px;
        margin-bottom: 15px;
        background-color: #eaedfb;
        border: 0;
    }

    .logoJobs {
        width: 160px;
        height: 105px;
        border-color: #d2d2d2;
    }

    .logoJobs table {
        margin-top: 0 !important;
    }

    .jobtitle {
        width: 580px;
        margin-left: 20px;
    }

    .jobtitle h3.job {
        font-size: 18px;
        padding-bottom: 5px;
    }

    .jobtitle p {
        font-size: 14px;
        color: #777;
        margin: 0;
        padding-bottom: 8px;
    }

    .jobtitle p {
        font-size: 14px;
        color: #777;
        margin: 0;
        padding-bottom: 8px;
    }

    .jobtitle p.salary.lred,
    .col-ListJobCate .jobtitle p.salary.lred i {
        color: #ff0000;
    }

    .select-job {
        position: absolute;
        right: 25px;
        bottom: 45px;
        z-index: 1;
    }

    .dateposted {
        position: absolute;
        right: 25px;
        bottom: 20px;
        color: #999;
    }

    .set_jobnew {
        font-size: 11px;
        color: #ff0000;
    }

    #table_id_wrapper .dataTables_length label {
        display: none;
    }

    table.dataTable thead th,
    table.dataTable thead td {
        padding: 10px 18px;
        border-bottom: 1px solid #fff;
    }

    table.dataTable.no-footer {
        border-bottom: 1px solid #fff;
    }

    .lazy-new {
        width: 100%;
        height: 110px;
    }
</style>