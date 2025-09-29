<?php
require_once 'src/includes/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Path Test</title>
</head>
<body>
    <h1>Path Resolution Test</h1>
    
    <h2>Base URL: <?php echo $base_url; ?></h2>
    
    <h3>Testing Asset Paths:</h3>
    <p>Logo: <img src="<?php echo $base_url; ?>src/assets/public/LOGO.png" alt="Logo" style="width: 100px;"></p>
    <p>Placeholder: <img src="<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg" alt="Placeholder" style="width: 100px;"></p>
    
    <h3>Testing Page Access:</h3>
    <p><a href="<?php echo $base_url; ?>src/pages/about/college.php">Direct: About College</a></p>
    <p><a href="<?php echo $base_url; ?>about/college.php">Routed: About College</a></p>
    
    <h3>Testing from different contexts:</h3>
    <p><a href="src/pages/about/college.php">Relative from root</a></p>
    <p><a href="about/college.php">Routed from root</a></p>
    
    <h3>Current working directory: <?php echo getcwd(); ?></h3>
    <h3>Current script: <?php echo $_SERVER['SCRIPT_NAME']; ?></h3>
    
    <h3>Testing the problematic path:</h3>
    <p><a href="<?php echo $base_url; ?>src/pages/src/assets/public/infra/placeholder.jpg">Problematic Path (should redirect)</a></p>
    <p><a href="<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg">Correct Path</a></p>
</body>
</html>
