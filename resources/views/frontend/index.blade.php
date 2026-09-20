@extends('layouts.front')
@section('content')

<!-- 1. The Wonder Canvas Storybook Hero -->
<section class="wonder-hero-section">
    <!-- Floating Background Doodles -->
    <div class="doodle-element doodle-sun" style="top: 8%; right: 12%; font-size: 2.5rem; color: #fbbf24; opacity: 0.7;" aria-hidden="true">
        <i class="fas fa-sun"></i>
    </div>
    <div class="doodle-element doodle-cloud" style="top: 18%; left: 4%; font-size: 2.25rem; color: #bae6fd; opacity: 0.6;" aria-hidden="true">
        <i class="fas fa-cloud"></i>
    </div>
    <div class="doodle-element doodle-plane" style="top: 25%; right: 42%; font-size: 1.5rem; color: var(--saffron); opacity: 0.7;" aria-hidden="true">
        <i class="fas fa-paper-plane"></i>
    </div>
    <div class="doodle-element doodle-star" style="bottom: 15%; left: 8%; font-size: 1.25rem; color: var(--honey-dark); opacity: 0.5;" aria-hidden="true">
        <i class="fas fa-star"></i>
    </div>

    <div class="container">
        <div class="hero-grid">
            <!-- Hero Left Text Content -->
            <div class="hero-content reveal-pop">
                <div class="hero-super-badge">
                    <span class="badge-icon"><i class="fas fa-seedling"></i></span>
                    <span>Welcome to Sunrise Group - Surat</span>
                </div>

                <h1 class="hero-headline">
                    Education is the <br>
                    <span class="highlight-saffron">Movement</span> from <br>
                    Darkness to Light.
                </h1>

                <p class="hero-lead">
                    Welcome to Seven Steps Pre-School, where learning becomes an adventure of joy, imagination, and foundational discovery. Nurturing young minds with love, care, and holistic excellence.
                </p>

                <div class="hero-btn-row">
                    <a href="{{ route('enquiry') }}" class="btn-wonder btn-wonder-primary">
                        <i class="fas fa-paper-plane"></i> Apply for Admission
                    </a>
                    <a href="{{ route('aboutUs') }}" class="btn-wonder btn-wonder-secondary">
                        <i class="fas fa-compass"></i> Discover Our School
                    </a>
                </div>

                <!-- Hero Trust Pillars -->
                <div class="hero-trust-row">
                    <div class="hero-trust-item">
                        <div class="trust-icon-box c-saffron"><i class="fas fa-shield-alt"></i></div>
                        <div class="trust-text">
                            <h4>100% Safe Campus</h4>
                            <p>CCTV & Verified Staff</p>
                        </div>
                    </div>
                    <div class="hero-trust-item">
                        <div class="trust-icon-box c-mint"><i class="fas fa-heart"></i></div>
                        <div class="trust-text">
                            <h4>Homelike Care</h4>
                            <p>Warm & Loving Staff</p>
                        </div>
                    </div>
                    <div class="hero-trust-item">
                        <div class="trust-icon-box c-honey"><i class="fas fa-puzzle-piece"></i></div>
                        <div class="trust-text">
                            <h4>Play to Learn</h4>
                            <p>Experiential Growth</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero Right Organic Portrait Canvas -->
            <div class="hero-portrait-canvas reveal-pop">
                <div class="portrait-blob-wrapper">
                    <!-- Glowing Backlight Halo -->
                    <div class="blob-background-halo" aria-hidden="true"></div>

                    <!-- Floating Trust Badges -->
                    <div class="hero-sticker-badge hero-badge-1">
                        <i class="fas fa-award" style="color: var(--mint);"></i>
                        <span>Top Rated Pre-School</span>
                    </div>
                    <div class="hero-sticker-badge hero-badge-2">
                        <i class="fas fa-palette" style="color: var(--berry);"></i>
                        <span>Joyful Play Learning</span>
                    </div>

                    <!-- Organic Framed Image -->
                    <div class="portrait-organic-frame">
                        <img src="/assets/img/hero_child.png" alt="Happy student of Seven Steps Pre-School engaged in creative learning">
                    </div>

                    <!-- Official Seal Stamp -->
                    <div class="stamp-seal" style="bottom: -15px; left: 10px;">
                        <i class="fas fa-star"></i>
                        <span>EST. 2004<br>SURAT</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Storybook Wave Divider -->
<div class="storybook-wave wave-alt" aria-hidden="true">
    <svg viewBox="0 0 1200 48" preserveAspectRatio="none">
        <path d="M0,0 C150,40 350,-10 500,25 C650,60 900,5 1200,20 L1200,48 L0,48 Z"></path>
    </svg>
