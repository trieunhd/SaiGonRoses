<?php
if(!defined('VIEW')){
    exit("Bạn không thể truy trập vào đây");
}
?>

</div>
        
    </main>
    

    <br>
 
<br>
 <!--Footer-->
    <footer class="page-footer text-center text-md-left pt-4">

        <!--Social buttons-->
        <div class="social-section text-center">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item"><a class="btn-floating btn-fb"><i class="fab fa-facebook-f"> </i></a></li>
                <li class="list-inline-item"><a class="btn-floating btn-tw"><i class="fab fa-twitter"> </i></a></li>
                <li class="list-inline-item"><a class="btn-floating btn-gplus"><i class="fab fa-google-plus-g"> </i></a></li>
                <li class="list-inline-item"><a class="btn-floating btn-li"><i class="fab fa-linkedin-in"> </i></a></li>
                <li class="list-inline-item"><a class="btn-floating btn-git"><i class="fab fa-github"> </i></a></li>
            </ul>
        </div>
        <!--/.Social buttons-->

        <!--Copyright-->
          <div class="row d-flex align-items-center footer-copyright">
            <div class="col-md-7 col-lg-8">
        <div class="py-3 text-center text-md-left">
            <div class="container-fluid">
                © <?php echo date("Y");?> Copyright: <a href="/"> My Test web </a>
            </div>   
        </div>
    </div>
        <div class="col-md-5 col-lg-4 ml-lg-0">
            <div class="text-center py-3 text-md-right">
                <div class="container-fluid list-unstyled list-inline">
                <a class="list-inline-item" href="">Terms & Condition</a> 
                <a class="list-inline-item" href="">Privacy & Policy</a>
            </div>
        </div>
</div>
    </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->

   <script src="/js/jquery.min.js"></script>

       <!-- Tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
 <script type="text/javascript" src="../js/loading.js"></script>



<script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
        
        new WOW().init();
    
</script>
