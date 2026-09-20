@extends('layouts.front')
@section('content')

<!-- Storybook Wonder Subpage Banner -->
<section class="subpage-wonder-banner">
    <!-- Floating Background Doodles -->
    <div class="doodle-element doodle-star" style="top: 15%; left: 8%; opacity: 0.6;" aria-hidden="true">
        <i class="fas fa-star" style="color: var(--honey-light); font-size: 1.5rem;"></i>
    </div>
    <div class="doodle-element doodle-star" style="bottom: 20%; right: 10%; opacity: 0.6;" aria-hidden="true">
        <i class="fas fa-star" style="color: var(--saffron-light); font-size: 1.25rem;"></i>
    </div>

    <div class="container">
        <div class="reveal-pop">
            <h1>Contact Us</h1>
            <div class="breadcrumb-pill-trail">
                <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i>
                <span>Contact</span>
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


<section class="section-py bg-white">
    <div class="container">
        <div class="section-header reveal-pop">
            <span class="section-tag"><i class="fas fa-map-pin"></i> Come Visit Our World</span>
            <h2>Get in Touch With Us</h2>
            <p>Have questions regarding preschool admissions, syllabus, or school bus routes? We are here to help!</p>
        </div>

        <div class="editorial-split-layout" style="margin-bottom: 3.5rem;">
            <!-- Left: School Contact Information Card -->
            <div class="workbook-form-card reveal-pop" style="margin: 0;">
                <div class="washi-tape left"></div>
                <span class="section-tag"><i class="fas fa-school"></i> Central Office</span>
                <h3 style="font-family: var(--font-display); color: var(--navy); font-size: 1.5rem; margin-bottom: 1.5rem;">
                    Seven Steps Pre-School (Sunrise Group)
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1.25rem;">
                    <div class="branch-detail-row">
                        <i class="fas fa-map-marker-alt" style="font-size: 1.25rem; color: var(--saffron);"></i>
                        <div>
                            <strong style="color: var(--navy); font-size: 1rem;">Main Campus Address</strong><br>
                            <span>Galaxy Imperia, Above District Bank, Pal Road, Surat - 395009, Gujarat, India.</span>
                        </div>
                    </div>

                    <div class="branch-detail-row">
                        <i class="fas fa-phone-alt" style="font-size: 1.25rem; color: var(--mint);"></i>
                        <div>
                            <strong style="color: var(--navy); font-size: 1rem;">Phone Numbers</strong><br>
                            <a href="tel:+919879146666" style="color: var(--saffron); font-weight: 700;">+91 98791 46666</a><br>
                            <a href="tel:+919904419333" style="color: var(--navy); font-weight: 600;">+91 99044 19333</a>
                        </div>
                    </div>

                    <div class="branch-detail-row">
                        <i class="fas fa-envelope" style="font-size: 1.25rem; color: var(--honey-dark);"></i>
                        <div>
                            <strong style="color: var(--navy); font-size: 1rem;">Email Address</strong><br>
                            <a href="mailto:ssspre46666@gmail.com" style="color: var(--navy);">ssspre46666@gmail.com</a>
                        </div>
                    </div>

                    <div class="branch-detail-row">
                        <i class="fas fa-clock" style="font-size: 1.25rem; color: var(--iris);"></i>
                        <div>
                            <strong style="color: var(--navy); font-size: 1rem;">Visiting Hours</strong><br>
                            <span>Monday to Saturday: 08:00 AM – 05:00 PM</span><br>
                            <span style="font-size: 0.85rem; color: var(--text-muted);">(Sunday: By prior appointment)</span>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 1.75rem; display: flex; gap: 0.85rem;">
                    <a href="https://api.whatsapp.com/send?phone=919879146666" target="_blank" class="btn-wonder btn-wonder-primary" style="font-size: 0.9rem;">
                        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                    </a>
                    <a href="tel:+919879146666" class="btn-wonder btn-wonder-secondary" style="font-size: 0.9rem;">
                        <i class="fas fa-phone-alt"></i> Call Now
                    </a>
                </div>
            </div>

            <!-- Right: Interactive Message Workbook Form -->
            <div class="workbook-form-card reveal-pop" style="margin: 0;">
                <div class="washi-tape right"></div>
                <span class="section-tag"><i class="fas fa-envelope-open-text"></i> Send a Note</span>
                <h3 style="font-family: var(--font-display); color: var(--navy); font-size: 1.5rem; margin-bottom: 1.5rem;">
                    Leave a Message
                </h3>

                <div class="form-alert-box" id="contactAlertBox">
                    @if(session('success'))
                    <div class="form-alert form-alert-success">
                        <i class="fas fa-check-circle alert-icon"></i>
                        <div class="form-alert-content">
                            <div class="form-alert-title">Success!</div>
                            {{ session('success') }}
                        </div>
                        <button type="button" class="form-alert-close" onclick="this.parentElement.remove();">&times;</button>
                    </div>
                    @endif
                    @if(session('alert'))
                    <div class="form-alert form-alert-success">
                        <i class="fas fa-check-circle alert-icon"></i>
                        <div class="form-alert-content">
                            <div class="form-alert-title">Success!</div>
                            {{ session('alert') }}
                        </div>
                        <button type="button" class="form-alert-close" onclick="this.parentElement.remove();">&times;</button>
                    </div>
                    @endif
                    @if(isset($errors) && $errors->any())
                    <div class="form-alert form-alert-error">
                        <i class="fas fa-exclamation-circle alert-icon"></i>
                        <div class="form-alert-content">
                            <div class="form-alert-title">Please review the following errors:</div>
                            <ul style="margin: 0.25rem 0 0 1rem; padding: 0;">
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <button type="button" class="form-alert-close" onclick="this.parentElement.remove();">&times;</button>
                    </div>
                    @endif
                </div>

                <form class="interactive-form" id="contactMessageForm" action="{{ route('storeContact') }}" method="POST">
                    @csrf
                    <div class="form-field-group">
                        <label class="form-field-label">Your Name *</label>
                        <input type="text" name="username" class="form-input-styled" placeholder="Enter your full name" value="{{ old('username') }}" required>
                    </div>

                    <div class="form-field-group">
                        <label class="form-field-label">Phone Number *</label>
                        <input type="tel" name="phone" class="form-input-styled" placeholder="10-digit mobile number" pattern="[0-9]{10}" maxlength="10" value="{{ old('phone') }}" required>
                    </div>

                    <div class="form-field-group">
                        <label class="form-field-label">Email Address *</label>
                        <input type="email" name="email" class="form-input-styled" placeholder="name@example.com" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-field-group">
                        <label class="form-field-label">Preferred Campus *</label>
                        <select name="subject" class="form-input-styled" required>
                            <option value="">Select Campus</option>
                            <option value="Pal Main Campus" {{ old('subject') == 'Pal Main Campus' ? 'selected' : '' }}>Pal Road Main Campus</option>
                            <option value="Vesu Campus" {{ old('subject') == 'Vesu Campus' ? 'selected' : '' }}>Vesu Campus</option>
                            <option value="Adajan Campus" {{ old('subject') == 'Adajan Campus' ? 'selected' : '' }}>Adajan Campus</option>
                            <option value="Katargam Campus" {{ old('subject') == 'Katargam Campus' ? 'selected' : '' }}>Katargam Campus</option>
                            <option value="Varachha Campus" {{ old('subject') == 'Varachha Campus' ? 'selected' : '' }}>Varachha Campus</option>
                            <option value="Althan Campus" {{ old('subject') == 'Althan Campus' ? 'selected' : '' }}>Althan Campus</option>
                        </select>
                    </div>

                    <div class="form-field-group">
                        <label class="form-field-label">Message / Inquiry *</label>
                        <textarea name="fdetail" class="form-input-styled" rows="3" placeholder="How can we assist you?" required>{{ old('fdetail') }}</textarea>
                    </div>

                    <button type="submit" class="btn-wonder btn-wonder-primary" style="width: 100%; margin-top: 0.5rem; padding: 0.95rem 1.5rem; font-size: 1.05rem;">
                        <span class="btn-text"><i class="fas fa-paper-plane"></i> Send Message</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Campus Street Photo & Map Preview -->
        <div class="reveal-pop" style="background: var(--bg-canvas); border-radius: 28px; padding: 1.5rem; border: 2px solid var(--border-paper); box-shadow: var(--shadow-paper-md);">
            <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem; margin-bottom: 1rem;">
                <div>
                    <h4 style="font-family: var(--font-display); font-size: 1.25rem; color: var(--navy); margin-bottom: 0.25rem;">Pal Road Campus Location</h4>
                    <p style="margin: 0; color: var(--text-muted); font-size: 0.9rem;">Galaxy Imperia, Above District Bank, Pal Road, Surat</p>
                </div>
                <a href="https://maps.google.com" target="_blank" class="btn-wonder btn-wonder-secondary" style="font-size: 0.85rem; padding: 0.55rem 1.15rem;">
                    <i class="fas fa-directions"></i> Get Driving Directions
                </a>
            </div>
            <div style="border-radius: 18px; overflow: hidden; max-height: 380px;">
                <img src="/assets/img/school_campus_street.jpg" alt="Seven Steps Pre-School Campus Building and Entrance on Pal Road Surat" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

@endsection