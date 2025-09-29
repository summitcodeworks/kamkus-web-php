<?php
$page_title = "LL.M. Syllabus | Kamkus College of Law";
$page_description = "Detailed syllabus for the two-year LL.M. program at Kamkus College of Law";
$current_page = 'academics';

require_once '../../../includes/config.php';
include '../../../includes/header.php';
?>

<!-- Add the custom CSS -->
<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/syllabus.css">

<div class="syllabus-container">
    <div class="container">
        <div class="syllabus-content">
            <h1 class="syllabus-title">LL.M. Syllabus</h1>
            <div class="title-underline"></div>
            
            <div>
                <h2 class="section-title">Course Structure</h2>
                
                <div>
                    <h3 class="year-title">First Year</h3>
                    <div class="syllabus-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Paper Code</th>
                                    <th>Paper Name</th>
                                    <th>Credits</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>LL.M-101</td>
                                    <td>Research Methods and Legal Writing</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>LL.M-102</td>
                                    <td>Comparative Public Law</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>LL.M-103</td>
                                    <td>Law and Justice in a Globalized World</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>LL.M-104</td>
                                    <td>Legal Education and Pedagogy</td>
                                    <td>4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div>
                    <h3 class="year-title">Second Year</h3>
                    <div class="syllabus-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Paper Code</th>
                                    <th>Paper Name</th>
                                    <th>Credits</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>LL.M-201</td>
                                    <td>Dissertation</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>LL.M-202</td>
                                    <td>Constitutional Law and New Challenges</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>LL.M-203</td>
                                    <td>Human Rights Law and Practice</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>LL.M-204</td>
                                    <td>Environmental Law and Policy</td>
                                    <td>4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="syllabus-note">
                    <p class="italic text-gray-600">
                        * The actual syllabus may vary. Please contact the college administration for the most up-to-date information.
                    </p>
                </div>
                
                <div class="mt-8">
                    <a href="<?php echo $base_url; ?>academics/llm" class="back-link">
                        <i class="fas fa-chevron-left"></i>
                        Back to LL.M. Program
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../../includes/footer.php'); ?> 