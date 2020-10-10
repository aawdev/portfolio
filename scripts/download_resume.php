<?php
header("Content-type:application/pdf");
header("Content-Disposition:attachment;filename='aaron-wilson_resume.pdf'");
readfile("aaw_resume.pdf");
?>
