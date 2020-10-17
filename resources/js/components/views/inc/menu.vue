<template>
    <div>
        <section id="main_menu_section" class="navbar_header">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 ">
                    <div class="main_nav">

                        <div class="wow backInUp main_logo">
                            <a href="index.html">
                                <img src="public/frontend/images/logo.png" alt="logo-image">
                              
                              
                            </a>
                        </div>
                        <div class="main_menu">
                            <nav class="main_menu_list">
                                <ul>
                                    <li class="active">
                                        <router-link to="/">Home</router-link>
                                    </li>
                                    <li>
                                        <a href="#service">Services</a>
                                        <div class="drop_menu">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-circle"></i> App Development</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> Web Development</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> Digital Marketing</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> SEO</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> Services1</a></li>
                                            </ul>
                                        </div>

                                    </li>
                                    <li>
                                        <a href="#work">Portfolio</a>
                                    </li>
                                   
                                    <li class="active"><a href="#">Mega Menu</a>
                                        <div class="mega_menu">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="mega_list">
                                                        <ul>

                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="mega_list">
                                                        <ul>

                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="mega_list">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col3 </a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col3 </a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col3 </a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col3 </a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col3 </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </li>
                                    <li>
                                        
                                        <router-link to="teams">Our Team</router-link>
                                    </li>
                                     <li>
                                        <router-link to="products">Products</router-link>
                                    </li>
                                      <li>
                                        <router-link to="career">Career</router-link>
                                    </li>
                                   
                                    <li>
                                        <router-link to="contact-us">Contact Us</router-link>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--- mobile menu part -->
  
    <section id="main_mobile" class="mob_navbar_header">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="mobile_menu_logo">
                        <a href="index.html">
                             <img class="img-fluid" src="public/frontend/images/logo.png" alt="logo-image">
                           
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mobile_menu_button text-right">
                        <button class="openbtn"><i class="fas fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</template>