</div>

<!-- 2. The 7 Steps Milestone Journey -->
<section class="section-py wonder-steps-section">
    <div class="container">
        <div class="section-header reveal-pop">
            <span class="section-tag"><i class="fas fa-shoe-prints"></i> The 7 Steps Pathway</span>
            <h2>Milestones of Early Childhood Growth</h2>
            <p>A holistic, progressive roadmap engineered to spark inquisitive minds, build joyful character, and inspire life-long confidence.</p>
        </div>

        <div class="milestone-trail-grid">
            <!-- Step 1 -->
            <div class="milestone-step-card m-step-1 reveal-pop">
                <div class="milestone-number-pin">1</div>
                <div class="milestone-step-icon"><i class="fas fa-eye"></i></div>
                <h3>Curiosity & Sensory Play</h3>
                <p>Exploring textures, shapes, and vibrant colors to awaken sensory perception and inquisitive young minds.</p>
            </div>

            <!-- Step 2 -->
            <div class="milestone-step-card m-step-2 reveal-pop">
                <div class="milestone-number-pin">2</div>
                <div class="milestone-step-icon"><i class="fas fa-paint-brush"></i></div>
                <h3>Creative Arts & Joy</h3>
                <p>Finger painting, crafts, music, and dramatic play empowering fearless self-expression.</p>
            </div>

            <!-- Step 3 -->
            <div class="milestone-step-card m-step-3 reveal-pop">
                <div class="milestone-number-pin">3</div>
                <div class="milestone-step-icon"><i class="fas fa-book-open"></i></div>
                <h3>Phonics & Language</h3>
                <p>Interactive storytelling, rhymes, and phonetics building early reading fluency and speech confidence.</p>
            </div>

            <!-- Step 4 -->
            <div class="milestone-step-card m-step-4 reveal-pop">
                <div class="milestone-number-pin">4</div>
                <div class="milestone-step-icon"><i class="fas fa-shapes"></i></div>
                <h3>Math & Logic Discovery</h3>
                <p>Pattern blocks, counting beads, and spatial puzzles turning numbers into natural playtime fun.</p>
            </div>

            <!-- Step 5 -->
            <div class="milestone-step-card m-step-5 reveal-pop">
                <div class="milestone-number-pin">5</div>
                <div class="milestone-step-icon"><i class="fas fa-running"></i></div>
                <h3>Agility, Yoga & Play</h3>
                <p>Kid-friendly yoga poses, outdoor sports, and motor agility nurturing energetic and healthy bodies.</p>
            </div>

            <!-- Step 6 -->
            <div class="milestone-step-card m-step-6 reveal-pop">
                <div class="milestone-number-pin">6</div>
                <div class="milestone-step-icon"><i class="fas fa-heart"></i></div>
                <h3>Social Values & Empathy</h3>
                <p>Sharing, collaboration, respect for elders, and emotional bonding cultivated in a warm classroom family.</p>
            </div>

            <!-- Step 7 -->
            <div class="milestone-step-card m-step-7 reveal-pop">
                <div class="milestone-number-pin">7</div>
                <div class="milestone-step-icon"><i class="fas fa-graduation-cap"></i></div>
                <h3>Leadership & Readiness</h3>
                <p>Stage presentation, self-assurance, and foundational primary school readiness for confident future achievers.</p>
            </div>
        </div>
    </div>
</section>

<!-- Storybook Wave Divider -->
<div class="storybook-wave wave-white" aria-hidden="true">
    <svg viewBox="0 0 1200 48" preserveAspectRatio="none">
        <path d="M0,0 C150,40 350,-10 500,25 C650,60 900,5 1200,20 L1200,48 L0,48 Z"></path>
    </svg>
</div>

