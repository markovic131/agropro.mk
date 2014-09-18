    <footer>
        <div class="container">
            <section id="social">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="https://www.facebook.com/agropromk" target="_blank">Facebook</a>
                    </div>
                </div>
            </section>
            <section id="logo">
                <div class="row">
                    <div class="col-md-12">
                        <img src="/img/agro_pro_logo_60.jpg" class="img-responsive" alt="Agro-Pro Logo">
                    </div>
                </div>
            </section>
            <hr>
            <section id="copyright">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <small>&copy; 2008 - <?php echo date('Y'); ?> Carnia Design Co.. All Rights Reserved.</small><br>
                        <small><?php echo time() ?></small>
                    </div>
                </div>
            </section>
        </div>
    </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $('a[href*=#]:not([href=#])').on('click',function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top - 78
                        }, 300);
                        return false;
                    }
                }
            });
        });
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'XXX', 'agropro.mk');ga('send', 'pageview');
    </script>
    </body>
</html>