@extends('layouts.app')

@section('title', 'Welcome, Student')

@section('page-title', 'Welcome, Student')

@section('content')
<div class="container-fluid">
    <!-- Search and Filter Section -->
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="form-group">
                <label for="subjects" class="form-label fw-bold">Subjects</label>
                <input type="text" class="form-control" id="subjects" placeholder="Enter subject...">
                    </div>
                </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="course" class="form-label fw-bold">Course</label>
                <select class="form-select" id="course">
                    <option selected>-select course-</option>
                    
                    <!-- Bachelor of Arts Programs -->
                    <optgroup label="Bachelor of Arts (AB)">
                        <option value="ab-c">AB-C - BACHELOR OF ARTS - MAJOR IN COMMUNICATION</option>
                        <option value="ab-ca">AB-CA - BACHELOR OF ARTS - MAJOR IN COMMUNICATION ARTS</option>
                        <option value="ab-econ">AB-ECON - BACHELOR OF ARTS - MAJOR IN ECONOMICS</option>
                        <option value="ab-els">AB-ELS - BACHELOR OF ARTS IN ENGLISH LANGUAGE STUDIES</option>
                        <option value="ab-englang">AB-ENGLANG - BACHELOR OF ARTS - MAJOR IN ENGLISH LANGUAGE</option>
                        <option value="ab-fillang">AB-FILLANG - BACHELOR OF ARTS - FILIPINO LANGUAGE</option>
                        <option value="ab-gc">AB-GC - BACHELOR OF ARTS - MAJOR IN GUIDANCE AND COUNSELING</option>
                        <option value="ab-history">AB-HISTORY - BACHELOR OF ARTS IN HISTORY</option>
                        <option value="ab-mc">AB-MC - BACHELOR OF ARTS - MASS COMMUNICATION</option>
                        <option value="ab-ps">AB-PS - BACHELOR OF ARTS - MAJOR IN POLITICAL SCIENCE</option>
                    </optgroup>
                    
                    <!-- Academic Strands -->
                    <optgroup label="Academic Strands">
                        <option value="acad-abm-abp">ACAD-ABM-ABP - ACADEMIC ABM-ABP MORELOS - ACCOUNTANCY BUSINESS AND MANAGEMENT STRAND</option>
                        <option value="acad-abm-bpp">ACAD-ABM-BPP - ACADEMIC ABM-BP PUEBLOS - ACCOUNTANCY BUSINESS AND MANAGEMENT STRAND</option>
                        <option value="acad-gas-abp">ACAD-GAS-ABP - ACADEMIC GAS-ABP MORELOS - GENERAL ACADEMIC STRAND</option>
                        <option value="acad-gas-bpp">ACAD-GAS-BPP - ACADEMIC GAS-BP PUEBLOS - GENERAL ACADEMIC STRAND</option>
                        <option value="acad-humss-abp">ACAD-HUMSS-ABP - ACADEMIC HUMSS-ABP MORELOS - HUMANITIES AND SOCIAL SCIENCES STRAND</option>
                        <option value="acad-humss-bpp">ACAD-HUMSS-BPP - ACADEMIC HUMSS-BP PUEBLOS - HUMANITIES AND SOCIAL SCIENCES STRAND</option>
                        <option value="acad-stem-abp">ACAD-STEM-ABP - ACADEMIC STEM-ABP MORELOS - SCIENCE, TECHNOLOGY, ENGINEERING, AND MATHEMATICS STRAND</option>
                        <option value="acad-stem-bpp">ACAD-STEM-BPP - ACADEMIC STEM-BP PUEBLOS - SCIENCE, TECHNOLOGY, ENGINEERING, AND MATHEMATICS STRAND</option>
                    </optgroup>
                    
                    <!-- Business and Accountancy -->
                    <optgroup label="Business and Accountancy">
                        <option value="bsa">BSA - Bachelor of Science in Accountancy</option>
                        <option value="bsba-fm">BSBA-FM - Bachelor of Science in Business Administration - Financial Management</option>
                        <option value="bsba-hrmgt">BSBA-HRMGT - Bachelor of Science in Business Administration - Human Resource Management</option>
                        <option value="bsba-mktg">BSBA-MKTG - Bachelor of Science in Business Administration - Marketing Management</option>
                        <option value="bsba-om">BSBA-OM - Bachelor of Science in Business Administration - Operations Management</option>
                        <option value="bsba-entrep">BSBA-ENTREP - Bachelor of Science in Business Administration - Entrepreneurship</option>
                        <option value="bsba-banking">BSBA-BANKING - Bachelor of Science in Business Administration - Banking and Finance</option>
                        <option value="bsba-ib">BSBA-IB - Bachelor of Science in Business Administration - International Business</option>
                    </optgroup>
                    
                    <!-- Engineering -->
                    <optgroup label="Engineering">
                        <option value="bsce">BSCE - Bachelor of Science in Civil Engineering</option>
                        <option value="bsee">BSEE - Bachelor of Science in Electrical Engineering</option>
                        <option value="bsme">BSME - Bachelor of Science in Mechanical Engineering</option>
                        <option value="bsche">BSCHE - Bachelor of Science in Chemical Engineering</option>
                        <option value="bsie">BSIE - Bachelor of Science in Industrial Engineering</option>
                        <option value="bsae">BSAE - Bachelor of Science in Aeronautical Engineering</option>
                        <option value="bsge">BSGE - Bachelor of Science in Geodetic Engineering</option>
                        <option value="bsmse">BSMSE - Bachelor of Science in Mining Engineering</option>
                        <option value="bsmete">BSMETE - Bachelor of Science in Metallurgical Engineering</option>
                        <option value="bspe">BSPE - Bachelor of Science in Petroleum Engineering</option>
                    </optgroup>
                    
                    <!-- Information Technology and Computer Science -->
                    <optgroup label="Information Technology and Computer Science">
                        <option value="bsit">BSIT - Bachelor of Science in Information Technology</option>
                        <option value="bscs">BSCS - Bachelor of Science in Computer Science</option>
                        <option value="bsis">BSIS - Bachelor of Science in Information Systems</option>
                        <option value="bsemc">BSEMC - Bachelor of Science in Entertainment and Multimedia Computing</option>
                        <option value="bsit-ai">BSIT-AI - Bachelor of Science in Information Technology - Artificial Intelligence</option>
                        <option value="bsit-cyber">BSIT-CYBER - Bachelor of Science in Information Technology - Cybersecurity</option>
                        <option value="bsit-web">BSIT-WEB - Bachelor of Science in Information Technology - Web Development</option>
                        <option value="bsit-mobile">BSIT-MOBILE - Bachelor of Science in Information Technology - Mobile Development</option>
                    </optgroup>
                    
                    <!-- Hospitality and Tourism -->
                    <optgroup label="Hospitality and Tourism">
                        <option value="bshm">BSHM - Bachelor of Science in Hotel Management</option>
                        <option value="bstm">BSTM - Bachelor of Science in Tourism Management</option>
                        <option value="bshr">BSHR - Bachelor of Science in Hotel and Restaurant Management</option>
                        <option value="bsht">BSHT - Bachelor of Science in Hospitality and Tourism Management</option>
                        <option value="bshrm">BSHRM - Bachelor of Science in Hotel and Restaurant Management</option>
                    </optgroup>
                    
                    <!-- Education -->
                    <optgroup label="Education">
                        <option value="bse">BSE - Bachelor of Secondary Education</option>
                        <option value="bse-english">BSE-ENGLISH - Bachelor of Secondary Education - English</option>
                        <option value="bse-math">BSE-MATH - Bachelor of Secondary Education - Mathematics</option>
                        <option value="bse-science">BSE-SCIENCE - Bachelor of Secondary Education - Science</option>
                        <option value="bse-social">BSE-SOCIAL - Bachelor of Secondary Education - Social Studies</option>
                        <option value="bse-filipino">BSE-FILIPINO - Bachelor of Secondary Education - Filipino</option>
                        <option value="bse-pe">BSE-PE - Bachelor of Secondary Education - Physical Education</option>
                        <option value="bse-values">BSE-VALUES - Bachelor of Secondary Education - Values Education</option>
                        <option value="bse-esp">BSE-ESP - Bachelor of Secondary Education - Edukasyon sa Pagpapakatao</option>
                    </optgroup>
                    
                    <!-- Elementary Education -->
                    <optgroup label="Elementary Education">
                        <option value="bse-elem">BSE-ELEM - Bachelor of Elementary Education</option>
                        <option value="bse-elem-gen">BSE-ELEM-GEN - Bachelor of Elementary Education - General Education</option>
                        <option value="bse-elem-early">BSE-ELEM-EARLY - Bachelor of Elementary Education - Early Childhood Education</option>
                        <option value="bse-elem-special">BSE-ELEM-SPECIAL - Bachelor of Elementary Education - Special Education</option>
                    </optgroup>
                    
                    <!-- Physical Education and Sports -->
                    <optgroup label="Physical Education and Sports">
                        <option value="bped">BPED - Bachelor of Physical Education</option>
                        <option value="bped-major">BPED-MAJOR - Bachelor of Physical Education - Major in Physical Education</option>
                        <option value="bped-sports">BPED-SPORTS - Bachelor of Physical Education - Major in Sports and Wellness Management</option>
                        <option value="bped-dance">BPED-DANCE - Bachelor of Physical Education - Major in Dance</option>
                    </optgroup>
                    
                    <!-- Early Childhood Education -->
                    <optgroup label="Early Childhood Education">
                        <option value="beced">BECED - Bachelor of Early Childhood Education</option>
                        <option value="beced-preschool">BECED-PRESCHOOL - Bachelor of Early Childhood Education - Preschool Education</option>
                        <option value="beced-kindergarten">BECED-KINDERGARTEN - Bachelor of Early Childhood Education - Kindergarten Education</option>
                    </optgroup>
                    
                    <!-- Arts and Design -->
                    <optgroup label="Arts and Design">
                        <option value="bsad">BSAD - Bachelor of Science in Architecture and Design</option>
                        <option value="bsid">BSID - Bachelor of Science in Interior Design</option>
                        <option value="bsgd">BSGD - Bachelor of Science in Graphic Design</option>
                        <option value="bsmd">BSMD - Bachelor of Science in Multimedia Design</option>
                        <option value="bsfd">BSFD - Bachelor of Science in Fashion Design</option>
                        <option value="bsid-arch">BSID-ARCH - Bachelor of Science in Interior Design - Architecture</option>
                    </optgroup>
                    
                    <!-- Health Sciences -->
                    <optgroup label="Health Sciences">
                        <option value="bsn">BSN - Bachelor of Science in Nursing</option>
                        <option value="bsmls">BSMLS - Bachelor of Science in Medical Laboratory Science</option>
                        <option value="bspharma">BSPHARMA - Bachelor of Science in Pharmacy</option>
                        <option value="bspt">BSPT - Bachelor of Science in Physical Therapy</option>
                        <option value="bsot">BSOT - Bachelor of Science in Occupational Therapy</option>
                        <option value="bsrt">BSRT - Bachelor of Science in Radiologic Technology</option>
                        <option value="bsmt">BSMT - Bachelor of Science in Medical Technology</option>
                        <option value="bsph">BSPH - Bachelor of Science in Public Health</option>
                    </optgroup>
                    
                    <!-- Social Sciences -->
                    <optgroup label="Social Sciences">
                        <option value="bspsych">BSPSYCH - Bachelor of Science in Psychology</option>
                        <option value="bssw">BSSW - Bachelor of Science in Social Work</option>
                        <option value="bsdevcom">BSDEVCOM - Bachelor of Science in Development Communication</option>
                        <option value="bscom">BSCOM - Bachelor of Science in Communication</option>
                        <option value="bsjourn">BSJOURN - Bachelor of Science in Journalism</option>
                        <option value="bsbroadcast">BSBROADCAST - Bachelor of Science in Broadcasting</option>
                        <option value="bsadvertising">BSADVERTISING - Bachelor of Science in Advertising</option>
                        <option value="bspr">BSPR - Bachelor of Science in Public Relations</option>
                    </optgroup>
                    
                    <!-- Natural Sciences -->
                    <optgroup label="Natural Sciences">
                        <option value="bsbio">BSBIO - Bachelor of Science in Biology</option>
                        <option value="bschem">BSCHEM - Bachelor of Science in Chemistry</option>
                        <option value="bsphysics">BSPHYSICS - Bachelor of Science in Physics</option>
                        <option value="bsmath">BSMATH - Bachelor of Science in Mathematics</option>
                        <option value="bsstat">BSSTAT - Bachelor of Science in Statistics</option>
                        <option value="bsenvsci">BSENVSCI - Bachelor of Science in Environmental Science</option>
                        <option value="bsmarine">BSMARINE - Bachelor of Science in Marine Biology</option>
                        <option value="bsmicro">BSMICRO - Bachelor of Science in Microbiology</option>
                    </optgroup>
                    
                    <!-- Agriculture and Forestry -->
                    <optgroup label="Agriculture and Forestry">
                        <option value="bsa">BSA-AGRI - Bachelor of Science in Agriculture</option>
                        <option value="bsa-animal">BSA-ANIMAL - Bachelor of Science in Agriculture - Animal Science</option>
                        <option value="bsa-crop">BSA-CROP - Bachelor of Science in Agriculture - Crop Science</option>
                        <option value="bsa-soil">BSA-SOIL - Bachelor of Science in Agriculture - Soil Science</option>
                        <option value="bsa-horticulture">BSA-HORTICULTURE - Bachelor of Science in Agriculture - Horticulture</option>
                        <option value="bsf">BSF - Bachelor of Science in Forestry</option>
                        <option value="bsf-wildlife">BSF-WILDLIFE - Bachelor of Science in Forestry - Wildlife Management</option>
                        <option value="bsf-watershed">BSF-WATERSHED - Bachelor of Science in Forestry - Watershed Management</option>
                    </optgroup>
                    
                    <!-- Maritime -->
                    <optgroup label="Maritime">
                        <option value="bsmt">BSMT - Bachelor of Science in Marine Transportation</option>
                        <option value="bsme-marine">BSME-MARINE - Bachelor of Science in Marine Engineering</option>
                        <option value="bsmt-navigation">BSMT-NAVIGATION - Bachelor of Science in Marine Transportation - Navigation</option>
                        <option value="bsmt-cargo">BSMT-CARGO - Bachelor of Science in Marine Transportation - Cargo Operations</option>
                    </optgroup>
                    
                    <!-- Aviation -->
                    <optgroup label="Aviation">
                        <option value="bsat">BSAT - Bachelor of Science in Aviation Technology</option>
                        <option value="bsat-flight">BSAT-FLIGHT - Bachelor of Science in Aviation Technology - Flight Operations</option>
                        <option value="bsat-maintenance">BSAT-MAINTENANCE - Bachelor of Science in Aviation Technology - Aircraft Maintenance</option>
                        <option value="bsat-airport">BSAT-AIRPORT - Bachelor of Science in Aviation Technology - Airport Management</option>
                    </optgroup>
                    
                    <!-- Criminology -->
                    <optgroup label="Criminology">
                        <option value="bscrim">BSCRIM - Bachelor of Science in Criminology</option>
                        <option value="bscrim-forensic">BSCRIM-FORENSIC - Bachelor of Science in Criminology - Forensic Science</option>
                        <option value="bscrim-criminal">BSCRIM-CRIMINAL - Bachelor of Science in Criminology - Criminal Justice</option>
                        <option value="bscrim-correction">BSCRIM-CORRECTION - Bachelor of Science in Criminology - Correctional Administration</option>
                    </optgroup>
                    
                    <!-- Law and Legal Studies -->
                    <optgroup label="Law and Legal Studies">
                        <option value="bsls">BSLS - Bachelor of Science in Legal Studies</option>
                        <option value="bsls-paralegal">BSLS-PARALEGAL - Bachelor of Science in Legal Studies - Paralegal Studies</option>
                        <option value="bsls-criminal">BSLS-CRIMINAL - Bachelor of Science in Legal Studies - Criminal Justice</option>
                        <option value="bsls-business">BSLS-BUSINESS - Bachelor of Science in Legal Studies - Business Law</option>
                    </optgroup>
                    
                    <!-- Library and Information Science -->
                    <optgroup label="Library and Information Science">
                        <option value="bslis">BSLIS - Bachelor of Science in Library and Information Science</option>
                        <option value="bslis-digital">BSLIS-DIGITAL - Bachelor of Science in Library and Information Science - Digital Libraries</option>
                        <option value="bslis-archives">BSLIS-ARCHIVES - Bachelor of Science in Library and Information Science - Archives Management</option>
                    </optgroup>
                    
                    <!-- Vocational/Technical Courses -->
                    <optgroup label="Vocational/Technical Courses">
                        <option value="at">AT - AUTOMOTIVE TECHNOLOGY</option>
                        <option value="atc1">ATC1 - AUTOMOTIVE TECHNOLOGY-CLUSTERED (ONE YEAR)</option>
                        <option value="dt">DT - DRAFTING TECHNOLOGY</option>
                        <option value="dt1">DT1 - DRAFTING TECHNOLOGY (ONE YEAR)</option>
                        <option value="etc">ETC - ELECTRONIC TECHNICIAN COURSE</option>
                        <option value="mst">MST - MACHINE SHOP TECHNOLOGY</option>
                    </optgroup>
                    
                    <!-- National Certifications (NC) -->
                    <optgroup label="National Certifications (NC)">
                        <option value="ces1">CES1 - CONSUMER ELECTRONICS SERVICING NC II</option>
                        <option value="chs">CHS - COMPUTER HARDWARE SERVICING NC II</option>
                        <option value="mnc1">MNC1 - MACHINING NC II</option>
                        <option value="pco">PCO - PC OPERATIONS NC II</option>
                        <option value="prg">PRG - PROGRAMMING NC IV</option>
                        <option value="smaw">SMAW - SHIELDED METAL ARC WELDING NC II</option>
                    </optgroup>
                    
                    <!-- Master's Programs -->
                    <optgroup label="Master's Programs">
                        <option value="mba">MBA - MASTER IN BUSINESS ADMINISTRATION</option>
                        <option value="mba-bm">MBA-BM - MASTER IN BUSINESS ADMINISTRATION - (WITH SPECIALIZATION IN BUSINESS MANAGEMENT)</option>
                        <option value="mba-hr">MBA-HR - MASTER IN BUSINESS ADMINISTRATION - (WITH SPECIALIZATION IN HUMAN RESOURCE MANAGEMENT)</option>
                        <option value="mba-hrm">MBA-HRM - MASTER OF BUSINESS ADMINISTRATION - HUMAN RESOURCE MANAGEMENT</option>
                        <option value="mpa">MPA - MASTER IN PUBLIC ADMINISTRATION</option>
                        <option value="mspe">MSPE - MASTER OF SCIENCE IN PHYSICAL EDUCATION</option>
                        <option value="mstm">MSTM - MASTER OF SCIENCE IN TEACHING MATHEMATICS</option>
                        <option value="mate">MATE - MASTER OF ARTS IN TEACHING ENGLISH</option>
                        <option value="matf">MATF - MASTER OF ARTS IN TEACHING FILIPINO</option>
                        <option value="matgs">MATGS - MASTER OF ARTS IN TEACHING GENERAL SCIENCE</option>
                        <option value="matse">MATSE - MASTER OF ARTS IN TEACHING SPECIAL EDUCATION</option>
                        <option value="macsea">MACSEA - MASTER OF ARTS IN COMMUNITY STUDIES AND EXTENSION ADMINISTRATION</option>
                        <option value="maem">MAEM - MASTER OF ARTS IN EDUCATIONAL MANAGEMENT</option>
                        <option value="magc">MAGC - MASTER OF ARTS IN GUIDANCE AND COUNSELING</option>
                    </optgroup>
                    
                    <!-- Doctoral Programs -->
                    <optgroup label="Doctoral Programs">
                        <option value="dba">DBA - DOCTOR IN BUSINESS ADMINISTRATION</option>
                        <option value="dm">DM - DOCTOR OF MANAGEMENT IN ORGANIZATIONAL MANAGEMENT</option>
                        <option value="dm-om">DM-OM - DOCTOR OF MANAGEMENT - MAJOR IN ORGANIZATIONAL MANAGEMENT</option>
                        <option value="phd">PHD - DOCTOR OF PHILOSOPHY IN EDUCATION</option>
                    </optgroup>
                    
                    <!-- Other Programs -->
                    <optgroup label="Other Programs">
                        <option value="gs">GS - GRADE SCHOOL</option>
                        <option value="hs">HS - HIGH SCHOOL</option>
                        <option value="ps">PS - PRE-SCHOOL</option>
                        <option value="tedue">TEDUE - TEACHER EDUCATION UNIT EARNER'S COURSE (TEDUE)</option>
                    </optgroup>
                </select>
            </div>
        </div>
    </div>
    
    <!-- View Sections Button -->
    <div class="row mb-4">
        <div class="col-12">
            <button type="button" class="btn btn-danger" id="viewSections">
                <i class="fas fa-search me-2"></i>View Sections
            </button>
        </div>
    </div>

    <!-- Course Sections -->
    <div class="row">
        <div class="col-12">
            <!-- FIRST YEAR SECTION: A11 -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">FIRST YEAR</h5>
                    </div>
                <div class="card-body p-0">
                    <h6 class="px-3 pt-3 fw-bold text-success">SECTION : A11</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead class="table-success text-white">
                                <tr>
                                    <th>Subject Code</th>
                                    <th>Description</th>
                                    <th>Section Code</th>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                    <th>Units</th>
                                    <th>Room No.</th>
                                    <th>Schedule</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>GE 106</td>
                                    <td>Arts Appreciation</td>
                                    <td>BSA 1-A11</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                                </tr>
                                <tr class="table-light">
                                    <td>BC 110</td>
                                    <td>Basic Accounting I</td>
                                    <td>BSA 1-A11</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                                </tr>
                                <tr>
                                    <td>NSTP1-CWTS</td>
                                    <td>Civic Welfare Training Services 1</td>
                                    <td>BSA 1-A11</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>S 01:30PM-04:30PM</td>
                                </tr>
                                <tr class="table-light">
                                    <td>ACC 111</td>
                                    <td>Conceptual Framework and Accounting Standards</td>
                                    <td>BSA 1-A11</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                                </tr>
                                <tr>
                                    <td>ED 111</td>
                                    <td>Economic Development</td>
                                    <td>BSA 1-A11</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                                </tr>
                                <tr class="table-light">
                                    <td>IC-JEEP 110</td>
                                    <td>JEEP Start 1</td>
                                    <td>BSA 1-A11</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                                </tr>
                                <tr>
                                    <td>MS 111</td>
                                    <td>Management Science</td>
                                    <td>BSA 1-A11</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                                </tr>
                                <tr class="table-light">
                                    <td>GE 104</td>
                                    <td>Mathematics in the Modern World</td>
                                    <td>BSA 1-A11</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                                </tr>
                                <tr>
                                    <td>PATHFIT 1</td>
                                    <td>Movement Competency Training</td>
                                    <td>BSA 1-A11</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td></td>
                                    <td>TH 09:00AM-10:30AM</td>
                                </tr>
                                <tr class="table-light">
                                    <td>GE 105</td>
                                    <td>Purposive Communication</td>
                                    <td>BSA 1-A11</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                                </tr>
                                <tr>
                                    <td>THEO 110</td>
                                    <td>Religions, Religious Experiences and Spirituality</td>
                                    <td>BSA 1-A11</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                                </tr>
                                <tr class="table-warning fw-bold">
                                    <td colspan="3">TOTAL</td>
                                    <td>29</td>
                                    <td>3</td>
                                    <td>32</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
            </div>
        </div>
    </div>

            <!-- SECTION : A12 -->
            <div class="card mb-4">
                <div class="card-body p-0">
                    <h6 class="px-3 pt-3 fw-bold text-success">SECTION : A12</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead class="table-success text-white">
                                <tr>
                                    <th>Subject Code</th>
                                    <th>Description</th>
                                    <th>Section Code</th>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                    <th>Units</th>
                                    <th>Room No.</th>
                                    <th>Schedule</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>GE 106</td>
                                    <td>Arts Appreciation</td>
                                    <td>BSA 1-A12</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                                </tr>
                                <tr class="table-light">
                                    <td>BC 110</td>
                                    <td>Basic Accounting I</td>
                                    <td>BSA 1-A12</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                                </tr>
                                <tr>
                                    <td>NSTP1-CWTS</td>
                                    <td>Civic Welfare Training Services 1</td>
                                    <td>BSA 1-A12</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>S 01:30PM-04:30PM</td>
                                </tr>
                                <tr class="table-light">
                                    <td>ACC 111</td>
                                    <td>Conceptual Framework and Accounting Standards</td>
                                    <td>BSA 1-A12</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                                </tr>
                                <tr>
                                    <td>ED 111</td>
                                    <td>Economic Development</td>
                                    <td>BSA 1-A12</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                                </tr>
                                <tr class="table-light">
                                    <td>IC-JEEP 110</td>
                                    <td>JEEP Start 1</td>
                                    <td>BSA 1-A12</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>M/TH 12:00PM-01:30PM/12:00PM-01:30PM</td>
                                </tr>
                                <tr>
                                    <td>MS 111</td>
                                    <td>Management Science</td>
                                    <td>BSA 1-A12</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>M/TH 07:30PM-09:00PM/07:30PM-09:00PM</td>
                                </tr>
                                <tr class="table-light">
                                    <td>GE 104</td>
                                    <td>Mathematics in the Modern World</td>
                                    <td>BSA 1-A12</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                                </tr>
                                <tr>
                                    <td>PATHFIT 1</td>
                                    <td>Movement Competency Training</td>
                                    <td>BSA 1-A12</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td></td>
                                    <td>T 09:00AM-10:30AM</td>
                                </tr>
                                <tr class="table-light">
                                    <td>GE 105</td>
                                    <td>Purposive Communication</td>
                                    <td>BSA 1-A12</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                                </tr>
                                <tr>
                                    <td>THEO 110</td>
                                    <td>Religions, Religious Experiences and Spirituality</td>
                                    <td>BSA 1-A12</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                                </tr>
                                <tr class="table-warning fw-bold">
                                    <td colspan="3">TOTAL</td>
                                    <td>29</td>
                                    <td>3</td>
                                    <td>32</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
            </div>
        </div>
    </div>

            <!-- SECTION : A13 -->
            <div class="card mb-4">
                <div class="card-body p-0">
                    <h6 class="px-3 pt-3 fw-bold text-success">SECTION : A13</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead class="table-success text-white">
                                <tr>
                                    <th>Subject Code</th>
                                    <th>Description</th>
                                    <th>Section Code</th>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                    <th>Units</th>
                                    <th>Room No.</th>
                                    <th>Schedule</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>NSTP1-CWTS</td>
                                    <td>Civic Welfare Training Services 1</td>
                                    <td>BSA 1-A13</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>W 06:00PM-09:00PM</td>
                                </tr>
                                <tr class="table-warning fw-bold">
                                    <td colspan="3">TOTAL</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
        </div>
    </div>