<!-- 3. Editorial About Storybook Section -->
<section class="section-py bg-white">
    <div class="container">
        <div class="editorial-split-layout">
            <!-- Left: Scrapbook Polaroid Photo Frame -->
            <div class="reveal-pop">
                <div class="scrapbook-polaroid-frame">
                    <div class="washi-tape"></div>
                    <img src="/assets/img/intro_activity.png" alt="Seven Steps Students enjoying tactile sensory activities">
                    <div class="scrapbook-caption">Happy Hearts & Inquisitive Minds ✨</div>
                </div>
            </div>

            <!-- Right: Editorial Narrative -->
            <div class="editorial-story-content reveal-pop">
                <span class="section-tag"><i class="fas fa-heart"></i> Best Technological School</span>
                <h2>Seven Steps Pre-School</h2>
                <p class="editorial-lead-para">
                    Seven Steps Pre-School, including all of our schools, is committed to acting on our new vision, mission, and values statements. These new statements that emphasize student success and well-being reflect the future-focused and innovative organization that we are today.
                </p>

                <div class="storybook-pillars-grid">
                    <div class="pillar-box">
                        <div class="pillar-icon c-saffron"><i class="fas fa-home"></i></div>
                        <div class="pillar-info">
                            <h4>Homelike Care</h4>
                            <p>Nurturing & safe space</p>
                        </div>
                    </div>
                    <div class="pillar-box">
                        <div class="pillar-icon c-mint"><i class="fas fa-award"></i></div>
                        <div class="pillar-info">
                            <h4>Quality Education</h4>
                            <p>Global standard curriculum</p>
                        </div>
                    </div>
                    <div class="pillar-box">
                        <div class="pillar-icon c-berry"><i class="fas fa-shield-alt"></i></div>
                        <div class="pillar-info">
                            <h4>Safety & Security</h4>
                            <p>100% child-safe premises</p>
                        </div>
                    </div>
                    <div class="pillar-box">
                        <div class="pillar-icon c-honey"><i class="fas fa-puzzle-piece"></i></div>
                        <div class="pillar-info">
                            <h4>Play to Learn</h4>
                            <p>Experiential growth</p>
                        </div>
                    </div>
                </div>

                <a href="{{ route('aboutUs') }}" class="btn-wonder btn-wonder-primary">
                    <i class="fas fa-book-reader"></i> Read Full Story
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Storybook Wave Divider -->
<div class="storybook-wave wave-cream" aria-hidden="true">
    <svg viewBox="0 0 1200 48" preserveAspectRatio="none">
        <path d="M0,0 C150,40 350,-10 500,25 C650,60 900,5 1200,20 L1200,48 L0,48 Z"></path>
    </svg>
</div>

<!-- 4. Explorer's Campus (Facilities Teaser) -->
<section class="section-py bg-canvas">
    <div class="container">
        <div class="section-header reveal-pop">
            <span class="section-tag"><i class="fas fa-magic"></i> Our Campus Wonderland</span>
            <h2>Best Facilities For Kids</h2>
            <p>Providing cutting-edge early childhood learning tools, mobile connectivity, and nurturing career guidance in Surat.</p>
        </div>

        <div class="facilities-mosaic-grid">
            <!-- Card 1 -->
            <div class="facility-explorer-card reveal-pop">
                <div class="facility-card-media">
                    <img src="/assets/img/facility_01.jpg" alt="Online appointment and parent counselor suite">
                </div>
                <h3>Book Appointment Online</h3>
                <p>Schedule your personalized campus walkthrough and admissions counseling session conveniently online.</p>
                <a href="{{ route('enquiry') }}" class="btn-wonder btn-wonder-secondary" style="font-size: 0.88rem; padding: 0.6rem 1.25rem;">Book Appointment</a>
            </div>

            <!-- Card 2 -->
            <div class="facility-explorer-card reveal-pop">
                <div class="facility-card-media">
                    <img src="/assets/img/facility_02.jpg" alt="Safe and comfortable school bus transport system">
                </div>
                <h3>Transportation Facilities</h3>
                <p>Well-maintained school buses equipped with tracking and caring attendants ensuring reliable pick and drop.</p>
                <a href="{{ route('facilities') }}" class="btn-wonder btn-wonder-secondary" style="font-size: 0.88rem; padding: 0.6rem 1.25rem;">View Fleet</a>
            </div>

            <!-- Card 3 -->
            <div class="facility-explorer-card reveal-pop">
                <div class="facility-card-media">
                    <img src="/assets/img/facility_03.jpg" alt="Kid-friendly indoor play station with soft play equipment">
                </div>
                <h3>Play Station Arena</h3>
                <p>Safe indoor and outdoor adventure zones featuring slides, ball pits, and physical dexterity games.</p>
                <a href="{{ route('facilities') }}" class="btn-wonder btn-wonder-secondary" style="font-size: 0.88rem; padding: 0.6rem 1.25rem;">Explore Play Area</a>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3rem;" class="reveal-pop">
            <a href="{{ route('facilities') }}" class="btn-wonder btn-wonder-primary">
                <i class="fas fa-shapes"></i> View All Campus Facilities
            </a>
        </div>
    </div>
</section>

<!-- Storybook Wave Divider -->
<div class="storybook-wave wave-white" aria-hidden="true">
    <svg viewBox="0 0 1200 48" preserveAspectRatio="none">
        <path d="M0,0 C150,40 350,-10 500,25 C650,60 900,5 1200,20 L1200,48 L0,48 Z"></path>
    </svg>
