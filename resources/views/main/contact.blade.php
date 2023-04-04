<section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>التواصل</h2>
            <p>اتصل بنا</p>
        </header>

        <div class="row gy-4 services">

            <div class="col-lg-6 ">

                <div class="row gy-4">
                    <div class="col-md-6 ">
                        <div class="service-box blue">
                           <h3>  <i class="bi bi-geo-alt"></i></h3>
                            <h3>العنوان</h3>
                            <p>مقابل مستشفى ابن سينا<br>فوة- المكلا -حضرموت</p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="service-box orange">
                            <h3>
                                <i class="bi bi-telephone"></i>
                            </h3>
                            <h3>للاتصال</h3>
                            <p>732896 5 967+<br>730842 5 967+</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-box green">
                            <h3>
                                <i class="bi bi-envelope"></i>
                            </h3>
                            <h3>الإيميلات</h3>
                            <p>info@uis.edu.ye<br>regstration@uis.edu.ye</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-box purple">
                            <h3>
                                <i class="bi bi-clock"></i>
                            </h3>
                            <h3>ساعة الدوام</h3>
                            <p>السبت - الخميس<br>07:00 صباحا - 01:00 مساء</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">

                <form action="forms/contact.php" method="post" class="php-email-form">
                    <div class="row gy-4 service-box ">
                        <h3 class="text-dark mt-0">للمراسلات</h3>
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control"
                                placeholder="الاسم" required>
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email"
                                placeholder="الإيميل" required>
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="الموضوع"
                                required>
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="الرسالة" required></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>

                    </div>
                </form>

            </div>

        </div>

    </div>

</section>
