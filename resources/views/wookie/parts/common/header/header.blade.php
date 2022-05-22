<header id="tt-header">
    <!-- tt-mobile menu -->
    <nav class="panel-menu mobile-main-menu">
        @includeIf('wookie.parts.common.header.megamenu.mobile_megamenu')
        <div class="mm-navbtn-names">
            <div class="mm-closebtn">Close</div>
            <div class="mm-backbtn">Back</div>
        </div>
    </nav>
    <!-- tt-mobile-header -->
    <div class="tt-mobile-header">
        <div class="container-fluid">
            <div class="tt-header-row">
                <div class="tt-mobile-parent-menu">
                    <div class="tt-menu-toggle" id="js-menu-toggle">
                        <i class="icon-03"></i>
                    </div>
                </div>
                <!-- search -->
                <div class="tt-mobile-parent-search tt-parent-box"></div>
                <!-- /search -->
                <!-- cart -->
                <div class="tt-mobile-parent-cart tt-parent-box"></div>
                <!-- /cart -->
                <!-- account -->
                <div class="tt-mobile-parent-account tt-parent-box"></div>
                <!-- /account -->
                <!-- currency -->
                <div class="tt-mobile-parent-multi tt-parent-box"></div>
                <!-- /currency -->
            </div>
        </div>
        <div class="container-fluid tt-top-line">
            <div class="row">
                <div class="tt-logo-container">
                    <!-- mobile logo -->
                    <a class="tt-logo tt-logo-alignment" href="index.html"><img src="images/custom/logo.png" alt=""></a>
                    <!-- /mobile logo -->
                </div>
            </div>
        </div>
    </div>
    <!-- tt-desktop-header -->
    <div class="tt-desktop-header">
        <div class="container">
            <div class="tt-header-holder">
                <div class="tt-col-obj tt-obj-logo">
                    <!-- logo -->
                    <a class="tt-logo tt-logo-alignment" href="index.html"><img src="images/custom/logo.png" alt=""></a>
                    <!-- /logo -->
                </div>
                <div class="tt-col-obj tt-obj-menu">
                    <!-- tt-menu -->
                    <div class="tt-desctop-parent-menu tt-parent-box">
                        <div class="tt-desctop-menu tt-hover-03" id="js-include-desktop-menu"></div>
                    </div>
                    <!-- /tt-menu -->
                </div>
                <div class="tt-col-obj tt-obj-options obj-move-right">

                    @includeIf('wookie.parts.common.header.search')
                    @includeIf('wookie.parts.common.header.cart.cart')
                    @includeIf('wookie.parts.common.header.account')
                </div>
            </div>
        </div>
    </div>
    <!-- stuck nav -->
    <div class="tt-stuck-nav" id="js-tt-stuck-nav">
        <div class="container">
            <div class="tt-header-row ">
                <div class="tt-stuck-parent-menu"></div>
                <div class="tt-stuck-parent-search tt-parent-box"></div>
                <div class="tt-stuck-parent-cart tt-parent-box"></div>
                <div class="tt-stuck-parent-account tt-parent-box"></div>
                <div class="tt-stuck-parent-multi tt-parent-box"></div>
            </div>
        </div>
    </div>
</header>