</div>

<!-- 5. Scrapbook Pinboard Activities Teaser -->
<section class="section-py bg-white">
    <div class="container">
        <div class="section-header reveal-pop">
            <span class="section-tag"><i class="fas fa-palette"></i> Creative Playgrounds</span>
            <h2>Joyful Activities & Celebrations</h2>
            <p>From cultural festivals to brain-tickling competitions, our learners celebrate every single day with curiosity.</p>
        </div>

        <div class="pinboard-grid">
            <!-- Pinboard 1 -->
            <div class="pinboard-item-card reveal-pop">
                <div class="pushpin-accent"></div>
                <div class="pinboard-thumb">
                    <img src="/assets/img/celebration_01.jpg" alt="Cultural festivals and student celebrations">
                </div>
                <div class="pinboard-caption">
                    <h4>Festival Celebrations</h4>
                    <a href="{{ route('academic_activities') }}" class="handwritten-badge">Explore Moments <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Pinboard 2 -->
            <div class="pinboard-item-card reveal-pop">
                <div class="pushpin-accent c-mint"></div>
                <div class="pinboard-thumb">
                    <img src="/assets/img/competition_01.jpg" alt="Fun classroom competitions and learning challenges">
                </div>
                <div class="pinboard-caption">
                    <h4>Fun Competitions</h4>
                    <a href="{{ route('academic_activities') }}" class="handwritten-badge c-mint">See Challenges <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Pinboard 3 -->
            <div class="pinboard-item-card reveal-pop">
                <div class="pushpin-accent c-honey"></div>
                <div class="pinboard-thumb">
                    <img src="/assets/img/club_act_01.jpg" alt="Art, music, and science club activities">
                </div>
                <div class="pinboard-caption">
                    <h4>Club Discoveries</h4>
                    <a href="{{ route('academic_activities') }}" class="handwritten-badge c-honey">Join Clubs <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Pinboard 4 -->
            <div class="pinboard-item-card reveal-pop">
                <div class="pushpin-accent c-iris"></div>
                <div class="pinboard-thumb">
                    <img src="/assets/img/extra_act_01.jpg" alt="Outdoor excursions and extra-curricular learning">
                </div>
                <div class="pinboard-caption">
                    <h4>Extra Activities</h4>
                    <a href="{{ route('extra_activities') }}" class="handwritten-badge c-iris">See Adventures <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Storybook Wave Divider -->
<div class="storybook-wave wave-cream" aria-hidden="true">
    <svg viewBox="0 0 1200 48" preserveAspectRatio="none">
        <path d="M0,0 C150,40 350,-10 500,25 C650,60 900,5 1200,20 L1200,48 L0,48 Z"></path>
    </svg>
</div>

<!-- 6. Living Memories Mosaic (Photo Gallery Teaser) -->
<section class="section-py bg-canvas">
    <div class="container">
        <div class="section-header reveal-pop">
            <span class="section-tag"><i class="fas fa-camera"></i> Snapshot Moments</span>
            <h2>Life at Seven Steps</h2>
            <p>A glimpse into the laughter, discoveries, and milestones created across our campuses.</p>
        </div>

        <div class="gallery-mosaic-layout">
            @php
                $galleryItems = $galleries ?? \App\Models\Galleryimage::where('is_show', 1)->latest()->take(8)->get();
            @endphp
            @forelse($galleryItems as $gallery)
            <a href="{{ route('gallery') }}" class="mosaic-photo-card reveal-pop" data-lightbox-src="{{ asset($gallery->file) }}" data-lightbox-caption="{{ $gallery->text ?? 'Life at Seven Steps' }}">
                <div class="mosaic-photo-inner">
                    <img src="{{ asset($gallery->file) }}" alt="{{ $gallery->text ?? 'Life at Seven Steps' }}" loading="lazy">
                    <div class="mosaic-zoom-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="mosaic-caption-bar"><span>{{ $gallery->text ? $gallery->text : 'Seven Steps Moments' }}</span></div>
            </a>
            @empty
            <a href="{{ route('gallery') }}" class="mosaic-photo-card reveal-pop" data-lightbox-src="/assets/img/photo_gallery_01.jpg" data-lightbox-caption="Joyful classroom learning activities">
                <div class="mosaic-photo-inner">
                    <img src="/assets/img/photo_gallery_01.jpg" alt="Students engaged in collaborative classroom tasks" loading="lazy">
                    <div class="mosaic-zoom-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="mosaic-caption-bar"><span>Classroom Explorers</span></div>
            </a>

            <a href="{{ route('gallery') }}" class="mosaic-photo-card reveal-pop" data-lightbox-src="/assets/img/photo_gallery_02.jpg" data-lightbox-caption="Creative arts and finger painting">
                <div class="mosaic-photo-inner">
                    <img src="/assets/img/photo_gallery_02.jpg" alt="Little artists creating colorful artwork" loading="lazy">
                    <div class="mosaic-zoom-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="mosaic-caption-bar"><span>Art & Expression</span></div>
            </a>

            <a href="{{ route('gallery') }}" class="mosaic-photo-card reveal-pop" data-lightbox-src="/assets/img/photo_gallery_03.jpg" data-lightbox-caption="Outdoor playground adventures">
                <div class="mosaic-photo-inner">
                    <img src="/assets/img/photo_gallery_03.jpg" alt="Students playing on outdoor equipment" loading="lazy">
                    <div class="mosaic-zoom-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="mosaic-caption-bar"><span>Playground Adventure</span></div>
            </a>

            <a href="{{ route('gallery') }}" class="mosaic-photo-card reveal-pop" data-lightbox-src="/assets/img/photo_gallery_04.jpg" data-lightbox-caption="Annual celebration and stage performances">
                <div class="mosaic-photo-inner">
                    <img src="/assets/img/photo_gallery_04.jpg" alt="Stage presentations by preschool students" loading="lazy">
                    <div class="mosaic-zoom-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="mosaic-caption-bar"><span>Stage & Confidence</span></div>
            </a>
            @endforelse
        </div>

        <div style="text-align: center; margin-top: 3rem;" class="reveal-pop">
            <a href="{{ route('gallery') }}" class="btn-wonder btn-wonder-secondary">
                <i class="fas fa-images"></i> View Complete Photo Gallery
            </a>
        </div>
    </div>
