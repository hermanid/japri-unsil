<body id="page-top">
  <div id="wrapper">
    <?php $this->view('page/menu')?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php $this->view('page/nav');?>
        <?php $this->view('sesi/'.$sesi);?>
      </div>
    <?php $this->view('page/footer')?>
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <?php $this->view('page/modal');?>