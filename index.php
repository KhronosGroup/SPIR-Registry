<?php
$static_title = 'Khronos SPIR Registry';

include_once("../../assets/static_pages/khr_page_top.php");
?>

<p> The SPIR registry contains specifications of the OpenCL Standard
    Portable Intermediate Representation, providing a non-source
    encoding and binary level portability for OpenCL device
    programs. </p>

<p> Open source software components supporting SPIR are available on Github.
    They include a modified Clang which generates SPIR from device programs
    written in OpenCL C in the <a
    href="https://github.com/KhronosGroup/SPIR"> SPIR </a> repository, and
    related tools and headers in the <a
    href="https://github.com/KhronosGroup/SPIR-Tools"> SPIR-Tools </a>
    repository, </p>

<h6> SPIR Specification, Headers, and Documentation </h6>

<p> The current version of SPIR is SPIR 2.0 Provisional. </p>

<ul>
<li> SPIR 2.0 Provisional
     <a href="specs/spir_spec-2.0.pdf">
     Specification </a> (June 5, 2014). </li>
</ul>

<h6> Older Versions </h6>

<ul>
<li> SPIR 1.2
     <a href="specs/spir_spec-1.2.pdf">
     Specification </a> </li>
<li> SPIR 1.2
     <a href="specs/spir_spec-1.2-provisional.pdf">
     Provisional Specification </a> </li>
<li> SPIR 1.0
     <a href="specs/spir_spec-1.0-provisional.pdf">
     Provisional Specification </a> </li>
</ul>

<h6> Providing Feedback on the Registry </h6>

<p> Khronos welcomes comments and bug reports. To provide feedback, please
    file an issue in the <a
    href="https://github.com/KhronosGroup/SPIR-Registry/issues">
    SPIR-Registry </a> Github project. </p>

<?php include_once("../../assets/static_pages/khr_page_bottom.php"); ?>
</body>
</html>
