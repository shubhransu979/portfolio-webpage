<header class="site-header">
  <a class="brand" href="index.php" aria-label="Shubhransu Sekhar home">SHUBHRANSU<br><span>SEKHAR</span></a>
  <button class="menu-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false"><span></span><span></span></button>
  <nav class="main-nav" aria-label="Primary navigation">
    <?php $nav = ['index.php'=>'Home','about.php'=>'About','skills.php'=>'Skills','projects.php'=>'Projects','resume.php'=>'Resume','contact.php'=>'Contact']; foreach ($nav as $url => $label): ?>
      <a href="<?= $url ?>" class="<?= $currentPage === $url ? 'active' : '' ?>"><?= $label ?></a>
    <?php endforeach; ?>
  </nav>
  <a class="nav-resume" href="resume/resume.pdf" download>Resume <span>↗</span></a>
</header>
