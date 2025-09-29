<?php
$page_title = "B.A. LL.B. Syllabus - Kamkus College of Law";
$page_description = "Syllabus and course structure for the five-year B.A. LL.B. integrated program at Kamkus College of Law";
$current_page = "academics";
require_once '../../includes/config.php';
$default_title = "Kamkus College of Law";
$default_description = "Kamkus College of Law - An ISO Certified Institution";

include '../../includes/header.php';
?>

<style>
.hero-section {
  background: #1E293B;
  padding: 3rem 0;
  position: relative;
  overflow: hidden;
}

.hero-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;
  position: relative;
  z-index: 2;
}

.hero-title {
  color: white;
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 1rem;
}

.hero-breadcrumb {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  color: rgba(255, 255, 255, 0.7);
  font-size: 0.875rem;
}

.hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.7);
  text-decoration: none;
  transition: color 0.2s;
}

.hero-breadcrumb a:hover {
  color: white;
}

.hero-breadcrumb span {
  color: rgba(255, 255, 255, 0.5);
}

.content-section {
  max-width: 1200px;
  margin: -3rem auto 0;
  padding: 2rem;
  background: white;
  border-radius: 1rem;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  position: relative;
  z-index: 3;
}

.year-section {
  background: white;
  border: 1px solid #E2E8F0;
  border-radius: 0.5rem;
  overflow: hidden;
  margin-bottom: 1.5rem;
}

.year-header {
  background: #F8FAFC;
  padding: 1rem 1.5rem;
  border-bottom: 1px solid #E2E8F0;
}

.year-title {
  color: #1E293B;
  font-size: 1.25rem;
  font-weight: 600;
}

.syllabus-table {
  width: 100%;
  border-collapse: collapse;
}

.syllabus-table th {
  background: #F8FAFC;
  color: #1E293B;
  font-weight: 600;
  text-align: left;
  padding: 1rem 1.5rem;
  border-bottom: 2px solid #E2E8F0;
}

.syllabus-table td {
  padding: 1rem 1.5rem;
  border-bottom: 1px solid #E2E8F0;
  color: #475569;
}

.syllabus-table tr:last-child td {
  border-bottom: none;
}

.syllabus-table tr:hover td {
  background: #F8FAFC;
}

.paper-code {
  font-family: 'Courier New', monospace;
  color: #1E293B;
  font-weight: 600;
}

.note-box {
  background: #F8FAFC;
  border: 1px solid #E2E8F0;
  border-radius: 0.5rem;
  padding: 1rem 1.5rem;
  margin-top: 2rem;
}

.note-box p {
  color: #475569;
  font-size: 0.875rem;
  line-height: 1.5;
}

.back-button {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  color: #1E293B;
  text-decoration: none;
  padding: 0.75rem 1.5rem;
  border: 1px solid #E2E8F0;
  border-radius: 0.5rem;
  margin-top: 2rem;
  transition: all 0.2s;
}

.back-button:hover {
  background: #F8FAFC;
}

@media (max-width: 768px) {
  .hero-section {
    padding: 2rem 0;
  }
  
  .hero-title {
    font-size: 2rem;
  }
  
  .content-section {
    margin-top: -2rem;
    padding: 1.5rem;
  }
  
  .syllabus-table th,
  .syllabus-table td {
    padding: 0.75rem 1rem;
  }
}
</style>

<div class="hero-section">
  <div class="hero-container">
    <h1 class="hero-title">B.A. LL.B. Syllabus</h1>
    <div class="hero-breadcrumb">
      <a href="<?php echo $base_url; ?>">Home</a>
      <span>/</span>
      <a href="<?php echo $base_url; ?>academics/academics.php">Academics</a>
      <span>/</span>
      <a href="<?php echo $base_url; ?>academics/ba-llb.php">B.A. LL.B. Programme</a>
      <span>/</span>
      <span>Syllabus</span>
    </div>
  </div>
</div>

<div class="content-section">
  <?php
  $years = [
    'First Year' => [
      ['BA-101', 'English Language', '4'],
      ['BA-102', 'Political Science I', '4'],
      ['BA-103', 'Sociology I', '4'],
      ['BA-104', 'Economics I', '4'],
      ['BA-105', 'Legal Methods', '4']
    ],
    'Second Year' => [
      ['BA-201', 'Political Science II', '4'],
      ['BA-202', 'Sociology II', '4'],
      ['BA-203', 'Economics II', '4'],
      ['BA-204', 'Law of Contract', '4'],
      ['BA-205', 'Law of Torts', '4']
    ],
    'Third Year' => [
      ['BA-301', 'Constitutional Law I', '4'],
      ['BA-302', 'Family Law I', '4'],
      ['BA-303', 'Law of Crimes I', '4'],
      ['BA-304', 'Property Law', '4'],
      ['BA-305', 'Public International Law', '4']
    ],
    'Fourth Year' => [
      ['BA-401', 'Constitutional Law II', '4'],
      ['BA-402', 'Family Law II', '4'],
      ['BA-403', 'Law of Crimes II', '4'],
      ['BA-404', 'Company Law', '4'],
      ['BA-405', 'Environmental Law', '4']
    ],
    'Fifth Year' => [
      ['BA-501', 'Civil Procedure Code', '4'],
      ['BA-502', 'Criminal Procedure Code', '4'],
      ['BA-503', 'Evidence Law', '4'],
      ['BA-504', 'Professional Ethics & Moot Court', '4'],
      ['BA-505', 'Drafting, Pleading & Conveyancing', '4']
    ]
  ];

  foreach ($years as $year => $subjects) {
    echo '<div class="year-section">';
    echo '<div class="year-header">';
    echo '<h2 class="year-title">' . $year . '</h2>';
    echo '</div>';
    echo '<table class="syllabus-table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Paper Code</th>';
    echo '<th>Paper Name</th>';
    echo '<th style="width: 100px; text-align: center;">Credits</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    
    foreach ($subjects as $subject) {
      echo '<tr>';
      echo '<td class="paper-code">' . $subject[0] . '</td>';
      echo '<td>' . $subject[1] . '</td>';
      echo '<td style="text-align: center;">' . $subject[2] . '</td>';
      echo '</tr>';
    }
    
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
  }
  ?>

  <div class="note-box">
    <p>
      <strong>Note:</strong> The actual syllabus may vary. Please contact the college administration for the most up-to-date information.
      Each paper carries 4 credits, totaling 100 marks (70 marks for theory and 30 marks for internal assessment).
    </p>
  </div>

  <a href="<?php echo $base_url; ?>academics/ba-llb.php" class="back-button">
    <i class="fas fa-arrow-left"></i>
    <span>Back to B.A., LL.B. Program</span>
  </a>
</div>

<?php include('../includes/footer.php'); ?> 