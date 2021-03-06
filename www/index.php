
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Retistruct - computational reconstruction and transformation of flattened retinae</title>
  </head>

<body>

<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<img src="folding-small.png" style="float: left"><h1>Retistruct</h1>
<p class="slogan">-- computational reconstruction and transformation of flattened retinae</p>

<!-- end of project description -->

<p style="clear: both">Retistruct is
 an <a href="http://www.r-project.org">R</a> package to morph a flat
 surface with cuts (a dissected flat-mount retina) onto a
 curvilinear surface (the a standard retinal shape).  It can estimate
 the position of a point on the intact adult retina to within
 8&deg; of arc
 (3.6% of nasotemporal axis). The coordinates in reconstructed retinae
 can be transformed to visuotopic coordinates.
 </p>

<h2>How Retistruct works</h2>

<img src="retistruct.small.png" style="float: right"><p>Reconstruction
is achieved by: stitching the marked-up cuts of the flat-mount
outline; dividing the stitched outline into a mesh whose vertices then
are mapped onto a curtailed sphere; and finally moving the vertices so
as to minimise a physically-inspired deformation energy function. <ul>
      <li>Full details are in the paper: Sterratt, D. C., Lyngholm,
        D., Willshaw, D. J. and Thompson, I. D. (2013).  Standard
        Anatomical and Visual Space for the Mouse Retina:
        Computational Reconstruction and Transformation of Flattened
        Retinae with the Retistruct
        Package. <a href="http://www.ploscompbiol.org/article/info%3Adoi%2F10.1371%2Fjournal.pcbi.1002921"><em>PLoS
        Computational Biology</em> 9:e1002921</a>.</li>
      <li><a href="2012-09-neuroinf.pdf">This poster</a>
and <a href="http://www.youtube.com/watch?v=LpuqXo8NEOo">this YouTube
video</a>, presented at the 2012 Neuroinformatics Meeting in Munich,
has more details and examples of reconstructions and projections into
visual space. </li>
      </ul></p>

<h2>Installation and documentation</h2>

<p>Retistruct has been tested on GNU/Linux (Ubuntu 12.04), Mac OS X
  10.8 and Microsoft Windows Vista. Installing the graphical user
  interface on Mac OS X 10.9 (Mavericks) and 10.10 (Yosemite) is
  possible, but requires the GTK library to be installed
  first; <a href="http://chrisvoncsefalvay.com/2015/02/08/installing-gtk-on-mavericks.html">see
  Chris von Csefalvay's instructions</a>.
</p>

<h3>Stable version</h3>

<p>To install
  the <a href="http://cran.r-project.org/web/packages/retistruct/index.html">stable
  version of Retistruct hosted on CRAN</a>, follow the instructions in
  the <a href="retistruct-user-guide.pdf">User Guide</a>. The
  installation contains a number of demonstration retinae, and
  instructions for how to handle retinal flat-mount images in
  Retistruct.</p>

<h3>Development version</h3>

<p>The development version of Retistruct contains the most recent bug
  fixes and improvements, but is not stable. Builds of the package are
  usually <a href="https://r-forge.r-project.org/R/?group_id=1436">available
  on R-forge</a> and can be installed using the R install command
  given there. If the R-forge packages are not available, you will
  have to build from the source code using <tt>R CMD build</tt>.</p>

<h3>Source code</h3>

<p>The source code can be checked out from
the <a href="https://r-forge.r-project.org/scm/?group_id=1436">R-forge
subversion repository</a>
or <a href="https://github.com/davidcsterratt/retistruct">Github</a>.</p>

<h3>Reference publication code</h3>

<p>For reference purposes, this <a href="retistruct_0.5.7.zip"> zip
file</a> contains the version of Retistruct that generated the
reconstructions in Sterratt &amp;
al. (2013; <a href="http://www.ploscompbiol.org/article/info%3Adoi%2F10.1371%2Fjournal.pcbi.1002921"><em>PLoS
Computational Biology</em> 9</a>). The file also contains some Matlab
code to read data directories contained by Retistruct.</p>

<h2>Sample data</h2>

<p>As well as the built-in demo data, there are some sample images to
  practise on:<ol>
  <li>Beginner: <a href="data/image.png">SMI-32 stained retina</a>. As described in
  the <a href="retistruct-user-guide.pdf">User Guide</a>, the outline
  can be marked up in <a href="http://rsb.info.nih.gov/ij/">ImageJ</a>
  and imported into Retistruct.</li>
  <li>More advanced: TIFF files
  (<a href="data/left-5x-small.tif">left</a> and
  <a href="data/right-5x-small.tif">right</a>), each containing a stack of three images
  corresponding to Figure 6 of the manuscript: retinae labelled with
  Fluoro-Emerald, Fluoro-Ruby and a brightfield image. As described in
  the <a href="retistruct-user-guide.pdf">User Guide</a>,
  use <a href="http://rsb.info.nih.gov/ij/">ImageJ</a> to mark up the
  outline on the brightfield image, and then
  use <a href="http://rsb.info.nih.gov/ij/">ImageJ's</a> particle
  analyser to find the locations of the stained cells.</li>
  </ol></p>

