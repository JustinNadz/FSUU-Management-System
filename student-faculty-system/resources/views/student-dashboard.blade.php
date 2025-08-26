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
                </select>
            </div>
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
