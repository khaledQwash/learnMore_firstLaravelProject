@extends('landingPage.master')
@section('content')

        <!-- Features Section -->
        <section id="features" class="features section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="subtitle">Features</span>
                <h2>Great Features</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="tabs-wrapper">
                    <div class="tabs-header" data-aos="fade-up" data-aos-delay="200">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                                    <div class="tab-content-preview">
                                        <span class="tab-number">01</span>
                                        <div class="tab-text">
                                            <h6>Innovation</h6>
                                            <small>Creative solutions</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                                    <div class="tab-content-preview">
                                        <span class="tab-number">02</span>
                                        <div class="tab-text">
                                            <h6>Strategy</h6>
                                            <small>Business growth</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                                    <div class="tab-content-preview">
                                        <span class="tab-number">03</span>
                                        <div class="tab-text">
                                            <h6>Performance</h6>
                                            <small>Optimal results</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                                    <div class="tab-content-preview">
                                        <span class="tab-number">04</span>
                                        <div class="tab-text">
                                            <h6>Integration</h6>
                                            <small>Seamless workflow</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                        <div class="tab-pane fade active show" id="features-tab-1">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-area">
                                        <div class="content-badge">
                                            <i class="bi bi-lightbulb"></i>
                                            <span>Innovation Hub</span>
                                        </div>
                                        <h3>Revolutionary Design Thinking</h3>
                                        <p>Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremque
                                            laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et
                                            quasi architecto beatae vitae dicta sunt explicabo.</p>

                                        <div class="highlight-stats">
                                            <div class="stat-item">
                                                <span class="stat-value">145%</span>
                                                <span class="stat-label">Innovation Rate</span>
                                            </div>
                                            <div class="stat-item">
                                                <span class="stat-value">28K</span>
                                                <span class="stat-label">Ideas Generated</span>
                                            </div>
                                        </div>

                                        <div class="feature-points">
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Nemo enim ipsam voluptatem quia voluptas sit</span>
                                            </div>
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Aspernatur aut odit fugit sed quia consequuntur</span>
                                            </div>
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Magni dolores eos qui ratione voluptatem</span>
                                            </div>
                                        </div>

                                        <a href="#" class="explore-link">
                                            Explore Innovation <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="visual-content">
                                        <img src="{{ asset('mySiteAssets/img/features/features-2.webp') }}" alt=""
                                            class="img-fluid">
                                        <div class="floating-element">
                                            <div class="floating-card">
                                                <i class="bi bi-lightning-charge"></i>
                                                <div class="card-info">
                                                    <span>Speed</span>
                                                    <strong>3x Faster</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="features-tab-2">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-area">
                                        <div class="content-badge">
                                            <i class="bi bi-compass"></i>
                                            <span>Strategic Planning</span>
                                        </div>
                                        <h3>Data-Driven Business Strategy</h3>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                            excepturi sint occaecati cupiditate non provident.</p>

                                        <div class="highlight-stats">
                                            <div class="stat-item">
                                                <span class="stat-value">234%</span>
                                                <span class="stat-label">Growth Rate</span>
                                            </div>
                                            <div class="stat-item">
                                                <span class="stat-value">156</span>
                                                <span class="stat-label">Strategies</span>
                                            </div>
                                        </div>

                                        <div class="feature-points">
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Similique sunt in culpa qui officia deserunt</span>
                                            </div>
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Mollitia animi id est laborum et dolorum fuga</span>
                                            </div>
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Et harum quidem rerum facilis est expedita</span>
                                            </div>
                                        </div>

                                        <a href="#" class="explore-link">
                                            View Strategy <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="visual-content">
                                        <img src="{{ asset('mySiteAssets/img/features/features-4.webp') }}" alt=""
                                            class="img-fluid">
                                        <div class="floating-element">
                                            <div class="floating-card">
                                                <i class="bi bi-graph-up-arrow"></i>
                                                <div class="card-info">
                                                    <span>Growth</span>
                                                    <strong>+189% ROI</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="features-tab-3">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-area">
                                        <div class="content-badge">
                                            <i class="bi bi-speedometer2"></i>
                                            <span>High Performance</span>
                                        </div>
                                        <h3>Optimized System Performance</h3>
                                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                                            eveniet voluptates repudiandae sint et molestiae non recusandae itaque earum
                                            rerum hic tenetur sapiente delectus.</p>

                                        <div class="highlight-stats">
                                            <div class="stat-item">
                                                <span class="stat-value">99.8%</span>
                                                <span class="stat-label">System Uptime</span>
                                            </div>
                                            <div class="stat-item">
                                                <span class="stat-value">2.4s</span>
                                                <span class="stat-label">Load Time</span>
                                            </div>
                                        </div>

                                        <div class="feature-points">
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Ut aut reiciendis voluptatibus maiores alias</span>
                                            </div>
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Consequatur aut perferendis doloribus asperiores</span>
                                            </div>
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Repellat nam libero tempore cum soluta nobis</span>
                                            </div>
                                        </div>

                                        <a href="#" class="explore-link">
                                            Check Performance <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="visual-content">
                                        <img src="{{ asset('mySiteAssets/img/features/features-1.webp') }}" alt=""
                                            class="img-fluid">
                                        <div class="floating-element">
                                            <div class="floating-card">
                                                <i class="bi bi-cpu"></i>
                                                <div class="card-info">
                                                    <span>Power</span>
                                                    <strong>128 Cores</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="features-tab-4">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-area">
                                        <div class="content-badge">
                                            <i class="bi bi-puzzle"></i>
                                            <span>Smart Integration</span>
                                        </div>
                                        <h3>Seamless Workflow Integration</h3>
                                        <p>Eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                                            possimus omnis voluptas assumenda est omnis dolor repellendus temporibus autem
                                            quibusdam et aut officiis debitis.</p>

                                        <div class="highlight-stats">
                                            <div class="stat-item">
                                                <span class="stat-value">450+</span>
                                                <span class="stat-label">Integrations</span>
                                            </div>
                                            <div class="stat-item">
                                                <span class="stat-value">85%</span>
                                                <span class="stat-label">Automation</span>
                                            </div>
                                        </div>

                                        <div class="feature-points">
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Rerum necessitatibus saepe eveniet voluptates</span>
                                            </div>
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Repudiandae sint et molestiae non recusandae</span>
                                            </div>
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Itaque earum rerum hic tenetur sapiente</span>
                                            </div>
                                        </div>

                                        <a href="#" class="explore-link">
                                            Start Integration <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="visual-content">
                                        <img src="{{ asset('mySiteAssets/img/features/features-5.webp') }}" alt=""
                                            class="img-fluid">
                                        <div class="floating-element">
                                            <div class="floating-card">
                                                <i class="bi bi-link-45deg"></i>
                                                <div class="card-info">
                                                    <span>Connected</span>
                                                    <strong>24/7 Sync</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section><!-- /Features Section -->

@endsection