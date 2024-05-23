 <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg-1-1.jpg">
        <!-- bg animated image/ -->   
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">News</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="./">Home</a></li>
                            <li class="active">News</li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

     <!--==============================
    Blog Area  
    ==============================-->
    <section class="blog-area space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xxl-8 col-lg-7">
                <?php
                $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 5";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                    <div class="blog-card style3">
                    <div class="blog-img">
                            <img src="assets/img/blog/blog-post1-1.jpg" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i> Ecofine</a>
                                <a href="blog.html"><i class="fas fa-calendar-alt"></i>April 17, 2024</a>
                                <a href="blog.html"><i class="fas fa-folder"></i>Recycling</a>
                            </div>
                            <h3 class="blog-title"><a href="blog-details.html">The Urgent for Conservation of eco</a></h3>
                            <p>Ecology is the scientific study of the relationships between living organisms and their environment. It encompasses the study of the interactions between individual organisms, populations, communities, and ecosystems, as well as the biogeochemical and physical processes that drive these interactions. One of the most effective ways to reduce your carbon [...]</p>
                            <a href="blog-details.html" class="btn style4">
                                Read More
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pagination">
                        <ul>
                            <li><a href="blog.html">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html"><i class="fas fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                    <?php
                    }
                }else{
                  ?>
<div class="blog-card style3">
                            <div class="blog-card text-center">
                                <h1>No News Found</h1>
                                </div>
                            </div>
                        </div>
                <?php  
                }
                ?> 
                </div>

                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <h3 class="widget_title">Search</h3>
                            <form class="search-form">
                                <input type="text" placeholder="Enter Keyword">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>

                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li>
                                    <a href="#">Climate</a>
                                </li>
                                <li>
                                    <a href="#">Ecosystem</a>
                                </li>
                                <li>
                                    <a href="#">Global Warming</a>
                                </li>
                                <li>
                                    <a href="#">Recycling</a>
                                </li>                              
                            </ul>
                        </div>

                        <div class="widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                            <?php
                $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 5";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                                
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/widget/<?php echo $row['photo']; ?>" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="?page=news?id=<?php echo $row['id']; ?>"><?php echo $row['Title']; ?></a></h4>
                                        <div class="recent-post-meta">
                                            <a href="?page=news?id=<?php echo $row['id']; ?>"><i class="fas fa-calendar"></i><?php echo date('d M', strtotime($row['date'])); ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                    }
                }else{
                  ?>
<div class="recent-post">
                                <h1>Recent News not Found</h1>
                                </div>
                            
                <?php  
                }
                ?>
                            </div>
                        </div>                        
                    </aside>
                </div>
            </div>
        </div>
    </section>   
