<?php $pageTitle='Shubhransu Sekhar | UI/UX Designer & Web Developer'; include 'includes/header.php'; ?>
<section class="hero">
  <div class="hero-copy reveal"><p class="eyebrow">01 / Independent creative</p><h1>SHUBHRANSU<br><em>SEKHAR</em></h1><p class="hero-role">UI/UX Designer <i>|</i> Web Developer</p><p class="intro">A multidisciplinary creative exploring the space between thoughtful interfaces and solid code. Drawn to games, stories, faraway places and the frame of a good photograph.</p><div class="button-row"><a class="button red" href="projects.php">View projects <span>→</span></a><a class="button outline" href="resume/resume.pdf" download>Download resume <span>↓</span></a></div></div>
  <div class="hero-portrait reveal"><div class="shape-square"></div><div class="portrait-number">26</div><img src="images/profile/FaceFinal.png" alt="Portrait of Shubhransu Sekhar"><div class="portrait-caption">DESIGN.<br>CODE.<br><b>CREATE.</b></div></div>
</section>
<section class="statement reveal"><p class="section-no">00 — INTRODUCTION</p><h2>Building ideas<br>with <em>intent.</em></h2><p>I bring a curious, cross-disciplinary mindset to every canvas and codebase — connecting visual thinking with practical execution.</p></section>
<section class="editorial-links">
<?php $links=[['01','ABOUT','A little more about the person behind the screen.','about.php'],['02','SKILLS','A growing toolkit for design and development.','skills.php'],['03','PROJECTS','Work in progress. Worth watching.','projects.php'],['04','EDUCATION','The foundations that shaped the path.','education.php'],['05','CREATIVE WORK','UI/UX explorations and photography, soon.','ui-ux.php']]; foreach($links as $item): ?>
  <a class="editorial-link reveal" href="<?= $item[3] ?>"><span class="link-no"><?= $item[0] ?></span><span><small><?= $item[1] ?></small><strong><?= $item[2] ?></strong></span><b>↗</b></a>
<?php endforeach; ?>
</section>
<?php include 'includes/footer.php'; ?>