<h2>Problems?</h2>

If you encounter issues using Retistruct please either:
<ul>
  <li><a href="https://github.com/davidcsterratt/retistruct/issues">Report a bug on Github</a></li>
  <li><a href="mailto:david.c.sterratt@ed.ac.uk">Email David Sterratt</a></li>
</ul>

<h2>Work using Retistruct</h2>

<ul>
<li>Smodlaka, H. and Khamas, W. A. and Palmer, L. and Lui, B. and
  Borovac, J. A. and Cohn, B. A. and Schmitz, L. (2016) "Eye Histology
  and Ganglion Cell Topography of Northern Elephant Seals (Mirounga
  angustirostris)" <em>Anat. Rec.
  (Hoboken)</em> <strong>6</strong>:&nbsp;798-805. <a href="http://dx.doi.org/10.1002/ar.23342">DOI:
  10.1002/ar.23342</a>
</li>
<li>Cohn, B. A. and Collin, S. P. and Wainwright, P. C. and Schmitz,
  L. (2015) "Retinal topography maps in R: new tools for the analysis
  and visualization of spatial retinal
  data". <em>J. Vis.</em> <strong>15</strong>:&nbsp;19. <a href="http://dx.doi.org/10.1167/15.9.19">DOI:
  10.1167/15.9.19</a></li>
<li>Flinn, J. M., Kakalec P., Tappero, R., Jones, B. and Lengyel,
I. (2014) "Correlations in distribution and concentration of calcium,
copper and iron with zinc in isolated extracellular deposits
associated with age-related macular
degeneration". <em>Metallomics</em> <strong>6</strong>:&nbsp;1223-1228. <a href="http://dx.doi.org/10.1039/c4mt00058g">DOI:
10.1039/c4mt00058g</a>
 </li>
<li>Bleckert, A., Schwartz, G. W., Turner, M.H., Rieke, F., Wong,
  R. O. L. (2014) "Visual space is represented by nonmatching
  topographies of distinct mouse retinal ganglion cell
  types". <em>Current
  Biology</em> <strong>24</strong>:&nbsp;310-315.  <a href="http://dx.doi.org/10.1016/j.cub.2013.12.020">DOI:
  10.1016/j.cub.2013.12.020</a>
</li>
</ul>

<h2>Updates</h2>

<dl>
  <dt>March 2015</dt>
  <dd><a href="https://www.linkedin.com/profile/view?id=ADEAAApksKkBd9EgawB_-ysAEyLjdBeLVfT7jSU&authType=OPENLINK&authToken=cUTs&locale=en_US&srchid=1073122861452092899387&srchindex=1&srchtotal=30&trk=vsrp_people_res_name&trkInfo=VSRPsearchId%3A1073122861452092899387%2CVSRPtargetId%3A174370985%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Atrue%2CauthType%3AOPENLINK">Brian
  Cohn</a> has pointed out a precursor paper to Retistruct, which we
  weren't aware of when developing Retistruct, or writing the paper:
    <ul><li>
        Curcio, C.A., Sloan, K. R. and Meyers, D. (1989) "Computer methods for
        sampling, reconstruction, display and analysis of retinal whole
        mounts".
        <em>Vision Res.</em> 29(5):529-40. <a href="http://www.ncbi.nlm.nih.gov/pubmed/2603390">Pubmed</a>
      </li>
    </ul>
  </dd>
</dl>

<h2>Authors and funding</h2>

<p>Retistruct was written
  by <a href="http://homepages.inf.ed.ac.uk/sterratt/">David
  Sterratt</a> at the <a href="http://www.ed.ac.uk/">University of
  Edinburgh</a>, and tested by Daniel Lyngholm and Ian Thompson at the
  <a href="http://www.kcl.ac.uk/depsta/biomedical/mrc/">MRC Centre for
  Developmental Neurobiology, KCL</a>.
 </p>

<p>This work was supported by a Programme Grant from
the <a href="http://www.wellcome.ac.uk">Wellcome Trust</a> (G083305).
</p>



</body>
</html>

<!--  LocalWords:  Retistruct YouTube Sterratt Lyngholm MRC KCL PLoS
 -->
<!--  LocalWords:  visuotopic Willshaw Ubuntu th MacOS RGtk CRAN CMD
 -->
<!--  LocalWords:  Github Matlab SMI ImageJ Fluoro brightfield DOI al
 -->
<!--  LocalWords:  ImageJ's Kakalec Tappero Lengyel macular Bleckert
 -->
<!--  LocalWords:  Metallomics Rieke nonmatching GTK von Csefalvay's
 -->
<!--  LocalWords:  Flinn Neurobiology Wellcome Cohn Pubmed
 -->
