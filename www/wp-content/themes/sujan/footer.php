<?php get_header(); ?>
<div class="section contact" id="contact">
    <div class="container">
        <div class="heading">
            <h5>Contact</h5>
            <h2><span class="heading-border"></span> Contact Me<span class="heading-border"></span></h2>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-card">
                    <h4 class="contact-title">Send a message</h4>
                    <div class="contact-form">
                        <form id="contact-form">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="4" required></textarea>
                            </div>
                            <button type="submit">Submit</button>
                        </form>
                        <div id="success-message" class="hidden">Message sent successfully!</div>
                        <div id="error-message" class="hidden">Oops! Something went wrong. Please try again later.</div>
                        <?php /*echo do_shortcode('[contact-form-7 id="6"]'); */ ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-card">
                    <h4 class="contact-title">Get in touch</h4>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i><a href="https://goo.gl/maps/DbT7ZohuvRwe6pA3A" target="_bkank"><span id="address">Maitidevi, Kathmandu</span></a></p>
                        <p><i class="fas fa-phone"></i><span id="phone"><a href="tel:+977 9865534679">+977 9865534679</a></span></p>
                        <p><i class="fas fa-envelope"></i><span id="email"><a href="suzanshrestha678@gmail.com">suzanshrestha678@gmail.com</a></span></p>
                    </div>

                    <div class="social-icons">
                        <a href="https://www.linkedin.com/in/sujan-shrestha-844085214/" target="_blank">
                            <div class="social-icon"><i class="fa-brands fa-linkedin fa-2xl" style="color: #000000;"></i></div>
                        </a>
                        <a href="https://www.instagram.com/suzayn92/" target="_blank">
                            <div class="social-icon"><i class="fa-brands fa-square-instagram fa-2xl" style="color: #000000;"></i></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer py-3">
    <div class="container">
        <p class="small mb-0 text-light">&copy; <?php echo date('Y') ?> Created With <i class="ti-heart text-danger"></i> By <a target="_blank" rel="nofollow noopener" href="/"><span class="text-danger">Sujan Shrestha</span></a></p>
    </div>
    <button class="scroll-to-top" id="scrollToTopBtn">
        <span>&#8593;</span>
    </button>
</footer>
</div>
<script src="https://chat-service.com/widget.js"></script>
<?php wp_footer() ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!-- carousel -->
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<!-- Include Bootstrap JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
<!-- Activate the tabs -->
<script>
    $(document).ready(function() {
        $('#projectTabs a').on('click', function(e) {
            e.preventDefault()
            $(this).tab('show')
        })
    });
</script>
<Script>
    function smoothScroll(target) {
        const targetElement = document.querySelector(target);
        window.scrollTo({
            top: targetElement.offsetTop,
            behavior: 'smooth',
        });
    }

    // Add event listeners to menu links
    document.querySelectorAll('.menu-title').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const target = this.getAttribute('data-target');
            smoothScroll(`#${target}`);
        });
    });
</Script>
<script>
    (function() {
        var bsa = document.createElement('script');
        bsa.type = 'text/javascript';
        bsa.async = true;
        bsa.src = '//s3.buysellads.com/ac/bsa.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
    })();
    if (window != top) top.location.href = location.href;
    jQuery(document).ready(function($) {
        $('img').removeAttr('width height');
    });
    var gaProperty = 'UA-120201777-1';
    var disableStr = 'ga-disable-' + gaProperty;
    if (document.cookie.indexOf(disableStr + '=true') > -1) {
        window[disableStr] = true;
    }

    function gaOptout() {
        document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2045 23:59:59 UTC; path=/';
        window[disableStr] = true;
        alert('Google Tracking has been deactivated');
    }
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-120201777-1', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('send', 'pageview');
</script>
<script>
    function increaseStats() {
        const hoursElement = document.getElementById("hours");
        const happyClientsElement = document.getElementById("happyClients");
        const projectsFinishedElement = document.getElementById("projectsFinished");

        let hours = parseInt(hoursElement.textContent);
        let happyClients = parseInt(happyClientsElement.textContent);
        let projectsFinished = parseInt(projectsFinishedElement.textContent);

        const incrementBy = 5; // You can adjust this value to control the rate of increase

        setInterval(() => {
            hours += incrementBy;
            happyClients += incrementBy;
            projectsFinished += incrementBy;

            hoursElement.textContent = hours.toLocaleString();
            happyClientsElement.textContent = happyClients.toLocaleString();
            projectsFinishedElement.textContent = projectsFinished.toLocaleString();
        }, 1000); // Time interval in milliseconds (1000ms = 1 second)
    }

    increaseStats(); // Start increasing the stats values
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const items = document.querySelectorAll(".animated-list li");

        // Function to add 'show' class to each li element with a delay
        function showItems() {
            items.forEach((item, index) => {
                setTimeout(() => {
                    item.classList.add("show");
                }, index * 300); // Adjust the delay between each item (in milliseconds)
            });
        }

        showItems();
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const progressBars = document.querySelectorAll(".progress");

        function animateProgress() {
            progressBars.forEach(progress => {
                const targetProgress = progress.getAttribute("data-progress");
                let currentProgress = 0;

                const animation = setInterval(() => {
                    if (currentProgress >= targetProgress) {
                        clearInterval(animation);
                    } else {
                        currentProgress++;
                        progress.style.width = currentProgress + "%";
                    }
                }, 25); // Adjust the animation speed (lower value means faster animation)
            });
        }

        // Trigger the animation when the page loads
        animateProgress();
    });
