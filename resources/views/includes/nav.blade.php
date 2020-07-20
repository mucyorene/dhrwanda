<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="http://placehold.it/300x60?text=Logo" width="150" height="30" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->

<style>
      .align-self-stretch .actives{
        background-color: #59bd83;
      }
      .align-self-stretch .actives span{
        color:white;
      }
      .align-self-stretch .services:hover{
        background-color: #59bd83;
      }
</style>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container-fluid px-lg-5">
    <a class="navbar-brand" href="/">DH</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li <?php if(isset($_GET['home'])){ echo "class='active nav-item'"; }else{ echo "class='nav-item'";}?> id="active"><a href="/?home=1" class="nav-link">Home</a></li>
        <li <?php if(isset($_GET['abt'])){ echo "class='active nav-item'"; }else{ echo "class='nav-item'";}?> id="about"><a href="/about?abt=1" class="nav-link">About us</a></li>
        <li <?php if(isset($_GET['ser'])){ echo "class='active nav-item'"; }else{ echo "class='nav-item'";}?> ><a href="/services?ser=1" class="nav-link">Services</a></li>
        <li <?php if(isset($_GET['cz'])){ echo "class='active nav-item'"; }else{ echo "class='nav-item'";}?> ><a href="/causes?cz=1" class="nav-link">Causes</a></li>
        <li <?php if(isset($_GET['dnt'])){ echo "class='active nav-item'"; }else{ echo "class='nav-item'";}?> ><a href="/donate?dnt=1" class="nav-link">Donate</a></li> 
        <li <?php if(isset($_GET['blg'])){ echo "class='active nav-item'"; }else{ echo "class='nav-item'";}?> ><a href="/blog?blg=1" class="nav-link">Our Blog</a></li>        
        <li <?php if(isset($_GET['ctc'])){ echo "class='active nav-item'"; }else{ echo "class='nav-item'";}?> ><a href="/contact?ctc=1" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
    <!-- END nav -->



