<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scoped Bootstrap Component</title>
    <style>
        .testimonial-component {
            margin-top: 50px;
        }


        .bootstrap-scope {

            @import url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
        }


        .testimonial-component .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .testimonial-component .carousel-item {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            margin-right: -100%;
            backface-visibility: hidden;
            transition: transform 0.6s ease-in-out;
        }

        .testimonial-component .carousel-item.active {
            display: block;
        }

        .testimonial-component .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 2;
            display: flex;
            justify-content: center;
            padding: 0;
            margin-right: 15%;
            margin-bottom: 1rem;
            margin-left: 15%;
            list-style: none;
            margin-inline: auto;
        }

        .testimonial-component .carousel-indicators [data-bs-target] {
            box-sizing: content-box;
            flex: 0 1 auto;
            width: 30px;
            height: 3px;
            padding: 0;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #000;
            background-clip: padding-box;
            border: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: 0.5;
            transition: opacity 0.6s ease;
        }

        .testimonial-component .carousel-indicators .active {
            opacity: 1;
            background-color: #fff;
        }

        .testimonial-component .carousel-indicators button {
            background: none;
            border: none;
        }

        /* Your existing styles */
        .testimonial-section {
            background-color: #014171;
            color: #000;
            padding: 3rem 1rem;
            text-align: center;
            padding: 15px;
            color: #ffffff;
        }

        .testimonial-section h2 {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            font-weight: bold;
        }

        .testimonial-content {
            max-width: 700px;
            margin: 0 auto;
        }

        .testimonial-content p {
            font-size: 16px;
            line-height: 1.6;
            color: #ffffff;
        }

        .quote-icon {
            font-size: 2rem;
            margin: 1rem 0;
        }

        .stars {
            color: #edb82c;
            font-size: 20px;
            margin: 1rem 0;
        }

        .testimonial-author {
            margin-top: 1.4rem;
            font-weight: bold;
            color: #edb82c;
        }

        .testimonial-date {
            font-size: 15px;
            color: #ffffff;
            margin-bottom: 5rem;
        }

        @media (max-width: 576px) {
            .testimonial-section {
                padding: 2rem 1rem;
            }


            .testimonial-section h2 {
                font-size: 18px;
            }

            .testimonial-content p {
                font-size: 14px;
            }
        }

        /* Demo styles to show this doesn't affect other content */
        .other-content {
            padding: 2rem;
            background-color: #e9ecef;
            margin: 2rem 0;
        }

        .other-content h3 {
            color: #495057;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>



    <!-- Your testimonial component with scoped Bootstrap -->
    <div class="testimonial-component">
        <section class="testimonial-section">
            <h2>Read What Our Customers have to say !</h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial-content">
                            <div class="stars">★★★★★</div>
                            <p>
                                Renting a car with TicketSnowOnline was fast, easy, and completely stress-free. They offer a wide range of vehicles from top rental companies, so it was simple to find the perfect ride for my trip. Everything went smoothly from booking to pickup, and I’ll definitely use them again.
                            </p>
                            <div class="testimonial-author">Natalie M.</div>
                            <div class="testimonial-date">May 2025</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-content">
                            <div class="stars">★★★★★</div>
                            <p>
                                TicketSnowOnline makes renting a car so simple and reliable. I found better rates than anywhere else, and the range of vehicles was exactly what I needed. Their customer service was responsive and kind, which made the whole process even better.
                            </p>
                            <div class="testimonial-author">Marcus D.</div>
                            <div class="testimonial-date">July 2025</div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Indicators -->
                <div class="carousel-indicators mt-4">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
            </div>
        </section>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>