</script>
<script>
    const changingTextElement = document.getElementById('changingText');
    const wordOptions = [
        "WordPress Web Developer",
        "Python Developer",
        "Mern Stack Developer",
    ];

    let charIndex = 0;
    let wordIndex = 0;

    function updateText() {
        changingTextElement.innerHTML = `<span>${wordOptions[wordIndex].slice(0, charIndex)}</span>`;
        charIndex = (charIndex + 1) % (wordOptions[wordIndex].length + 1);
        if (charIndex === 0) wordIndex = (wordIndex + 1) % wordOptions.length;
    }

    setInterval(updateText, 100); // Change text every 0.5 seconds (500 milliseconds)
</script>
<script>
    // Function to animate the banner with fade-in effect
    function animateBanner() {
        const banner = document.getElementById('banner');
        banner.style.opacity = '1'; // Set the opacity to 1 to trigger the animation
    }

    // Start the animation when the page loads
    window.onload = animateBanner;
</script>

<script>
    /** code by webdevtrick ( https://webdevtrick.com ) **/
    const listItems = document.querySelectorAll('.main li');
    const allimages = document.querySelectorAll('.main .container-fluid .images');

    function toggleActiveClass(active) {
        listItems.forEach(item => {
            item.classList.remove('active');
        })
        active.classList.add('active');
    }

    function toggleimages(dataClass) {
        if (dataClass === 'all') {
            for (let i = 0; i < allimages.length; i++) {
                allimages[i].style.display = 'block';
            }
        } else {
            for (let i = 0; i < allimages.length; i++)
                allimages[i].dataset.class === dataClass ? allimages[i].style.display = 'block' : allimages[i].style.display = 'none';
        }
    }

    for (let i = 0; i < listItems.length; i++) {
        listItems[i].addEventListener('click', function() {
            toggleActiveClass(listItems[i]);
            toggleimages(listItems[i].dataset.class);
        });
    }