</section>

<!-- Storybook Wave Divider -->
<div class="storybook-wave wave-white" aria-hidden="true">
    <svg viewBox="0 0 1200 48" preserveAspectRatio="none">
        <path d="M0,0 C150,40 350,-10 500,25 C650,60 900,5 1200,20 L1200,48 L0,48 Z"></path>
    </svg>
</div>

<!-- 7. Come Visit Our Wonderland (Campus Branches Teaser) -->
<section class="section-py bg-white">
    <div class="container">
        <div class="section-header reveal-pop">
            <span class="section-tag"><i class="fas fa-map-marked-alt"></i> Find Your Nearest Campus</span>
            <h2>Branches Across Surat</h2>
            <p>Conveniently located safe, nurturing, and high-tech campuses across Surat.</p>
        </div>

        <div class="branches-wonder-grid">
            <!-- Pal Campus -->
            <div class="branch-campus-card reveal-pop">
                <span class="campus-pill-badge">Main Campus</span>
                <h3>Pal Road Campus</h3>
                <div class="branch-detail-row">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Galaxy Imperia, Above District Bank, Pal Road, Surat.</span>
                </div>
                <div class="branch-detail-row">
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:+919879146666">+91 98791 46666</a>
                </div>
                <a href="{{ route('branches') }}" class="handwritten-badge" style="margin-top: 0.85rem;">View Branch Details <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Vesu Campus -->
            <div class="branch-campus-card reveal-pop">
                <span class="campus-pill-badge" style="background: var(--bg-pill-mint); color: var(--mint);">Vesu Branch</span>
                <h3>Vesu Campus</h3>
                <div class="branch-detail-row">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Near Reliance Mall, Vesu Main Road, Surat.</span>
                </div>
                <div class="branch-detail-row">
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:+919904419333">+91 99044 19333</a>
                </div>
                <a href="{{ route('branches') }}" class="handwritten-badge c-mint" style="margin-top: 0.85rem;">View Branch Details <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Adajan Campus -->
            <div class="branch-campus-card reveal-pop">
                <span class="campus-pill-badge" style="background: var(--bg-pill-honey); color: var(--honey-dark);">Adajan Branch</span>
                <h3>Adajan Campus</h3>
                <div class="branch-detail-row">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Opp. Prime Arcade, Anand Mahal Road, Adajan, Surat.</span>
                </div>
                <div class="branch-detail-row">
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:+919879146666">+91 98791 46666</a>
                </div>
                <a href="{{ route('branches') }}" class="handwritten-badge c-honey" style="margin-top: 0.85rem;">View Branch Details <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3rem;" class="reveal-pop">
            <a href="{{ route('branches') }}" class="btn-wonder btn-wonder-primary">
                <i class="fas fa-school"></i> See All 6 Campuses in Surat
            </a>
        </div>
    </div>
</section>

@endsection