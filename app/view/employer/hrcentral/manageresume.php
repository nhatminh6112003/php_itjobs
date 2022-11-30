<link rel="stylesheet" href="<?= _WEB_ROOT . "/app/public/assets/employer/css/manageresume.css" ?>">

        <section class="employer-navbar-2-1">
            <div class="container">
                <div class="category-nav">
                    <p>Danh Mục</p>
                    <em class="mdi mdi-chevron-down"></em> </div>
                <div class="main-wrap">
                    <div class="left-wrap">
                        <ul class="list-menu">
                            <li> <a href="<?= _WEB_ROOT.'/employer/dashboard' ?>" title="Dashboard">Dashboard</a> </li>
                            <li> <a href="<?= _WEB_ROOT.'/employer/hrcentral/posting' ?>" title="Quản Lý Đăng Tuyển">Quản Lý Đăng Tuyển</a> </li>
                            <li class="active"> <a href="<?= _WEB_ROOT.'/employer/hrcentral/manageresume' ?>" class="active" title="Quản Lý  Ứng Viên">Quản Lý  Ứng Viên</a> </li>
                           
                            <li>
             
             <a href="<?= _WEB_ROOT.'/employer/hrcentral/accounts/edit_employer"'?>" title=" Tài Khoản"> Tài Khoản</a>
             </li>
                   
                        </ul>
                    </div>
                    <div class="right-wrap">
                        <ul class="list-menu">
                            <li> <a href="https://careerbuilder.vn/vi/tim-ung-vien.html"> <em class="material-icons">find_in_page</em> Tìm Hồ Sơ </a> </li>
                            <li> <a class="but-createjob" href="https://careerbuilder.vn/vi/employers/postjobs"> <em class="material-icons">assignment_ind</em> Đăng Tuyển Dụng </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="last-login-user">
            <div class="container">
                <p> Đăng nhập gần đây:
                    <time>22-11-2022 22:12:40</time>
                </p>
            </div>
        </div>
        <section class="manage-candidates-resume-applied cb-section bg-manage">
            <div class="container">
                <div class="box-candidates-resume-applied">
                    <div class="heading-manage">
                        <div class="left-heading">
                            <h1 class="title-manage">
                                Việc Làm Đang Đăng
                            </h1>
                           
                        </div>
                        <div class="right-heading">
                            <a class="support" target="_blank" href="https://careerbuilder.vn/vi/employers/faq">Hướng dẫn</a>
                        </div>
                    </div>
                    <div class="main-form-posting">
                        <form name="frmSearchResume">
                            <div class="form-wrap">
                                <div class="form-group form-text">
                                    <label>Từ khóa</label>
                                    <input type="text" id="strKeyword" value="" maxlength="200" placeholder="Nhập từ khóa" />
                                </div>
                                <div class="form-group form-select">
                                    <label>Tìm theo</label>
                                    <select id="intKeywordType">
                    <option value="0">Tên hồ sơ</option>
                    <option value="1" >Tên ứng viên</option>
                </select>
                                </div>
                                <div class="form-group form-select">
                                    <label>Trạng thái tìm việc</label>
                                    <select name="urgentjob" id="inturgentjob">
                    <option value="0">Tất cả</option>
                    <option value="1" >Ứng viên tìm việc khẩn cấp</option>
                </select>
                                </div>
                                <div class="form-group form-date start-date">
                                    <label>Từ</label>
                                    <input type="text" name="" id="strFromDate" value="" class="dates_cus_select" placeholder="Chọn" autocomplete="off" readonly>
                                    <div class="icon"><em class="material-icons">event</em></div>
                                </div>
                                <div class="form-group form-date end-date">
                                    <label>Đến</label>
                                    <input type="text" name="" id="strToDate" value="" class="dates_cus_select" placeholder="Chọn" autocomplete="off" readonly>
                                    <div class="icon"><em class="material-icons">event</em></div>
                                </div>
                                <div class="form-group form-submit form-submit-less">
                                    <button class="btn-submit btn-gradient" type="button" onclick="searchResumeApply()"><em class="material-icons">find_in_page</em>Tìm</button>
                                </div>
                                <div class="form-group form-filter-advanced">
                                    <a class="btn-filter-advanced" href="javascript:void(0);"><em class="material-icons">zoom_in</em> Lọc nâng cao</a>
                                </div>
                            </div>
                            <div class="form-wrap-advanced">
                                <div class="form-wrap">
                                    <div class="form-group form-select">
                                        <label>Trạng thái</label>
                                        <select id="intStatus">
                        <option value="7">Tất cả</option>
                        <option value="8" >Chưa Xem </option>
                                                    <option value="0" >Chưa quyết định</option>
                                                    <option value="1" >Không phù hợp</option>
                                                    <option value="2" >Từ chối</option>
                                                    <option value="3" >Kiểm tra</option>
                                                    <option value="4" >Phỏng vấn</option>
                                                    <option value="5" >Đề nghị tuyển dụng</option>
                                                    <option value="6" >Nhận việc</option>
                                            </select>
                                    </div>
                                    <div class="form-group form-select">
                                        <label>Phân loại tự động</label>
                                        <select id="intSuitable">
                        <option value="2" selected="selected">Tất cả</option>
                        <option value="1" >Phù hợp</option>
                        <option value="0" >Tiềm Năng</option>
                    </select>
                                    </div>
                                    <div class="form-group form-select">
                                        <label>Xếp loại</label>
                                        <select id="intType">
                        <option value="6">Tất cả</option>
                                                    <option value="0" >Chưa xếp loại</option>
                                                    <option value="1" >Kém</option>
                                                    <option value="2" >Trung bình</option>
                                                    <option value="3" >Khá</option>
                                                    <option value="4" >Tốt</option>
                                                    <option value="5" >Rất Tốt</option>
                                            </select>
                                    </div>
                                    <div class="form-group form-select">
                                        <label>Ghi chú</label>
                                        <select id="intNote">
                        <option value="2" selected="selected">Tất cả</option>
                        <option value="1" >Có ghi chú</option>
                        <option value="0" >Không có ghi chú</option>
                    </select>
                                    </div>
                                    <div class="form-group form-reset">
                                        <button class="btn-reset" type="button" onclick="resetFormSearchResume()"><em class="material-icons">loop</em>Xóa</button>
                                    </div>
                                    <div class="form-group form-submit">
                                        <button class="btn-submit btn-gradient" type="button" onclick="searchResumeApply()"><em class="material-icons">find_in_page</em>Tìm</button>
                                    </div>
                                    <div class="form-group form-filter-less">
                                        <a class="btn-filter-less" href="javascript:void(0);;">
                        <em class="material-icons">highlight_off</em>
                        Thu gọn
                    </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                 
                    <div class="main-tabslet" data-toggle="tabslet">
                        <ul class="tabslet-tab">
                            <li class="active">
                                <a href="">
                                Hồ Sơ Ứng Tuyển
                                (0)
                            </a>
                            </li>
                            <li>
                                <a href="">
                                Hồ Sơ Đã Lưu
                                (2)
                            </a>
                            </li>
                            <li>
                                <a href="">
                                Hồ Sơ Đã Xóa
                                (0)
                            </a>
                            </li>
                        </ul>
                        <div class="tabslet-content active" id="tab-1">
                            <div class="main-resume-applied">
                                <div class="heading-resume-applied">
                                    <div class="left-heading">
                                        <div class="form-group form-select form-filter">
                                           
                                        </div>
                                        <div class="form-group form-select form-filter">
                                            <select id="select-group">
                    <option data-group="1"
                        value="https://careerbuilder.vn/vi/employers/hrcentral/manageresume/1/35A4E900/*/0/0/*/*/7/2/6/2/0/desc/lop7cttnq.1667207375/1"
                        selected>
                        Việc Làm Đang Đăng (0)
                    </option>
                    <option data-group="3"
                        value="https://careerbuilder.vn/vi/employers/hrcentral/manageresume/3/35A4E900/*/0/0/*/*/7/2/6/2/0/desc/lop7cttnq.1667207375/1"
                        >
                        Việc Làm Tạm Dừng Đăng (0)
                    </option>
                    <option data-group="2"
                        value="https://careerbuilder.vn/vi/employers/hrcentral/manageresume/2/35A4E900/*/0/0/*/*/7/2/6/2/0/desc/lop7cttnq.1667207375/1"
                        >
                        Việc Làm Hết Hạn (0)
                    </option>
                </select>
                                        </div>
                                        <div class="form-group form-select form-filter">
                                          
                                        </div>
                                        <ul class="list-check">
                                            <li class="view-posting-detail "><a href="javascript:void(0);">Chi tiết</a></li>
                                            <li class="view-posting-summary active"><a href="javascript:void(0);">Xem tóm tắt</a></li>



                                            <li>
                                                <a href="javascript:void(0);" onclick="editResume('listresumes[]')">
                            Xem và Đánh giá hồ sơ
                        </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="heading-resume-applied">
                                    <div class="left-heading">
                                        <div class="hor-var"><img src="./img/employer/2-arrow.png" alt="2-arrow"></div>
                                        <p class="name">Chọn và xử lý:</p>
                                        <ul class="list-check">
                                            <li class="view-flip">
                                                <a href="javascript:void(0);" onclick="windowFlipViewHR('aW50Rm9sZGVySUQ9MCZpbnRFbXBJRD0yODc2MTYmaW50VXNlcklEPWxvcDdjdHRucS4xNjY3MjA3Mzc1JmludEdldFN0YXR1cz0xJnN0cktleXdvcmQ9JmludEtleXdvcmRUeXBlPTAmanNrX3R5cGU9MCZzdHJGcm9tRGF0ZT0mc3RyVG9EYXRlPSZpbnRTdGF0dXM9NyZpbnRSZXN1bWVWaWV3PTImaW50U3VpdGFibGU9MiZpbnRUeXBlPTYmaW50Tm90ZT0yJmludEtpbmQ9MSZpbnRTb3J0VHlwZT0wJnN0clNvcnQ9ZGVzYyZpbnRQYWdlPTEmaW50TGltaXQ9MjAmc2NvcmU9LTImaW50Rm9sZGVyVHlwZT0x', 1, 1)">
                        Flipview All
                    </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" onclick="deleteFolderResume('listresumes[]')">
                            Xóa hồ sơ
                        </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" onclick="showFoldersSelected('', 'listresumes[]');">
                        Lưu thư mục
                    </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="right-heading">
                                        <div class="to-display">
                                            <p class="name-display">

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="boding-resume-applied">
                                    <div class="table table-resume-applied">
                                        <table>
                                            <thead>
                                                <tr>

                                                    <th width="1%">
                                                        <div class="checkbox"><input type="checkbox" id="check-all"></div>
                                                    </th>
                                                    <th width="27%">Chọn tất cả</th>
                                                    <th width="10%">Ngày nộp</th>
                                                    <th width="10%%">Trạng thái</th>
                                                    <th width="10%">Xếp loại</th>
                                                    <th width="10%">Kinh nghiệm</th>
                                                    <th width="20%">Mức lương</th>
                                                    <th width="12%">Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <input name="list_resumes" type="hidden" value="">
                                                <input name="folder_id" type="hidden" value="">
                                         
                                            <?php foreach ($job_post_activity as $item): ?>
                                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input type="checkbox" name="listresumes[]" value="36175D2C_35F1D06E">
                                            <input type="hidden" name="fresume_list_id[]" id="fresume_list_id_36175D2C_35F1D06E" value="3743679A">
                                            <input type="hidden" name="folder_list_id[]" id="folder_list_id_36175D2C_35F1D06E" value="35BFE874">
                                            <input type="hidden" name="jobseeker_list_id[]" id="jobseeker_list_id_36175D2C_35F1D06E" value="35F1D06E">
                                        </div>
                                    </td>
                                   
                                    <td>
                                        <div class="title">
                                            <a class="name" target="_blank" href="https://careerbuilder.vn/vi/employers/hrcentral/manage_resumes/resumes_detail/4/35BFE874/35BFE874/3743679A/3743679A/36175D2C/35F1D06E/lop7cttnq.1667207375/36175D2C/35F1D06E">
                                                <?= $item["lastname"]." ".$item["firstname"] ?>
                                            </a>
                                            <a class="jobs-new-tab" href="javascript:void(0);">
                                            <img src="https://static.careerbuilder.vn/images/icons/resume_type_0.gif" title="Hồ sơ Theo mẫu" alt="Hồ sơ Theo mẫu">
                                            </a>
                                        </div>
                                        <!-- <div class="detail">
                                            <p><strong>Chức danh:</strong> IT Director</p>
                                            <p><strong>Địa điểm:</strong>
                                                Hồ Chí Minh                                                                    
                                            </p>
                                            <p><strong>Thư mục</strong>
                                                <a href="https://careerbuilder.vn/vi/employers/hrcentral/manageresume/4/35BFE874/*/0/*/*/7/2/6/2/1/desc/lop7cttnq.1667207375/1" title="Xem thư mục lưu trữ">ứng viên</a>                            
                                            </p>
                                            <p><strong>Việc làm gần nhất:</strong> IT Manager</p>
                                            <p><strong>Công ty gần nhất:</strong> IFB Holdings</p>
                                        </div> -->
                                    </td>
                                    <td>
                                        <time><?= formatDate($item["apply_date"])?></time>
                                    </td>
                                  
                                    <td>
                                        <p>
                                           
                                            <?php foreach ($data_resume_status as $value) { 
                                              
                                       if($item["resume_status_id"]==$value["id"]) {
                                            echo $value["resume_name_status"];
                                              }
                                          }?>
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                        <?php foreach ($data_resume_type as $value) { 
                                              
                                              if($item["resume_type_id"]==$value["id"]) {
                                                   echo $value["resume_type"];
                                                     }
                                                 }?>

                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                        <?= $item["year_of_experience"]!=0 ? $item["year_of_experience"].' Năm '  : "Chưa có kinh nghiệm"?>  
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                        <?= $item["min_salary"]."-".$item["max_salary"] ." VND"; ?>
                                        </p>
                                    </td>
                                    <td>
                                    <ul style="display:flex;gap:15px;align-items:center;justify-content: center;"class="">
                <li> <a href="javascript:;" onclick="showFoldersSelected('369242CE', 'listresumes[]');" title="Lưu thư mục"> <em class="material-icons">folder_shared </em> </a> </li>
    <li><a href="<?= _WEB_ROOT.'/employer/hrcentral/manageresume/resumes_detail/'.$item["user_account_id"].'/'.$item["resume_id"].'/?file_name='.$item["file_location"] ?>" title="Chi tiết"><em class="material-icons">visibility </em></a></li>
                <li> <a href="javascript:;" onclick="showClassifiedResume('369242CE', '35BFE874', '','','');return false;" title="Cập nhật trạng thái"> <em class="material-icons">border_color</em> </a> </li>
                        <li> <a href="javascript:;" onclick="showResumeForInvite('35BFE874','369242CE');return false;" title="Giới thiệu hồ sơ "> <i class="fa fa-forward" aria-hidden="true"></i> </a> </li>
                  
                        <!-- <li> <a href="javascript:;" onclick="downloadResume('369242CE', '35A4E923')" title="Xuất file PDF"> <em class="material-icons">picture_as_pdf </em> </a> </li>
         -->
              </ul>
                                    </td>
                                    </tr>
                                          <?php  endforeach;?>
                                                <!-- <tr>
                                                    <td colspan="9">
                                                        <p align="center"><strong> Hiện tại không có hồ sơ nào trong thư mục này!</strong></p>
                                                    </td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="main-pagination">

                                    </div>
                                </div>
                            </div>

                            <!-- <script>
                                var str_option_1 = '';
                                var str_option_2 = '';
                                var str_option_3 = '';
                                $(document).ready(function() {
                                    $("#select-group").on('change', function(event) {
                                        event.preventDefault();
                                        var id_group = $('option:selected', this).data('group');
                                        var modeview_resume = $.cookie('modeview_resume');
                                        if (modeview_resume == 0 || modeview_resume == undefined) {
                                            var link = $(this).val();
                                            window.location.href = link;
                                            return false;
                                        } else {
                                            $("#select-folder option").remove();
                                            var str_option_ = str_option_1;
                                            if (id_group == 2)
                                                str_option_ = str_option_2;
                                            else if (id_group == 3)
                                                str_option_ = str_option_3;

                                            $("#select-folder").html(str_option_)
                                            var link_folder = $('#select-folder option:first').val();
                                            window.location.href = link_folder;
                                            return false;
                                        }


                                    });
                                });
                            </script> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="flip-view-modal" style="display: none" id="flip-view-hr">
            <div class="box-flip-view">
                <div class="flip-view-modal-left">
                    <a href="javascript:void(0);" class="flip_prev" id="flip_prev"></a>
                    <a href="javascript:void(0);" class="flip_next" id="flip_next"></a>
                    <div class="modal-head" id="titleBar"></div>
                    <div class="modal-body" id="contentResumeFlip"></div>
                </div>
                <div class="flip-view-modal-right">
                    <div class="box-info-top">
                        <div id="boxStatus"></div>
                        <div id="actionPanel"></div>
                    </div>
                </div>
            </div>
        </div>