</script>
<script>
    $(document).ready(function() {
        // Show all items by default
        $('.item').show();

        // Filter buttons click event
        $('.tab-btn').on('click', function() {
            var filterValue = $(this).attr('data-category');

            // Show all items if "All" is selected
            if (filterValue === 'All') {
                $('.item').show();
            } else {
                // Hide all items and then show only those matching the selected category
                $('.item').hide();
                $('.item.' + filterValue).show();
            }

            // Highlight the active filter button
            $('.tab-btn').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
<script>
    const themeToggle = document.getElementById("theme-toggle");
    const body = document.body;

    themeToggle.addEventListener("click", () => {
        body.classList.toggle("dark-mode");
        // Save user's preference in localStorage or a cookie if needed
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const aboutContent = document.querySelector(".about-content");
        const aboutItems = document.querySelectorAll(".about-item");
        const reverseButton = document.getElementById("reverseButton");

        reverseButton.addEventListener("click", () => {
            const reversedItems = [...aboutItems].reverse();
            aboutContent.innerHTML = "";
            reversedItems.forEach(item => aboutContent.appendChild(item));
        });
    });
</script>
<script>
    $(".blog-active").slick({
        dots: true,
        arrows: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>
<script>
    // Function to handle the intersection of blog items
    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target); // Stop observing once the animation is applied
            }
        });
    }

    // Create an Intersection Observer
    const observer = new IntersectionObserver(handleIntersection, {
        root: null, // Use the viewport as the root
        rootMargin: '0px', // No margin around the root
        threshold: 0.2, // 20% of the element must be visible to trigger the animation
    });

    // Observe each blog item
    const blogItems = document.querySelectorAll('.blog-wrapper, .tag-blog, .blog-inner img');
    blogItems.forEach(item => {
        observer.observe(item);
    });
</script>
<script>
    // Initialize the slick slider
    $(document).ready(function() {
        $(".team-slider").slick({
            slidesToShow: 3, // Number of slides to show at once
            slidesToScroll: 1, // Number of slides to scroll at a time
            autoplay: true, // Auto-play the slider
            autoplaySpeed: 1000, // Slide change interval in milliseconds
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });
    });
</script>
<script>
    jQuery(function($) {
        var page = 2; // The initial page number
        var canLoadMore = true; // Indicates whether more posts can be loaded
        var loading = false; // Indicates whether a request is already in progress

        $('#loadMoreButton').on('click', function(e) {
            e.preventDefault();

            if (canLoadMore && !loading) {
                loading = true;

                // Show the loading image
                $('#loadingImage').show();

                $.ajax({
                    type: 'POST',
                    url: loadmoreajax.ajaxurl,
                    data: {
                        action: 'load_more_posts',
                        page: page,
                    },
                    success: function(response) {
                        if (response) {
                            $('#blog-container').append(response);
                            page++;
                            loading = false;
                        } else {
                            canLoadMore = false;
                            $('#loadMoreButton').text(loadmoreajax.noposts);
                        }

                        // Hide the loading image
                        $('#loadingImage').hide();
                    },
                    error: function() {
                        // Handle any errors if needed
                    }
                });
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const productsContainer = document.querySelector('.products');
        const sortingSelect = document.querySelector('.orderby');

        if (productsContainer && sortingSelect) {
            sortingSelect.addEventListener('change', function() {
                const selectedOption = sortingSelect.value;

                // Update the URL with the selected sorting option
                const currentUrl = new URL(window.location);
                currentUrl.searchParams.set('orderby', selectedOption);
                window.location.href = currentUrl.toString();
            });
        }
    });
</script>
<script>
    jQuery(document).ready(function($) {
        // Store a reference to the portfolio items
        var $portfolioItems = $('.portfolio-items .item');

        // Filter items on button click
        $('.tab-bar').on('click', '.tab-btn', function() {
            var filterValue = $(this).attr('data-category');

            // Remove and add the 'active' class to the clicked button
            $('.tab-btn').removeClass('active');
            $(this).addClass('active');

            // Hide all portfolio items
            $portfolioItems.hide();

            // Filter and show the selected category
            if (filterValue === 'All') {
                $portfolioItems.fadeIn(300);
            } else {
                $portfolioItems.filter('.' + filterValue).fadeIn(300);
            }
        });
    });
</script>
<script>
    jQuery(document).ready(function($) {
        // Initialize MixItUp
        var containerEl = document.querySelector('.portfolio-items');
        var mixer = mixitup(containerEl);

        // Add active class to the current button
        $('.tab-bar').on('click', '.tab-btn', function() {
            $('.tab-btn').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const tabLinks = document.querySelectorAll('.nav-tabs a');
        tabLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const tabId = this.getAttribute('href').replace('#', '');
                showTab(tabId);
            });
        });

        function showTab(tabId) {
            const tabs = document.querySelectorAll('.tab-content .tab-pane');
            tabs.forEach(function(tab) {
                tab.classList.remove('active', 'in');
            });

            const tabToShow = document.getElementById(tabId);
            if (tabToShow) {
                tabToShow.classList.add('active', 'in');
            }
        }
    });
</script>

<script>
    const items = document.querySelectorAll('.accordion button');

    function toggleAccordion() {
        const itemToggle = this.getAttribute('aria-expanded');

        for (i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-expanded', 'false');
        }

        if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
        }
    }

    items.forEach((item) => item.addEventListener('click', toggleAccordion));
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const contactForm = document.getElementById("contact-form");
        const successMessage = document.getElementById("success-message");
        const errorMessage = document.getElementById("error-message");

        contactForm.addEventListener("submit", async (e) => {
            e.preventDefault();

            try {
                const formData = new FormData(contactForm);
                const response = await fetch("your_server_endpoint_here", {
                    method: "POST",
                    body: formData,
                });

                if (response.ok) {
                    contactForm.reset();
                    successMessage.style.display = "block";
                    errorMessage.style.display = "none";
                } else {
                    throw new Error("Error sending the message");
                }
            } catch (error) {
                successMessage.style.display = "none";
                errorMessage.style.display = "block";
            }
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var scrollToTopBtn = document.getElementById("scrollToTopBtn");

        window.addEventListener("scroll", function() {
            // Show the button when the user scrolls down 20px from the top
            if (window.scrollY >= 20) {
                scrollToTopBtn.style.display = "block";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        });

        scrollToTopBtn.addEventListener("click", function() {
            // Scroll to the top of the document smoothly
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    });
</script>