</div>

            <!-- SECTION : AB11 -->
            <div class="card mb-4">
                <div class="card-body p-0">
                    <h6 class="px-3 pt-3 fw-bold text-success">SECTION : AB11</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead class="table-success text-white">
                                <tr>
                                    <th>Subject Code</th>
                                    <th>Description</th>
                                    <th>Section Code</th>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                    <th>Units</th>
                                    <th>Room No.</th>
                                    <th>Schedule</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SEAABPEC 111</td>
                                    <td>Introduction to Agri-Aqua Business with Technopreneurship</td>
                                    <td>BSSE-AB 1-AB11</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                                </tr>
                                <tr class="table-light">
                                    <td>ECC 111</td>
                                    <td>Introduction to Social Entrepreneurship</td>
                                    <td>BSSE-AB 1-AB11</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                                </tr>
                                <tr>
                                    <td>*ECC 112</td>
                                    <td>Opportunity Seeking Recognition and Creation</td>
                                    <td>BSSE-AB 1-AB11</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>M/TH 12:00PM-01:30PM/12:00PM-01:30PM</td>
                                </tr>
                                <tr class="table-warning fw-bold">
                                    <td colspan="3">TOTAL</td>
                                    <td>8</td>
                                    <td>1</td>
                                    <td>9</td>
                                    <td></td>
                                    <td></td>
                                    </tr>
                            </tbody>
                        </table>
            </div>
        </div>
    </div>

            <!-- Additional Sections Placeholder -->
            <div class="card mb-4">
                <div class="card-body p-0">
                    <h6 class="px-3 pt-3 fw-bold text-success">SECTION : AS10</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead class="table-success text-white">
                                <tr>
                                    <th>Subject Code</th>
                                    <th>Description</th>
                                    <th>Section Code</th>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                    <th>Units</th>
                                    <th>Room No.</th>
                                    <th>Schedule</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ECONOMICS 102</td>
                                    <td>Algebra and Trigonometry</td>
                                    <td>AB-ECON 1-AS10</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                                </tr>
                                <tr class="table-light">
                                    <td>GE 114</td>
                                    <td>Balarila ng Wikang Pilipino</td>
                                    <td>BHUMSERV 1-AS10</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td></td>
                                    <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                                </tr>
                                <tr>
                                    <td>CAL I</td>
                                    <td>Calculus I</td>
                                    <td>BSAM 1-AS10</td>
                                    <td>4</td>
                                    <td>0</td>
                                    <td>4</td>
                                    <td></td>
                                    <td>T/W/F 03:00PM-04:30PM/11:00AM-12:00PM/03:00PM-04:30PM</td>
                                </tr>
                                <tr class="table-warning fw-bold">
                                    <td colspan="3">TOTAL</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION : MATE -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : MATE</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MATENG 644</td>
                            <td>Effective Communication</td>
                            <td>MATE 1-MATE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATENG 631</td>
                            <td>Introduction to Linguistics</td>
                            <td>MATE 1-MATE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>MATENG 621</td>
                            <td>Philosophy of Education and Theories of Learning</td>
                            <td>MATE 1-MATE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATENG 635</td>
                            <td>Preparation and Evaluation of Materials</td>
                            <td>MATE 1-MATE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>MATENG 623</td>
                            <td>Research Methodology</td>
                            <td>MATE 1-MATE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATENG 624</td>
                            <td>Statistical Principles and Methods</td>
                            <td>MATE 1-MATE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>MATENG 643</td>
                            <td>Technology in Language Teaching</td>
                            <td>MATE 1-MATE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATEng 513A</td>
                            <td>Thesis Writing 1</td>
                            <td>MATE 1-MATE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>MATEng 513B</td>
                            <td>Thesis Writing 2</td>
                            <td>MATE 1-MATE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00AM-07:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>27</td>
                            <td>0</td>
                            <td>27</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : MATF -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : MATF</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MATFIL 643</td>
                            <td>Educational Technology Management</td>
                            <td>MATF 1-MATF</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATFil 511</td>
                            <td>Electronics Education and Application of Information Technology</td>
                            <td>MATF 1-MATF</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>MATFIL 634</td>
                            <td>Makabagong Poesiya ng Pilipinas</td>
                            <td>MATF 1-MATF</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATFIL 632</td>
                            <td>Pagsasalinwika</td>
                            <td>MATF 1-MATF</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>MATFIL 631</td>
                            <td>Pagtuturo ng Filipino</td>
                            <td>MATF 1-MATF</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATFIL 622</td>
                            <td>Pananaliksik sa Wika at Literaturang Filipino</td>
                            <td>MATF 1-MATF</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>MATFIL 621</td>
                            <td>Philosophy of Education and Theories of Learning</td>
                            <td>MATF 1-MATF</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATFIL 623</td>
                            <td>Statistical Principles and Methods</td>
                            <td>MATF 1-MATF</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>24</td>
                            <td>0</td>
                            <td>24</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : MATGS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : MATGS</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MATGS 632</td>
                            <td>Advanced Biology</td>
                            <td>MATGS 1-MATGS</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATGS 633</td>
                            <td>Advanced Chemistry</td>
                            <td>MATGS 1-MATGS</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>MATGS 635</td>
                            <td>Advanced Earth and Space Science</td>
                            <td>MATGS 1-MATGS</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATGS 636</td>
                            <td>Curriculum Development and Approaches to Science Teaching</td>
                            <td>MATGS 1-MATGS</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>MATGS 644</td>
                            <td>Effective Communication</td>
                            <td>MATGS 1-MATGS</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATGS 634</td>
                            <td>Environmental Science</td>
                            <td>MATGS 1-MATGS</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>MATGS 621</td>
                            <td>Philosophy of Education and Theories of Learning</td>
                            <td>MATGS 1-MATGS</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATGS 622</td>
                            <td>Research Methodology</td>
                            <td>MATGS 1-MATGS</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00AM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>MATGS 623</td>
                            <td>Statistical Principles and Methods</td>
                            <td>MATGS 1-MATGS</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>27</td>
                            <td>0</td>
                            <td>27</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : MATSE -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : MATSE</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MATSE 635</td>
                            <td>Assessment that Supports Instruction in Special Education</td>
                            <td>MATSE 1-MATSE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATSE 633</td>
                            <td>Behavioral Management and Supports for Inclusive Education</td>
                            <td>MATSE 1-MATSE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>MATSE 634</td>
                            <td>Curriculum Development in Special Education</td>
                            <td>MATSE 1-MATSE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATSE 642</td>
                            <td>Effective Communication</td>
                            <td>MATSE 1-MATSE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>MATSE 621</td>
                            <td>Philosophy of Education and Theories of Learning</td>
                            <td>MATSE 1-MATSE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATSE 622</td>
                            <td>Research Methodology</td>
                            <td>MATSE 1-MATSE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>MATSE 623</td>
                            <td>Statistical Principles and Methods</td>
                            <td>MATSE 1-MATSE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>21</td>
                            <td>0</td>
                            <td>21</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : MBABM -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : MBABM</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MBABM 642</td>
                            <td>Business Discourse</td>
                            <td>MBA-BM 1-MBABM</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MBABM 634</td>
                            <td>Corporate Planning and Strategic Management</td>
                            <td>MBA-BM 1-MBABM</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>MBABM 636</td>
                            <td>Global Marketing Management and E-Commerce</td>
                            <td>MBA-BM 1-MBABM</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MBABM 641</td>
                            <td>Labor Laws, Social Legislations and Data Privacy</td>
                            <td>MBA-BM 1-MBABM</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>MBABM 622</td>
                            <td>Research and Publication Methodology</td>
                            <td>MBA-BM 1-MBABM</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MBABM 623</td>
                            <td>Statistics with Business Data Analytics</td>
                            <td>MBA-BM 1-MBABM</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>MBABM 621</td>
                            <td>Strategic Human Resource Management</td>
                            <td>MBA-BM 1-MBABM</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00AM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MBABM 631</td>
                            <td>Supply Chain and Logistics Management</td>
                            <td>MBA-BM 1-MBABM</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00AM-07:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>24</td>
                            <td>0</td>
                            <td>24</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : MBAHR -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : MBAHR</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MBAHR 634</td>
                            <td>Corporate Planning and Strategic Management</td>
                            <td>MBA-HR 1-MBAHR</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MBAHR 644</td>
                            <td>Effective Communication</td>
                            <td>MBA-HR 1-MBAHR</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>MBAHR 631</td>
                            <td>Labor Laws, Social Legislations and Data Privacy</td>
                            <td>MBA-HR 1-MBAHR</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MBAHR 633</td>
                            <td>Performance Management with Human Resource Information System</td>
                            <td>MBA-HR 1-MBAHR</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>MBAHR 622</td>
                            <td>Research and Publication Methodology</td>
                            <td>MBA-HR 1-MBAHR</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MBAHR 623</td>
                            <td>Statistics with Business Data Analytics</td>
                            <td>MBA-HR 1-MBAHR</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>MBAHR 642</td>
                            <td>Theories of Personality</td>
                            <td>MBA-HR 1-MBAHR</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MBAHR 636</td>
                            <td>Total Employee Compensation Management</td>
                            <td>MBA-HR 1-MBAHR</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>24</td>
                            <td>0</td>
                            <td>24</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : MM11 -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : MM11</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GE 106</td>
                            <td>Arts Appreciation</td>
                            <td>BSBA-MM 1-MM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NSTP1-CWTS</td>
                            <td>Civic Welfare Traning Services 1</td>
                            <td>BSBA-MM 1-MM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:30PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>*PPEC 112</td>
                            <td>Digital Information at Work</td>
                            <td>BSBA-MM 1-MM11</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MMPEC 110</td>
                            <td>E-Commerce and Internet Marketing</td>
                            <td>BSBA-MM 1-MM11</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>IC-JEEP 110-A</td>
                            <td>JEEP Start I (Basic Communication Skills)</td>
                            <td>BSBA-MM 1-MM11</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 104</td>
                            <td>Mathematics in the Modern World</td>
                            <td>BSBA-MM 1-MM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>*BAPBS 110</td>
                            <td>Organization and Management</td>
                            <td>BSBA-MM 1-MM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PPEC 111</td>
                            <td>Personal Finance</td>
                            <td>BSBA-MM 1-MM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>GE 105</td>
                            <td>Purposive Communication</td>
                            <td>BSBA-MM 1-MM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 103</td>
                            <td>The Contemporary World</td>
                            <td>BSBA-MM 1-MM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>25</td>
                            <td>5</td>
                            <td>30</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : MM12 -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : MM12</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GE 106</td>
                            <td>Arts Appreciation</td>
                            <td>BSBA-MM 1-MM12</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NSTP1-CWTS</td>
                            <td>Civic Welfare Traning Services 1</td>
                            <td>BSBA-MM 1-MM12</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:30PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>*PPEC 112</td>
                            <td>Digital Information at Work</td>
                            <td>BSBA-MM 1-MM12</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MMPEC 110</td>
                            <td>E-Commerce and Internet Marketing</td>
                            <td>BSBA-MM 1-MM12</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>IC-JEEP 110-A</td>
                            <td>JEEP Start I (Basic Communication Skills)</td>
                            <td>BSBA-MM 1-MM12</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 104</td>
                            <td>Mathematics in the Modern World</td>
                            <td>BSBA-MM 1-MM12</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>*BAPBS 110</td>
                            <td>Organization and Management</td>
                            <td>BSBA-MM 1-MM12</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PPEC 111</td>
                            <td>Personal Finance</td>
                            <td>BSBA-MM 1-MM12</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 105</td>
                            <td>Purposive Communication</td>
                            <td>BSBA-MM 1-MM12</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 103</td>
                            <td>The Contemporary World</td>
                            <td>BSBA-MM 1-MM12</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>25</td>
                            <td>5</td>
                            <td>30</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : MM13 -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : MM13</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GE 106</td>
                            <td>Arts Appreciation</td>
                            <td>BSBA-MM 1-MM13</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>*PPEC 112</td>
                            <td>Digital Information at Work</td>
                            <td>BSBA-MM 1-MM13</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>MMPEC 110</td>
                            <td>E-Commerce and Internet Marketing</td>
                            <td>BSBA-MM 1-MM13</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IC-JEEP 110-A</td>
                            <td>JEEP Start I (Basic Communication Skills)</td>
                            <td>BSBA-MM 1-MM13</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 104</td>
                            <td>Mathematics in the Modern World</td>
                            <td>BSBA-MM 1-MM13</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PPEC 111</td>
                            <td>Personal Finance</td>
                            <td>BSBA-MM 1-MM13</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 105</td>
                            <td>Purposive Communication</td>
                            <td>BSBA-MM 1-MM13</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 103</td>
                            <td>The Contemporary World</td>
                            <td>BSBA-MM 1-MM13</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>19</td>
                            <td>5</td>
                            <td>24</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : PHD -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : PHD</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PhD 810</td>
                            <td>Advanced Educational Planning and Fiscal Management (with Practicum)</td>
                            <td>PHD 1-PHD</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PHD 922</td>
                            <td>Advanced Educational Research Methods</td>
                            <td>PHD 1-PHD</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>PHD 931</td>
                            <td>Educational Leadership and Change Management</td>
                            <td>PHD 1-PHD</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PHD 937</td>
                            <td>Equity, Diversity, and Inclusion in Education</td>
                            <td>PHD 1-PHD</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>PHD 942</td>
                            <td>Personal and Professional Development of an Executive</td>
                            <td>PHD 1-PHD</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PhD 801A</td>
                            <td>Philosophical Foundation and Theories of Education</td>
                            <td>PHD 1-PHD</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>PHD 921</td>
                            <td>Philosophical Foundation and Theories of Education</td>
                            <td>PHD 1-PHD</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PHD 923</td>
                            <td>Statistical Techniques for Data-Driven Decision Making in Education</td>
                            <td>PHD 1-PHD</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>PhD 807A</td>
                            <td>Theories and Advanced Techniques in Supervision</td>
                            <td>PHD 1-PHD</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PhD 802A</td>
                            <td>Theories and Methods of Evaluation Research</td>
                            <td>PHD 1-PHD</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>30</td>
                            <td>0</td>
                            <td>30</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : PRUDENCE -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : PRUDENCE</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MTTG-COMP 1</td>
                            <td>Computer</td>
                            <td>GS 1-PRUDENCE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M/W 02:00PM-03:00PM/10:00AM-11:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG- GMRC 1</td>
                            <td>Good Manners and Right Conduct</td>
                            <td>GS 1-PRUDENCE</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>MTTG-HRGP 1</td>
                            <td>Homeroom and Guidance Program</td>
                            <td>GS 1-PRUDENCE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M 07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-LANGUAGE 1</td>
                            <td>Language</td>
                            <td>GS 1-PRUDENCE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH/F 09:00AM-10:00AM/09:00AM-10:00AM/09:00AM-10:00AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-MKB 1</td>
                            <td>Makabansa</td>
                            <td>GS 1-PRUDENCE</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>T/W/TH/F 01:00PM-02:00PM/09:00AM-10:00AM/01:00PM-02:00PM/01:00PM-02:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-MATH 1</td>
                            <td>Mathematics</td>
                            <td>GS 1-PRUDENCE</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/TH/F 10:00AM-11:00AM/10:00AM-11:00AM/10:00AM-11:00AM/10:00AM-11:00AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-RAL 1</td>
                            <td>Reading and Literacy</td>
                            <td>GS 1-PRUDENCE</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>T/W/TH/F 07:30AM-08:30AM/07:30AM-08:30AM/07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-RAW 1</td>
                            <td>Reading and Writing Laboratory</td>
                            <td>GS 1-PRUDENCE</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td>M/T 01:00PM-02:00PM/11:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-REL ED 1</td>
                            <td>Religious Education</td>
                            <td>GS 1-PRUDENCE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M/W/TH/F 11:00AM-12:00PM/11:00AM-12:00PM/11:00AM-12:00PM/11:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-SPEECH 1</td>
                            <td>Speech</td>
                            <td>GS 1-PRUDENCE</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td></td>
                            <td>T 09:00AM-10:00AM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>24</td>
                            <td>3</td>
                            <td>27</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : REF11 -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : REF11</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>CPA REFRESHER 23</td>
                            <td>Advance Financial Accounting and Reporting</td>
                            <td>CPA R 1-REF11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>CPA REFRESHER 21</td>
                            <td>Auditing</td>
                            <td>CPA R 1-REF11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>CPA REFRESHER 22</td>
                            <td>Financial Accounting and Reporting</td>
                            <td>CPA R 1-REF11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 04:30PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>CPA REFRESHER 13</td>
                            <td>Intermediate Accounting 1</td>
                            <td>CPA R 1-REF11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 09:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>CPA REFRESHER 16</td>
                            <td>Intermediate Accounting 3</td>
                            <td>CPA R 1-REF11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 06:00PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>CPA REFRESHER 24</td>
                            <td>Management Advisory Services</td>
                            <td>CPA R 1-REF11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:30PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>CPA REFRESHER 25</td>
                            <td>Regulatory Framework and Business Transaction</td>
                            <td>CPA R 1-REF11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>CPA REFRESHER 26</td>
                            <td>Taxation</td>
                            <td>CPA R 1-REF11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>24</td>
                            <td>0</td>
                            <td>24</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : ST. AUGUSTINE -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : ST. AUGUSTINE</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HUM 116</td>
                            <td>21st Century Literature from the Philippines and the World</td>
                            <td>ACAD-STEM-ABP 1-ST. AUGUSTINE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GSKHRG11 A</td>
                            <td>Career Development Program 1</td>
                            <td>ACAD-STEM-ABP 1-ST. AUGUSTINE</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>W 07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>SCIENCE 119</td>
                            <td>Earth Science</td>
                            <td>ACAD-STEM-ABP 1-ST. AUGUSTINE</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATH 115</td>
                            <td>General Mathematics</td>
                            <td>ACAD-STEM-ABP 1-ST. AUGUSTINE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>PHILO 118</td>
                            <td>Introduction to the Philosophy of the Human Person</td>
                            <td>ACAD-STEM-ABP 1-ST. AUGUSTINE</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FIL 113</td>
                            <td>Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</td>
                            <td>ACAD-STEM-ABP 1-ST. AUGUSTINE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr>
                            <td>ENGL 112</td>
                            <td>Oral Communication</td>
                            <td>ACAD-STEM-ABP 1-ST. AUGUSTINE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PERDEV 127</td>
                            <td>Personal Development</td>
                            <td>ACAD-STEM-ABP 1-ST. AUGUSTINE</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>PEH 110</td>
                            <td>Physical Education and Health 1</td>
                            <td>ACAD-STEM-ABP 1-ST. AUGUSTINE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>F 10:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>REED 111</td>
                            <td>Religious Education 1</td>
                            <td>ACAD-STEM-ABP 1-ST. AUGUSTINE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T 10:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td colspan="8" class="text-center">No subject</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : ST. CLEMENT -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : ST. CLEMENT</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HUM 116</td>
                            <td>21st Century Literature from the Philippines and the World</td>
                            <td>ACAD-STEM-ABP 1-ST. CLEMENT</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GSKHRG11 A</td>
                            <td>Career Development Program 1</td>
                            <td>ACAD-STEM-ABP 1-ST. CLEMENT</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>W 07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>SCIENCE 119</td>
                            <td>Earth Science</td>
                            <td>ACAD-STEM-ABP 1-ST. CLEMENT</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATH 115</td>
                            <td>General Mathematics</td>
                            <td>ACAD-STEM-ABP 1-ST. CLEMENT</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>PHILO 118</td>
                            <td>Introduction to the Philosophy of the Human Person</td>
                            <td>ACAD-STEM-ABP 1-ST. CLEMENT</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FIL 113</td>
                            <td>Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</td>
                            <td>ACAD-STEM-ABP 1-ST. CLEMENT</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr>
                            <td>ENGL 112</td>
                            <td>Oral Communication</td>
                            <td>ACAD-STEM-ABP 1-ST. CLEMENT</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PERDEV 127</td>
                            <td>Personal Development</td>
                            <td>ACAD-STEM-ABP 1-ST. CLEMENT</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>PEH 110</td>
                            <td>Physical Education and Health 1</td>
                            <td>ACAD-STEM-ABP 1-ST. CLEMENT</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M 10:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>REED 111</td>
                            <td>Religious Education 1</td>
                            <td>ACAD-STEM-ABP 1-ST. CLEMENT</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>TH 10:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td colspan="8" class="text-center">No subject</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : ST. DAVID -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : ST. DAVID</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HUM 116</td>
                            <td>21st Century Literature from the Philippines and the World</td>
                            <td>ACAD-STEM-ABP 1-ST. DAVID</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GSKHRG11 A</td>
                            <td>Career Development Program 1</td>
                            <td>ACAD-STEM-ABP 1-ST. DAVID</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>W 07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>SCIENCE 119</td>
                            <td>Earth Science</td>
                            <td>ACAD-STEM-ABP 1-ST. DAVID</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATH 115</td>
                            <td>General Mathematics</td>
                            <td>ACAD-STEM-ABP 1-ST. DAVID</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>PHILO 118</td>
                            <td>Introduction to the Philosophy of the Human Person</td>
                            <td>ACAD-STEM-ABP 1-ST. DAVID</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FIL 113</td>
                            <td>Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</td>
                            <td>ACAD-STEM-ABP 1-ST. DAVID</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>ENGL 112</td>
                            <td>Oral Communication</td>
                            <td>ACAD-STEM-ABP 1-ST. DAVID</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PERDEV 127</td>
                            <td>Personal Development</td>
                            <td>ACAD-STEM-ABP 1-ST. DAVID</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>PEH 110</td>
                            <td>Physical Education and Health 1</td>
                            <td>ACAD-STEM-ABP 1-ST. DAVID</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M 01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>REED 111</td>
                            <td>Religious Education 1</td>
                            <td>ACAD-STEM-ABP 1-ST. DAVID</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>TH 01:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td colspan="8" class="text-center">No subject</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : ST. EDMUND -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : ST. EDMUND</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HUM 116</td>
                            <td>21st Century Literature from the Philippines and the World</td>
                            <td>ACAD-HUMSS-ABP 1-ST. EDMUND</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GSKHRG11 A</td>
                            <td>Career Development Program 1</td>
                            <td>ACAD-HUMSS-ABP 1-ST. EDMUND</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>W 07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>SCIENCE 114</td>
                            <td>Earth and Life Science</td>
                            <td>ACAD-HUMSS-ABP 1-ST. EDMUND</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATH 115</td>
                            <td>General Mathematics</td>
                            <td>ACAD-HUMSS-ABP 1-ST. EDMUND</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr>
                            <td>FIL 113</td>
                            <td>Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</td>
                            <td>ACAD-HUMSS-ABP 1-ST. EDMUND</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MIL 117</td>
                            <td>Media and Information Literacy</td>
                            <td>ACAD-HUMSS-ABP 1-ST. EDMUND</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr>
                            <td>ENGL 112</td>
                            <td>Oral Communication</td>
                            <td>ACAD-HUMSS-ABP 1-ST. EDMUND</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PEH 110</td>
                            <td>Physical Education and Health 1</td>
                            <td>ACAD-HUMSS-ABP 1-ST. EDMUND</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T 07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>REED 111</td>
                            <td>Religious Education 1</td>
                            <td>ACAD-HUMSS-ABP 1-ST. EDMUND</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>F 07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>CSP 126</td>
                            <td>Understanding Culture, Society and Politics</td>
                            <td>ACAD-HUMSS-ABP 1-ST. EDMUND</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td colspan="8" class="text-center">No subject</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : ST. JEROME -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : ST. JEROME</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HUM 116</td>
                            <td>21st Century Literature from the Philippines and the World</td>
                            <td>ACAD-ABM-ABP 1-ST. JEROME</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GSKHRG11 A</td>
                            <td>Career Development Program 1</td>
                            <td>ACAD-ABM-ABP 1-ST. JEROME</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>W 07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>SCIENCE 114</td>
                            <td>Earth and Life Science</td>
                            <td>ACAD-ABM-ABP 1-ST. JEROME</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATH 115</td>
                            <td>General Mathematics</td>
                            <td>ACAD-ABM-ABP 1-ST. JEROME</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>FIL 113</td>
                            <td>Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</td>
                            <td>ACAD-ABM-ABP 1-ST. JEROME</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MIL 117</td>
                            <td>Media and Information Literacy</td>
                            <td>ACAD-ABM-ABP 1-ST. JEROME</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>ENGL 112</td>
                            <td>Oral Communication</td>
                            <td>ACAD-ABM-ABP 1-ST. JEROME</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PEH 110</td>
                            <td>Physical Education and Health 1</td>
                            <td>ACAD-ABM-ABP 1-ST. JEROME</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M 03:00PM-05:00PM</td>
                        </tr>
                        <tr>
                            <td>REED 111</td>
                            <td>Religious Education 1</td>
                            <td>ACAD-ABM-ABP 1-ST. JEROME</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>TH 03:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>CSP 126</td>
                            <td>Understanding Culture, Society and Politics</td>
                            <td>ACAD-ABM-ABP 1-ST. JEROME</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td colspan="8" class="text-center">No subject</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : ST. LEO -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : ST. LEO</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HUM 116</td>
                            <td>21st Century Literature from the Philippines and the World</td>
                            <td>ACAD-HUMSS-ABP 1-ST. LEO</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GSKHRG11 A</td>
                            <td>Career Development Program 1</td>
                            <td>ACAD-HUMSS-ABP 1-ST. LEO</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>W 07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>SCIENCE 114</td>
                            <td>Earth and Life Science</td>
                            <td>ACAD-HUMSS-ABP 1-ST. LEO</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATH 115</td>
                            <td>General Mathematics</td>
                            <td>ACAD-HUMSS-ABP 1-ST. LEO</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr>
                            <td>FIL 113</td>
                            <td>Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</td>
                            <td>ACAD-HUMSS-ABP 1-ST. LEO</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MIL 117</td>
                            <td>Media and Information Literacy</td>
                            <td>ACAD-HUMSS-ABP 1-ST. LEO</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr>
                            <td>ENGL 112</td>
                            <td>Oral Communication</td>
                            <td>ACAD-HUMSS-ABP 1-ST. LEO</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PEH 110</td>
                            <td>Physical Education and Health 1</td>
                            <td>ACAD-HUMSS-ABP 1-ST. LEO</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>TH 07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>REED 111</td>
                            <td>Religious Education 1</td>
                            <td>ACAD-HUMSS-ABP 1-ST. LEO</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M 07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>CSP 126</td>
                            <td>Understanding Culture, Society and Politics</td>
                            <td>ACAD-HUMSS-ABP 1-ST. LEO</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td colspan="8" class="text-center">No subject</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : ST. LUKE -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : ST. LUKE</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MTTG-AP 7</td>
                            <td>Araling Panlipunan</td>
                            <td>HS 1-ST. LUKE</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/W/TH/F 01:00PM-02:00PM/11:00AM-12:00PM/11:00AM-12:00PM/11:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-COMP 7</td>
                            <td>Computer</td>
                            <td>HS 1-ST. LUKE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>F 03:00PM-04:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-ENGLISH 7</td>
                            <td>English</td>
                            <td>HS 1-ST. LUKE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/W/TH 07:30AM-08:30AM/07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-FILIPINO 7</td>
                            <td>Filipino</td>
                            <td>HS 1-ST. LUKE</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/W/F 10:00AM-11:00AM/10:00AM-11:00AM/10:00AM-11:00AM/09:00AM-10:00AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-HRGP 7</td>
                            <td>Homeroom and Guidance Program</td>
                            <td>HS 1-ST. LUKE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M 07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-MATH 7</td>
                            <td>Mathematics</td>
                            <td>HS 1-ST. LUKE</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/W/TH 09:00AM-10:00AM/09:00AM-10:00AM/09:00AM-10:00AM/09:00AM-10:00AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-MUSIC 7</td>
                            <td>Music and Arts</td>
                            <td>HS 1-ST. LUKE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>TH/F 01:00PM-02:00PM/01:00PM-02:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-PEH 7</td>
                            <td>Physical Education and Health</td>
                            <td>HS 1-ST. LUKE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T/W 01:00PM-02:00PM/01:00PM-02:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-RAW 7</td>
                            <td>Reading and Writing Laboratory</td>
                            <td>HS 1-ST. LUKE</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td>TH 03:00PM-04:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-REL ED 7</td>
                            <td>Religious Education</td>
                            <td>HS 1-ST. LUKE</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/W/F 03:00PM-04:00PM/03:00PM-04:00PM/03:00PM-04:00PM/02:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-SCIENCE 7</td>
                            <td>Science</td>
                            <td>HS 1-ST. LUKE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>TH/F 10:00AM-11:00AM/10:00AM-11:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-SCI LAB 7</td>
                            <td>Science Laboratory</td>
                            <td>HS 1-ST. LUKE</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td>M/T 11:00AM-12:00PM/11:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-SPEECH 7</td>
                            <td>Speech</td>
                            <td>HS 1-ST. LUKE</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td></td>
                            <td>F 07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-TLE 7</td>
                            <td>Technology and Livelihood Education</td>
                            <td>HS 1-ST. LUKE</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/W/TH 02:00PM-03:00PM/02:00PM-03:00PM/02:00PM-03:00PM/02:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>32</td>
                            <td>5</td>
                            <td>37</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : ST. MARK -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : ST. MARK</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MTTG-AP 7</td>
                            <td>Araling Panlipunan</td>
                            <td>HS 1-ST. MARK</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>T/W/TH/F 01:00PM-02:00PM/01:00PM-02:00PM/01:00PM-02:00PM/01:00PM-02:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-COMP 7</td>
                            <td>Computer</td>
                            <td>HS 1-ST. MARK</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>F 07:30AM-08:30AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-ENGLISH 7</td>
                            <td>English</td>
                            <td>HS 1-ST. MARK</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/T/W 09:00AM-10:00AM/09:00AM-10:00AM/09:00AM-10:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-FILIPINO 7</td>
                            <td>Filipino</td>
                            <td>HS 1-ST. MARK</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/TH/F 11:00AM-12:00PM/11:00AM-12:00PM/10:00AM-11:00AM/10:00AM-11:00AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-HRGP 7</td>
                            <td>Homeroom and Guidance Program</td>
                            <td>HS 1-ST. MARK</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M 07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-MATH 7</td>
                            <td>Mathematics</td>
                            <td>HS 1-ST. MARK</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/W/F 10:00AM-11:00AM/10:00AM-11:00AM/10:00AM-11:00AM/09:00AM-10:00AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-MUSIC 7</td>
                            <td>Music and Arts</td>
                            <td>HS 1-ST. MARK</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>W/TH 02:00PM-03:00PM/02:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-PEH 7</td>
                            <td>Physical Education and Health</td>
                            <td>HS 1-ST. MARK</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M/T 02:00PM-03:00PM/02:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-RAW 7</td>
                            <td>Reading and Writing Laboratory</td>
                            <td>HS 1-ST. MARK</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td>TH 07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-REL ED 7</td>
                            <td>Religious Education</td>
                            <td>HS 1-ST. MARK</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>T/W/TH/F 07:30AM-08:30AM/07:30AM-08:30AM/03:00PM-04:00PM/03:00PM-04:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-SCIENCE 7</td>
                            <td>Science</td>
                            <td>HS 1-ST. MARK</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>W/TH 11:00AM-12:00PM/11:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-SCI LAB 7</td>
                            <td>Science Laboratory</td>
                            <td>HS 1-ST. MARK</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td>M/F 01:00PM-02:00PM/11:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-SPEECH 7</td>
                            <td>Speech</td>
                            <td>HS 1-ST. MARK</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td></td>
                            <td>TH 09:00AM-10:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-TLE 7</td>
                            <td>Technology and Livelihood Education</td>
                            <td>HS 1-ST. MARK</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/W/F 03:00PM-04:00PM/03:00PM-04:00PM/03:00PM-04:00PM/02:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>32</td>
                            <td>5</td>
                            <td>37</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : ST. MATTHEW -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : ST. MATTHEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MTTG-AP 7</td>
                            <td>Araling Panlipunan</td>
                            <td>HS 1-ST. MATTHEW</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/W/F 03:00PM-04:00PM/03:00PM-04:00PM/03:00PM-04:00PM/02:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-COMP 7</td>
                            <td>Computer</td>
                            <td>HS 1-ST. MATTHEW</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>W 10:00AM-11:00AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-ENGLISH 7</td>
                            <td>English</td>
                            <td>HS 1-ST. MATTHEW</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH/F 11:00AM-12:00PM/10:00AM-11:00AM/10:00AM-11:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-FILIPINO 7</td>
                            <td>Filipino</td>
                            <td>HS 1-ST. MATTHEW</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>T/W/TH/F 01:00PM-02:00PM/01:00PM-02:00PM/01:00PM-02:00PM/01:00PM-02:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-HRGP 7</td>
                            <td>Homeroom and Guidance Program</td>
                            <td>HS 1-ST. MATTHEW</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M 07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-MATH 7</td>
                            <td>Mathematics</td>
                            <td>HS 1-ST. MATTHEW</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/W/TH/F 01:00PM-02:00PM/11:00AM-12:00PM/11:00AM-12:00PM/11:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-MUSIC 7</td>
                            <td>Music and Arts</td>
                            <td>HS 1-ST. MATTHEW</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T/W 07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-PEH 7</td>
                            <td>Physical Education and Health</td>
                            <td>HS 1-ST. MATTHEW</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>TH/F 03:00PM-04:00PM/03:00PM-04:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-RAW 7</td>
                            <td>Reading and Writing Laboratory</td>
                            <td>HS 1-ST. MATTHEW</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td>T 10:00AM-11:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-REL ED 7</td>
                            <td>Religious Education</td>
                            <td>HS 1-ST. MATTHEW</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/W/TH/F 10:00AM-11:00AM/09:00AM-10:00AM/09:00AM-10:00AM/09:00AM-10:00AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-SCIENCE 7</td>
                            <td>Science</td>
                            <td>HS 1-ST. MATTHEW</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M/T 02:00PM-03:00PM/02:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-SCI LAB 7</td>
                            <td>Science Laboratory</td>
                            <td>HS 1-ST. MATTHEW</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td>W/TH 02:00PM-03:00PM/02:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-SPEECH 7</td>
                            <td>Speech</td>
                            <td>HS 1-ST. MATTHEW</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td></td>
                            <td>T 11:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-TLE 7</td>
                            <td>Technology and Livelihood Education</td>
                            <td>HS 1-ST. MATTHEW</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/TH/F 09:00AM-10:00AM/09:00AM-10:00AM/07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>32</td>
                            <td>5</td>
                            <td>37</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : ST. MICHAEL -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : ST. MICHAEL</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MTTG-K1 GMRC</td>
                            <td>Good Manners and Right Conduct</td>
                            <td>PS 1-ST. MICHAEL</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/T 10:00AM-11:00AM/10:00AM-11:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-K1 LANG</td>
                            <td>Languages</td>
                            <td>PS 1-ST. MICHAEL</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/T 07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-K1 MKB</td>
                            <td>Makabansa</td>
                            <td>PS 1-ST. MICHAEL</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>TH/F 07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-K1 MATH</td>
                            <td>Mathematics</td>
                            <td>PS 1-ST. MICHAEL</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>TH/F 09:00AM-10:00AM/09:00AM-10:00AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-K1 SCIENCE</td>
                            <td>Physical and Natural Environment</td>
                            <td>PS 1-ST. MICHAEL</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/T 09:00AM-10:00AM/09:00AM-10:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-K1 REL ED</td>
                            <td>Religious Education</td>
                            <td>PS 1-ST. MICHAEL</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>TH/F 10:00AM-11:00AM/10:00AM-11:00AM</td>
                        </tr>
                        <tr>
                            <td colspan="8" class="text-center">No subject</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : ST. PATRICK -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : ST. PATRICK</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HUM 116</td>
                            <td>21st Century Literature from the Philippines and the World</td>
                            <td>ACAD-ABM-ABP 1-ST. PATRICK</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GSKHRG11 A</td>
                            <td>Career Development Program 1</td>
                            <td>ACAD-ABM-ABP 1-ST. PATRICK</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>W 07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>SCIENCE 114</td>
                            <td>Earth and Life Science</td>
                            <td>ACAD-ABM-ABP 1-ST. PATRICK</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATH 115</td>
                            <td>General Mathematics</td>
                            <td>ACAD-ABM-ABP 1-ST. PATRICK</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>FIL 113</td>
                            <td>Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</td>
                            <td>ACAD-ABM-ABP 1-ST. PATRICK</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MIL 117</td>
                            <td>Media and Information Literacy</td>
                            <td>ACAD-ABM-ABP 1-ST. PATRICK</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>ENGL 112</td>
                            <td>Oral Communication</td>
                            <td>ACAD-ABM-ABP 1-ST. PATRICK</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PEH 110</td>
                            <td>Physical Education and Health 1</td>
                            <td>ACAD-ABM-ABP 1-ST. PATRICK</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T 03:00PM-05:00PM</td>
                        </tr>
                        <tr>
                            <td>REED 111</td>
                            <td>Religious Education 1</td>
                            <td>ACAD-ABM-ABP 1-ST. PATRICK</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>F 03:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>CSP 126</td>
                            <td>Understanding Culture, Society and Politics</td>
                            <td>ACAD-ABM-ABP 1-ST. PATRICK</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td colspan="8" class="text-center">No subject</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : ST. PAUL -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : ST. PAUL</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MTTG-AP 7</td>
                            <td>Araling Panlipunan</td>
                            <td>HS 1-ST. PAUL</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/W/TH 02:00PM-03:00PM/02:00PM-03:00PM/02:00PM-03:00PM/02:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-COMP 7</td>
                            <td>Computer</td>
                            <td>HS 1-ST. PAUL</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>TH 09:00AM-10:00AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-ENGLISH 7</td>
                            <td>English</td>
                            <td>HS 1-ST. PAUL</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/T/F 10:00AM-11:00AM/10:00AM-11:00AM/09:00AM-10:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-FILIPINO 7</td>
                            <td>Filipino</td>
                            <td>HS 1-ST. PAUL</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/W/TH/F 01:00PM-02:00PM/11:00AM-12:00PM/11:00AM-12:00PM/11:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-HRGP 7</td>
                            <td>Homeroom and Guidance Program</td>
                            <td>HS 1-ST. PAUL</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M 07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-MATH 7</td>
                            <td>Mathematics</td>
                            <td>HS 1-ST. PAUL</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/TH/F 11:00AM-12:00PM/11:00AM-12:00PM/10:00AM-11:00AM/10:00AM-11:00AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-MUSIC 7</td>
                            <td>Music and Arts</td>
                            <td>HS 1-ST. PAUL</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T/W 03:00PM-04:00PM/03:00PM-04:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-PEH 7</td>
                            <td>Physical Education and Health</td>
                            <td>HS 1-ST. PAUL</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M/F 03:00PM-04:00PM/02:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-RAW 7</td>
                            <td>Reading and Writing Laboratory</td>
                            <td>HS 1-ST. PAUL</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td>W 09:00AM-10:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-REL ED 7</td>
                            <td>Religious Education</td>
                            <td>HS 1-ST. PAUL</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/TH/F 09:00AM-10:00AM/09:00AM-10:00AM/07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-SCIENCE 7</td>
                            <td>Science</td>
                            <td>HS 1-ST. PAUL</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T/W 01:00PM-02:00PM/01:00PM-02:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-SCI LAB 7</td>
                            <td>Science Laboratory</td>
                            <td>HS 1-ST. PAUL</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td>TH/F 01:00PM-02:00PM/01:00PM-02:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-SPEECH 7</td>
                            <td>Speech</td>
                            <td>HS 1-ST. PAUL</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td></td>
                            <td>W 10:00AM-11:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-TLE 7</td>
                            <td>Technology and Livelihood Education</td>
                            <td>HS 1-ST. PAUL</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>T/W/TH/F 07:30AM-08:30AM/07:30AM-08:30AM/03:00PM-04:00PM/03:00PM-04:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>32</td>
                            <td>5</td>
                            <td>37</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : ST. SYLVESTER -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : ST. SYLVESTER</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HUM 116</td>
                            <td>21st Century Literature from the Philippines and the World</td>
                            <td>ACAD-STEM-ABP 1-ST. SYLVESTER</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GSKHRG11 A</td>
                            <td>Career Development Program 1</td>
                            <td>ACAD-STEM-ABP 1-ST. SYLVESTER</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>W 07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>SCIENCE 119</td>
                            <td>Earth Science</td>
                            <td>ACAD-STEM-ABP 1-ST. SYLVESTER</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATH 115</td>
                            <td>General Mathematics</td>
                            <td>ACAD-STEM-ABP 1-ST. SYLVESTER</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>PHILO 118</td>
                            <td>Introduction to the Philosophy of the Human Person</td>
                            <td>ACAD-STEM-ABP 1-ST. SYLVESTER</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FIL 113</td>
                            <td>Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</td>
                            <td>ACAD-STEM-ABP 1-ST. SYLVESTER</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>ENGL 112</td>
                            <td>Oral Communication</td>
                            <td>ACAD-STEM-ABP 1-ST. SYLVESTER</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PERDEV 127</td>
                            <td>Personal Development</td>
                            <td>ACAD-STEM-ABP 1-ST. SYLVESTER</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>PEH 110</td>
                            <td>Physical Education and Health 1</td>
                            <td>ACAD-STEM-ABP 1-ST. SYLVESTER</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T 01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>REED 111</td>
                            <td>Religious Education 1</td>
                            <td>ACAD-STEM-ABP 1-ST. SYLVESTER</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>F 01:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td colspan="8" class="text-center">No subject</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECTION : TE10 -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : TE10</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GE 106</td>
                            <td>Arts Appreciation</td>
                            <td>BSE-F 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 106</td>
                            <td>Arts Appreciation</td>
                            <td>BEED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 106</td>
                            <td>Arts Appreciation</td>
                            <td>BECED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 106</td>
                            <td>Arts Appreciation</td>
                            <td>BSNED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 106</td>
                            <td>Arts Appreciation</td>
                            <td>BPED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NSTP1-CWTS</td>
                            <td>Civic Welfare Traning Services 1</td>
                            <td>BEED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:30PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>SNED 101</td>
                            <td>Curriculum and Pedagogy in Inclusive Education</td>
                            <td>BSNED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 104</td>
                            <td>Mathematics in the Modern World</td>
                            <td>BSNED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 104</td>
                            <td>Mathematics in the Modern World</td>
                            <td>BPED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 104</td>
                            <td>Mathematics in the Modern World</td>
                            <td>BEED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 104</td>
                            <td>Mathematics in the Modern World</td>
                            <td>BSE-F 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 104</td>
                            <td>Mathematics in the Modern World</td>
                            <td>BECED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>PATHFIT 1</td>
                            <td>Movement Competency Training</td>
                            <td>BSE-F 1-TE10</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T 09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PATHFIT 1</td>
                            <td>Movement Competency Training</td>
                            <td>BECED 1-TE10</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T 09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>PATHFIT 1</td>
                            <td>Movement Competency Training</td>
                            <td>BEED 1-TE10</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T 09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PATHFIT 1</td>
                            <td>Movement Competency Training</td>
                            <td>BSNED 1-TE10</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T 09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>PATHFIT 1</td>
                            <td>Movement Competency Training</td>
                            <td>BPED 1-TE10</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T 09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BPED BRIDGE 2</td>
                            <td>Psychosocial Aspects of Sports & Exercise</td>
                            <td>BPED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>GE 105</td>
                            <td>Purposive Communication</td>
                            <td>BECED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 105</td>
                            <td>Purposive Communication</td>
                            <td>BSNED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 105</td>
                            <td>Purposive Communication</td>
                            <td>BPED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 105</td>
                            <td>Purposive Communication</td>
                            <td>BSE-F 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 105</td>
                            <td>Purposive Communication</td>
                            <td>BEED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 102</td>
                            <td>Readings in Philippine History</td>
                            <td>BPED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 102</td>
                            <td>Readings in Philippine History</td>
                            <td>BSE-F 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 102</td>
                            <td>Readings in Philippine History</td>
                            <td>BECED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 102</td>
                            <td>Readings in Philippine History</td>
                            <td>BEED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 102</td>
                            <td>Readings in Philippine History</td>
                            <td>BSNED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>THEO 110</td>
                            <td>Religions, Religious Experiences and Spirituality</td>
                            <td>BPED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>THEO 110</td>
                            <td>Religions, Religious Experiences and Spirituality</td>
                            <td>BECED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>THEO 110</td>
                            <td>Religions, Religious Experiences and Spirituality</td>
                            <td>BSE-F 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>THEO 110</td>
                            <td>Religions, Religious Experiences and Spirituality</td>
                            <td>BEED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>THEO 110</td>
                            <td>Religions, Religious Experiences and Spirituality</td>
                            <td>BSNED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BPED BRIDGE 1</td>
                            <td>Safety and First Aid</td>
                            <td>BPED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>GE 103</td>
                            <td>The Contemporary World</td>
                            <td>BPED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 103</td>
                            <td>The Contemporary World</td>
                            <td>BEED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>GE 103</td>
                            <td>The Contemporary World</td>
                            <td>BSE-F 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 103</td>
                            <td>The Contemporary World</td>
                            <td>BECED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>GE 103</td>
                            <td>The Contemporary World</td>
                            <td>BSNED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 101</td>
                            <td>Understanding the Self</td>
                            <td>BSNED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>GE 101</td>
                            <td>Understanding the Self</td>
                            <td>BEED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 101</td>
                            <td>Understanding the Self</td>
                            <td>BECED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>GE 101</td>
                            <td>Understanding the Self</td>
                            <td>BSE-F 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 101</td>
                            <td>Understanding the Self</td>
                            <td>BPED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>127</td>
                            <td>0</td>
                            <td>127</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    <!-- ADDITIONAL SECTIONS -->
    
    <!-- SECOND YEAR SECTION: A21 -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">SECOND YEAR</h5>
        </div>
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : A21</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ACC 121</td>
                            <td>Intermediate Accounting 1</td>
                            <td>BSA 2-A21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ACC 122</td>
                            <td>Intermediate Accounting 2</td>
                            <td>BSA 2-A21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- BSBA-FM SECTIONS -->
    <div class="card mb-4">
        <div class="card-header bg-secondary text-white">
            <h5 class="mb-0">BSBA-FINANCIAL MANAGEMENT</h5>
        </div>
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-secondary">SECTION : FM11</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-secondary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GE 106</td>
                            <td>Arts Appreciation</td>
                            <td>BSBA-FM 1-FM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FMPMC 110</td>
                            <td>Banking and Financial Institutions</td>
                            <td>BSBA-FM 1-FM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 01:30PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>NSTP1-CWTS</td>
                            <td>Civic Welfare Training Services 1</td>
                            <td>BSBA-FM 1-FM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:30PM-04:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>9</td>
                            <td>0</td>
                            <td>9</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- BSIT SECTIONS -->
    <div class="card mb-4">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">BSIT-INFORMATION TECHNOLOGY</h5>
        </div>
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-dark">SECTION : IT11</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-dark text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BRIDG 001</td>
                            <td>Bridging Subject 1 (Algebra, Trigo, Calculus 1)</td>
                            <td>BSIT 1-IT11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IT 170</td>
                            <td>Computer Fundamentals and Operations</td>
                            <td>BSIT 1-IT11</td>
                            <td>2</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-11:30AM/09:00AM-11:30AM</td>
                        </tr>
                        <tr>
                            <td>IT 171</td>
                            <td>Fundamentals of Programming and Problem Solving 1</td>
                            <td>BSIT 1-IT11</td>
                            <td>2</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-11:30AM/09:00AM-11:30AM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>7</td>
                            <td>6</td>
                            <td>9</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- BSN NURSING SECTIONS -->
    <div class="card mb-4">
        <div class="card-header bg-danger text-white">
            <h5 class="mb-0">BSN-NURSING</h5>
        </div>
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-danger">SECTION : N11</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-danger text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ANAPHY 101</td>
                            <td>Anatomy and Physiology</td>
                            <td>BSN 1-N11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M 06:00PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ANAPHY 101 LAB</td>
                            <td>Anatomy and Physiology</td>
                            <td>BSN 1-N11</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td>T/TH/F 06:00PM-09:00PM/06:00PM-09:00PM/06:00PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>BIOCHEM 102</td>
                            <td>Biochemistry</td>
                            <td>BSN 1-N11</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>M/TH 07:30AM-12:00PM/07:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>6</td>
                            <td>4</td>
                            <td>10</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- GRADUATE PROGRAMS -->
    <div class="card mb-4">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">GRADUATE PROGRAMS</h5>
        </div>
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : DBA</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DBA 922</td>
                            <td>Advanced Business Research and Publication</td>
                            <td>DBA 1-DBA</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>DBA 923</td>
                            <td>Advanced Statistics with Software Application</td>
                            <td>DBA 1-DBA</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ELEMENTARY AND HIGH SCHOOL SECTIONS -->
    <div class="card mb-4">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">ELEMENTARY & HIGH SCHOOL</h5>
        </div>
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : ST. LUKE</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MTTG-AP 7</td>
                            <td>Araling Panlipunan</td>
                            <td>HS 1-ST. LUKE</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/W/TH/F 01:00PM-02:00PM/11:00AM-12:00PM/11:00AM-12:00PM/11:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-ENGLISH 7</td>
                            <td>English</td>
                            <td>HS 1-ST. LUKE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/W/TH 07:30AM-08:30AM/07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>7</td>
                            <td>0</td>
                            <td>7</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ST. SYLVESTER SECTION -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : ST. SYLVESTER</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HUM 116</td>
                            <td>21st Century Literature from the Philippines and the World</td>
                            <td>ACAD-STEM-ABP 1-ST. SYLVESTER</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T/F 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATH 115</td>
                            <td>General Mathematics</td>
                            <td>ACAD-STEM-ABP 1-ST. SYLVESTER</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M/TH 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>FIL 113</td>
                            <td>Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</td>
                            <td>ACAD-STEM-ABP 1-ST. SYLVESTER</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ENGL 112</td>
                            <td>Oral Communication</td>
                            <td>ACAD-STEM-ABP 1-ST. SYLVESTER</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M/TH 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr>
                            <td>PEH 110</td>
                            <td>Physical Education and Health 1</td>
                            <td>ACAD-STEM-ABP 1-ST. SYLVESTER</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T 01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>REED 111</td>
                            <td>Religious Education 1</td>
                            <td>ACAD-STEM-ABP 1-ST. SYLVESTER</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>F 01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>12</td>
                            <td>0</td>
                            <td>12</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- TEACHER EDUCATION SECTIONS -->
    <div class="card mb-4">
        <div class="card-header bg-warning text-dark">
            <h5 class="mb-0">TEACHER EDUCATION PROGRAMS</h5>
        </div>
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">SECTION : TE10</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GE 106</td>
                            <td>Arts Appreciation</td>
                            <td>BSE-F 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NSTP1-CWTS</td>
                            <td>Civic Welfare Training Services 1</td>
                            <td>BEED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:30PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>SNED 101</td>
                            <td>Curriculum and Pedagogy in Inclusive Education</td>
                            <td>BSNED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 104</td>
                            <td>Mathematics in the Modern World</td>
                            <td>BSNED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>PATHFIT 1</td>
                            <td>Movement Competency Training</td>
                            <td>BSE-F 1-TE10</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T 09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BPED BRIDGE 2</td>
                            <td>Psychosocial Aspects of Sports & Exercise</td>
                            <td>BPED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>GE 105</td>
                            <td>Purposive Communication</td>
                            <td>BECED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 102</td>
                            <td>Readings in Philippine History</td>
                            <td>BPED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>THEO 110</td>
                            <td>Religions, Religious Experiences and Spirituality</td>
                            <td>BPED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BPED BRIDGE 1</td>
                            <td>Safety and First Aid</td>
                            <td>BPED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>GE 103</td>
                            <td>The Contemporary World</td>
                            <td>BPED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 101</td>
                            <td>Understanding the Self</td>
                            <td>BSNED 1-TE10</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>35</td>
                            <td>0</td>
                            <td>35</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- TOURISM MANAGEMENT SECTIONS -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">TOURISM MANAGEMENT</h5>
        </div>
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : TM11</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BAPBS 110</td>
                            <td>Business Finance</td>
                            <td>BSTM 1-TM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 01:30PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NSTP1-CWTS</td>
                            <td>Civic Welfare Training Services 1</td>
                            <td>BSTM 1-TM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:30PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>TPC 111</td>
                            <td>Global Tourism, Geography & Culture</td>
                            <td>BSTM 1-TM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>THC 111</td>
                            <td>Macro Perspective of Tourism and Hospitality</td>
                            <td>BSTM 1-TM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>PATHFIT 1</td>
                            <td>Movement Competency Training</td>
                            <td>BSTM 1-TM11</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T 03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>THC 112</td>
                            <td>Professional Development and Applied Ethics</td>
                            <td>BSTM 1-TM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr>
                            <td>THEO 110</td>
                            <td>Religions, Religious Experiences and Spirituality</td>
                            <td>BSTM 1-TM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>TMPE 111</td>
                            <td>Specialized Food & Beverage Service Operations with Lab</td>
                            <td>BSTM 1-TM11</td>
                            <td>2</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-11:00AM/09:00AM-11:00AM</td>
                        </tr>
                        <tr>
                            <td>TPC 112</td>
                            <td>Tour and Travel Management</td>
                            <td>BSTM 1-TM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 101</td>
                            <td>Understanding the Self</td>
                            <td>BSTM 1-TM11</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>28</td>
                            <td>3</td>
                            <td>29</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- SECOND YEAR SECTIONS -->
    <div class="card mb-4">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">SECOND YEAR SECTIONS</h5>
        </div>
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : A21 (BSA Second Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GE 114</td>
                            <td>Balarila ng Wikang Pilipino</td>
                            <td>BSA 2-A21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BL 212</td>
                            <td>Business Laws and Regulations</td>
                            <td>BSA 2-A21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BSA 2-A21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MACC 212</td>
                            <td>Finance and Financial Markets</td>
                            <td>BSA 2-A21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>GE 118</td>
                            <td>Great Books</td>
                            <td>BSA 2-A21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>A-PRE 1</td>
                            <td>Human Behavior in Organization</td>
                            <td>BSA 2-A21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>PATHFIT-3</td>
                            <td>Individual/Dual Sports, Creative Dance and Arnis</td>
                            <td>BSA 2-A21</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M 10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ACC 214A</td>
                            <td>Intermediate Accounting 1</td>
                            <td>BSA 2-A21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>MACC 213</td>
                            <td>Operations Management and TQM</td>
                            <td>BSA 2-A21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 102</td>
                            <td>Readings in Philippine History</td>
                            <td>BSA 2-A21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>29</td>
                            <td>0</td>
                            <td>29</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- CRIMINOLOGY SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-danger">SECTION : CRIM2B</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-danger text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>CLJ203</td>
                            <td>Criminal Law Book 1</td>
                            <td>BSCRIM 2-CRIM2B</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>CRIM-204</td>
                            <td>Professional Conduct and Ethical Standards</td>
                            <td>BSCRIM 2-CRIM2B</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- COMPUTER SCIENCE SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-dark">SECTION : CS-DS21 (Data Science)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-dark text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DS 275</td>
                            <td>DATA MINING</td>
                            <td>BSCS-DS 2-CS-DS21</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>W 07:30AM-12:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IC-JEEP 110</td>
                            <td>JEEP Start 1</td>
                            <td>BSCS-DS 2-CS-DS21</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>DSMATH 274</td>
                            <td>Linear Algebra</td>
                            <td>BSCS-DS 2-CS-DS21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 01:00PM-04:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>5</td>
                            <td>4</td>
                            <td>9</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- COMPUTER SCIENCE SECTION CS21 -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-dark">SECTION : CS21</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-dark text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BSCS 2-CS21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>CS 272</td>
                            <td>Data Structures and Algorithms</td>
                            <td>BSCS 2-CS21</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-05:30PM/03:00PM-05:30PM</td>
                        </tr>
                        <tr>
                            <td>CS 271</td>
                            <td>Discrete Structures 2</td>
                            <td>BSCS 2-CS21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PATHFIT-3</td>
                            <td>Individual/Dual Sports, Creative Dance and Arnis</td>
                            <td>BSCS 2-CS21</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T 07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>IC-JEEP 110</td>
                            <td>JEEP Start 1</td>
                            <td>BSCS 2-CS21</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATH 375</td>
                            <td>Numerical Methods</td>
                            <td>BSCS 2-CS21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>CS 270</td>
                            <td>Object Oriented Programming</td>
                            <td>BSCS 2-CS21</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-05:30PM/03:00PM-05:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 116</td>
                            <td>Panitikang Pilipino</td>
                            <td>BSCS 2-CS21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BSCS 2-CS21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>21</td>
                            <td>5</td>
                            <td>26</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- DIGITAL ARTS & ENTERTAINMENT MULTIMEDIA COMPUTING -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : DA-EMC21</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BSEMC-DA 2-DA-EMC21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EM 272</td>
                            <td>Data Structures and Algorithms</td>
                            <td>BSEMC-DA 2-DA-EMC21</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-05:30PM/03:00PM-05:30PM</td>
                        </tr>
                        <tr>
                            <td>PATHFIT-3</td>
                            <td>Individual/Dual Sports, Creative Dance and Arnis</td>
                            <td>BSEMC-DA 2-DA-EMC21</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T 07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EM 271</td>
                            <td>Introduction to Game Design and Development</td>
                            <td>BSEMC-DA 2-DA-EMC21</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:30AM-12:00PM/09:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>IC-JEEP 110</td>
                            <td>JEEP Start 1</td>
                            <td>BSEMC-DA 2-DA-EMC21</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 116</td>
                            <td>Panitikang Pilipino</td>
                            <td>BSEMC-DA 2-DA-EMC21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BSEMC-DA 2-DA-EMC21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EM 273</td>
                            <td>Principles of 2D Animation</td>
                            <td>BSEMC-DA 2-DA-EMC21</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>W 08:00AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 107</td>
                            <td>Science, Technology and Society</td>
                            <td>BSEMC-DA 2-DA-EMC21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>20</td>
                            <td>6</td>
                            <td>26</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- GRADUATE PROGRAMS - DBA -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : DBA (Second Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DBA 911A</td>
                            <td>Dissertation Writing 1</td>
                            <td>DBA 2-DBA</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>DBA 911B</td>
                            <td>Dissertation Writing 2</td>
                            <td>DBA 2-DBA</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>12</td>
                            <td>0</td>
                            <td>12</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- GRADUATE PROGRAMS - DMOM -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : DMOM (Second Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DM 920-A</td>
                            <td>Dissertation Writing 1</td>
                            <td>DM-OM 2-DMOM</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>DM 920-B</td>
                            <td>Dissertation Writing 2</td>
                            <td>DM-OM 2-DMOM</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>12</td>
                            <td>0</td>
                            <td>12</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- FINANCIAL MANAGEMENT SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-secondary">SECTION : FM21</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-secondary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GE 114</td>
                            <td>Balarila ng Wikang Pilipino</td>
                            <td>BSBA-FM 2-FM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BACC 211</td>
                            <td>Basic Micro-economics</td>
                            <td>BSBA-FM 2-FM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>BACC 212</td>
                            <td>Good Governance and Corporate Social Responsibility</td>
                            <td>BSBA-FM 2-FM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PPEC 210</td>
                            <td>Human Behavior in Organization</td>
                            <td>BSBA-FM 2-FM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>FMPEC 210</td>
                            <td>Mutual Fund</td>
                            <td>BSBA-FM 2-FM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BSBA-FM 2-FM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 102</td>
                            <td>Readings in Philippine History</td>
                            <td>BSBA-FM 2-FM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>THEO 110</td>
                            <td>Religions, Religious Experiences and Spirituality</td>
                            <td>BSBA-FM 2-FM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 109</td>
                            <td>Rizal Life and Works</td>
                            <td>BSBA-FM 2-FM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>CBMEC 210</td>
                            <td>Strategic Management</td>
                            <td>BSBA-FM 2-FM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 01:30PM-04:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>30</td>
                            <td>0</td>
                            <td>30</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- HOTEL MANAGEMENT SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">SECTION : HM21</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GE 106</td>
                            <td>Arts Appreciation</td>
                            <td>BSHM 2-HM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 114</td>
                            <td>Balarila ng Wikang Pilipino</td>
                            <td>BSHM 2-HM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BSHM 2-HM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PATHFIT-3</td>
                            <td>Individual/Dual Sports, Creative Dance and Arnis</td>
                            <td>BSHM 2-HM21</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>TH 01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>HMPE 212</td>
                            <td>Philippine Regional Cuisine with Lab</td>
                            <td>BSHM 2-HM21</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-08:30PM/06:00PM-08:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>THC 214</td>
                            <td>Philippine Tourism, Geography and Culture with Educational Tour</td>
                            <td>BSHM 2-HM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>THC 213</td>
                            <td>Risk Management as Applied to Safety, Security and Sanitation</td>
                            <td>BSHM 2-HM21</td>
                            <td>3</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 107</td>
                            <td>Science, Technology and Society</td>
                            <td>BSHM 2-HM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>22</td>
                            <td>4</td>
                            <td>23</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ELEMENTARY SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : HONESTY (Grade 2)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MTTG-COMPUTER 2</td>
                            <td>Computer</td>
                            <td>GS 2-HONESTY</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T/TH 02:00PM-03:00PM/02:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-ENGLISH 2</td>
                            <td>English</td>
                            <td>GS 2-HONESTY</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W/TH/F 11:00AM-12:00PM/11:00AM-12:00PM/11:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-FILIPINO 2</td>
                            <td>Filipino</td>
                            <td>GS 2-HONESTY</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/W/TH 09:00AM-10:00AM/09:00AM-10:00AM/09:00AM-10:00AM/09:00AM-10:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-REL ED 2</td>
                            <td>Good Manners and Right Conduct with Religious Education</td>
                            <td>GS 2-HONESTY</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/TH/F 02:00PM-03:00PM/01:00PM-02:00PM/01:00PM-02:00PM/01:00PM-02:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-HRGP 2</td>
                            <td>Homeroom and Guidance Program</td>
                            <td>GS 2-HONESTY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M 07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-MKB 2</td>
                            <td>Makabansa</td>
                            <td>GS 2-HONESTY</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>T/W/TH/F 07:30AM-08:30AM/07:30AM-08:30AM/07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-MATH 2</td>
                            <td>Mathematics</td>
                            <td>GS 2-HONESTY</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/TH/F 11:00AM-12:00PM/11:00AM-12:00PM/10:00AM-11:00PM/10:00AM-11:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-RAW 2</td>
                            <td>Reading and Writing Laboratory</td>
                            <td>GS 2-HONESTY</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td></td>
                            <td>F 02:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-SCIENCE 2</td>
                            <td>Science</td>
                            <td>GS 2-HONESTY</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/W/F 10:00AM-11:00AM/10:00AM-11:00AM/10:00AM-11:00AM/09:00AM-10:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-SPEECH 2</td>
                            <td>Speech</td>
                            <td>GS 2-HONESTY</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td></td>
                            <td>M 01:00PM-02:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>26</td>
                            <td>2</td>
                            <td>28</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- HUMAN RESOURCE MANAGEMENT -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : HRMGT21</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>IC-RES 130</td>
                            <td>Elements of Research</td>
                            <td>BSBA-HRMGT 2-HRMGT21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PPEC 210</td>
                            <td>Human Behavior in Organization</td>
                            <td>BSBA-HRMGT 2-HRMGT21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>CBMEC 210</td>
                            <td>Strategic Management</td>
                            <td>BSBA-HRMGT 2-HRMGT21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 04:30PM-07:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>9</td>
                            <td>0</td>
                            <td>9</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- INDUSTRIAL ENGINEERING -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">SECTION : IE21</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BSIE 2-IE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="table-light">
                            <td>BES 210</td>
                            <td>Computer-Aided Drafting</td>
                            <td>BSIE 2-IE21</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td>M/TH 06:00PM-09:00PM/06:00PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>IEA 210</td>
                            <td>Financial Accounting</td>
                            <td>BSIE 2-IE21</td>
                            <td>5</td>
                            <td>0</td>
                            <td>5</td>
                            <td></td>
                            <td>M/TH 09:30AM-12:00PM/09:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PATHFIT-3</td>
                            <td>Individual/Dual Sports, Creative Dance and Arnis</td>
                            <td>BSIE 2-IE21</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>IEP 210</td>
                            <td>Industrial Materials Processes</td>
                            <td>BSIE 2-IE21</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-04:30PM/01:30PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IEP 212</td>
                            <td>Industrial Organization and Management</td>
                            <td>BSIE 2-IE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>MAT 210</td>
                            <td>Integral Calculus</td>
                            <td>BSIE 2-IE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NPS 210</td>
                            <td>Physics for Engineers (Calculus Based)</td>
                            <td>BSIE 2-IE21</td>
                            <td>3</td>
                            <td>1</td>
                            <td>4</td>
                            <td></td>
                            <td>M/TH 01:30PM-04:30PM/01:30PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>IEP 211</td>
                            <td>Statistical Analysis for Industrial Engineering 2 with Software</td>
                            <td>BSIE 2-IE21</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>T/T/F/F 11:00AM-12:00PM/12:00PM-01:30PM/11:00AM-12:00PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>23</td>
                            <td>5</td>
                            <td>28</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- INFORMATION TECHNOLOGY SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-dark">SECTION : IT21</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-dark text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BSIT 2-IT21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IT 272</td>
                            <td>Data Structures & Algorithms</td>
                            <td>BSIT 2-IT21</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 12:30PM-03:00PM/12:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>PATHFIT-3</td>
                            <td>Individual/Dual Sports, Creative Dance and Arnis</td>
                            <td>BSIT 2-IT21</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M 09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IC-JEEP 110</td>
                            <td>JEEP Start 1</td>
                            <td>BSIT 2-IT21</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>IT 270-EL1</td>
                            <td>Object Oriented Programming</td>
                            <td>BSIT 2-IT21</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-05:30PM/03:00PM-05:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 116</td>
                            <td>Panitikang Pilipino</td>
                            <td>BSIT 2-IT21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BSIT 2-IT21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IT 271</td>
                            <td>Quantitative Methods</td>
                            <td>BSIT 2-IT21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>GE 107</td>
                            <td>Science, Technology and Society</td>
                            <td>BSIT 2-IT21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>21</td>
                            <td>5</td>
                            <td>26</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- LAW SCHOOL SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-danger">SECTION : JD2</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-danger text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>JD 701</td>
                            <td>Agency, Trust and Partnership Law</td>
                            <td>JD 2-JD2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M 07:30PM-09:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>JD 603</td>
                            <td>Civil Procedure 2</td>
                            <td>JD 2-JD2</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T 06:30PM-09:30PM</td>
                        </tr>
                        <tr>
                            <td>JD 702</td>
                            <td>Corporation and Basic Securities Law</td>
                            <td>JD 2-JD2</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>TH 05:30PM-08:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>JD 601</td>
                            <td>Criminal Procedure</td>
                            <td>JD 2-JD2</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 06:30PM-09:30PM</td>
                        </tr>
                        <tr>
                            <td>JD 801</td>
                            <td>Labor Law and Social Legislation</td>
                            <td>JD 2-JD2</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/F 05:30PM-07:30PM/05:30PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>JD 306</td>
                            <td>Public International Law</td>
                            <td>JD 2-JD2</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>TH/F 08:30PM-09:30PM/07:30PM-09:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>18</td>
                            <td>0</td>
                            <td>18</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- GRADUATE THESIS SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : MAEM (Master of Arts in Educational Management)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MAEM 651A</td>
                            <td>Thesis Writing 1</td>
                            <td>MAEM 2-MAEM</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 08:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MAEM 513A</td>
                            <td>Thesis Writing 1</td>
                            <td>MAEM 2-MAEM</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>MAEM 651B</td>
                            <td>Thesis Writing 2</td>
                            <td>MAEM 2-MAEM</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MAEM 513B</td>
                            <td>Thesis Writing 2</td>
                            <td>MAEM 2-MAEM</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>12</td>
                            <td>0</td>
                            <td>12</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- MARKETING MANAGEMENT -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-secondary">SECTION : MM21</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-secondary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GE 114</td>
                            <td>Balarila ng Wikang Pilipino</td>
                            <td>BSBA-MM 2-MM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BACC 211</td>
                            <td>Basic Micro-economics</td>
                            <td>BSBA-MM 2-MM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>IC-RES 130</td>
                            <td>Elements of Research</td>
                            <td>BSBA-MM 2-MM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BACC 212</td>
                            <td>Good Governance and Corporate Social Responsibility</td>
                            <td>BSBA-MM 2-MM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BSBA-MM 2-MM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 102</td>
                            <td>Readings in Philippine History</td>
                            <td>BSBA-MM 2-MM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>THEO 110</td>
                            <td>Religions, Religious Experiences and Spirituality</td>
                            <td>BSBA-MM 2-MM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 109</td>
                            <td>Rizal Life and Works</td>
                            <td>BSBA-MM 2-MM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>CBMEC 210</td>
                            <td>Strategic Management</td>
                            <td>BSBA-MM 2-MM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>27</td>
                            <td>0</td>
                            <td>27</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- MARKETING MANAGEMENT MM22 -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-secondary">SECTION : MM22</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-secondary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GE 114</td>
                            <td>Balarila ng Wikang Pilipino</td>
                            <td>BSBA-MM 2-MM22</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BACC 211</td>
                            <td>Basic Micro-economics</td>
                            <td>BSBA-MM 2-MM22</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>IC-RES 130</td>
                            <td>Elements of Research</td>
                            <td>BSBA-MM 2-MM22</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BACC 212</td>
                            <td>Good Governance and Corporate Social Responsibility</td>
                            <td>BSBA-MM 2-MM22</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>PPEC 210</td>
                            <td>Human Behavior in Organization</td>
                            <td>BSBA-MM 2-MM22</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BSBA-MM 2-MM22</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 102</td>
                            <td>Readings in Philippine History</td>
                            <td>BSBA-MM 2-MM22</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>THEO 110</td>
                            <td>Religions, Religious Experiences and Spirituality</td>
                            <td>BSBA-MM 2-MM22</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 109</td>
                            <td>Rizal Life and Works</td>
                            <td>BSBA-MM 2-MM22</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>27</td>
                            <td>0</td>
                            <td>27</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- GRADUATE PROGRAMS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : MPA (Master of Public Administration)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PA 516A</td>
                            <td>Thesis Writing 1</td>
                            <td>MPA 2-MPA</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PA 516B</td>
                            <td>Thesis Writing 2</td>
                            <td>MPA 2-MPA</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- NURSING SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : N21 (BSN Second Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NCM 213</td>
                            <td>Care of Mother, Child, Adolescent (Well Clients)</td>
                            <td>BSN 2-N21</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>TH 01:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 213 RLE</td>
                            <td>Care of Mother, Child, Adolescent (Well Clients) (255 Hours)</td>
                            <td>BSN 2-N21</td>
                            <td>0</td>
                            <td>5</td>
                            <td>5</td>
                            <td></td>
                            <td>M/M/T/W/TH 08:00AM-04:00PM/06:00PM-09:00PM/08:00AM-04:00PM/08:00AM-04:00PM/06:00PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>NSTP1-ROVER</td>
                            <td>Civic Welfare Training Service 1</td>
                            <td>BSN 2-N21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:30PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 210</td>
                            <td>Community Health Nursing 1 (Individual and Family as Clients)</td>
                            <td>BSN 2-N21</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>TH 07:00AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>NCM 210 RLE</td>
                            <td>Community Health Nursing 1 (Individual and Family as Clients) (102 Hours)</td>
                            <td>BSN 2-N21</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td>TH 09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BSN 2-N21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>F 06:00PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>PATHFIT-3</td>
                            <td>Individual/Dual Sports, Creative Dance and Arnis</td>
                            <td>BSN 2-N21</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>F 01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 211</td>
                            <td>Nutrition and Diet Therapy</td>
                            <td>BSN 2-N21</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>F 07:00AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>NCM 211 LAB</td>
                            <td>Nutrition and Diet Therapy</td>
                            <td>BSN 2-N21</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td></td>
                            <td>F 09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 212</td>
                            <td>Pharmacology</td>
                            <td>BSN 2-N21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>F 03:00PM-06:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>19</td>
                            <td>8</td>
                            <td>27</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ADDITIONAL GRADUATE PROGRAMS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : MSPE (Master of Science in Physical Education)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MSPE 651A</td>
                            <td>Thesis Writing 1</td>
                            <td>MSPE 2-MSPE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MSPE 514A</td>
                            <td>Thesis Writing 1</td>
                            <td>MSPE 2-MSPE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>MSPE 651B</td>
                            <td>Thesis Writing 2</td>
                            <td>MSPE 2-MSPE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MSPE 514B</td>
                            <td>Thesis Writing 2</td>
                            <td>MSPE 2-MSPE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>12</td>
                            <td>0</td>
                            <td>12</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- OPERATIONS MANAGEMENT -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : OM21 (Operations Management)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PPEC 210</td>
                            <td>Human Behavior in Organization</td>
                            <td>BSBA-OM 2-OM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>CBMEC 210</td>
                            <td>Strategic Management</td>
                            <td>BSBA-OM 2-OM21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- DOCTORAL PROGRAMS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-danger">SECTION : PHD (Doctor of Philosophy)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-danger text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PhD 820-A</td>
                            <td>Dissertation Writing 1</td>
                            <td>PHD 2-PHD</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td>S 07:00AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PhD 820-B</td>
                            <td>Dissertation Writing 2</td>
                            <td>PHD 2-PHD</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td>S 01:00PM-07:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>12</td>
                            <td>0</td>
                            <td>12</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ELEMENTARY SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : PIETY (Grade 2)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MTTG-COMPUTER 2</td>
                            <td>Computer</td>
                            <td>GS 2-PIETY</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>TH/F 07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-ENGLISH 2</td>
                            <td>English</td>
                            <td>GS 2-PIETY</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/TH/F 01:00PM-02:00PM/01:00PM-02:00PM/01:00PM-02:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-FILIPINO 2</td>
                            <td>Filipino</td>
                            <td>GS 2-PIETY</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/W/F 10:00AM-11:00AM/10:00AM-11:00AM/10:00AM-11:00AM/09:00AM-10:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-REL ED 2</td>
                            <td>Good Manners and Right Conduct with Religious Education</td>
                            <td>GS 2-PIETY</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>T/W/TH/F 02:00PM-03:00PM/07:30AM-08:30AM/02:00PM-03:00PM/02:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-HRGP 2</td>
                            <td>Homeroom and Guidance Program</td>
                            <td>GS 2-PIETY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M 07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-MKB 2</td>
                            <td>Makabansa</td>
                            <td>GS 2-PIETY</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/W/TH 09:00AM-10:00AM/09:00AM-10:00AM/09:00AM-10:00AM/09:00AM-10:00AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-MATH 2</td>
                            <td>Mathematics</td>
                            <td>GS 2-PIETY</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/W/TH/F 01:00PM-02:00PM/11:00AM-12:00PM/11:00AM-12:00PM/11:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-RAW 2</td>
                            <td>Reading and Writing Laboratory</td>
                            <td>GS 2-PIETY</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td></td>
                            <td>T 07:30AM-08:30AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-SCIENCE 2</td>
                            <td>Science</td>
                            <td>GS 2-PIETY</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T/TH/F 11:00AM-12:00PM/11:00AM-12:00PM/10:00AM-11:00AM/10:00AM-11:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-SPEECH 2</td>
                            <td>Speech</td>
                            <td>GS 2-PIETY</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td></td>
                            <td>M 02:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>26</td>
                            <td>2</td>
                            <td>28</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- HIGH SCHOOL SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">SECTION : ST. ANDREW (Grade 12 STEM-ABP)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GSKHRG12 A</td>
                            <td>Career Development Program 3</td>
                            <td>ACAD-STEM-ABP 2-ST. ANDREW</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>W 07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ENGL 210</td>
                            <td>English for Academic and Professional Purposes</td>
                            <td>ACAD-STEM-ABP 2-ST. ANDREW</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>FIL 211</td>
                            <td>Filipino sa Piling Larangan</td>
                            <td>ACAD-STEM-ABP 2-ST. ANDREW</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>T/F 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BIO 220</td>
                            <td>General Biology 1</td>
                            <td>ACAD-STEM-ABP 2-ST. ANDREW</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>CHEM 225</td>
                            <td>General Chemistry 1</td>
                            <td>ACAD-STEM-ABP 2-ST. ANDREW</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PHYSICS 222</td>
                            <td>General Physics 1</td>
                            <td>ACAD-STEM-ABP 2-ST. ANDREW</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>IMMERSION 216</td>
                            <td>Inquiries, Investigation, and Immersion</td>
                            <td>ACAD-STEM-ABP 2-ST. ANDREW</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>RES 214</td>
                            <td>Practical Research 1</td>
                            <td>ACAD-STEM-ABP 2-ST. ANDREW</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr>
                            <td>PRE-CAL 218</td>
                            <td>Pre-Calculus</td>
                            <td>ACAD-STEM-ABP 2-ST. ANDREW</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ADDITIONAL NURSING SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : N22 (BSN Second Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NCM 213</td>
                            <td>Care of Mother, Child, Adolescent (Well Clients)</td>
                            <td>BSN 2-N22</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>TH 01:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 213 RLE</td>
                            <td>Care of Mother, Child, Adolescent (Well Clients) (255 Hours)</td>
                            <td>BSN 2-N22</td>
                            <td>0</td>
                            <td>5</td>
                            <td>5</td>
                            <td></td>
                            <td>M/M/T/W/TH 08:00AM-04:00PM/06:00PM-09:00PM/08:00AM-04:00PM/08:00AM-04:00PM/06:00PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>NSTP1-ROVER</td>
                            <td>Civic Welfare Training Service 1</td>
                            <td>BSN 2-N22</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:30PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 210</td>
                            <td>Community Health Nursing 1 (Individual and Family as Clients)</td>
                            <td>BSN 2-N22</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>TH 07:00AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>NCM 210 RLE</td>
                            <td>Community Health Nursing 1 (Individual and Family as Clients) (102 Hours)</td>
                            <td>BSN 2-N22</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td>TH 09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BSN 2-N22</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>PATHFIT-3</td>
                            <td>Individual/Dual Sports, Creative Dance and Arnis</td>
                            <td>BSN 2-N22</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>F 01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 211</td>
                            <td>Nutrition and Diet Therapy</td>
                            <td>BSN 2-N22</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>F 07:00AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>NCM 211 LAB</td>
                            <td>Nutrition and Diet Therapy</td>
                            <td>BSN 2-N22</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td></td>
                            <td>F 09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 212</td>
                            <td>Pharmacology</td>
                            <td>BSN 2-N22</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>F 03:00PM-06:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>19</td>
                            <td>8</td>
                            <td>27</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- COMPACT NURSING SECTIONS SUMMARY -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">NURSING SECTIONS N23-N29 (BSN Second Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Section</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>N23</td>
                            <td>27</td>
                            <td>19</td>
                            <td>8</td>
                            <td>Morning schedule focus</td>
                        </tr>
                        <tr class="table-light">
                            <td>N24</td>
                            <td>27</td>
                            <td>19</td>
                            <td>8</td>
                            <td>Morning schedule focus</td>
                        </tr>
                        <tr>
                            <td>N25</td>
                            <td>27</td>
                            <td>19</td>
                            <td>8</td>
                            <td>Friday schedule focus</td>
                        </tr>
                        <tr class="table-light">
                            <td>N26</td>
                            <td>27</td>
                            <td>19</td>
                            <td>8</td>
                            <td>Friday schedule focus</td>
                        </tr>
                        <tr>
                            <td>N27</td>
                            <td>27</td>
                            <td>19</td>
                            <td>8</td>
                            <td>Afternoon schedule focus</td>
                        </tr>
                        <tr class="table-light">
                            <td>N28</td>
                            <td>24</td>
                            <td>16</td>
                            <td>8</td>
                            <td>Reduced course load</td>
                        </tr>
                        <tr>
                            <td>N29</td>
                            <td>3</td>
                            <td>3</td>
                            <td>0</td>
                            <td>Pharmacology only</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- HIGH SCHOOL ABM SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : ST. BONAVENTURE (Grade 12 ABM-ABP)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ETHICS 223</td>
                            <td>Business Ethics and Social Responsibility</td>
                            <td>ACAD-ABM-ABP 2-ST. BONAVENTURE</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BMATH 225</td>
                            <td>Business Math</td>
                            <td>ACAD-ABM-ABP 2-ST. BONAVENTURE</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>GSKHRG12 A</td>
                            <td>Career Development Program 3</td>
                            <td>ACAD-ABM-ABP 2-ST. BONAVENTURE</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>W 07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EMTECH 212</td>
                            <td>Empowerment Technologies</td>
                            <td>ACAD-ABM-ABP 2-ST. BONAVENTURE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>T/F 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>ENTREP 213</td>
                            <td>Entrepreneurship</td>
                            <td>ACAD-ABM-ABP 2-ST. BONAVENTURE</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FUNDA 218</td>
                            <td>Fundamentals of Accountancy, Business and Management 1</td>
                            <td>ACAD-ABM-ABP 2-ST. BONAVENTURE</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>IMMERSION 216</td>
                            <td>Inquiries, Investigation, and Immersion</td>
                            <td>ACAD-ABM-ABP 2-ST. BONAVENTURE</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MGT 221</td>
                            <td>Organization and Management</td>
                            <td>ACAD-ABM-ABP 2-ST. BONAVENTURE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr>
                            <td>RES 214</td>
                            <td>Practical Research 1</td>
                            <td>ACAD-ABM-ABP 2-ST. BONAVENTURE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>6</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- HIGH SCHOOL GRADE 8 SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : ST. CATHERINE (Grade 8)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MTTG-AP 8</td>
                            <td>Araling Panlipunan</td>
                            <td>HS 2-ST. CATHERINE</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>T/W/TH/F 07:30AM-08:30AM/07:30AM-08:30AM/03:00PM-04:00PM/03:00PM-04:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-COMPUTER 8</td>
                            <td>Computer</td>
                            <td>HS 2-ST. CATHERINE</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td></td>
                            <td>T 11:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-ENGLISH 8</td>
                            <td>English</td>
                            <td>HS 2-ST. CATHERINE</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W/TH/F 11:00AM-12:00PM/11:00AM-12:00PM/11:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-FILIPINO 8</td>
                            <td>Filipino</td>
                            <td>HS 2-ST. CATHERINE</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td>M/T/W/TH 02:00PM-03:00PM/02:00PM-03:00PM/02:00PM-03:00PM/02:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-HRGP 8</td>
                            <td>Homeroom and Guidance Program</td>
                            <td>HS 2-ST. CATHERINE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M 07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-MATH 8</td>
                            <td>Mathematics</td>
                            <td>HS 2-ST. CATHERINE</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>T/W/TH/F 01:00PM-02:00PM/01:00PM-02:00PM/01:00PM-02:00PM/01:00PM-02:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-MUSIC 8</td>
                            <td>Music and Arts</td>
                            <td>HS 2-ST. CATHERINE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M/T 09:00AM-10:00AM/09:00AM-10:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-PEH 8</td>
                            <td>Physical Education and Health</td>
                            <td>HS 2-ST. CATHERINE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>TH/F 07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr>
                            <td>MTTG-RAW 8</td>
                            <td>Reading and Writing Laboratory</td>
                            <td>HS 2-ST. CATHERINE</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td></td>
                            <td>M 11:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-SCIENCE 8</td>
                            <td>Science</td>
                            <td>HS 2-ST. CATHERINE</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td>M/F 03:00PM-04:00PM/02:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-SCI LAB 8</td>
                            <td>Science Laboratory</td>
                            <td>HS 2-ST. CATHERINE</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td></td>
                            <td>T/W 03:00PM-04:00PM/03:00PM-04:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-SPEECH 8</td>
                            <td>Speech</td>
                            <td>HS 2-ST. CATHERINE</td>
                            <td>0</td>
                            <td>1</td>
                            <td>1</td>
                            <td></td>
                            <td>M 01:00PM-02:00PM</td>
                        </tr>
                        <tr>
                            <td>MTTG-TLE 8</td>
                            <td>Technology and Livelihood Education</td>
                            <td>HS 2-ST. CATHERINE</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/W/TH/F 10:00AM-11:00AM/09:00AM-10:00AM/09:00AM-10:00AM/09:00AM-10:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MTTG-REL ED 8</td>
                            <td>Values Education with Religious Education</td>
                            <td>HS 2-ST. CATHERINE</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>T/W/TH/F 10:00AM-11:00AM/10:00AM-11:00AM/10:00AM-11:00AM/10:00AM-11:00AM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>24</td>
                            <td>9</td>
                            <td>33</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- HIGH SCHOOL HUMSS SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">SECTION : ST. JUDE (Grade 12 HUMSS-ABP)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GSKHRG12 A</td>
                            <td>Career Development Program 3</td>
                            <td>ACAD-HUMSS-ABP 2-ST. JUDE</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>W 07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ENGL 222</td>
                            <td>Creative Writing</td>
                            <td>ACAD-HUMSS-ABP 2-ST. JUDE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>DISS 218</td>
                            <td>Discipline and Ideas in Social Sciences</td>
                            <td>ACAD-HUMSS-ABP 2-ST. JUDE</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EMTECH 212</td>
                            <td>Empowerment Technologies</td>
                            <td>ACAD-HUMSS-ABP 2-ST. JUDE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>T/F 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>ENTREP 213</td>
                            <td>Entrepreneurship</td>
                            <td>ACAD-HUMSS-ABP 2-ST. JUDE</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IMMERSION 216</td>
                            <td>Inquiries, Investigation, and Immersion</td>
                            <td>ACAD-HUMSS-ABP 2-ST. JUDE</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>RELIGION 221</td>
                            <td>Introduction to World Religions and Belief Systems</td>
                            <td>ACAD-HUMSS-ABP 2-ST. JUDE</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>POL SCI 220</td>
                            <td>Philippine Politics and Governance</td>
                            <td>ACAD-HUMSS-ABP 2-ST. JUDE</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>RES 214</td>
                            <td>Practical Research 1</td>
                            <td>ACAD-HUMSS-ABP 2-ST. JUDE</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>6</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ADDITIONAL HIGH SCHOOL SECTIONS SUMMARY -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-secondary">ADDITIONAL HIGH SCHOOL SECTIONS (Grade 8 & Grade 12)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-secondary text-white">
                        <tr>
                            <th>Section</th>
                            <th>Grade Level</th>
                            <th>Academic Track</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ST. FAUSTINA</td>
                            <td>Grade 8</td>
                            <td>General</td>
                            <td>33</td>
                            <td>24</td>
                            <td>9</td>
                            <td>Comprehensive core subjects</td>
                        </tr>
                        <tr class="table-light">
                            <td>ST. PEDRO CALUNGSOD</td>
                            <td>Grade 12</td>
                            <td>HUMSS-ABP</td>
                            <td>1</td>
                            <td>6</td>
                            <td>0</td>
                            <td>Humanities & Social Sciences</td>
                        </tr>
                        <tr>
                            <td>ST. RAPHAEL</td>
                            <td>Grade 2</td>
                            <td>Preschool</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>Early childhood development</td>
                        </tr>
                        <tr class="table-light">
                            <td>ST. RITA</td>
                            <td>Grade 8</td>
                            <td>General</td>
                            <td>33</td>
                            <td>24</td>
                            <td>9</td>
                            <td>Core academic subjects</td>
                        </tr>
                        <tr>
                            <td>ST. STEPHEN</td>
                            <td>Grade 12</td>
                            <td>STEM-ABP</td>
                            <td>1</td>
                            <td>2</td>
                            <td>0</td>
                            <td>Science, Technology, Engineering, Math</td>
                        </tr>
                        <tr class="table-light">
                            <td>ST. TIMOTHY</td>
                            <td>Grade 12</td>
                            <td>ABM-ABP</td>
                            <td>1</td>
                            <td>6</td>
                            <td>0</td>
                            <td>Accountancy, Business, Management</td>
                        </tr>
                        <tr>
                            <td>ST. TITUS</td>
                            <td>Grade 12</td>
                            <td>STEM-ABP</td>
                            <td>1</td>
                            <td>2</td>
                            <td>0</td>
                            <td>Science, Technology, Engineering, Math</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- DETAILED ST. TITUS SECTION -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : ST. TITUS (Grade 12 STEM-ABP)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GSKHRG12 A</td>
                            <td>Career Development Program 3</td>
                            <td>ACAD-STEM-ABP 2-ST. TITUS</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>W 07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ENGL 210</td>
                            <td>English for Academic and Professional Purposes</td>
                            <td>ACAD-STEM-ABP 2-ST. TITUS</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>FIL 211</td>
                            <td>Filipino sa Piling Larangan</td>
                            <td>ACAD-STEM-ABP 2-ST. TITUS</td>
                            <td>0</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M/TH 01:00PM-03:00PM/01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BIO 220</td>
                            <td>General Biology 1</td>
                            <td>ACAD-STEM-ABP 2-ST. TITUS</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>CHEM 225</td>
                            <td>General Chemistry 1</td>
                            <td>ACAD-STEM-ABP 2-ST. TITUS</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:30AM/07:30AM-09:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PHYSICS 222</td>
                            <td>General Physics 1</td>
                            <td>ACAD-STEM-ABP 2-ST. TITUS</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>IMMERSION 216</td>
                            <td>Inquiries, Investigation, and Immersion</td>
                            <td>ACAD-STEM-ABP 2-ST. TITUS</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>T/F 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>RES 214</td>
                            <td>Practical Research 1</td>
                            <td>ACAD-STEM-ABP 2-ST. TITUS</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 03:00PM-05:00PM/03:00PM-05:00PM</td>
                        </tr>
                        <tr>
                            <td>PRE-CAL 218</td>
                            <td>Pre-Calculus</td>
                            <td>ACAD-STEM-ABP 2-ST. TITUS</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                            <td>M/TH 10:00AM-12:00PM/10:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- TEACHER EDUCATION SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-danger">SECTION : TE20 (Teacher Education Second Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-danger text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BPED 202</td>
                            <td>Anatomy & Physiology of Human Movement</td>
                            <td>BPED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FILED 203</td>
                            <td>Ang Filipino sa Kurikulum ng Batayang Edukasyon</td>
                            <td>BSE-F 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 09:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>PED 204</td>
                            <td>Building and Enhancing New Literacies Across the Curriculum</td>
                            <td>BPED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PED 204</td>
                            <td>Building and Enhancing New Literacies Across the Curriculum</td>
                            <td>BSNED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>PED 204</td>
                            <td>Building and Enhancing New Literacies Across the Curriculum</td>
                            <td>BEED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PED 204</td>
                            <td>Building and Enhancing New Literacies Across the Curriculum</td>
                            <td>BSE-F 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BPED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BEED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BSNED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BSE-F 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>EECE 1</td>
                            <td>Content and Pedagogy in the Mother Tongue Based Multilingual Education</td>
                            <td>BEED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SNED 205</td>
                            <td>Curriculum for Special Education (Elective)</td>
                            <td>BSNED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>BPED 203</td>
                            <td>Emergency Preparedness & Response Management</td>
                            <td>BPED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FILED 204</td>
                            <td>Estruktura ng Wikang Filipino</td>
                            <td>BSE-F 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>SNED 206</td>
                            <td>Gifted and Talented Learners</td>
                            <td>BSNED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PATHFIT-3</td>
                            <td>Individual/Dual Sports, Creative Dance and Arnis</td>
                            <td>BPED 2-TE20</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T 10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>PATHFIT-3</td>
                            <td>Individual/Dual Sports, Creative Dance and Arnis</td>
                            <td>BEED 2-TE20</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T 10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PATHFIT-3</td>
                            <td>Individual/Dual Sports, Creative Dance and Arnis</td>
                            <td>BSNED 2-TE20</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T 10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>PATHFIT-3</td>
                            <td>Individual/Dual Sports, Creative Dance and Arnis</td>
                            <td>BSE-F 2-TE20</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T 10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SNED 202</td>
                            <td>Learners with Developmental Disabilities</td>
                            <td>BSNED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>SNED 204</td>
                            <td>Learners with Emotional, Behavioral, Language nad Communication Disabilities</td>
                            <td>BSNED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SNED 203</td>
                            <td>Learners with Sensory and Physical Disabilities</td>
                            <td>BSNED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>FILED 205</td>
                            <td>Pagtuturo at Pagtataya ng Makrong Kasanayang Pangwika</td>
                            <td>BSE-F 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FILED 202</td>
                            <td>Panimulang Linggwistika</td>
                            <td>BSE-F 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>BPED 318</td>
                            <td>Personal, Community and Environmental Health</td>
                            <td>BPED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 01:30PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BSNED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BEED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BSE-F 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BPED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BPED 201</td>
                            <td>Philosophical and Socio-anthropological Foundations of Physical Education and Sports</td>
                            <td>BPED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 01:00PM-04:00PM</td>
                        </tr>
                        <tr>
                            <td>BPED 204</td>
                            <td>Physiology of Exercise and Physical Activity</td>
                            <td>BPED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 107</td>
                            <td>Science, Technology and Society</td>
                            <td>BSNED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>GE 107</td>
                            <td>Science, Technology and Society</td>
                            <td>BSE-F 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 107</td>
                            <td>Science, Technology and Society</td>
                            <td>BEED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>GE 107</td>
                            <td>Science, Technology and Society</td>
                            <td>BPED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EED 203</td>
                            <td>Teaching Literacy in the Elementary Grades through Literature</td>
                            <td>BEED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>EED 205</td>
                            <td>Teaching Science in the Intermediate Grades (Physics, Earth and Space Science)</td>
                            <td>BEED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EED 204</td>
                            <td>Teaching Social Studies in Primary Grades (Philippine History and Government)</td>
                            <td>BEED 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr>
                            <td>FILED 206</td>
                            <td>Ugnayan ng Wika, Kultura at Lipunan</td>
                            <td>BSE-F 2-TE20</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>113</td>
                            <td>0</td>
                            <td>113</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- TOURISM MANAGEMENT SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">TOURISM MANAGEMENT SECTIONS (Second Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Section</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Courses</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TM21</td>
                            <td>21</td>
                            <td>20</td>
                            <td>1</td>
                            <td>Philippine Gastronomical Tourism, Tourism Geography</td>
                            <td>Full course load</td>
                        </tr>
                        <tr class="table-light">
                            <td>TM22</td>
                            <td>21</td>
                            <td>20</td>
                            <td>1</td>
                            <td>Philippine Gastronomical Tourism, Tourism Geography</td>
                            <td>Full course load</td>
                        </tr>
                        <tr>
                            <td>TM23</td>
                            <td>11</td>
                            <td>10</td>
                            <td>1</td>
                            <td>Philippine Gastronomical Tourism, Tourism Geography</td>
                            <td>Reduced course load</td>
                        </tr>
                        <tr class="table-light">
                            <td>TM24</td>
                            <td>8</td>
                            <td>7</td>
                            <td>1</td>
                            <td>Local Practicum, Philippine Gastronomical Tourism</td>
                            <td>Practicum focus</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- THIRD YEAR SECTIONS SUMMARY -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-dark">THIRD YEAR SECTIONS OVERVIEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-dark text-white">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A31</td>
                            <td>BSA (Accountancy)</td>
                            <td>30</td>
                            <td>28</td>
                            <td>2</td>
                            <td>Advanced accounting, auditing, taxation</td>
                        </tr>
                        <tr class="table-light">
                            <td>AB31</td>
                            <td>BSSE-AB (Social Entrepreneurship)</td>
                            <td>8</td>
                            <td>5</td>
                            <td>3</td>
                            <td>Business plan implementation, market research</td>
                        </tr>
                        <tr>
                            <td>AIS31</td>
                            <td>BSAIS (Accounting Information Systems)</td>
                            <td>12</td>
                            <td>11</td>
                            <td>1</td>
                            <td>Information systems, project management</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ADDITIONAL TEACHER EDUCATION SECTION -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : TE21 (Teacher Education Second Year - Secondary)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SCIED 206</td>
                            <td>Anatomy and Physiology</td>
                            <td>BSE-S 2-TE21</td>
                            <td>3</td>
                            <td>1</td>
                            <td>4</td>
                            <td></td>
                            <td>T/F 09:00AM-12:00PM/09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SSED 206</td>
                            <td>Asian Studies</td>
                            <td>BSE-SS 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>PED 204</td>
                            <td>Building and Enhancing New Literacies Across the Curriculum</td>
                            <td>BSE-S 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PED 204</td>
                            <td>Building and Enhancing New Literacies Across the Curriculum</td>
                            <td>BSE-E 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>PED 204</td>
                            <td>Building and Enhancing New Literacies Across the Curriculum</td>
                            <td>BSE-M 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PED 204</td>
                            <td>Building and Enhancing New Literacies Across the Curriculum</td>
                            <td>BSE-SS 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>ENGED 205</td>
                            <td>Children and Adolescent Literature</td>
                            <td>BSE-E 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATHED 203</td>
                            <td>College and Advanced Algebra</td>
                            <td>BSE-M 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr>
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BSE-M 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BSE-S 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BSE-E 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BSE-SS 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>SCIED 205A</td>
                            <td>Fluid Mechanics for Teachers</td>
                            <td>BSE-S 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SCIED 205</td>
                            <td>Fluids Mechanics</td>
                            <td>BSE-S 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>SSED 203</td>
                            <td>Geography 2 (Physical Geography)</td>
                            <td>BSE-SS 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PATHFIT-3</td>
                            <td>Individual/Dual Sports, Creative Dance and Arnis</td>
                            <td>BSE-S 2-TE21</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>TH 10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>PATHFIT-3</td>
                            <td>Individual/Dual Sports, Creative Dance and Arnis</td>
                            <td>BSE-E 2-TE21</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>TH 10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PATHFIT-3</td>
                            <td>Individual/Dual Sports, Creative Dance and Arnis</td>
                            <td>BSE-SS 2-TE21</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>TH 10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>PATHFIT-3</td>
                            <td>Individual/Dual Sports, Creative Dance and Arnis</td>
                            <td>BSE-M 2-TE21</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>TH 10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ENGED 204</td>
                            <td>Introduction to Linguistics</td>
                            <td>BSE-E 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>IC-JEEP 120</td>
                            <td>JEEP Accelerate 1</td>
                            <td>BSE-S 2-TE21</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IC-JEEP 120</td>
                            <td>JEEP Accelerate 1</td>
                            <td>BSE-SS 2-TE21</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>ENGED 206</td>
                            <td>Language, Culture and Society</td>
                            <td>BSE-E 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATHED 206</td>
                            <td>Logic and Set Theory</td>
                            <td>BSE-M 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 07:30AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>SSED 208</td>
                            <td>Micro Economics</td>
                            <td>BSE-SS 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ENGED 206A</td>
                            <td>Mythology and Folklore</td>
                            <td>BSE-E 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>ENGED 202</td>
                            <td>Mythology and Folklore</td>
                            <td>BSE-E 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SCIED 204</td>
                            <td>Organic Chemistry</td>
                            <td>BSE-S 2-TE21</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>M/TH 01:30PM-06:00PM/01:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>SCIED 204A</td>
                            <td>Organic Chemistry for Teachers</td>
                            <td>BSE-S 2-TE21</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>M/TH 01:30PM-06:00PM/01:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BSE-M 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BSE-S 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BSE-E 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BSE-SS 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SSED 204</td>
                            <td>Places and Landscape in a Changing World</td>
                            <td>BSE-SS 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 01:30PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>MATHED 205</td>
                            <td>Plane and Solid Geometry</td>
                            <td>BSE-M 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATHED 205A</td>
                            <td>Plane and Solid Geometry 1</td>
                            <td>BSE-M 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>ENGED 204A</td>
                            <td>Principles and Theories of Language Acquisition</td>
                            <td>BSE-E 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 107</td>
                            <td>Science, Technology and Society</td>
                            <td>BSE-E 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr>
                            <td>GE 107</td>
                            <td>Science, Technology and Society</td>
                            <td>BSE-S 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 107</td>
                            <td>Science, Technology and Society</td>
                            <td>BSE-M 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr>
                            <td>GE 107</td>
                            <td>Science, Technology and Society</td>
                            <td>BSE-SS 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ENGED 205A</td>
                            <td>Speech and Stage Arts</td>
                            <td>BSE-E 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>ENGED 207</td>
                            <td>Speech and Theater Arts</td>
                            <td>BSE-E 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ENGED 203</td>
                            <td>Structures of English</td>
                            <td>BSE-E 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>ENGED 207A</td>
                            <td>Technical Writing</td>
                            <td>BSE-E 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MATHED 204</td>
                            <td>Trigonometry</td>
                            <td>BSE-M 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>SSED 205</td>
                            <td>World History 1 (Ancient and Medieval Era)</td>
                            <td>BSE-SS 2-TE21</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>131</td>
                            <td>11</td>
                            <td>142</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- DETAILED THIRD YEAR SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : A31 (BSA Third Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ACC 315</td>
                            <td>Accounting for Government and Non-Profit Organizations</td>
                            <td>BSA 3-A31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>AUD 311</td>
                            <td>Auditing and Assurance Principles</td>
                            <td>BSA 3-A31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>AUD 312</td>
                            <td>Governance, Business Ethics, Risk Management and Internal Control</td>
                            <td>BSA 3-A31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 06:00PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>TAX 311</td>
                            <td>Income Taxation</td>
                            <td>BSA 3-A31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>ACC 314</td>
                            <td>Intermediate Accounting 3</td>
                            <td>BSA 3-A31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IBT 311</td>
                            <td>International Business Trade</td>
                            <td>BSA 3-A31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 119</td>
                            <td>Living in an IT Era (with MOS Certificate)</td>
                            <td>BSA 3-A31</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>THEO 140</td>
                            <td>Social Teachings of the Catholic Church</td>
                            <td>BSA 3-A31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>STAT 311</td>
                            <td>Statistical Analysis with Software Application</td>
                            <td>BSA 3-A31</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>T/T/F/F 03:00PM-04:30PM/07:30AM-09:00AM/03:00PM-04:30PM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MACC 317</td>
                            <td>Strategic Cost Management</td>
                            <td>BSA 3-A31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>28</td>
                            <td>2</td>
                            <td>30</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">SECTION : AB31 (BSSE-AB Third Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ECC 313</td>
                            <td>Business Plan Implementation I: Product Development and Market Analysis</td>
                            <td>BSSE-AB 3-AB31</td>
                            <td>2</td>
                            <td>3</td>
                            <td>5</td>
                            <td></td>
                            <td>S 01:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ECC 314</td>
                            <td>Market Research and Consumer Behavior</td>
                            <td>BSSE-AB 3-AB31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>5</td>
                            <td>3</td>
                            <td>8</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : AIS31 (BSAIS Third Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>AIS 312</td>
                            <td>Information Systems Operations and Maintenance</td>
                            <td>BSAIS 3-AIS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 119</td>
                            <td>Living in an IT Era (with MOS Certificate)</td>
                            <td>BSAIS 3-AIS31</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>AIS 311</td>
                            <td>Project Management - Accounting Information System</td>
                            <td>BSAIS 3-AIS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>THEO 140</td>
                            <td>Social Teachings of the Catholic Church</td>
                            <td>BSAIS 3-AIS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>11</td>
                            <td>1</td>
                            <td>12</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ADDITIONAL THIRD YEAR SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : AS30 (Economics & Political Science Third Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ECONOMICS 314</td>
                            <td>Agricultural Economics</td>
                            <td>AB-ECON 3-AS30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 06:00PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ECONOMICS 311</td>
                            <td>Financial Economic</td>
                            <td>AB-ECON 3-AS30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>POLISCIE 301</td>
                            <td>Introduction to International Relations</td>
                            <td>AB-PS 3-AS30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ECONOMICS 321</td>
                            <td>Labor Economics</td>
                            <td>AB-ECON 3-AS30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr>
                            <td>ECONOMICS 302</td>
                            <td>Macroeconomics</td>
                            <td>AB-ECON 3-AS30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ECONOMICS 301</td>
                            <td>Mathematical Economics</td>
                            <td>AB-ECON 3-AS30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>POLISCIE 321</td>
                            <td>Organizational Development</td>
                            <td>AB-PS 3-AS30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>POLISCIE 304</td>
                            <td>Philippine Public Administration</td>
                            <td>AB-PS 3-AS30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>POLISCIE 322</td>
                            <td>Philippine Social Movements</td>
                            <td>AB-PS 3-AS30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>27</td>
                            <td>0</td>
                            <td>27</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">SECTION : AS31 (Multi-Program Third Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>COMM 314</td>
                            <td>Advertising Principles and Practices</td>
                            <td>AB-C 3-AS31</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SINFIL 312</td>
                            <td>Berbal at Di-berbal na Komunikasyon sa Filipino</td>
                            <td>BSF 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>CHEMBIO III</td>
                            <td>Biomolecules</td>
                            <td>BS PSYCH 3-AS31</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>T/F 07:30AM-12:00PM/07:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BIOPHYS</td>
                            <td>Biophysics</td>
                            <td>BSBIO 3-AS31</td>
                            <td>2</td>
                            <td>2</td>
                            <td>4</td>
                            <td></td>
                            <td>M/TH 08:00AM-12:00PM/08:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>BIOL 310</td>
                            <td>Cell and Molecular Biology</td>
                            <td>BSBIO 3-AS31</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>M/TH 01:30PM-06:00PM/01:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>COMM 312</td>
                            <td>Communication Planning</td>
                            <td>AB-C 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>COMM 310</td>
                            <td>Communication Research</td>
                            <td>AB-C 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ELS 314</td>
                            <td>Computer-Mediated Communication</td>
                            <td>AB-ELS 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>BIOL 312</td>
                            <td>Developmental Biology</td>
                            <td>BSBIO 3-AS31</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>T/F 04:30PM-09:00PM/04:30PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SINFIL 310</td>
                            <td>Diskurso</td>
                            <td>BSF 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>IC-RES 130</td>
                            <td>Elements of Research</td>
                            <td>BSBIO 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IC-RES 130</td>
                            <td>Elements of Research</td>
                            <td>AB-C 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>ELM 321</td>
                            <td>ELT Approaches and Methodology</td>
                            <td>AB-ELS 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 07:30AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PSY 311</td>
                            <td>Field Methods in Psychology</td>
                            <td>BS PSYCH 3-AS31</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>M/T/TH/F 10:30AM-12:00PM/01:30PM-03:00PM/10:30AM-12:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>FLANG 315</td>
                            <td>Foreign Language</td>
                            <td>AB-ELS 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BIOL 311</td>
                            <td>General Physiology</td>
                            <td>BSBIO 3-AS31</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>T/W/F 01:00PM-04:00PM/09:00AM-12:00PM/01:00PM-04:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 118</td>
                            <td>Great Books</td>
                            <td>BSF 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 118</td>
                            <td>Great Books</td>
                            <td>AB-ECON 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 118</td>
                            <td>Great Books</td>
                            <td>AB-ELS 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 118</td>
                            <td>Great Books</td>
                            <td>BHUMSERV 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 118</td>
                            <td>Great Books</td>
                            <td>BSBIO 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>HUMSERV 320</td>
                            <td>Group Work witih Children and Adolescents</td>
                            <td>BHUMSERV 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>HUMSERV 314</td>
                            <td>Human Services Delivery Systems and Interventions</td>
                            <td>BHUMSERV 3-AS31</td>
                            <td>3</td>
                            <td>3</td>
                            <td>6</td>
                            <td></td>
                            <td>W/W 07:30AM-12:00PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PSY 312</td>
                            <td>Industrial/Organizational Psychology</td>
                            <td>BS PSYCH 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>ELS 311</td>
                            <td>Introduction to Language, Society and Culture</td>
                            <td>AB-ELS 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 03:00PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>COMM 311</td>
                            <td>Introduction to Theater Arts</td>
                            <td>AB-C 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>SINFIL 313</td>
                            <td>Kalakaran at Tunguhin sa Pag-aaral ng Wika</td>
                            <td>BSF 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>F 06:00PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SINFIL 314</td>
                            <td>Kritikal ng Pagbasa at Pagsulat sa Displina</td>
                            <td>BSF 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>ELS 312</td>
                            <td>Language of Literary Texts</td>
                            <td>AB-ELS 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ELS 313</td>
                            <td>Language of Non-Literary Texts</td>
                            <td>AB-ELS 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>HUMSERV 321</td>
                            <td>Life Skills for Learning and Innovation</td>
                            <td>BHUMSERV 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>HUMSERV 322</td>
                            <td>Media and Information Literacy for Helping Professionals</td>
                            <td>BHUMSERV 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>HUMSERV 315</td>
                            <td>Mental Health and Psychosocial Support in Emergency Settings</td>
                            <td>BHUMSERV 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SINFIL 317</td>
                            <td>Metodo at Pananaliksi sa Wikang Filipino</td>
                            <td>BSF 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>ELS 410</td>
                            <td>Multimodal Communication</td>
                            <td>AB-ELS 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SINFIL 315</td>
                            <td>Pagsasaling Pampanitikan</td>
                            <td>BSF 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 03:00PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>SINFIL 316</td>
                            <td>Pagsasaling Pangmidya</td>
                            <td>BSF 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>HUMSERV 325</td>
                            <td>Personality</td>
                            <td>BHUMSERV 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BS PSYCH 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>POLCOMM 315</td>
                            <td>Public Information Principles and Practices</td>
                            <td>AB-C 3-AS31</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>COMM 313</td>
                            <td>Public Relation Principles and Practices</td>
                            <td>AB-C 3-AS31</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 109</td>
                            <td>Rizal Life and Works</td>
                            <td>AB-C 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 04:30PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>GE 109</td>
                            <td>Rizal Life and Works</td>
                            <td>BHUMSERV 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 04:30PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 109</td>
                            <td>Rizal Life and Works</td>
                            <td>AB-ECON 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 04:30PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>GE 109</td>
                            <td>Rizal Life and Works</td>
                            <td>BSBIO 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 04:30PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ELS 310</td>
                            <td>Stylistics</td>
                            <td>AB-ELS 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 10:30AM-01:30PM</td>
                        </tr>
                        <tr>
                            <td>SINFIL 311</td>
                            <td>Wika, Lipunan at Kultura</td>
                            <td>BSF 3-AS31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T 06:00PM-09:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>137</td>
                            <td>18</td>
                            <td>155</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ADDITIONAL THIRD YEAR SECTIONS SUMMARY -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-secondary">ADDITIONAL THIRD YEAR SECTIONS OVERVIEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-secondary text-white">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>AS33</td>
                            <td>BS Psychology</td>
                            <td>14</td>
                            <td>12</td>
                            <td>2</td>
                            <td>Field methods, industrial psychology, social psychology</td>
                        </tr>
                        <tr class="table-light">
                            <td>BLIS31</td>
                            <td>Bachelor of Library & Information Science</td>
                            <td>24</td>
                            <td>22</td>
                            <td>2</td>
                            <td>Digital libraries, information management, web programming</td>
                        </tr>
                        <tr>
                            <td>CE31</td>
                            <td>BSCE (Civil Engineering)</td>
                            <td>31</td>
                            <td>29</td>
                            <td>2</td>
                            <td>Mechanical engineering, dynamics, geology, mechanics</td>
                        </tr>
                        <tr class="table-light">
                            <td>CE32</td>
                            <td>BSCE (Civil Engineering)</td>
                            <td>9</td>
                            <td>9</td>
                            <td>0</td>
                            <td>Literature focus, reduced course load</td>
                        </tr>
                        <tr>
                            <td>CRIM3A</td>
                            <td>BSCRIM (Criminology)</td>
                            <td>41</td>
                            <td>38</td>
                            <td>5</td>
                            <td>Forensic science, criminal law, corrections, investigation</td>
                        </tr>
                        <tr class="table-light">
                            <td>CS-DS31</td>
                            <td>BSCS-DS (Computer Science - Data Science)</td>
                            <td>6</td>
                            <td>5</td>
                            <td>1</td>
                            <td>Philippine history, technopreneurship</td>
                        </tr>
                                                 <tr>
                             <td>CS31</td>
                             <td>BSCS (Computer Science)</td>
                             <td>24</td>
                             <td>21</td>
                             <td>3</td>
                             <td>Automata theory, computer architecture, software engineering</td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>

    <!-- SPECIALIZED THIRD YEAR SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : DA-EMC31 (Digital Arts - Computer Graphics)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>EM 375</td>
                            <td>Computer Graphics Programming</td>
                            <td>BSEMC-DA 3-DA-EMC31</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:30PM-03:00PM/12:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>THEO 140</td>
                            <td>Social Teachings of the Catholic Church</td>
                            <td>BSEMC-DA 3-DA-EMC31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>5</td>
                            <td>1</td>
                            <td>6</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : DA31 (Digital Arts - Advanced Animation)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DA 373</td>
                            <td>Advanced 2D Animation</td>
                            <td>BSEMC-DA 3-DA31</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-05:30PM/03:00PM-05:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>DA 372</td>
                            <td>Advanced Sound Production</td>
                            <td>BSEMC-DA 3-DA31</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>W 08:00AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>EM 376</td>
                            <td>Introduction to Motion Graphics</td>
                            <td>BSEMC-DA 3-DA31</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 12:30PM-03:00PM/12:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>DA 371</td>
                            <td>Modelling and Rigging</td>
                            <td>BSEMC-DA 3-DA31</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-08:30PM/06:00PM-08:30PM</td>
                        </tr>
                        <tr>
                            <td>EM 374</td>
                            <td>Non-linear Video Editing</td>
                            <td>BSEMC-DA 3-DA31</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-05:30PM/03:00PM-05:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>10</td>
                            <td>5</td>
                            <td>15</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">SECTION : FM31 (Financial Management - Morning)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PPEC 313</td>
                            <td>ASEAN Language</td>
                            <td>BSBA-FM 3-FM31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PPEC 311</td>
                            <td>Business Disputes and Settlement</td>
                            <td>BSBA-FM 3-FM31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>PPEC 314</td>
                            <td>Business Process Outsourcing</td>
                            <td>BSBA-FM 3-FM31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BACC 311</td>
                            <td>Business Research</td>
                            <td>BSBA-FM 3-FM31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 09:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BSBA-FM 3-FM31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PPEC 312</td>
                            <td>Design Thinking and Business Case Writing</td>
                            <td>BSBA-FM 3-FM31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>PATHFIT 2</td>
                            <td>Exercise-based Fitness Activities</td>
                            <td>BSBA-FM 3-FM31</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M 07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BACC 312</td>
                            <td>International Business and Trade (with Bloomberg Certification-CDMP Part 1)</td>
                            <td>BSBA-FM 3-FM31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>IC-JEEP 120</td>
                            <td>JEEP Accelerate 1</td>
                            <td>BSBA-FM 3-FM31</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 116</td>
                            <td>Panitikang Pilipino</td>
                            <td>BSBA-FM 3-FM31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>BACC 321</td>
                            <td>Thesis Writing</td>
                            <td>BSBA-FM 3-FM31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>29</td>
                            <td>3</td>
                            <td>32</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : FM32 (Financial Management - Evening)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PPEC 313</td>
                            <td>ASEAN Language</td>
                            <td>BSBA-FM 3-FM32</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PPEC 311</td>
                            <td>Business Disputes and Settlement</td>
                            <td>BSBA-FM 3-FM32</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>PPEC 314</td>
                            <td>Business Process Outsourcing</td>
                            <td>BSBA-FM 3-FM32</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BACC 311</td>
                            <td>Business Research</td>
                            <td>BSBA-FM 3-FM32</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 01:30PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>THEO 130</td>
                            <td>Community of Disciples</td>
                            <td>BSBA-FM 3-FM32</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PPEC 312</td>
                            <td>Design Thinking and Business Case Writing</td>
                            <td>BSBA-FM 3-FM32</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>PATHFIT 2</td>
                            <td>Exercise-based Fitness Activities</td>
                            <td>BSBA-FM 3-FM32</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M 01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BACC 312</td>
                            <td>International Business and Trade (with Bloomberg Certification-CDMP Part 1)</td>
                            <td>BSBA-FM 3-FM32</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>IC-JEEP 120</td>
                            <td>JEEP Accelerate 1</td>
                            <td>BSBA-FM 3-FM32</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 116</td>
                            <td>Panitikang Pilipino</td>
                            <td>BSBA-FM 3-FM32</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>26</td>
                            <td>3</td>
                            <td>29</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ADDITIONAL SPECIALIZED SECTIONS SUMMARY -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-dark">ADDITIONAL SPECIALIZED THIRD YEAR SECTIONS OVERVIEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-dark text-white">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GD-EMC31</td>
                            <td>BSEMC-GD (Game Development - Computer Graphics)</td>
                            <td>9</td>
                            <td>8</td>
                            <td>1</td>
                            <td>Applied mathematics, computer graphics, social teachings</td>
                        </tr>
                        <tr class="table-light">
                            <td>GD31</td>
                            <td>BSEMC-GD (Game Development - Advanced)</td>
                            <td>12</td>
                            <td>10</td>
                            <td>2</td>
                            <td>Game physics, mathematics, networking, programming</td>
                        </tr>
                        <tr>
                            <td>HM31</td>
                            <td>BSHM (Hotel Management - Morning)</td>
                            <td>27</td>
                            <td>26</td>
                            <td>1</td>
                            <td>Catering management, foreign language, multicultural diversity</td>
                        </tr>
                        <tr class="table-light">
                            <td>HM32</td>
                            <td>BSHM (Hotel Management - Evening)</td>
                            <td>27</td>
                            <td>26</td>
                            <td>1</td>
                            <td>Catering management, foreign language, multicultural diversity</td>
                        </tr>
                        <tr>
                            <td>HM33</td>
                            <td>BSHM (Hotel Management - Weekend)</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>Catering management only, weekend schedule</td>
                        </tr>
                        <tr class="table-light">
                            <td>HRMGT 31</td>
                            <td>BSBA-HRMGT (Human Resource Management)</td>
                            <td>26</td>
                            <td>23</td>
                            <td>3</td>
                            <td>Business disputes, research, personal development</td>
                        </tr>
                        <tr>
                            <td>IA31</td>
                            <td>BSIA (Internal Auditing)</td>
                            <td>15</td>
                            <td>14</td>
                            <td>1</td>
                            <td>Enterprise risk management, internal audit, project management</td>
                        </tr>
                        <tr class="table-light">
                            <td>IE31</td>
                            <td>BSIE (Industrial Engineering)</td>
                            <td>29</td>
                            <td>26</td>
                            <td>3</td>
                            <td>Mechanical engineering, ergonomics, quality control, operations research</td>
                        </tr>
                        <tr>
                            <td>INTEGRITY</td>
                            <td>Grade School 3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>Core subjects: AP, Computer, English, Filipino, MAPE, Math, Science</td>
                        </tr>
                                                 <tr class="table-light">
                             <td>IT31</td>
                             <td>BSIT (Information Technology)</td>
                             <td>15</td>
                             <td>12</td>
                             <td>3</td>
                             <td>Advanced networking, information security, platform technologies</td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>

    <!-- ADDITIONAL INFORMATION TECHNOLOGY SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">ADDITIONAL IT SECTIONS OVERVIEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>IT32</td>
                            <td>BSIT (Information Technology)</td>
                            <td>15</td>
                            <td>12</td>
                            <td>3</td>
                            <td>Advanced networking, information security, platform technologies</td>
                        </tr>
                        <tr class="table-light">
                            <td>IT33</td>
                            <td>BSIT (Information Technology)</td>
                            <td>15</td>
                            <td>12</td>
                            <td>3</td>
                            <td>Advanced networking, information security, platform technologies</td>
                        </tr>
                        <tr>
                            <td>IT34</td>
                            <td>BSIT (Information Technology)</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>Advanced networking only</td>
                        </tr>
                        <tr class="table-light">
                            <td>IT35</td>
                            <td>BSIT (Information Technology)</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>Advanced networking only</td>
                        </tr>
                        <tr>
                            <td>IT36</td>
                            <td>BSIT (Information Technology)</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>Advanced networking only</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- LAW SCHOOL SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-danger">SECTION : JD3 (Law School Third Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-danger text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>JD 710</td>
                            <td>Banking Laws</td>
                            <td>JD 3-JD3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>W 05:30PM-06:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>JD 704</td>
                            <td>Commercial Laws 2</td>
                            <td>JD 3-JD3</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>M/T 05:30PM-07:30PM/05:30PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>JD 308</td>
                            <td>Environmental and Natural Resources Law</td>
                            <td>JD 3-JD3</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>TH 05:30PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>JD 305</td>
                            <td>Laws on Local Government</td>
                            <td>JD 3-JD3</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>T 07:30PM-09:30PM</td>
                        </tr>
                        <tr>
                            <td>JD 104</td>
                            <td>Legal Forms</td>
                            <td>JD 3-JD3</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>TH 07:30PM-09:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>JD 506</td>
                            <td>Private International Law</td>
                            <td>JD 3-JD3</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>F 05:30PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>JD 709</td>
                            <td>Public Private Partnership</td>
                            <td>JD 3-JD3</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>JD 605</td>
                            <td>Special Rules and Proceedings</td>
                            <td>JD 3-JD3</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 06:30PM-09:30PM</td>
                        </tr>
                        <tr>
                            <td>JD 505</td>
                            <td>Torts and Damages</td>
                            <td>JD 3-JD3</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M 07:30PM-09:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>21</td>
                            <td>0</td>
                            <td>21</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ADDITIONAL LAW SCHOOL SECTIONS SUMMARY -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-secondary">ADDITIONAL LAW SCHOOL SECTIONS OVERVIEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-secondary text-white">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>JD3-A</td>
                            <td>JD (Law School)</td>
                            <td>7</td>
                            <td>7</td>
                            <td>0</td>
                            <td>Indigenous peoples law, legal forms, special rules</td>
                        </tr>
                        <tr class="table-light">
                            <td>JD3-B</td>
                            <td>JD (Law School)</td>
                            <td>4</td>
                            <td>4</td>
                            <td>0</td>
                            <td>Commercial laws 2 only</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- OFFICE ADMINISTRATION SECTION -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : LOM31 (Office Administration - Legal Office Management)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>OAPEC 315</td>
                            <td>Ethical, Legal and Regulatory Obligations</td>
                            <td>BSOA-LOM 3-LOM31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>OAPEC 311</td>
                            <td>Human Resource Management</td>
                            <td>BSOA-LOM 3-LOM31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>OAPEC 314</td>
                            <td>International Studies</td>
                            <td>BSOA-LOM 3-LOM31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>OAPEC 312</td>
                            <td>Machine Shorthand 2</td>
                            <td>BSOA-LOM 3-LOM31</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>OAPEC 313</td>
                            <td>Web Design</td>
                            <td>BSOA-LOM 3-LOM31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>13</td>
                            <td>2</td>
                            <td>15</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- MANAGEMENT ACCOUNTING SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">SECTION : MA31 (Management Accounting - Morning)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ACC 315</td>
                            <td>Accounting for Government and Non-Profit Organizations</td>
                            <td>BSMA 3-MA31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>AUD 312</td>
                            <td>Governance, Business Ethics, Risk Management and Internal Control</td>
                            <td>BSMA 3-MA31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>TAX 311</td>
                            <td>Income Taxation</td>
                            <td>BSMA 3-MA31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 06:00PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ACC 314</td>
                            <td>Intermediate Accounting 3</td>
                            <td>BSMA 3-MA31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>IBT 311</td>
                            <td>International Business Trade</td>
                            <td>BSMA 3-MA31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 119</td>
                            <td>Living in an IT Era (with MOS Certificate)</td>
                            <td>BSMA 3-MA31</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>MACC 316</td>
                            <td>Performance Management System</td>
                            <td>BSMA 3-MA31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MACC 318</td>
                            <td>Project Management</td>
                            <td>BSMA 3-MA31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>THEO 140</td>
                            <td>Social Teachings of the Catholic Church</td>
                            <td>BSMA 3-MA31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>STAT 311</td>
                            <td>Statistical Analysis with Software Application</td>
                            <td>BSMA 3-MA31</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>T/W/F 01:30PM-03:00PM/01:30PM-04:30PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>MACC 317</td>
                            <td>Strategic Cost Management</td>
                            <td>BSMA 3-MA31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 10:30AM-01:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MACC 331</td>
                            <td>Strategic Management</td>
                            <td>BSMA 3-MA31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>34</td>
                            <td>2</td>
                            <td>36</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ADDITIONAL MANAGEMENT ACCOUNTING SECTIONS SUMMARY -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">ADDITIONAL MANAGEMENT ACCOUNTING SECTIONS OVERVIEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MA32</td>
                            <td>BSMA (Management Accounting)</td>
                            <td>33</td>
                            <td>31</td>
                            <td>2</td>
                            <td>Government accounting, business ethics, taxation, strategic management</td>
                        </tr>
                        <tr class="table-light">
                            <td>MA33</td>
                            <td>BSMA (Management Accounting)</td>
                            <td>33</td>
                            <td>31</td>
                            <td>2</td>
                            <td>Government accounting, business ethics, taxation, strategic management</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- MARKETING MANAGEMENT SECTIONS SUMMARY -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">MARKETING MANAGEMENT SECTIONS OVERVIEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MM31</td>
                            <td>BSBA-MM (Marketing Management)</td>
                            <td>29</td>
                            <td>26</td>
                            <td>3</td>
                            <td>ASEAN language, business disputes, marketing research, international trade</td>
                        </tr>
                        <tr class="table-light">
                            <td>MM32</td>
                            <td>BSBA-MM (Marketing Management)</td>
                            <td>29</td>
                            <td>26</td>
                            <td>3</td>
                            <td>ASEAN language, business disputes, marketing research, international trade</td>
                        </tr>
                        <tr>
                            <td>MM33</td>
                            <td>BSBA-MM (Marketing Management)</td>
                            <td>3</td>
                            <td>3</td>
                            <td>0</td>
                            <td>Business research only</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- NURSING SECTIONS SUMMARY -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-danger">NURSING SECTIONS OVERVIEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-danger text-white">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>N31</td>
                            <td>BSN (Nursing)</td>
                            <td>26</td>
                            <td>18</td>
                            <td>8</td>
                            <td>Client care, older adult care, nursing research, healthcare ethics</td>
                        </tr>
                        <tr class="table-light">
                            <td>N32</td>
                            <td>BSN (Nursing)</td>
                            <td>26</td>
                            <td>18</td>
                            <td>8</td>
                            <td>Client care, older adult care, nursing research, healthcare ethics</td>
                        </tr>
                        <tr>
                            <td>N33</td>
                            <td>BSN (Nursing)</td>
                            <td>26</td>
                            <td>18</td>
                            <td>8</td>
                            <td>Client care, older adult care, nursing research, healthcare ethics</td>
                        </tr>
                                                 <tr class="table-light">
                             <td>N34</td>
                             <td>BSN (Nursing)</td>
                             <td>26</td>
                             <td>18</td>
                             <td>8</td>
                             <td>Client care, older adult care, nursing research, healthcare ethics</td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>

    <!-- ADDITIONAL NURSING SECTIONS SUMMARY -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">ADDITIONAL NURSING SECTIONS OVERVIEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>N35</td>
                            <td>BSN (Nursing)</td>
                            <td>26</td>
                            <td>18</td>
                            <td>8</td>
                            <td>Client care, older adult care, nursing research, healthcare ethics</td>
                        </tr>
                        <tr class="table-light">
                            <td>N36</td>
                            <td>BSN (Nursing)</td>
                            <td>26</td>
                            <td>18</td>
                            <td>8</td>
                            <td>Client care, older adult care, nursing research, healthcare ethics</td>
                        </tr>
                        <tr>
                            <td>N37</td>
                            <td>BSN (Nursing)</td>
                            <td>26</td>
                            <td>18</td>
                            <td>8</td>
                            <td>Client care, older adult care, nursing research, healthcare ethics</td>
                        </tr>
                        <tr class="table-light">
                            <td>N38</td>
                            <td>BSN (Nursing)</td>
                            <td>26</td>
                            <td>18</td>
                            <td>8</td>
                            <td>Client care, older adult care, nursing research, healthcare ethics</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- OFFICE MANAGEMENT SECTION -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : OM31 (Office Management)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PPEC 314</td>
                            <td>Business Process Outsourcing</td>
                            <td>BSBA-OM 3-OM31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>BACC 311</td>
                            <td>Business Research</td>
                            <td>BSBA-OM 3-OM31</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- GRADE SCHOOL AND HIGH SCHOOL SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">GRADE SCHOOL AND HIGH SCHOOL SECTIONS OVERVIEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PEACE</td>
                            <td>Grade School 3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>Core subjects: AP, Computer, English, Filipino, MAPE, Math, Science</td>
                        </tr>
                        <tr class="table-light">
                            <td>ST. ALOYSIUS</td>
                            <td>High School 3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>Core subjects: AP, Computer, English, Filipino, MAPEH, Math, Science, TLE</td>
                        </tr>
                        <tr>
                            <td>ST. EDITH STEIN</td>
                            <td>High School 3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>Core subjects: AP, Computer, English, Filipino, MAPEH, Math, Science, TLE</td>
                        </tr>
                        <tr class="table-light">
                            <td>ST. JOSEPH</td>
                            <td>High School 3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>Core subjects: AP, Computer, English, Filipino, MAPEH, Math, Science, TLE</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- TEACHER EDUCATION SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">SECTION : TE30 (Teacher Education - Elementary & Secondary)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SNED 311</td>
                            <td>Adapted Physical Education and Recreation, Music and Health</td>
                            <td>BSNED 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PED 308</td>
                            <td>Assessment in Learning 1</td>
                            <td>BSE-SS 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>PED 308</td>
                            <td>Assessment in Learning 1</td>
                            <td>BSE-F 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PED 308</td>
                            <td>Assessment in Learning 1</td>
                            <td>BEED 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>PED 308</td>
                            <td>Assessment in Learning 1</td>
                            <td>BSNED 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SNED 310</td>
                            <td>Behavior Management and Modification</td>
                            <td>BSNED 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>FILED 315</td>
                            <td>Dulaang Filipino</td>
                            <td>BSE-F 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EED 310</td>
                            <td>Edukasyong Pantahanan at Pangkabuhayan (1)</td>
                            <td>BEED 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 08:00AM-11:00AM</td>
                        </tr>
                        <tr>
                            <td>IC-RES 130</td>
                            <td>Elements of Research</td>
                            <td>BSE-SS 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IC-RES 130</td>
                            <td>Elements of Research</td>
                            <td>BSE-F 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>IC-RES 130</td>
                            <td>Elements of Research</td>
                            <td>BEED 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IC-RES 130</td>
                            <td>Elements of Research</td>
                            <td>BSNED 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>SNED 312</td>
                            <td>Instructional Adaptations in Language and Literacy Instruction</td>
                            <td>BSNED 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IC-JEEP 120</td>
                            <td>JEEP Accelerate 1</td>
                            <td>BEED 3-TE30</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>IC-JEEP 120</td>
                            <td>JEEP Accelerate 1</td>
                            <td>BSNED 3-TE30</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IC-JEEP 120</td>
                            <td>JEEP Accelerate 1</td>
                            <td>BSE-F 3-TE30</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>IC-JEEP 120</td>
                            <td>JEEP Accelerate 1</td>
                            <td>BSE-SS 3-TE30</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SSED 312</td>
                            <td>Macro Economics</td>
                            <td>BSE-SS 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>FILED 313</td>
                            <td>Maikling Kuwento at Nobelang Filipino</td>
                            <td>BSE-F 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EED 312</td>
                            <td>Pagturo ng Filipino sa Elementarya (II) Panitikan ng Pilipinas</td>
                            <td>BEED 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>FILED 314</td>
                            <td>Panulaang Filipino</td>
                            <td>BSE-F 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FILED 312</td>
                            <td>Sanaysay at Talumpati</td>
                            <td>BSE-F 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>SSED 314</td>
                            <td>Socio-Cultural Anthropology</td>
                            <td>BSE-SS 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 06:00PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SSED 313</td>
                            <td>Teaching Approaches in Secondary Social Studies</td>
                            <td>BSE-SS 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>EED 313</td>
                            <td>Teaching Arts in the Elementary Grades</td>
                            <td>BEED 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EED 311</td>
                            <td>Teaching English in the Elementary Grades (Language Arts)</td>
                            <td>BEED 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>EED 314</td>
                            <td>Teaching Social Studies in Intermediate Grades (Culture and Basic Geography)</td>
                            <td>BEED 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PED 307</td>
                            <td>The Teacher and the School Curriculum</td>
                            <td>BSE-SS 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>PED 307</td>
                            <td>The Teacher and the School Curriculum</td>
                            <td>BSE-F 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PED 307</td>
                            <td>The Teacher and the School Curriculum</td>
                            <td>BEED 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>PED 307</td>
                            <td>The Teacher and the School Curriculum</td>
                            <td>BSNED 3-TE30</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>81</td>
                            <td>12</td>
                            <td>93</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ADDITIONAL TEACHER EDUCATION AND TOURISM SECTIONS SUMMARY -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-secondary">ADDITIONAL TEACHER EDUCATION AND TOURISM SECTIONS OVERVIEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-secondary text-white">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TE31</td>
                            <td>Teacher Education - Science, English, Math, PE</td>
                            <td>107</td>
                            <td>91</td>
                            <td>16</td>
                            <td>Analytical chemistry, calculus, cell biology, earth science, electricity</td>
                        </tr>
                        <tr class="table-light">
                            <td>TM31</td>
                            <td>BSTM (Tourism Management)</td>
                            <td>24</td>
                            <td>24</td>
                            <td>0</td>
                            <td>Ecotourism, entrepreneurship, foreign language, transportation</td>
                        </tr>
                        <tr>
                            <td>TM32</td>
                            <td>BSTM (Tourism Management)</td>
                            <td>15</td>
                            <td>15</td>
                            <td>0</td>
                            <td>Ecotourism, entrepreneurship, transportation, travel agency</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- FOURTH YEAR SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">FOURTH YEAR SECTIONS OVERVIEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A41</td>
                            <td>BSA (Accountancy)</td>
                            <td>18</td>
                            <td>17</td>
                            <td>1</td>
                            <td>Accountancy research, internship, auditing, operations auditing</td>
                        </tr>
                        <tr class="table-light">
                            <td>AB41</td>
                            <td>BSSE-AB (Social Entrepreneurship - Agri-Aqua)</td>
                            <td>6</td>
                            <td>6</td>
                            <td>0</td>
                            <td>Post-harvest facilities, production intensification, biodiversity</td>
                        </tr>
                        <tr>
                            <td>ACB41</td>
                            <td>BSSE-ACB (Social Entrepreneurship - Arts & Crafts)</td>
                            <td>15</td>
                            <td>15</td>
                            <td>0</td>
                            <td>Crafts creativity, customization, entrepreneurial management, leadership</td>
                        </tr>
                                                 <tr class="table-light">
                             <td>AIS41</td>
                             <td>BSAIS (Accounting Information Systems)</td>
                             <td>18</td>
                             <td>17</td>
                             <td>1</td>
                             <td>Internship, research, data warehousing, ERP, IT management</td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>

    <!-- ADDITIONAL FOURTH YEAR SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">ADDITIONAL FOURTH YEAR SECTIONS OVERVIEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>AS40</td>
                            <td>Multi-Program Fourth Year</td>
                            <td>97</td>
                            <td>90</td>
                            <td>7</td>
                            <td>Bahasa Malaysia, biodiversity, ASEAN communication, eco-politics, field experience</td>
                        </tr>
                        <tr class="table-light">
                            <td>AS41</td>
                            <td>Multi-Program Fourth Year</td>
                            <td>27</td>
                            <td>25</td>
                            <td>2</td>
                            <td>Psychology ethics, practicum, family life, mental health, thesis defense</td>
                        </tr>
                        <tr>
                            <td>BLIS41</td>
                            <td>BLIS (Library Science)</td>
                            <td>12</td>
                            <td>11</td>
                            <td>1</td>
                            <td>Library practice, preservation, thesis writing, IT era</td>
                        </tr>
                        <tr class="table-light">
                            <td>CE41</td>
                            <td>BSCE (Civil Engineering)</td>
                            <td>26</td>
                            <td>20</td>
                            <td>6</td>
                            <td>Civil engineering project, construction methods, geotechnical, hydraulics</td>
                        </tr>
                        <tr>
                            <td>CE42</td>
                            <td>BSCE (Civil Engineering)</td>
                            <td>26</td>
                            <td>20</td>
                            <td>6</td>
                            <td>Civil engineering project, construction methods, geotechnical, hydraulics</td>
                        </tr>
                        <tr class="table-light">
                            <td>CHARITY</td>
                            <td>Grade School 4</td>
                            <td>34</td>
                            <td>32</td>
                            <td>2</td>
                            <td>Core subjects: AP, EPP, English, Filipino, Religious Ed, Math, Music, PE, Science</td>
                        </tr>
                        <tr>
                            <td>CRIM4A</td>
                            <td>BSCRIM (Criminology)</td>
                            <td>27</td>
                            <td>25</td>
                            <td>272</td>
                            <td>Criminal procedure, research, evidence, forensics, OJT, technical English</td>
                        </tr>
                        <tr class="table-light">
                            <td>CRIM4B</td>
                            <td>BSCRIM (Criminology)</td>
                            <td>24</td>
                            <td>23</td>
                            <td>271</td>
                            <td>Criminal procedure, research, evidence, forensics, OJT, technical English</td>
                        </tr>
                        <tr>
                            <td>CRIM4C</td>
                            <td>BSCRIM (Criminology)</td>
                            <td>24</td>
                            <td>23</td>
                            <td>271</td>
                            <td>Criminal procedure, research, evidence, forensics, OJT, technical English</td>
                        </tr>
                        <tr class="table-light">
                            <td>CS41</td>
                            <td>BSCS (Computer Science)</td>
                            <td>12</td>
                            <td>9</td>
                            <td>3</td>
                            <td>Computational science, operating systems, research, thesis writing</td>
                        </tr>
                        <tr>
                            <td>DA-EMC41</td>
                            <td>BSEMC-DA (Digital Arts)</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>Living in IT era with MOS certificate</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- DETAILED FOURTH YEAR SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : AS40 (Multi-Program Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>WIKA 413</td>
                            <td>Bahasa Malaysia</td>
                            <td>BSF 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 03:00PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FREE ELECTIVE II</td>
                            <td>Biodiversity in Caraga II</td>
                            <td>BSBIO 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 09:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>COMM 413</td>
                            <td>Communication in ASEAN Setting</td>
                            <td>AB-C 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>POLISCIE 424</td>
                            <td>Eco-Politics</td>
                            <td>AB-PS 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>FIELD 1</td>
                            <td>Field Experience 1</td>
                            <td>BHUMSERV 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W/W 12:00PM-01:30PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FLANG 416</td>
                            <td>Foreign Language</td>
                            <td>AB-ELS 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>BIOL 411</td>
                            <td>Freshwater Ecology</td>
                            <td>BSBIO 4-AS40</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>T/F 01:30PM-06:00PM/01:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>POLISCIE 414_</td>
                            <td>International Law</td>
                            <td>AB-PS 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>ELC 415</td>
                            <td>Introduction to Pragmatics</td>
                            <td>AB-ELS 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ELC 411</td>
                            <td>Language and Gender</td>
                            <td>AB-ELS 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-12:00PM/09:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 119</td>
                            <td>Living in an IT Era (with MOS Certificate)</td>
                            <td>AB-C 4-AS40</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 119</td>
                            <td>Living in an IT Era (with MOS Certificate)</td>
                            <td>AB-ECON 4-AS40</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>GE 119</td>
                            <td>Living in an IT Era (with MOS Certificate)</td>
                            <td>AB-PS 4-AS40</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>POLISCIE 211</td>
                            <td>Local Government in the Philippines</td>
                            <td>AB-PS 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 09:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>FIL-ELEK 412</td>
                            <td>Malikhaing Pagsulat</td>
                            <td>BSF 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ECONOMICS 413</td>
                            <td>Managerial Economics</td>
                            <td>AB-ECON 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>BIOL 410</td>
                            <td>Marine Ecology</td>
                            <td>BSBIO 4-AS40</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>M/TH 07:30AM-12:00PM/07:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FIL-ELEK 411</td>
                            <td>Pagsasalin</td>
                            <td>BSF 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 09:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>COMM 410</td>
                            <td>Peace Communication</td>
                            <td>AB-C 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ELC 413</td>
                            <td>Philippine English</td>
                            <td>AB-ELS 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>POLISCIE 423</td>
                            <td>Political Economics</td>
                            <td>AB-PS 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>POLECON 423</td>
                            <td>Political Economics</td>
                            <td>AB-ECON 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>COMM 412</td>
                            <td>Political Economy of Communication</td>
                            <td>AB-C 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ELC 414</td>
                            <td>Psychology of Language</td>
                            <td>AB-ELS 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>ECONOMICS 412</td>
                            <td>Public Economics</td>
                            <td>AB-ECON 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PSY 420</td>
                            <td>Research in Psychology 2</td>
                            <td>BS PSYCH 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 09:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>SINFIL 410</td>
                            <td>Tesis Depensa</td>
                            <td>BSF 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>CAPSTONE 2</td>
                            <td>Thesis Writing: Defense</td>
                            <td>AB-C 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 09:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>CAPSTONE 1</td>
                            <td>Thesis Writing: Proposal</td>
                            <td>AB-PS 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ELC 412</td>
                            <td>Translation Studies</td>
                            <td>AB-ELS 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr>
                            <td>HISTORY 410</td>
                            <td>World History 1: Ancient and Medieval Era</td>
                            <td>AB-HISTORY 4-AS40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>90</td>
                            <td>7</td>
                            <td>97</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ADDITIONAL FOURTH YEAR SECTIONS SUMMARY -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">ADDITIONAL FOURTH YEAR SECTIONS SUMMARY</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>AS41</td>
                            <td>Multi-Program Fourth Year</td>
                            <td>27</td>
                            <td>25</td>
                            <td>2</td>
                            <td>Psychology ethics, practicum, family life, mental health, thesis defense</td>
                        </tr>
                        <tr class="table-light">
                            <td>BLIS41</td>
                            <td>BLIS (Library Science)</td>
                            <td>12</td>
                            <td>11</td>
                            <td>1</td>
                            <td>Library practice, preservation, thesis writing, IT era</td>
                        </tr>
                        <tr>
                            <td>CE41</td>
                            <td>BSCE (Civil Engineering)</td>
                            <td>26</td>
                            <td>20</td>
                            <td>6</td>
                            <td>Civil engineering project, construction methods, geotechnical, hydraulics</td>
                        </tr>
                        <tr class="table-light">
                            <td>CE42</td>
                            <td>BSCE (Civil Engineering)</td>
                            <td>26</td>
                            <td>20</td>
                            <td>6</td>
                            <td>Civil engineering project, construction methods, geotechnical, hydraulics</td>
                        </tr>
                        <tr>
                            <td>CHARITY</td>
                            <td>Grade School 4</td>
                            <td>34</td>
                            <td>32</td>
                            <td>2</td>
                            <td>Core subjects: AP, EPP, English, Filipino, Religious Ed, Math, Music, PE, Science</td>
                        </tr>
                        <tr class="table-light">
                            <td>CRIM4A</td>
                            <td>BSCRIM (Criminology)</td>
                            <td>27</td>
                            <td>25</td>
                            <td>272</td>
                            <td>Criminal procedure, research, evidence, forensics, OJT, technical English</td>
                        </tr>
                        <tr>
                            <td>CRIM4B</td>
                            <td>BSCRIM (Criminology)</td>
                            <td>24</td>
                            <td>23</td>
                            <td>271</td>
                            <td>Criminal procedure, research, evidence, forensics, OJT, technical English</td>
                        </tr>
                        <tr class="table-light">
                            <td>CRIM4C</td>
                            <td>BSCRIM (Criminology)</td>
                            <td>24</td>
                            <td>23</td>
                            <td>271</td>
                            <td>Criminal procedure, research, evidence, forensics, OJT, technical English</td>
                        </tr>
                        <tr>
                            <td>CS41</td>
                            <td>BSCS (Computer Science)</td>
                            <td>12</td>
                            <td>9</td>
                            <td>3</td>
                            <td>Computational science, operating systems, research, thesis writing</td>
                        </tr>
                                                 <tr class="table-light">
                             <td>DA-EMC41</td>
                             <td>BSEMC-DA (Digital Arts)</td>
                             <td>3</td>
                             <td>2</td>
                             <td>1</td>
                             <td>Living in IT era with MOS certificate</td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>

    <!-- COMPREHENSIVE FOURTH YEAR SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">COMPREHENSIVE FOURTH YEAR SECTIONS OVERVIEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DA41</td>
                            <td>BSEMC-DA (Digital Arts)</td>
                            <td>9</td>
                            <td>7</td>
                            <td>2</td>
                            <td>Advanced 3D animation, packaging, branding, capstone project</td>
                        </tr>
                        <tr class="table-light">
                            <td>FM41</td>
                            <td>BSBA-FM (Financial Management)</td>
                            <td>26</td>
                            <td>26</td>
                            <td>0</td>
                            <td>Bank fraud detection, credit management, financial controllership, global finance</td>
                        </tr>
                        <tr>
                            <td>FM42</td>
                            <td>BSBA-FM (Financial Management)</td>
                            <td>26</td>
                            <td>26</td>
                            <td>0</td>
                            <td>Bank fraud detection, credit management, financial controllership, global finance</td>
                        </tr>
                        <tr class="table-light">
                            <td>GD-EMC41</td>
                            <td>BSEMC-GD (Game Development)</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>Living in IT era with MOS certificate</td>
                        </tr>
                        <tr>
                            <td>GD41</td>
                            <td>BSEMC-GD (Game Development)</td>
                            <td>9</td>
                            <td>7</td>
                            <td>2</td>
                            <td>Game programming, human computer interaction, capstone project</td>
                        </tr>
                        <tr class="table-light">
                            <td>HM41</td>
                            <td>BSHM (Hospitality Management)</td>
                            <td>24</td>
                            <td>19</td>
                            <td>5</td>
                            <td>French cuisine, cultural tourism, MICE, legal aspects, JEEP</td>
                        </tr>
                        <tr>
                            <td>HM42</td>
                            <td>BSHM (Hospitality Management)</td>
                            <td>21</td>
                            <td>16</td>
                            <td>5</td>
                            <td>French cuisine, cultural tourism, MICE, legal aspects, JEEP</td>
                        </tr>
                        <tr class="table-light">
                            <td>HRMGT41</td>
                            <td>BSBA-HRMGT (Human Resource Management)</td>
                            <td>26</td>
                            <td>24</td>
                            <td>2</td>
                            <td>Office management, event management, gender equality, change management</td>
                        </tr>
                        <tr>
                            <td>IA41</td>
                            <td>BSIA (Internal Auditing)</td>
                            <td>21</td>
                            <td>20</td>
                            <td>1</td>
                            <td>Advanced auditing, forensic accounting, internship, research, CFMP 2</td>
                        </tr>
                        <tr class="table-light">
                            <td>IE41</td>
                            <td>BSIE (Industrial Engineering)</td>
                            <td>27</td>
                            <td>20</td>
                            <td>7</td>
                            <td>Cognitive engineering, facilities planning, capstone project, JEEP</td>
                        </tr>
                        <tr>
                            <td>IT41</td>
                            <td>BSIT (Information Technology)</td>
                            <td>15</td>
                            <td>12</td>
                            <td>7</td>
                            <td>Human computer interaction, information assurance, capstone project, CISDP Part 2</td>
                        </tr>
                        <tr class="table-light">
                            <td>IT42</td>
                            <td>BSIT (Information Technology)</td>
                            <td>15</td>
                            <td>12</td>
                            <td>7</td>
                            <td>Human computer interaction, information assurance, capstone project, CISDP Part 2</td>
                        </tr>
                        <tr>
                            <td>JD4</td>
                            <td>JD (Juris Doctor)</td>
                            <td>21</td>
                            <td>21</td>
                            <td>0</td>
                            <td>Civil law review, criminal law review, labor law review, political law review</td>
                        </tr>
                        <tr class="table-light">
                            <td>JD4-A</td>
                            <td>JD (Juris Doctor)</td>
                            <td>9</td>
                            <td>9</td>
                            <td>0</td>
                            <td>CLEP 1, criminal law review, remedial law review</td>
                        </tr>
                        <tr>
                            <td>LOM41</td>
                            <td>BSOA-LOM (Legal Office Management)</td>
                            <td>21</td>
                            <td>19</td>
                            <td>2</td>
                            <td>Accounts management, case management, litigation docket, legal documents</td>
                        </tr>
                        <tr class="table-light">
                            <td>MA41</td>
                            <td>BSMA (Management Accounting)</td>
                            <td>18</td>
                            <td>17</td>
                            <td>1</td>
                            <td>Internship, research, management reporting, strategic tax management, CFMP 2</td>
                        </tr>
                        <tr>
                            <td>MA42</td>
                            <td>BSMA (Management Accounting)</td>
                            <td>18</td>
                            <td>17</td>
                            <td>1</td>
                            <td>Internship, research, management reporting, strategic tax management, CFMP 2</td>
                        </tr>
                        <tr class="table-light">
                            <td>MA43</td>
                            <td>BSMA (Management Accounting)</td>
                            <td>18</td>
                            <td>17</td>
                            <td>1</td>
                            <td>Internship, research, management reporting, strategic tax management, CFMP 2</td>
                        </tr>
                        <tr>
                            <td>MA44</td>
                            <td>BSMA (Management Accounting)</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>Research with CFMP 2 certification</td>
                        </tr>
                        <tr class="table-light">
                            <td>MM41</td>
                            <td>BSBA-MM (Marketing Management)</td>
                            <td>26</td>
                            <td>24</td>
                            <td>2</td>
                            <td>Distribution management, franchising, international marketing, product management</td>
                        </tr>
                        <tr>
                            <td>MM42</td>
                            <td>BSBA-MM (Marketing Management)</td>
                            <td>26</td>
                            <td>24</td>
                            <td>2</td>
                            <td>Distribution management, franchising, international marketing, product management</td>
                        </tr>
                        <tr class="table-light">
                            <td>MM43</td>
                            <td>BSBA-MM (Marketing Management)</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td>Practicum/Integrated Learning (600 hours)</td>
                        </tr>
                        <tr>
                            <td>N41</td>
                            <td>BSN (Nursing)</td>
                            <td>25</td>
                            <td>17</td>
                            <td>8</td>
                            <td>Life threatening conditions, nursing leadership, Philippine literature, history</td>
                        </tr>
                        <tr class="table-light">
                            <td>N42</td>
                            <td>BSN (Nursing)</td>
                            <td>25</td>
                            <td>17</td>
                            <td>8</td>
                            <td>Life threatening conditions, nursing leadership, Philippine literature, history</td>
                        </tr>
                        <tr>
                            <td>N43</td>
                            <td>BSN (Nursing)</td>
                            <td>25</td>
                            <td>17</td>
                            <td>8</td>
                            <td>Life threatening conditions, nursing leadership, Philippine literature, history</td>
                        </tr>
                        <tr class="table-light">
                            <td>N44</td>
                            <td>BSN (Nursing)</td>
                            <td>25</td>
                            <td>17</td>
                            <td>8</td>
                            <td>Life threatening conditions, nursing leadership, Philippine literature, history</td>
                        </tr>
                        <tr>
                            <td>N45</td>
                            <td>BSN (Nursing)</td>
                            <td>25</td>
                            <td>17</td>
                            <td>8</td>
                            <td>Life threatening conditions, nursing leadership, Philippine literature, history</td>
                        </tr>
                        <tr class="table-light">
                            <td>OM41</td>
                            <td>BSBA-OM (Operations Management)</td>
                            <td>18</td>
                            <td>16</td>
                            <td>2</td>
                            <td>Configuration management, ERP, inventory management, quality assurance, ISO 9001:2015</td>
                        </tr>
                        <tr>
                            <td>TE40</td>
                            <td>Teacher Education - Science, Elementary, Special Education</td>
                            <td>60</td>
                            <td>57</td>
                            <td>3</td>
                            <td>Astronomy, field studies, guidance counseling, modern physics, Rizal, technology</td>
                        </tr>
                        <tr class="table-light">
                            <td>TE41</td>
                            <td>Teacher Education - Math, English, Social Studies, Filipino</td>
                            <td>75</td>
                            <td>72</td>
                            <td>3</td>
                            <td>Abstract algebra, assessment, campus journalism, field studies, literary criticism</td>
                        </tr>
                        <tr>
                            <td>TE42</td>
                            <td>Teacher Education - Physical Education, Filipino, Social Studies</td>
                            <td>60</td>
                            <td>58</td>
                            <td>2</td>
                            <td>Motor control, curriculum assessment, drug education, field studies, Rizal</td>
                        </tr>
                        <tr class="table-light">
                            <td>TM41</td>
                            <td>BSTM (Tourism Management)</td>
                            <td>6</td>
                            <td>6</td>
                            <td>0</td>
                            <td>Domestic international practicum (600 hours)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <!-- HIGH SCHOOL FOURTH YEAR SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-danger">HIGH SCHOOL FOURTH YEAR SECTIONS OVERVIEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-danger text-white">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ST. JOAN</td>
                            <td>High School 4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>Core subjects: AP, Computer, English, Filipino, MAPEH, Math, Religious Ed, Science, TLE</td>
                        </tr>
                        <tr class="table-light">
                            <td>ST. KATHARINE</td>
                            <td>High School 4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>Core subjects: AP, Computer, English, Filipino, MAPEH, Math, Religious Ed, Science, TLE</td>
                        </tr>
                        <tr>
                            <td>ST. PHILOMENA</td>
                            <td>High School 4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>Core subjects: AP, Computer, English, Filipino, MAPEH, Math, Religious Ed, Science, TLE</td>
                        </tr>
                        <tr class="table-light">
                            <td>ST. ROSE</td>
                            <td>High School 4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>Core subjects: AP, Computer, English, Filipino, MAPEH, Math, Religious Ed, Science, TLE</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <!-- GRADE SCHOOL FOURTH AND FIFTH YEAR SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-secondary">GRADE SCHOOL FOURTH AND FIFTH YEAR SECTIONS OVERVIEW</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-secondary text-white">
                        <tr>
                            <th>Section</th>
                            <th>Program</th>
                            <th>Total Units</th>
                            <th>Lecture</th>
                            <th>Laboratory</th>
                            <th>Key Features</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>CHARITY</td>
                            <td>Grade School 4</td>
                            <td>34</td>
                            <td>32</td>
                            <td>2</td>
                            <td>Core subjects: AP, EPP, English, Filipino, Religious Ed, Math, Music, PE, Science</td>
                        </tr>
                        <tr class="table-light">
                            <td>UNITY</td>
                            <td>Grade School 4</td>
                            <td>34</td>
                            <td>32</td>
                            <td>2</td>
                            <td>Core subjects: AP, EPP, English, Filipino, Religious Ed, Math, Music, PE, Science</td>
                        </tr>
                        <tr>
                            <td>GENEROSITY</td>
                            <td>Grade School 5</td>
                            <td>34</td>
                            <td>32</td>
                            <td>2</td>
                            <td>Core subjects: AP, EPP, English, Filipino, Religious Ed, Math, Music, PE, Science</td>
                        </tr>
                                                 <tr class="table-light">
                             <td>OBEDIENCE</td>
                             <td>Grade School 5</td>
                             <td>34</td>
                             <td>32</td>
                             <td>2</td>
                             <td>Core subjects: AP, EPP, English, Filipino, Religious Ed, Math, Music, PE, Science</td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>

    <!-- DETAILED FOURTH YEAR SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : DA41 (Digital Arts Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DA 472</td>
                            <td>Advanced 3D Animation and Scripting</td>
                            <td>BSEMC-DA 4-DA41</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:30PM-03:00PM/12:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EM 473</td>
                            <td>Packaging and Branding</td>
                            <td>BSEMC-DA 4-DA41</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-11:30AM/09:00AM-11:30AM</td>
                        </tr>
                        <tr>
                            <td>DA 471</td>
                            <td>Research (Capstone Project 2)</td>
                            <td>BSEMC-DA 4-DA41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>7</td>
                            <td>2</td>
                            <td>9</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- FINANCIAL MANAGEMENT SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : FM41 (Financial Management Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FMPEC 414</td>
                            <td>Bank Fraud and Forgery Detection with Anti-money Laundering Act</td>
                            <td>BSBA-FM 4-FM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FMPMC 412</td>
                            <td>Credit and Collection Management</td>
                            <td>BSBA-FM 4-FM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>FMPEC 415</td>
                            <td>Financial Controllership</td>
                            <td>BSBA-FM 4-FM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FMPEC 413</td>
                            <td>Global Finance and Electronic Banking</td>
                            <td>BSBA-FM 4-FM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>FMPMC 413</td>
                            <td>Investment and Portfolio Management with Bloomberg Certification</td>
                            <td>BSBA-FM 4-FM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FMPEC 411</td>
                            <td>Security Analysis</td>
                            <td>BSBA-FM 4-FM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr>
                            <td>FMPMC 411</td>
                            <td>Strategic Financial Management with SAP Application</td>
                            <td>BSBA-FM 4-FM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PATHFIT-4</td>
                            <td>Team Sports, Folk Dance, Ballroom and Taekwondo</td>
                            <td>BSBA-FM 4-FM41</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M 03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>FMPEC 412</td>
                            <td>Treasury Management</td>
                            <td>BSBA-FM 4-FM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>26</td>
                            <td>0</td>
                            <td>26</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- FM42 SECTION -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : FM42 (Financial Management Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FMPEC 414</td>
                            <td>Bank Fraud and Forgery Detection with Anti-money Laundering Act</td>
                            <td>BSBA-FM 4-FM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FMPMC 412</td>
                            <td>Credit and Collection Management</td>
                            <td>BSBA-FM 4-FM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>FMPEC 415</td>
                            <td>Financial Controllership</td>
                            <td>BSBA-FM 4-FM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FMPEC 413</td>
                            <td>Global Finance and Electronic Banking</td>
                            <td>BSBA-FM 4-FM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>FMPMC 413</td>
                            <td>Investment and Portfolio Management with Bloomberg Certification</td>
                            <td>BSBA-FM 4-FM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FMPEC 411</td>
                            <td>Security Analysis</td>
                            <td>BSBA-FM 4-FM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>FMPMC 411</td>
                            <td>Strategic Financial Management with SAP Application</td>
                            <td>BSBA-FM 4-FM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PATHFIT-4</td>
                            <td>Team Sports, Folk Dance, Ballroom and Taekwondo</td>
                            <td>BSBA-FM 4-FM42</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>M 01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>FMPEC 412</td>
                            <td>Treasury Management</td>
                            <td>BSBA-FM 4-FM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>26</td>
                            <td>0</td>
                            <td>26</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <!-- GAME DEVELOPMENT SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">SECTION : GD-EMC41 (Game Development Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GE 119</td>
                            <td>Living in an IT Era (with MOS Certificate)</td>
                            <td>BSEMC-GD 4-GD-EMC41</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : GD41 (Game Development Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GD 470</td>
                            <td>Game Programming 3</td>
                            <td>BSEMC-GD 4-GD41</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:30AM-12:00PM/09:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EM 474</td>
                            <td>Human Computer Interaction 2</td>
                            <td>BSEMC-GD 4-GD41</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>GD 471</td>
                            <td>Research (Capstone Project 2)</td>
                            <td>BSEMC-GD 4-GD41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>7</td>
                            <td>2</td>
                            <td>9</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- HOSPITALITY MANAGEMENT SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : HM41 (Hospitality Management Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HMPE 417</td>
                            <td>Classical French Cuisine with Laboratory</td>
                            <td>BSHM 4-HM41</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M 10:30AM-03:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>TMPE 411</td>
                            <td>Cultural and Heritage Tourism with Local Tour Guiding</td>
                            <td>BSHM 4-HM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>HPC 418</td>
                            <td>Ergonomics and Facilities Planning for the Hospitality Industry</td>
                            <td>BSHM 4-HM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 01:00PM-04:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 118</td>
                            <td>Great Books</td>
                            <td>BSHM 4-HM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>HPC 419</td>
                            <td>Introduction to MICE with Laboratory</td>
                            <td>BSHM 4-HM41</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>T/T/F/F 09:00AM-10:30AM/08:00AM-09:00AM/09:00AM-10:30AM/08:00AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IC-JEEP 120</td>
                            <td>JEEP Accelerate 1</td>
                            <td>BSHM 4-HM41</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>THC 410</td>
                            <td>Legal Aspects in Tourism and Hospitality</td>
                            <td>BSHM 4-HM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BSHM 4-HM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>19</td>
                            <td>5</td>
                            <td>24</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : HM42 (Hospitality Management Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HMPE 417</td>
                            <td>Classical French Cuisine with Laboratory</td>
                            <td>BSHM 4-HM42</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M 03:30PM-08:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>TMPE 411</td>
                            <td>Cultural and Heritage Tourism with Local Tour Guiding</td>
                            <td>BSHM 4-HM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>HPC 418</td>
                            <td>Ergonomics and Facilities Planning for the Hospitality Industry</td>
                            <td>BSHM 4-HM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 118</td>
                            <td>Great Books</td>
                            <td>BSHM 4-HM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr>
                            <td>HPC 419</td>
                            <td>Introduction to MICE with Laboratory</td>
                            <td>BSHM 4-HM42</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/M/TH/TH 10:30AM-12:00PM/08:00AM-09:00AM/10:30AM-12:00PM/08:00AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IC-JEEP 120</td>
                            <td>JEEP Accelerate 1</td>
                            <td>BSHM 4-HM42</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>THC 410</td>
                            <td>Legal Aspects in Tourism and Hospitality</td>
                            <td>BSHM 4-HM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>16</td>
                            <td>5</td>
                            <td>21</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- HUMAN RESOURCE MANAGEMENT SECTION -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : HRMGT41 (Human Resource Management Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HRMPMC 414</td>
                            <td>Administrative and Office Management</td>
                            <td>BSBA-HRMGT 4-HRMGT41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>HRMPEC 412</td>
                            <td>Event Management</td>
                            <td>BSBA-HRMGT 4-HRMGT41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>HRMPEC 414</td>
                            <td>Gender and Equality at Work and Comparative Perspective</td>
                            <td>BSBA-HRMGT 4-HRMGT41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>HRMPEC 413</td>
                            <td>Management of Change (with Microsoft Certification-MOS Access)</td>
                            <td>BSBA-HRMGT 4-HRMGT41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>HRMPEC 411</td>
                            <td>Project Management</td>
                            <td>BSBA-HRMGT 4-HRMGT41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 04:30PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>HRMPMC 413</td>
                            <td>Recruitment and Selection</td>
                            <td>BSBA-HRMGT 4-HRMGT41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 01:30PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>HRMPMC 411</td>
                            <td>Special Topic: Human Resource Management (with SAP Application)</td>
                            <td>BSBA-HRMGT 4-HRMGT41</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>PATHFIT-4</td>
                            <td>Team Sports, Folk Dance, Ballroom and Taekwondo</td>
                            <td>BSBA-HRMGT 4-HRMGT41</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>TH 09:00AM-10:30AM</td>
                        </tr>
                        <tr>
                            <td>HRMPMC 412</td>
                            <td>Training and Development</td>
                            <td>BSBA-HRMGT 4-HRMGT41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>24</td>
                            <td>2</td>
                            <td>26</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- INTERNAL AUDITING SECTION -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">SECTION : IA41 (Internal Auditing Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>IA 418</td>
                            <td>Advanced Internal Auditing: External Quality</td>
                            <td>BSIA 4-IA41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IA 416</td>
                            <td>Forensic Accounting</td>
                            <td>BSIA 4-IA41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>ACC 431D</td>
                            <td>Internal Auditing Internship</td>
                            <td>BSIA 4-IA41</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td>M/TH 09:00AM-12:00PM/09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ACC 419D</td>
                            <td>Internal Auditing Research (with certification for CFMP 2)</td>
                            <td>BSIA 4-IA41</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>W 01:30PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>IA 415</td>
                            <td>Operations Auditing</td>
                            <td>BSIA 4-IA41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IA 417</td>
                            <td>Sustainability & Strategic Audit</td>
                            <td>BSIA 4-IA41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 02:00PM-05:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>20</td>
                            <td>1</td>
                            <td>21</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- INDUSTRIAL ENGINEERING SECTION -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : IE41 (Industrial Engineering Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>IES 410</td>
                            <td>Cognitive Engineering</td>
                            <td>BSIE 4-IE41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IEP 412</td>
                            <td>Facilities Planning and Design 2</td>
                            <td>BSIE 4-IE41</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>T/W/F 07:30PM-09:00PM/07:00PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>IEP 410</td>
                            <td>Industrial Engineering Design Project 1 (Capstone Project Proposal)</td>
                            <td>BSIE 4-IE41</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-10:00AM/07:30AM-10:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IEP 415</td>
                            <td>Information Systems</td>
                            <td>BSIE 4-IE41</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/M/TH/TH 11:00AM-12:00PM/12:00PM-01:30PM/11:00AM-12:00PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr>
                            <td>IC-JEEP 120</td>
                            <td>JEEP Accelerate 1</td>
                            <td>BSIE 4-IE41</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="table-light">
                            <td>IEP 416</td>
                            <td>Marketing Systems</td>
                            <td>BSIE 4-IE41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>IEP 413</td>
                            <td>Obligations and Contracts</td>
                            <td>BSIE 4-IE41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IEP 411</td>
                            <td>Project Feasibility Study</td>
                            <td>BSIE 4-IE41</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:30PM-06:00PM/03:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>IEP 414</td>
                            <td>Systems Engineering</td>
                            <td>BSIE 4-IE41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>20</td>
                            <td>7</td>
                            <td>27</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- INFORMATION TECHNOLOGY SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : IT41 (Information Technology Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>IT 473-EL6</td>
                            <td>Human Computer Interaction 2</td>
                            <td>BSIT 4-IT41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IT 471</td>
                            <td>Information Assurance and Security 2 (with CISDP-Part 2)</td>
                            <td>BSIT 4-IT41</td>
                            <td>2</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 04:30PM-06:00PM/04:30PM-06:00PM</td>
                        </tr>
                        <tr>
                            <td>GE 119</td>
                            <td>Living in an IT Era (with MOS Certificate)</td>
                            <td>BSIT 4-IT41</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IT 470</td>
                            <td>Research (Capstone Project 2)</td>
                            <td>BSIT 4-IT41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>IT 472-EL5</td>
                            <td>Systems Integration and Architecture 2</td>
                            <td>BSIT 4-IT41</td>
                            <td>2</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-05:30PM/03:00PM-05:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>12</td>
                            <td>7</td>
                            <td>15</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : IT42 (Information Technology Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>IT 473-EL6</td>
                            <td>Human Computer Interaction 2</td>
                            <td>BSIT 4-IT42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IT 471</td>
                            <td>Information Assurance and Security 2 (with CISDP-Part 2)</td>
                            <td>BSIT 4-IT42</td>
                            <td>2</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>GE 119</td>
                            <td>Living in an IT Era (with MOS Certificate)</td>
                            <td>BSIT 4-IT42</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00AM-10:30AM/09:00AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IT 470</td>
                            <td>Research (Capstone Project 2)</td>
                            <td>BSIT 4-IT42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>IT 472-EL5</td>
                            <td>Systems Integration and Architecture 2</td>
                            <td>BSIT 4-IT42</td>
                            <td>2</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-08:30PM/06:00PM-08:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>12</td>
                            <td>7</td>
                            <td>15</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- LAW SCHOOL SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-danger">SECTION : JD4 (Juris Doctor Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-danger text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>JD 507</td>
                            <td>Civil Law Review and Integration</td>
                            <td>JD 4-JD4</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td>TH/F 05:30PM-09:30PM/07:30PM-09:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>Law 401</td>
                            <td>Civil Law Review I</td>
                            <td>JD 4-JD4</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>T/S 05:30PM-08:30PM/01:00PM-02:00PM</td>
                        </tr>
                        <tr>
                            <td>JD 403</td>
                            <td>Criminal Law Review and Integration</td>
                            <td>JD 4-JD4</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T 05:30PM-08:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>JD 802</td>
                            <td>Labor Law Review and Integration</td>
                            <td>JD 4-JD4</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 09:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>JD 307</td>
                            <td>Political and International Law Review and Integration</td>
                            <td>JD 4-JD4</td>
                            <td>5</td>
                            <td>0</td>
                            <td>5</td>
                            <td></td>
                            <td>M/T 05:30PM-09:30PM/08:30PM-09:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>21</td>
                            <td>0</td>
                            <td>21</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">SECTION : JD4-A (Juris Doctor Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>JD 105</td>
                            <td>CLEP 1</td>
                            <td>JD 4-JD4-A</td>
                            <td>2</td>
                            <td>0</td>
                            <td>2</td>
                            <td></td>
                            <td>S 01:00PM-03:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>Law 405</td>
                            <td>Criminal Law Review</td>
                            <td>JD 4-JD4-A</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                            <td>W/TH 07:30PM-09:30PM/07:30PM-09:30PM</td>
                        </tr>
                        <tr>
                            <td>Law 407</td>
                            <td>Remedial Law Review I</td>
                            <td>JD 4-JD4-A</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>F 05:30PM-08:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>9</td>
                            <td>0</td>
                            <td>9</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- LEGAL OFFICE MANAGEMENT SECTION -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : LOM41 (Legal Office Management Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>OAPEC 412</td>
                            <td>Accounts Management</td>
                            <td>BSOA-LOM 4-LOM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>OALOMPEC 411</td>
                            <td>Case Management System</td>
                            <td>BSOA-LOM 4-LOM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>OALOMPEC 414</td>
                            <td>Diary, Registers, and Library Management</td>
                            <td>BSOA-LOM 4-LOM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 06:00PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>OACC 410</td>
                            <td>Integrated Software Application (MIS Concept, Desktop Publishing, Word Processing, Spreadsheet and Presentation) with Bloomberg Certification</td>
                            <td>BSOA-LOM 4-LOM41</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td></td>
                            <td>W 01:30PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>OALOMPEC 412</td>
                            <td>Litigation Docket Security and Control System</td>
                            <td>BSOA-LOM 4-LOM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>OALOMPEC 413</td>
                            <td>Production of Legal Documents</td>
                            <td>BSOA-LOM 4-LOM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr>
                            <td>OAPEC 411</td>
                            <td>Workflow Management</td>
                            <td>BSOA-LOM 4-LOM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30AM-12:00PM/10:30AM-12:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>19</td>
                            <td>2</td>
                            <td>21</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- MANAGEMENT ACCOUNTING SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : MA41 (Management Accounting Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ACC 431B</td>
                            <td>Management Accounting Internship</td>
                            <td>BSMA 4-MA41</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td>M/TH 03:00PM-06:00PM/03:00PM-06:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ACC 419B</td>
                            <td>Management Accounting Research (with certification for CFMP 2)</td>
                            <td>BSMA 4-MA41</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:30PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>MA-PRE 2</td>
                            <td>Management Reporting</td>
                            <td>BSMA 4-MA41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MACC 412</td>
                            <td>Strategic Tax Management</td>
                            <td>BSMA 4-MA41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W 06:00PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>IA 417</td>
                            <td>Sustainability & Strategic Audit</td>
                            <td>BSMA 4-MA41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>17</td>
                            <td>1</td>
                            <td>18</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : MA42 (Management Accounting Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ACC 431B</td>
                            <td>Management Accounting Internship</td>
                            <td>BSMA 4-MA42</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td>W 01:30PM-06:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ACC 419B</td>
                            <td>Management Accounting Research (with certification for CFMP 2)</td>
                            <td>BSMA 4-MA42</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>W 09:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>MA-PRE 2</td>
                            <td>Management Reporting</td>
                            <td>BSMA 4-MA42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MACC 412</td>
                            <td>Strategic Tax Management</td>
                            <td>BSMA 4-MA42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 09:00AM-12:00PM</td>
                        </tr>
                        <tr>
                            <td>IA 417</td>
                            <td>Sustainability & Strategic Audit</td>
                            <td>BSMA 4-MA42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 03:00PM-06:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>17</td>
                            <td>1</td>
                            <td>18</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : MA43 (Management Accounting Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ACC 431B</td>
                            <td>Management Accounting Internship</td>
                            <td>BSMA 4-MA43</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td>W 09:00AM-12:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>ACC 419B</td>
                            <td>Management Accounting Research (with certification for CFMP 2)</td>
                            <td>BSMA 4-MA43</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>W 01:30PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>MA-PRE 2</td>
                            <td>Management Reporting</td>
                            <td>BSMA 4-MA43</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MACC 412</td>
                            <td>Strategic Tax Management</td>
                            <td>BSMA 4-MA43</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>S 01:30PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>IA 417</td>
                            <td>Sustainability & Strategic Audit</td>
                            <td>BSMA 4-MA43</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:00PM-01:30PM/12:00PM-01:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>17</td>
                            <td>1</td>
                            <td>18</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">SECTION : MA44 (Management Accounting Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ACC 419B</td>
                            <td>Management Accounting Research (with certification for CFMP 2)</td>
                            <td>BSMA 4-MA44</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>2</td>
                            <td>1</td>
                            <td>3</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- MARKETING MANAGEMENT SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : MM41 (Marketing Management Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MMPEC 411</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-MM 4-MM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MMPEC 412</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-MM 4-MM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>MMPEC 413</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-MM 4-MM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00PM-10:30PM/09:00PM-10:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MMPEC 414</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-MM 4-MM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30PM-12:00AM/10:30PM-12:00AM</td>
                        </tr>
                        <tr>
                            <td>MMPEC 415</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-MM 4-MM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:00AM-01:30AM/12:00AM-01:30AM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>15</td>
                            <td>0</td>
                            <td>15</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : MM42 (Marketing Management Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MMPEC 411</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-MM 4-MM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MMPEC 412</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-MM 4-MM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>MMPEC 413</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-MM 4-MM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00PM-10:30PM/09:00PM-10:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MMPEC 414</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-MM 4-MM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30PM-12:00AM/10:30PM-12:00AM</td>
                        </tr>
                        <tr>
                            <td>MMPEC 415</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-MM 4-MM42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:00AM-01:30AM/12:00AM-01:30AM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>15</td>
                            <td>0</td>
                            <td>15</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : MM43 (Marketing Management Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MMPEC 411</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-MM 4-MM43</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MMPEC 412</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-MM 4-MM43</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>MMPEC 413</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-MM 4-MM43</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00PM-10:30PM/09:00PM-10:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>MMPEC 414</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-MM 4-MM43</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30PM-12:00AM/10:30PM-12:00AM</td>
                        </tr>
                        <tr>
                            <td>MMPEC 415</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-MM 4-MM43</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:00AM-01:30AM/12:00AM-01:30AM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>15</td>
                            <td>0</td>
                            <td>15</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- NURSING SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-danger">SECTION : N41 (Nursing Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-danger text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NCM 118</td>
                            <td>Care of Mother, Child and Adolescent (Well Clients)</td>
                            <td>BSN 4-N41</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>M/TH 07:30AM-10:00AM/07:30AM-10:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 119</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N41</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>M/TH 10:30AM-01:00PM/10:30AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>NCM 120</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N41</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>M/TH 01:30PM-04:00PM/01:30PM-04:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 121</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N41</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>M/TH 04:30PM-07:00PM/04:30PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>NCM 122</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N41</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>M/TH 07:30PM-10:00PM/07:30PM-10:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>15</td>
                            <td>10</td>
                            <td>25</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : N42 (Nursing Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NCM 118</td>
                            <td>Care of Mother, Child and Adolescent (Well Clients)</td>
                            <td>BSN 4-N42</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>T/F 07:30AM-10:00AM/07:30AM-10:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 119</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N42</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>T/F 10:30AM-01:00PM/10:30AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>NCM 120</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N42</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>T/F 01:30PM-04:00PM/01:30PM-04:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 121</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N42</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>T/F 04:30PM-07:00PM/04:30PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>NCM 122</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N42</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>T/F 07:30PM-10:00PM/07:30PM-10:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>15</td>
                            <td>10</td>
                            <td>25</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : N43 (Nursing Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NCM 118</td>
                            <td>Care of Mother, Child and Adolescent (Well Clients)</td>
                            <td>BSN 4-N43</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>W/S 07:30AM-10:00AM/07:30AM-10:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 119</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N43</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>W/S 10:30AM-01:00PM/10:30AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>NCM 120</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N43</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>W/S 01:30PM-04:00PM/01:30PM-04:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 121</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N43</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>W/S 04:30PM-07:00PM/04:30PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>NCM 122</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N43</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>W/S 07:30PM-10:00PM/07:30PM-10:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>15</td>
                            <td>10</td>
                            <td>25</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : N44 (Nursing Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NCM 118</td>
                            <td>Care of Mother, Child and Adolescent (Well Clients)</td>
                            <td>BSN 4-N44</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>TH/S 07:30AM-10:00AM/07:30AM-10:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 119</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N44</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>TH/S 10:30AM-01:00PM/10:30AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>NCM 120</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N44</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>TH/S 01:30PM-04:00PM/01:30PM-04:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 121</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N44</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>TH/S 04:30PM-07:00PM/04:30PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>NCM 122</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N44</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>TH/S 07:30PM-10:00PM/07:30PM-10:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>15</td>
                            <td>10</td>
                            <td>25</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">SECTION : N45 (Nursing Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NCM 118</td>
                            <td>Care of Mother, Child and Adolescent (Well Clients)</td>
                            <td>BSN 4-N45</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>F/S 07:30AM-10:00AM/07:30AM-10:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 119</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N45</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>F/S 10:30AM-01:00PM/10:30AM-01:00PM</td>
                        </tr>
                        <tr>
                            <td>NCM 120</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N45</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>F/S 01:30PM-04:00PM/01:30PM-04:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>NCM 121</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N45</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>F/S 04:30PM-07:00PM/04:30PM-07:00PM</td>
                        </tr>
                        <tr>
                            <td>NCM 122</td>
                            <td>Care of Mother, Child and Adolescent (Acute and Chronically Ill)</td>
                            <td>BSN 4-N45</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td></td>
                            <td>F/S 07:30PM-10:00PM/07:30PM-10:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>15</td>
                            <td>10</td>
                            <td>25</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- OPERATIONS MANAGEMENT SECTION -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : OM41 (Operations Management Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>OMPEC 411</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-OM 4-OM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 06:00PM-07:30PM/06:00PM-07:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>OMPEC 412</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-OM 4-OM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30PM-09:00PM/07:30PM-09:00PM</td>
                        </tr>
                        <tr>
                            <td>OMPEC 413</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-OM 4-OM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:00PM-10:30PM/09:00PM-10:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>OMPEC 414</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-OM 4-OM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 10:30PM-12:00AM/10:30PM-12:00AM</td>
                        </tr>
                        <tr>
                            <td>OMPEC 415</td>
                            <td>Business Research (with SAP Application)</td>
                            <td>BSBA-OM 4-OM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 12:00AM-01:30AM/12:00AM-01:30AM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>15</td>
                            <td>0</td>
                            <td>15</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- TEACHER EDUCATION SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : TE40 (Teacher Education Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>EDUC 118</td>
                            <td>Assessment in Learning 2</td>
                            <td>BEED 4-TE40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EDUC 119</td>
                            <td>Building and Enhancing New Literacies Across the Curriculum</td>
                            <td>BEED 4-TE40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:30AM-11:00AM/09:30AM-11:00AM</td>
                        </tr>
                        <tr>
                            <td>EDUC 120</td>
                            <td>Demonstration Teaching</td>
                            <td>BEED 4-TE40</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td>M/TH 11:30AM-02:30PM/11:30AM-02:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EDUC 121</td>
                            <td>Field Study 2</td>
                            <td>BEED 4-TE40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>EDUC 122</td>
                            <td>Research in Education</td>
                            <td>BEED 4-TE40</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 05:00PM-06:30PM/05:00PM-06:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>18</td>
                            <td>0</td>
                            <td>18</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : TE41 (Teacher Education Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>EDUC 118</td>
                            <td>Assessment in Learning 2</td>
                            <td>BEED 4-TE41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EDUC 119</td>
                            <td>Building and Enhancing New Literacies Across the Curriculum</td>
                            <td>BEED 4-TE41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 09:30AM-11:00AM/09:30AM-11:00AM</td>
                        </tr>
                        <tr>
                            <td>EDUC 120</td>
                            <td>Demonstration Teaching</td>
                            <td>BEED 4-TE41</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td>T/F 11:30AM-02:30PM/11:30AM-02:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EDUC 121</td>
                            <td>Field Study 2</td>
                            <td>BEED 4-TE41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>EDUC 122</td>
                            <td>Research in Education</td>
                            <td>BEED 4-TE41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>T/F 05:00PM-06:30PM/05:00PM-06:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>18</td>
                            <td>0</td>
                            <td>18</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : TE42 (Teacher Education Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>EDUC 118</td>
                            <td>Assessment in Learning 2</td>
                            <td>BEED 4-TE42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W/S 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EDUC 119</td>
                            <td>Building and Enhancing New Literacies Across the Curriculum</td>
                            <td>BEED 4-TE42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W/S 09:30AM-11:00AM/09:30AM-11:00AM</td>
                        </tr>
                        <tr>
                            <td>EDUC 120</td>
                            <td>Demonstration Teaching</td>
                            <td>BEED 4-TE42</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td></td>
                            <td>W/S 11:30AM-02:30PM/11:30AM-02:30PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>EDUC 121</td>
                            <td>Field Study 2</td>
                            <td>BEED 4-TE42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W/S 03:00PM-04:30PM/03:00PM-04:30PM</td>
                        </tr>
                        <tr>
                            <td>EDUC 122</td>
                            <td>Research in Education</td>
                            <td>BEED 4-TE42</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>W/S 05:00PM-06:30PM/05:00PM-06:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>18</td>
                            <td>0</td>
                            <td>18</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- TOURISM MANAGEMENT SECTION -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-warning">SECTION : TM41 (Tourism Management Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-warning text-dark">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GE 118</td>
                            <td>Great Books</td>
                            <td>BSTM 4-TM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 07:30AM-09:00AM/07:30AM-09:00AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>IC-JEEP 120</td>
                            <td>JEEP Accelerate 1</td>
                            <td>BSTM 4-TM41</td>
                            <td>0</td>
                            <td>3</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 09:30AM-11:00AM/09:30AM-11:00AM</td>
                        </tr>
                        <tr>
                            <td>THC 410</td>
                            <td>Legal Aspects in Tourism and Hospitality</td>
                            <td>BSTM 4-TM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 11:30AM-01:00PM/11:30AM-01:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>GE 117</td>
                            <td>Philippine Literature</td>
                            <td>BSTM 4-TM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 01:30PM-03:00PM/01:30PM-03:00PM</td>
                        </tr>
                        <tr>
                            <td>TMPE 411</td>
                            <td>Tourism Planning and Development</td>
                            <td>BSTM 4-TM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 03:30PM-05:00PM/03:30PM-05:00PM</td>
                        </tr>
                        <tr class="table-light">
                            <td>TMPE 412</td>
                            <td>Tourism Research</td>
                            <td>BSTM 4-TM41</td>
                            <td>3</td>
                            <td>0</td>
                            <td>3</td>
                            <td></td>
                            <td>M/TH 05:30PM-07:00PM/05:30PM-07:00PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>15</td>
                            <td>3</td>
                            <td>18</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- HIGH SCHOOL SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-danger">SECTION : ST. JOAN (High School Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-danger text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ENG 10</td>
                            <td>English 10</td>
                            <td>G10-ST. JOAN</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M/TH 07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FIL 10</td>
                            <td>Filipino 10</td>
                            <td>G10-ST. JOAN</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M/TH 08:30AM-09:30AM/08:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>MATH 10</td>
                            <td>Mathematics 10</td>
                            <td>G10-ST. JOAN</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M/TH 09:30AM-10:30AM/09:30AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SCI 10</td>
                            <td>Science 10</td>
                            <td>G10-ST. JOAN</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M/TH 10:30AM-11:30AM/10:30AM-11:30AM</td>
                        </tr>
                        <tr>
                            <td>AP 10</td>
                            <td>Araling Panlipunan 10</td>
                            <td>G10-ST. JOAN</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M/TH 11:30AM-12:30PM/11:30AM-12:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>5</td>
                            <td>0</td>
                            <td>5</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : ST. KATHARINE (High School Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ENG 10</td>
                            <td>English 10</td>
                            <td>G10-ST. KATHARINE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>T/F 07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FIL 10</td>
                            <td>Filipino 10</td>
                            <td>G10-ST. KATHARINE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>T/F 08:30AM-09:30AM/08:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>MATH 10</td>
                            <td>Mathematics 10</td>
                            <td>G10-ST. KATHARINE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>T/F 09:30AM-10:30AM/09:30AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SCI 10</td>
                            <td>Science 10</td>
                            <td>G10-ST. KATHARINE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>T/F 10:30AM-11:30AM/10:30AM-11:30AM</td>
                        </tr>
                        <tr>
                            <td>AP 10</td>
                            <td>Araling Panlipunan 10</td>
                            <td>G10-ST. KATHARINE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>T/F 11:30AM-12:30PM/11:30AM-12:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>5</td>
                            <td>0</td>
                            <td>5</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : ST. PHILOMENA (High School Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ENG 10</td>
                            <td>English 10</td>
                            <td>G10-ST. PHILOMENA</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>W/S 07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FIL 10</td>
                            <td>Filipino 10</td>
                            <td>G10-ST. PHILOMENA</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>W/S 08:30AM-09:30AM/08:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>MATH 10</td>
                            <td>Mathematics 10</td>
                            <td>G10-ST. PHILOMENA</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>W/S 09:30AM-10:30AM/09:30AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SCI 10</td>
                            <td>Science 10</td>
                            <td>G10-ST. PHILOMENA</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>W/S 10:30AM-11:30AM/10:30AM-11:30AM</td>
                        </tr>
                        <tr>
                            <td>AP 10</td>
                            <td>Araling Panlipunan 10</td>
                            <td>G10-ST. PHILOMENA</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>W/S 11:30AM-12:30PM/11:30AM-12:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>5</td>
                            <td>0</td>
                            <td>5</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : ST. ROSE (High School Fourth Year)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ENG 10</td>
                            <td>English 10</td>
                            <td>G10-ST. ROSE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>TH/S 07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FIL 10</td>
                            <td>Filipino 10</td>
                            <td>G10-ST. ROSE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>TH/S 08:30AM-09:30AM/08:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>MATH 10</td>
                            <td>Mathematics 10</td>
                            <td>G10-ST. ROSE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>TH/S 09:30AM-10:30AM/09:30AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SCI 10</td>
                            <td>Science 10</td>
                            <td>G10-ST. ROSE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>TH/S 10:30AM-11:30AM/10:30AM-11:30AM</td>
                        </tr>
                        <tr>
                            <td>AP 10</td>
                            <td>Araling Panlipunan 10</td>
                            <td>G10-ST. ROSE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>TH/S 11:30AM-12:30PM/11:30AM-12:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>5</td>
                            <td>0</td>
                            <td>5</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                 </div>
     </div>

    <!-- GRADE SCHOOL SECTIONS -->
    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-danger">SECTION : CHARITY (Grade School Sixth Grade)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-danger text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ENG 6</td>
                            <td>English 6</td>
                            <td>G6-CHARITY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M/TH 07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FIL 6</td>
                            <td>Filipino 6</td>
                            <td>G6-CHARITY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M/TH 08:30AM-09:30AM/08:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>MATH 6</td>
                            <td>Mathematics 6</td>
                            <td>G6-CHARITY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M/TH 09:30AM-10:30AM/09:30AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SCI 6</td>
                            <td>Science 6</td>
                            <td>G6-CHARITY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M/TH 10:30AM-11:30AM/10:30AM-11:30AM</td>
                        </tr>
                        <tr>
                            <td>AP 6</td>
                            <td>Araling Panlipunan 6</td>
                            <td>G6-CHARITY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>M/TH 11:30AM-12:30PM/11:30AM-12:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>5</td>
                            <td>0</td>
                            <td>5</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-primary">SECTION : UNITY (Grade School Sixth Grade)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-primary text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ENG 6</td>
                            <td>English 6</td>
                            <td>G6-UNITY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>T/F 07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FIL 6</td>
                            <td>Filipino 6</td>
                            <td>G6-UNITY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>T/F 08:30AM-09:30AM/08:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>MATH 6</td>
                            <td>Mathematics 6</td>
                            <td>G6-UNITY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>T/F 09:30AM-10:30AM/09:30AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SCI 6</td>
                            <td>Science 6</td>
                            <td>G6-UNITY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>T/F 10:30AM-11:30AM/10:30AM-11:30AM</td>
                        </tr>
                        <tr>
                            <td>AP 6</td>
                            <td>Araling Panlipunan 6</td>
                            <td>G6-UNITY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>T/F 11:30AM-12:30PM/11:30AM-12:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>5</td>
                            <td>0</td>
                            <td>5</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-success">SECTION : GENEROSITY (Grade School Sixth Grade)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-success text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ENG 6</td>
                            <td>English 6</td>
                            <td>G6-GENEROSITY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>W/S 07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FIL 6</td>
                            <td>Filipino 6</td>
                            <td>G6-GENEROSITY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>W/S 08:30AM-09:30AM/08:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>MATH 6</td>
                            <td>Mathematics 6</td>
                            <td>G6-GENEROSITY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>W/S 09:30AM-10:30AM/09:30AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SCI 6</td>
                            <td>Science 6</td>
                            <td>G6-GENEROSITY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>W/S 10:30AM-11:30AM/10:30AM-11:30AM</td>
                        </tr>
                        <tr>
                            <td>AP 6</td>
                            <td>Araling Panlipunan 6</td>
                            <td>G6-GENEROSITY</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>W/S 11:30AM-12:30PM/11:30AM-12:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>5</td>
                            <td>0</td>
                            <td>5</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <div class="card mb-4">
        <div class="card-body p-0">
            <h6 class="px-3 pt-3 fw-bold text-info">SECTION : OBEDIENCE (Grade School Sixth Grade)</h6>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="table-info text-white">
                        <tr>
                            <th>Subject Code</th>
                            <th>Description</th>
                            <th>Section Code</th>
                            <th>Lec</th>
                            <th>Lab</th>
                            <th>Units</th>
                            <th>Room No.</th>
                            <th>Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ENG 6</td>
                            <td>English 6</td>
                            <td>G6-OBEDIENCE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>TH/S 07:30AM-08:30AM/07:30AM-08:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>FIL 6</td>
                            <td>Filipino 6</td>
                            <td>G6-OBEDIENCE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>TH/S 08:30AM-09:30AM/08:30AM-09:30AM</td>
                        </tr>
                        <tr>
                            <td>MATH 6</td>
                            <td>Mathematics 6</td>
                            <td>G6-OBEDIENCE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>TH/S 09:30AM-10:30AM/09:30AM-10:30AM</td>
                        </tr>
                        <tr class="table-light">
                            <td>SCI 6</td>
                            <td>Science 6</td>
                            <td>G6-OBEDIENCE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>TH/S 10:30AM-11:30AM/10:30AM-11:30AM</td>
                        </tr>
                        <tr>
                            <td>AP 6</td>
                            <td>Araling Panlipunan 6</td>
                            <td>G6-OBEDIENCE</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td></td>
                            <td>TH/S 11:30AM-12:30PM/11:30AM-12:30PM</td>
                        </tr>
                        <tr class="table-warning fw-bold">
                            <td colspan="3">TOTAL</td>
                            <td>5</td>
                            <td>0</td>
                            <td>5</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

</div>

<style>
.table-success {
    background-color: #198754 !important;
    color: white !important;
}

.table-warning {
    background-color: #ffc107 !important;
    color: #000 !important;
}

.table-light {
    background-color: #f8f9fa !important;
}

.card-header.bg-success {
    background-color: #198754 !important;
}

.text-success {
    color: #198754 !important;
}

.table th {
    border: 1px solid #dee2e6;
    padding: 12px 8px;
    font-weight: 600;
}

.table td {
    border: 1px solid #dee2e6;
    padding: 10px 8px;
    vertical-align: middle;
}

.form-label {
    font-weight: 600;
    color: #495057;
}

.card {
    border: 1px solid #dee2e6;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
}

.card-header {
    border-bottom: 1px solid #dee2e6;
}
</style>
@endsection
